@extends('layoutv2.body')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card border-0 p-4 mb-5 text-light" style="background-color: #2f3037">
                @if ($basket->isEmpty())
                    <div class="row">
                        <div class="col">
                            <h4 class="fw-bold">Edit Hero {{ Auth::user()->role }}</h4>
                        </div>
                        <div class="col text-end">
                            <a href="{{ route('basket.create') }}" class="btn btn-success">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <div class="container m-5">
                                <h5>Jek kosong ngab</h5>
                            </div>
                        </div>
                    </div>
                @else
                    {{-- carousel basket --}}
                    <div class="row">
                        <div class="col-6">
                            @foreach ($data as $item)
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active " style="height: 400px;">
                                            <img src="{{ asset('images/' . $item->foto1) }}" style="object-fit:fill;" class="d-block w-100"
                                                alt="basket" >
                                        </div>
                                        <div class="carousel-item" style="height: 400px">
                                            <img src="{{ asset('images/' . $item->foto2) }}" class="d-block w-100"
                                                alt="basket">
                                        </div>
                                        <div class="carousel-item" style="height: 400px">
                                            <img src="{{ asset('images/' . $item->foto3) }}" class="d-block w-100"
                                                alt="basket">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                        </div>
                        <div class="col-6">
                            <div class="text-container">
                                <div class="row">
                                    <div class="col">
                                        <h3>Deskripsi ekskul :</h3>
                                    </div>
                                    <div class="row" style="color: white;">
                                    <div class="container">
                                    <div class="content text-white">
                                    @foreach ($data as $item)
                                        <h6 class="fw-bold">Judul Ekskul</h6>
                                        <p >{{ $item->ekstrakulikuler_id }}</p>

                                        <h6 class="fw-bold">Deskripsi Ekskul</h6>
                                            <p style="color:#c4c3d0">{{ $item->deskripsi }}</p>

                                        <h6 class="fw-bold">Jadwal Ekstrakulikuler</h6>
                                            <span style="color:#c4c3d0">Hari : {{ $item->hari }}</span><br>
                                            <span style="color:#c4c3d0">Jam : {{ $item->jam }}</span>
                                            @endforeach
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col text-end">
                    <a href="{{ route('basket.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <a href="" class="btn text-light">Preview</a>
                    <a href="{{ route('basket.hapus', $item->id) }}" class="btn text-danger">
                        <i class="fas fa-trash"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif

    </div>

    {{-- card jumlah siswa --}}
    <div class="row">
        <div class="col">
            <div class="card shadow p-3 mb-5 rounded-3 text-light" style="background-color: #2f3037">
                <div class="col">
                    <h4 class="fw-bold">Jumlah Siswa</h4>
                </div>
                <div class="col">
                    <h5>sek kosong</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 mb-5 rounded-3 text-light"style="background-color: #2f3037">
                <div class="col">
                    <h4 class="fw-bold">Nama Pembimbing</h4>
                </div>
                <div class="col">
                    <h5>{{ Auth::user()->name }}</h5>
                </div>
            </div>
        </div>
    </div>

    {{-- daftar siswa --}}
    <div class="row">
        <div class="col">
            <div class="card border-0 shadow-lg p-3 mb-5 rounded-3 text-light" style="background-color: #2f3037">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="fw-bold">Daftar Siswa</h4>
                        </div>
                    </div>
                    <table class="table table-borderless mt-4 text-light">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama siswa</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($daftar_siswa as $item)
                                {{-- @foreach ($kelas as $item) --}}


                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kelas->kelas }}</td>
                                    <td>
                                        <a href="" class="btn btn-outline-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-outline-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
