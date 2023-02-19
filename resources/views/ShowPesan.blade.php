    <div class="card" style="border-radius: 4px">
        <div class="card-body">
            <h5>Pesan milik {{$inbox->email}}</h5>
            <table class="table">
                <tbody>
                    <tr>
                        <td scope="row">{{ $inbox->pesan }}</td>
                </tbody>
            </table>
        </div>
    </div>
