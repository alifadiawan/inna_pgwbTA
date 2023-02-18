<?php

namespace App\Http\Controllers;
use App\Models\update;
use App\Models\tabelmaster;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class danceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar_siswa = tabelmaster::with('kelas')->get();
        $jmlh_dance=tabelmaster::where('ekstrakulikuler_id','1')->count();
        $anggota=tabelmaster::where('ekstrakulikuler_id','1')->get();
        $dance = DB::table('update')
            ->where('ekskul_id', '1')->get();
        $data = update::where('ekskul_id', '1')->get();
        return view('ekstra.dance.dashboard' , compact('dance', 'data','jmlh_dance','anggota','daftar_siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ekstra.dance.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ambil parameter
        $file1 = $request->file('foto1');
        $file2 = $request->file('foto2');
        $file3 = $request->file('foto3');

        //rename
        $nama_file1 = time() . '_' . $file1->getClientOriginalName();
        $nama_file2 = time() . '_' . $file2->getClientOriginalName();
        $nama_file3 = time() . '_' . $file3->getClientOriginalName();

        //proses upload
        $tujuan_upload = './images';
        $file1->move($tujuan_upload, $nama_file1);
        $file2->move($tujuan_upload, $nama_file2);
        $file3->move($tujuan_upload, $nama_file3);

        // $ekskul = ekstrakulikuler::

        update::create([
        'ekskul_id' => '1',
        'deskripsi'=> $request-> deskripsi,
        'hari'=> $request-> hari,
        'jam'=> $request-> jam,
        'jam2'=> $request-> jam,
        'foto1'=> $nama_file1,
        'foto2'=> $nama_file2,
        'foto3'=> $nama_file3,

    ]);

        Session::flash('success', 'data berhasil disimpan !!!');
        return redirect('/dance');
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
        $edit = update::find($id);
        return view('ekstra.dance.edit', compact('edit'));
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
        $dance = update::find($id);
        $dance->delete();
        return redirect('/dance');
    }

    public function hapus($id)
    {

    }
}
