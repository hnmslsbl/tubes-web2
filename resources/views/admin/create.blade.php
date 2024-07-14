@extends('layout/main')

@section('title', 'Data Hanum')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mt-2 text-center">Tambah Data</h2>
            <div class="card p-4"> 
                <form id="form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="Merek" class="form-label">Merek Laptop:</label>
                        <input type="text" id="Merek" name="Merek" class="form-control mb-2" placeholder="Masukkan merek laptop" required>
                    </div>
                    <div class="mb-3">
                        <label for="Foto" class="form-label">Gambar Laptop:</label>
                        <input type="file" id="Foto" name="image" class="form-control mb-2" accept=".jpg, .jpeg, .png" required>
                    </div>
                    <div class="mb-3">
                        <label for="Processor" class="form-label">Processor:</label>
                        <input type="text" id="Processor" name="Processor" class="form-control mb-2" placeholder="Masukkan tipe processor" required>
                    </div>
                    <div class="mb-3">
                        <label for="Layar" class="form-label">Layar:</label>
                        <input type="text" id="Layar" name="Layar" class="form-control mb-2" placeholder="Masukkan ukuran layar" required>
                    </div>
                    <div class="mb-3">
                        <label for="Memori" class="form-label">Memori:</label>
                        <input type="text" id="Memori" name="Memori" class="form-control mb-2" placeholder="Masukkan kapasitas memori" required>
                    </div>
                    <div class="mb-3">
                        <label for="Deskripsi" class="form-label">Deskripsi:</label>
                        <input type="text" id="Deskripsi" name="Deskripsi" class="form-control mb-2" placeholder="Masukkan deskripsi laptop" required>
                    </div>
                    <div class="mb-3">
                        <label for="KategoriPengguna" class="form-label">Kategori Pengguna:</label>
                        @foreach ($categories as $category)
                        <div class="form-check">
                            <input type="radio" name="category_id" id="{{ $category->name }}" value="{{ $category->id }}" class="form-check-input" required>
                            <label for="{{ $category->name }}" class="form-check-label">{{ Str::ucfirst($category->name) }}</label>
                        </div>
                        @endforeach
                        <span id="errorKategori" class="error"></span>
                    </div>
                    <div class="form-footer text-center">
                        <button type="submit" form="form" class="btn btn-primary">Tambah</button>
                    </div>                 
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('Harga').addEventListener('input', function (e) {
        let value = e.target.value.replace(/[^,\d]/g, '');
        if (value) {
            value = value.replace(/,/g, '');
            value = parseInt(value, 10).toLocaleString('id-ID');
        }
        e.target.value = value;
    });
</script>

@endsection
