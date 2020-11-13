@extends('dashboard')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Tambah Peminjaman</h1>
        <div class="row">
             <div class="card-body">
                <form action="/pinjam/store" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="mb-1">Nama Member</label>
                        <div class="row">
                            <div class="col-md-6">
                                <select id="inputState" class="form-control" name="member_id">
                                @foreach($daftaruser as $db)
                                <option value="{{ $db->id }}">{{ $db->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="mb-1">Judul Buku</label>
                        <div class="row">
                            <div class="col-md-6">
                                <select id="inputState" class="form-control" name="book_id">
                                @foreach($daftarbuku as $db)
                                <option value="{{ $db->id }}">{{ $db->judul_buku }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputState">Status</label>
                        <div class="row">
                            <div class="col-md-6">
                            <select id="inputState" class="form-control" name="status_id">
                                @foreach($daftarstatus as $db)
                                <option value="{{ $db->id }}">{{ $db->nama_status }}</option>
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