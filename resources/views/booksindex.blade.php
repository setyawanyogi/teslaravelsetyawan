@extends('dashboard')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Daftar Kategori</h1>
        <div class="row">
             <div class="card-body">
                <a href="{{ route('tambahkategori') }}" class="mb-2 btn btn-xs btn-primary">Tambah Kategori</a>
                <table id="penulisDataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kategori</th>
                            <th>Judul Buku</th>
                            <th>Nama Pengarang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftarbuku as $db)
                        <tr>
                            <td>{{ $db->id }}</td>
                            <td>{{ $db->nama_kategori }}</td>
                            <td>{{ $db->judul_buku }}</td>
                            <td>{{ $db->nama_pengarang }}</td>

                            <td>
                                <a href="kategori/edit/{{ $db->id }}" class="btn btn-xs btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="kategori/delete/{{ $db->id }}" class="btn btn-xs btn-danger">
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