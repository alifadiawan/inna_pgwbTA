    {{-- <div class="card" style="border-radius: 4px">
        <div class="card-body">
            <div class="header bg-dark">
                <h5 class="text-danger">Pesan milik {{$inbox->email}}</h5>
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <td scope="row">{{ $inbox->email }}</td>
                </tbody>
            </table>
        </div>
    </div> --}}
    <div class="card" id="wek" style="border-radius: 4px">
        <div class="card-header bg-dark border-bottom border-info" style="height: 55px;">
            <h5 class="text-warning">Pesan dari {{ $inbox->email }}</h5>
        </div>
        <div class="card-body">
            <h5 style="font-family:monospace;font-size: 20px">{{ ($inbox->pesan) }}</h5>
        </div>
    </div>
