@extends('dashboard')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Kategori</h1>
        <div class="row">
             <div class="card-body">
                <form action="/buku/update/{{ $daftarbuku->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label class="mb-1 small">Judul Buku</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control py-2" type="text" name="judul_buku" value="{{ $daftarbuku->judul_buku }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mb-1 small">Nama Pengarang</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control py-2" type="text" name="nama_pengarang" value="{{ $daftarbuku->nama_pengarang }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputState">Nama Kategori</label>
                        <div class="row">
                            <div class="col-md-6">
                            <select id="inputState" class="form-control" name="kategori_id">
                                <option disabled>Pilih Nama Kategori</option>
                                @foreach( $daftarkategori as $dk)
                                <option value="{{ $dk->id }}" 
                                    @if(isset($daftarbuku->kategori_id) && $daftarbuku->kategori_id == $dk->id)
                                    {{ 'selected' }}
                                    @endif
                                    >{{ $dk->nama_kategori }}
                                </option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="mt-2 btn btn-xs btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection