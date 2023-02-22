<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tabelmaster;
use App\Models\ekstrakulikuler;
use App\Models\kelas;
use App\Models\update;
use App\Models\service;
use mysqli;
use Symfony\Component\Console\Input\Input;

class MadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nama_pembina = ekstrakulikuler::find($id);
        $ekskul = ekstrakulikuler::all();
        $data = tabelmaster::paginate(5);
        $siswa =tabelmaster::with('ekstrakulikuler_id');
        $ekskul =ekstrakulikuler::all();
        $jumlah_ekskul = ekstrakulikuler::count();
        $jumlah_siswa = tabelmaster::count();
        $futsal= update::where('ekskul_id', '4')->get();
        $dance = update::where('ekskul_id', '1')->get();
        $pmr = update::where('ekskul_id', '2')->get();
        $basket = update::where('ekskul_id', '3')->get();
        $daftar_ekskul = ekstrakulikuler::all();
        $daftar_kelas= kelas::all();

        return view('masteradmin' , compact('daftar_ekskul', 'daftar_kelas','futsal','dance','pmr','basket','jumlah_siswa',
        'jumlah_ekskul','siswa','ekskul','data', 'ekskul'));

    }

    public function inbox()
    {
        $jumlah_pesan = service::count();
        $inbox = service::all();
        return view('inbox', compact('inbox','jumlah_pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inbox = service::find($id);
        return view('ShowPesan', compact('inbox'));
    }
    public function show2($id)
    {   
        $siswa = tabelmaster::find($id);
        return view('ShowSiswa', compact('siswa'));
    }

    public function pesan($id)
    {
        $inbox = service::find($id);
        return view('ShowPesan', compact('inbox'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nama_pembina = ekstrakulikuler::find($id);
        
        $nama_pembina->nama_pembina = $request->nama_pembina;
        return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inbox = service::find($id);
        $inbox->delete();
        return redirect('/inbox');
    }

    public function hapus($id)
    {
        $inbox = service::find($id);
        $inbox->delete();
        return redirect('/inbox');
    }
}
