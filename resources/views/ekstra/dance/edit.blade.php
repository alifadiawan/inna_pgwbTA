@extends('layoutv2.body')
@section('content')

    <div class="container mt-5">
        <div class="p-5">
            <div class="row justify-content-center">
                <div class="col-10">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h2 class="fw-bold text-white text-center">Edit Data DANCE</h2>
                    <form action="{{ route('dance.update', $edit->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        {{-- <input type="hidden" name="ekskul_id" value="{{Auth::user()->id}}"> --}}
                        <div class="form-group">
                            <label for="deskripsi" class="form-label  text-white">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                placeholder="Masukkan deskripsi ekstrakulikuler" value="{{ $edit->deskripsi }}" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
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
                                        placeholder="First name" aria-label="First name" value="{{ $edit->jam }}"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row mt-5">
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{ asset('images/' . $edit->foto1) }}" style="width: 200px;">
                                            <div class="card-body">
                                                <input type="file" class="form-control" id="foto" name="foto3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{ asset('images/' . $edit->foto2) }}" style="width: 200px;">
                                            <div class="card-body">
                                                <input type="file" class="form-control" id="foto" name="foto2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{ asset('images/' . $edit->foto3) }}" style="width: 200px;">
                                            <div class="card-body">
                                                <input type="file" class="form-control" id="foto" name="foto1"
                                                    value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-warning" value="Update">
                    <a href="{{ route('dance.index') }}" class="btn btn=secondary text-white">Batal</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
