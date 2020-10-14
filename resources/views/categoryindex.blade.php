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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftarkategori as $dk)
                        <tr>
                            <td>{{ $dk->id }}</td>
                            <td>{{ $dk->nama_kategori }}</td>
                            <td>
                                <a href="kategori/edit/{{ $dk->id }}" class="btn btn-xs btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="kategori/delete/{{ $dk->id }}" class="btn btn-xs btn-danger">
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