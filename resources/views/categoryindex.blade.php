@extends('dashboard')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Daftar Kategori</h1>
        <div class="row">
             <div class="card-body">
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
                            <td>.....</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection