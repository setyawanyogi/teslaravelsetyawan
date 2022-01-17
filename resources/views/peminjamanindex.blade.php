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
                        @php
                        $no = 1;
                        @endphp
                        @foreach($daftarborrow as $db)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $db->name }}</td>
                            <td>{{ $db->judul_buku }}</td>
                            <td>{{ $db->nama_status }}</td>
                            <td>
                                <a href="/pinjam/edit/{{ $no }}" class="btn btn-xs btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="/pinjam/delete/{{ $db->id }}" class="btn btn-xs btn-danger">
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