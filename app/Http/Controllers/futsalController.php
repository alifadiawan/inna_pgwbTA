<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


use App\Models\ekstrakulikuler;
use App\Models\kelas;
use App\Models\update;
use App\Models\tabelmaster;

class futsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jmlh_futsal=tabelmaster::where('ekstrakulikuler_id','4')->count();
        $daftar_siswa = tabelmaster::with('kelas')->get();
        $futsal = DB::table('update')
            ->where('ekskul_id', '4')->get();
        $data = update::where('ekskul_id', '4')->get();
        return view('ekstra.futsal.dashboard', compact('futsal', 'data','daftar_siswa','jmlh_futsal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ekstra.futsal.tambah');
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
        //     'required' => ':attribute harus diisi ',
        //     'min' => ':attribute minimal :min karakter ya ',
        //     'max' => 'attribute makasimal :max karakter ',
        //     'numeric' => ':attribute harus diisi angka ',
        //     'mimes' => 'file :attribute harus bertipe JPG, JPEG, PNG, BMP'
        // ];

        // $this->validate($request, [
        //     'deskripsi' => 'required',
        //     'jam' => 'required',
        //     'hari' => 'required',
        //     'foto' => 'required|mimes:jpg,bmp,png,jpeg',

        // ], $message);

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
        'ekskul_id' => '4',
        'deskripsi'=> $request-> deskripsi,
        'hari'=> $request-> hari,
        'jam'=> $request-> jam,
        'jam2'=> $request-> jam2,
        'foto1'=> $nama_file1,
        'foto2'=> $nama_file2,
        'foto3'=> $nama_file3,

    ]);

        Session::flash('success', 'data berhasil disimpan !!!');
        return redirect('/futsal');
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
        return view('ekstra.futsal.edit' , compact('edit'));
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
        if( $request->foto1 !='' or $request->foto2 !='' or $request->foto3 !=''){
            $edit = update::find($id);

            // $foto1 = update::where('foto1', $edit->foto1);
            // $foto2 = update::where('foto2', $edit->foto2);
            // $foto3 = update::where('foto3', $edit->foto3);

            file::delete('./images/' . $edit->foto1);
            file::delete('./images/' . $edit->foto2);
            file::delete('./images/' . $edit->foto3);

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


            $edit->deskripsi = $request-> deskripsi;
            $edit->hari = $request-> hari;
            $edit->jam = $request-> jam;
            $edit->foto1 = $request-> $nama_file1;
            $edit->foto2 = $request-> $nama_file2;
            $edit->foto3 = $request-> $nama_file3;
            $edit->save();

            Session::flash('success', 'data berhasil diupdate !!!');
            return redirect('/futsal');

        }else{
            $edit = update::find($id);
            $edit->deskripsi = $request-> deskripsi;
            $edit->hari = $request-> hari;
            $edit->jam = $request-> jam;
            $edit->save();
            return redirect('/futsal');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function hapus($id)
    {
        $futsal = update::find($id);
        $futsal->delete();
        return redirect()->back();
    }
}
