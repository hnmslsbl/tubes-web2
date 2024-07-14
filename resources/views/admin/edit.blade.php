<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tittle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow navbar-rounded-bottom">
        <div class="container-fluid">
            <h1 class="navbar-brand mx-5">Promotion</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto mx-5">
                    <div class="d-flex mx-5">
                        <div>
                            <img class="nav-link btn" src="../icon/pp.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>



{{-- @extends('layout/main')

@section('title', 'Edit Data Laptop')

@section('container') --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-1">Edit Data Laptop</h1>
                <form id="Form" action="/admin/update/{{ $admin->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="Merek">Merek Laptop:</label>
                        <input value="{{ old('Merek', $admin->Merek) }}" type="text" id="Merek" name="Merek" class="form-control mb-2" required>
                    </div>
                    <div class="form-group">
                        <label for="Foto">Gambar Laptop:</label>
                        <input type="file" id="Foto" name="Foto" class="form-control mb-2" accept=".jpg, .jpeg, .png">
                        @if($admin->Foto)
                            <img src="{{ asset('storage/images/products/' . $admin->Foto) }}" alt="Laptop Image" width="150">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga Laptop:</label>
                        <input value="{{ old('Harga', $admin->Harga) }}" type="number" id="Harga" name="Harga" class="form-control mb-2" required>
                    </div>
                    <div class="form-group">
                        <label for="Processor">Processor:</label>
                        <input value="{{ old('Processor', $admin->Processor) }}" type="text" id="Processor" name="Processor" class="form-control mb-2" required>
                    </div>
                    <div class="form-group">
                        <label for="Layar">Layar:</label>
                        <input value="{{ old('Layar', $admin->Layar) }}" type="text" id="Layar" name="Layar" class="form-control mb-2" required>
                    </div>
                    <div class="form-group">
                        <label for="Memori">Penyimpanan:</label>
                        <input value="{{ old('Memori', $admin->Memori) }}" type="text" id="Memori" name="Memori" class="form-control mb-2" required>
                    </div>
                    <div class="form-group">
                        <label for="Deskripsi">Deskripsi:</label>
                        <input value="{{ old('Deskripsi', $admin->Deskripsi) }}" type="text" id="Deskripsi" name="Deskripsi" class="form-control mb-2" required>
                    </div>
                    <div class="form-group">
                        <label for="KategoriPengguna">Kategori Pengguna:</label>
                        <select id="KategoriPengguna" name="KategoriPengguna" class="form-control mb-2" required>
                            <option value="Penggunaan Harian" {{ $admin->KategoriPengguna == 'Penggunaan Harian' ? 'selected' : '' }}>Penggunaan Harian</option>
                            <option value="Pekerja Kantoran" {{ $admin->KategoriPengguna == 'Pekerja Kantoran' ? 'selected' : '' }}>Pekerja Kantoran</option>
                            <option value="Desain Grafis" {{ $admin->KategoriPengguna == 'Desain Grafis' ? 'selected' : '' }}>Desain Grafis</option>
                            <option value="Gaming" {{ $admin->KategoriPengguna == 'Gaming' ? 'selected' : '' }}>Gaming</option>
                            <option value="Programming" {{ $admin->KategoriPengguna == 'Programming' ? 'selected' : '' }}>Programming</option>
                            <option value="Profesional" {{ $admin->KategoriPengguna == 'Profesional' ? 'selected' : '' }}>Profesional</option>
                        </select>
                    </div>
                </form>
                <div class="form-footer">
                    <button type="submit" form="Form">
                        add
                    </button>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
