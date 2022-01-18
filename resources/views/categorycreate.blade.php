@extends('dashboard')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tambah Kategori</h1>
        <div class="row">
             <div class="card-body">
                <form action="/kategori/store" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="mb-1 small">Nama Kategori</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control py-2" type="text" name="nama_kategori">
                                <button class="mt-2 btn btn-xs btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection