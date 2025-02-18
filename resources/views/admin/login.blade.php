@extends('layout.main')

@section('title', 'Admin Login')

@section('container')
    <section style="margin-top: 100px">
        <div class="container col-xxl-6">
            <h3 class="mt-2">Halaman Login Admin</h3>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Masukkan email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Masukkan password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>
@endsection
