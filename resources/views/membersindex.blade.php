@extends('dashboard')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Daftar Member</h1>
        <div class="row">
             <div class="card-body">
                <table id="penulisDataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. Telpon</th>
                            <th>Alamat</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($daftarmember as $dm)
                        <tr>
                            <td>{{ $dm->id }}</td>
                            <td>{{ $dm->name }}</td>
                            <td>{{ $dm->email }}</td>
                            <td>{{ $dm->phone }}</td>
                            <td>{{ $dm->address }}</td>
                            <td><span class="btn btn-info">{{ $dm->role }}</span></td>
                            <td>
                                <a href="/member/edit/{{ $dm->id }}" class="btn btn-xs btn-warning">
                                    <i class="fas fa-edit"></i>
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