<x-layout title="Detail Fakultas">
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h3 mb-4">Detail Fakultas</h1>

                <table class="table table-bordered align-middle">
                    <tbody>
                        <tr>
                            <th width="30%">Nama Fakultas</th>
                            <td width="5%">:</td>
                            <td>{{ $fakulta->name }}</td>
                        </tr>

                        <tr>
                            <th>Nama Dekan</th>
                            <td>:</td>
                            <td>{{ $fakulta->dekan }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="/fakultas" class="btn btn-secondary">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</x-layout>