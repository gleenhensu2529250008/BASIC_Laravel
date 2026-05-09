<x-layout title="Create Fakultas">
    <div class="container py-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h3 mb-4">Add Fakultas</h1>

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

                {{-- Form --}}
                <form action="/fakultas" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name_fakultas" class="form-label">
                            Nama Fakultas
                        </label>

                        <input
                            type="text"
                            id="name_fakultas"
                            name="name_fakultas"
                            class="form-control"
                            value="{{ old('name_fakultas') }}"
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
                            value="{{ old('name_dekan') }}"
                            placeholder="Masukkan nama dekan"
                        >
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>