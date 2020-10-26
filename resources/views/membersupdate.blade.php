@extends('dashboard')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Edit Member</h1>
        <div class="row">
             <div class="card-body">
                <form action="/member/update/{{ $daftarmember->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label class="mb-1 small">Nama</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control py-2" type="text" name="name" value="{{ $daftarmember->name }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mb-1 small">Email</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control py-2" type="text" name="email" value="{{ $daftarmember->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mb-1 small">No. Telepon</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control py-2" type="text" name="phone" value="{{ $daftarmember->phone }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="mb-1 small">Alamat</label>
                        <div class="row">
                            <div class="col-md-6">
                                <textarea class="form-control py-2" type="text" name="address" cols="30" value="">{{ $daftarmember->address }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputState">Nama Kategori</label>
                        <div class="row">
                            <div class="col-md-6">
                            <select id="inputState" class="form-control" name="role_id">
                                <option disabled>Pilih Nama Kategori</option>
                                @foreach( $daftarrole as $dk)
                                <option value="{{ $dk->id }}" 
                                    @if(isset($daftarmember->role_id) && $daftarmember->role_id == $dk->id)
                                    {{ 'selected' }}
                                    @endif
                                    >{{ $dk->role }}
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