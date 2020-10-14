@extends('dashboard')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Kategori</h1>
        <div class="row">
             <div class="card-body">
                <form action="/kategori/update/{{ $daftarkategori->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label class="mb-1 small">Nama Kategori</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control py-2" type="text" name="nama_kategori" value="{{ $daftarkategori->nama_kategori }}">
                                <button class="mt-2 btn btn-xs btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection