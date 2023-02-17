<?php

namespace App\Http\Controllers;

use App\Models\tabelmaster;
// use Illuminate\Http\Request;
use App\Models\ekstrakulikuler;
use App\Models\kelas;
use Illuminate\Http\Request;

class tabelmasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

        // $message = [
        //     'required' => 'Harus diisi ya rek',
        //     'required' => 'Loh, keluhannya apa ya?',
        //     'required' => 'Loh, keluhannya apa ya?',
        //     'required' => 'Loh, keluhannya apa ya?',
        // ];

        // $validateData = $request->validate([
        //     'email' => 'required',
        //     'pesan' => 'required',
        // ], $message);

        // service::create([
        //     'email'  => $request->email,
        //     'pesan'  => $request->pesan,
        // ]);

        // Session::flash('success','Pesan berhasil terkirim ya, rek');

        // return redirect('/customer_service');

        $siswa = tabelmaster::create([
            'nama' => $request-> nama,
            'no_hp' => $request-> no_hp,
            'kelas_id' => $request-> kelas_id,
            'ekstrakulikuler_id' => $request -> ekstrakulikuler_id
        ]);

        return redirect('siswa');
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
