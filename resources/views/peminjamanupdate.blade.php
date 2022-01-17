@extends('dashboard')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Peminjaman</h1>
        <div class="row">
             <div class="card-body">
                <form action="/pinjam/update/{{ $daftarborrow->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label class="mb-1">Nama Member</label>
                        <div class="row">
                            <div class="col-md-6">
                                <select id="inputState" class="form-control" name="member_id">
                                    <option disabled>Pilih Nama Member</option>
                                    @foreach( $daftaruser as $db)
                                    <option value="{{ $db->id }}" 
                                        @if(isset($daftarborrow->member_id) && $daftarborrow->member_id == $db->id)
                                        {{ 'selected' }}
                                        @endif
                                        >{{ $db->member_name }}
                                    </option>
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
                                    <option disabled>Pilih Judul Buku</option>
                                    @foreach( $daftarbuku as $db)
                                    <option value="{{ $db->id }}" 
                                        @if(isset($daftarborrow->book_id) && $daftarborrow->book_id == $db->id)
                                        {{ 'selected' }}
                                        @endif
                                        >{{ $db->book_name }}
                                    </option>
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
                                    <option disabled>Pilih Status</option>
                                    @foreach( $daftarbuku as $db)
                                    <option value="{{ $db->id }}" 
                                        @if(isset($daftarborrow->status_id) && $daftarborrow->status_id == $db->id)
                                        {{ 'selected' }}
                                        @endif
                                        >{{ $db->status_name }}
                                    </option>
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