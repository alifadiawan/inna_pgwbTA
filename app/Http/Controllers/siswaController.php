<?php

namespace App\Http\Controllers;

use App\Models\tabelmaster;
use App\Models\ekstrakulikuler;
use App\Models\kelas;
use App\Models\update;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $futsal= update::where('ekskul_id', '4')->get();
        $dance = update::where('ekskul_id', '1')->get();
        $pmr = update::where('ekskul_id', '2')->get();
        $basket = update::where('ekskul_id', '3')->get();
        $daftar_ekskul = ekstrakulikuler::all();
        $daftar_kelas= kelas::all();
        return view('siswa' , compact('daftar_ekskul', 'daftar_kelas','futsal','dance','pmr','basket',));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
