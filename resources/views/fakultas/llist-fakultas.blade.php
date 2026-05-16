<x-layout title="List Fakultas">
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-body">
                {{-- Header --}}
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h3 mb-0">List Fakultas</h1>

                    <a href="/fakultas/create" class="btn btn-primary">
                        + Create Fakultas
                    </a>
                </div>

                {{-- Flash Message --}}

                @if (session('save'))
                    <div class="alert alert-success">
                        {{ session('save') }}
                    </div>
                @endif

                @if (session('edit'))
                    <div class="alert alert-success">
                        {{ session('edit') }}
                    </div>
                @endif

                {{-- Table --}}
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama Fakultas</th>
                                <th>Nama Dekan</th>
                                <th width="25%">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($fakultas as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->dekan }}</td>

                                    <td>
                                        <div class="d-flex gap-2">
                                            <a
                                                href="/fakultas/{{ $item->id }}"
                                                class="btn btn-info btn-sm text-white"
                                            >
                                                Detail
                                            </a>

                                            <a
                                                href="/fakultas/{{ $item->id }}/edit"
                                                class="btn btn-warning btn-sm"
                                            >
                                                Edit
                                            </a>

                                            <form
                                                action="/fakultas/{{ $item->id }}"
                                                method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                                            >
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="btn btn-danger btn-sm"
                                                >
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted">
                                        Data fakultas belum tersedia.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>