<x-layout>
    <div>
        <H1>Detail Fakultas</H1>

        <table class="table">
            <tbody>
                <tr>
                    <td>Nama Fakultas</td>
                    <td>:</td>
                    <td>{{$fakulta->name}}</td>
                </tr>
                <tr>
                    <td>Nama Dekan</td>
                    <td>:</td>
                    <td>{{$fakulta->dekan}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>