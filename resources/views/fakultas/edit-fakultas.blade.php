<x-layout title="Edit Fakultas">
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h3 mb-4">Edit Fakultas</h1>

                {{-- Error Message --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Form Edit --}}
                <form action="/fakultas/{{ $fakultas->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name_fakultas" class="form-label">
                            Nama Fakultas
                        </label>

                        <input
                            type="text"
                            id="name_fakultas"
                            name="name_fakultas"
                            class="form-control"
                            value="{{ old('name_fakultas', $fakultas->name) }}"
                            placeholder="Masukkan nama fakultas"
                        >
                    </div>

                    <div class="mb-3">
                        <label for="name_dekan" class="form-label">
                            Nama Dekan
                        </label>

                        <input
                            type="text"
                            id="name_dekan"
                            name="name_dekan"
                            class="form-control"
                            value="{{ old('name_dekan', $fakultas->dekan) }}"
                            placeholder="Masukkan nama dekan"
                        >
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>

                        <a href="/fakultas" class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>