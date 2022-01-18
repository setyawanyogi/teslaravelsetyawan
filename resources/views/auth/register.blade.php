<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - PUSTAKA</title>
        <link href="{{ asset('assets/dist/css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content" class="mb-3">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Buat Akun Baru</h3></div>
                                    <div class="card-body">
                                        <form  method="POST" action="{{ route('register') }}">
                                            @csrf

                                            
                                            <div class="form-group">
                                                <label class="small mb-1" for="name">Nama</label>
                                                <input class="form-control @error('name') is-invalid @enderror py-4" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="John Doe" required autocomplete="name" autofocus/>


                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                             


                                            <div class="form-group">
                                                <label class="small mb-1" for="email">Email</label>

                                                <input class="form-control @error('email') is-invalid @enderror py-4" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="example@email.com" required autocomplete="email"/>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                        
                                            <div class="form-group">
                                                <label class="small mb-1" for="phone">No. Telpon</label>
                                                <input class="form-control @error('phone') is-invalid @enderror py-4" id="phone" name="phone" type="text" placeholder="0812-XXXX-XXXX"/>


                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label class="small mb-1" for="address">Alamat</label>
                                                <textarea class="form-control @error('address') is-invalid @enderror py-4" id="address" name="address" type="password" placeholder="Jl. Tanpa Nama No.XX" cols="30"></textarea>

                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>


                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="password">Password</label>
                                                        <input class="form-control @error('password') is-invalid @enderror py-4" id="password" name="password" type="password" placeholder="Password" required autocomplete="new-password"/>


                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="password-confirm">Konfirmasi Password</label>
                                                        <input class="form-control py-4" id="password-confirm" name="password_confirmation" type="password" placeholder="Konfirmasi password" required autocomplete="new-password" />

                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mt-4 mb-0">
                                                <button class="btn btn-primary btn-block" type="submit">Daftar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{ route('login') }}">Sudah punya akun? Login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Ridlo W</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/dist/js/scripts.js') }}"></script>
    </body>
</html>
