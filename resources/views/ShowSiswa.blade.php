<div class="card" id="siswa" style="border-radius: 4px">
    {{-- @foreach ($siswa as $item) --}}
    <table class="table table-borderless mt-4 text-dark">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama siswa</th>
                <th>Kelas</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($siswa->where('ekstrakulikuler_id','2') as $item) --}}
                {{-- @foreach ($kelas as $item) --}}


                <tr>
                
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->kelas->kelas }}</td>
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
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
