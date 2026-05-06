<x-layout>
    <div>
        <h1>ini list fakultas</h1>
        
        <table class="table">
            <thead>
            <tr>
                <th>NO</th>
                <th>Nama Falkutas</th>
                <th>Nama Dekan</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($fakultas as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->dekan}}</td>
                    <td>
                        <a href="/fakultas/{{ $item->id }}">Detail</a>
                        <a href="/fakultas/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/fakultas/{{$item->id }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
    {{-- <ul>
        @foreach ($fakultas as $item)
        <li>
            {{ $item->id }} |
            {{ $item->name }} |
            {{ $item->dekan }}
        </li>
        @endforeach
    </ul> --}}

        <a href="/fakultas/create">Create Fakultas</a>
        <a href="/fakultas/{id}/edit">edit-fakultas</a>
    </div>
    
</x-layout>     