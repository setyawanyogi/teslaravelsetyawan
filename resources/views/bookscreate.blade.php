@extends('dashboard')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tambah Buku</h1>
        <div class="row">
             <div class="card-body">
                <form action="/buku/store" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="mb-1">Judul Buku</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control py-2" type="text" name="judul_buku">
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="mb-1">Nama Pengarang</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control py-2" type="text" name="nama_pengarang">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputState">Nama Kategori</label>
                        <div class="row">
                            <div class="col-md-6">
                            <select id="inputState" class="form-control" name="kategori_id">
                                <option selected>Pilih Nama Kategori</option>
                                @foreach($daftarkategori as $dk)
                                <option value="{{ $dk->id }}">{{ $dk->nama_kategori }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1">
                        <button class="mt-2 btn btn-xs btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection