@extends('dashboard')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Daftar Peminjaman</h1>
        <div class="row">
             <div class="card-body">
                <a href="{{ route('tambahpeminjaman') }}" class="mb-2 btn btn-xs btn-primary">Tambah Peminjaman</a>
                <table id="penulisDataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Member</th>
                            <th>Judul Buku</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftarborrow as $dx)
                        <tr>
                            <td>{{ $dx->id }}</td>
                            <td>{{ $dx->user->name }}</td>
                            <td>{{ $dx->book->judul_buku }}</td>
                            <td>{{ $dx->status->nama_status }}</td>
                            <td>
                                <a href="/pinjam/edit/{{ $dx->id }}" class="btn btn-xs btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="/pinjam/delete/{{ $dx->id }}" class="btn btn-xs btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection