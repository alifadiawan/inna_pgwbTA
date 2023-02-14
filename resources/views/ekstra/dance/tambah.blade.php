@extends('layoutv2.body')
@section('content')

    <div class="container w-50" style="padding-top: 100px">
        <div class="p-5">
            <div class="row">
                <div class="col-12 ">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h2 class="fw-bold text-white text-center">Tambah Data DANCE</h2>
                    <form action="{{route('dance.store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="ekskul_id" value="{{Auth::user()->id}}"> --}}
                        <div class="mb-4">
                            <label for="deskripsi" class="form-label  text-white">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                placeholder="Masukkan deskripsi ekstrakulikuler" required>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <label for="hari" class="form-label  text-white">Hari :</label>
                                {{-- <input type="text" class="form-control" id="hari" name="hari" placeholder="First name" aria-label="First name" value=""> --}}
                                <select id="hari" name="hari" placeholder="hari" class="form-control" required>
                                    <option value="">Pilih Hari</option>
                                    <option value="senin">senin</option>
                                    <option value="selasa">selasa</option>
                                    <option value="rabu">rabu</option>
                                    <option value="kamis">kamis</option>
                                    <option value="jumat">jumat</option>
                                    <option value="sabtu">sabtu</option>
                                    <option value="minggu">minggu</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="formGroupExampleInput2" class="form-label text-white">Jam:</label>
                                <input type="time" class="form-control" id="jam" name="jam"
                                    placeholder="First name" aria-label="First name" value="" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="foto" class="text-white">Pilih Foto</label><br>
                            <input type="file" class="form-control" id="foto" name="foto1" required>
                            <input type="file" class="form-control mt-2" id="foto" name="foto2" required>
                            <input type="file" class="form-control mt-2" id="foto" name="foto3" required>
                        </div>

                        <div class="mt-4 text-center">
                            <input type="submit" class="btn btn-danger" value="Upload">
                            <a href="{{ route('dance.index') }}" class="btn btn=secondary text-white">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
