@extends('layout/main')

@section('tittle', 'Data Hanum')

@section('container')
    <div class="container">
        <div class="row">
            <div class="container mt-5">
                    <h1 class="">Data Laptop</h1>
                    <table class="table table-center custom-table text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merek</th>
                                <th>Foto</th>
                                <th>Harga</th>
                                <th>Processor</th>
                                <th>Layar</th>
                                <th>penyimpanan</th>
                                <th>Deskrisi</th>
                                {{-- <th>Jenis Pengguna</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </thead> 
                        <tbody>
                            @foreach ($products as $i => $admin)
                            <tr>   
                                <td>{{ $i+1 }}</td>
                                <td>{{ $admin->Merek }}</td>
                                <td><img src="{{ asset('storage/images/products/' . $admin->Foto) }}" width="100"></td>
                                <td>{{ $admin->Harga }}</td>
                                <td>{{ $admin->Processor }}</td>
                                <td>{{ $admin->Layar }}</td>
                                <td>{{ $admin->Memori }}</td>
                                <td>{{ $admin->Deskripsi }}</td>
                                {{-- <td>{{  $categories->id }}</td> --}}

                                <td>
                                    <a class="btn btn-edit" href="/admin/edit/{{ $admin->id }}">Ubah</a>
                                    <a class="btn btn-danger" onclick="confirm('yakin ingin hapus?')" href="/admin/delete/{{ $admin->id }}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="ms-auto">
                        <a class="btn btn-success" href="{{ route('admin.create') }}">Tambah Data</a>
                    </div>
            </div>
        </div>
    </div>    
@endsection
                    
            
                    