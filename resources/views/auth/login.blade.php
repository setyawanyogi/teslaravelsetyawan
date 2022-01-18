<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - PUSTAKA</title>
    <link href="{{ asset('assets/dist/css/styles.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-image" style="background-image: url('{{ asset('assets/img/bglogin.jpg') }}'); height: 400px;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label class="small mb-1" for="Email">Email</label>
                                            <input class="form-control @error('email') is-invalid @enderror py-4" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="example@email.com" required autocomplete="email" autofocus/>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                        <label class="small mb-1" for="password">Password</label>
                                            <input class="form-control @error('password') is-invalid @enderror py-4" id="password" name="password" type="password" placeholder="Password" required autocomplete="current-password"/>

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" {{ old('remember') ? 'checked' : '' }}/>
                                                <label class="custom-control-label" for="remember">Ingat saya?</label>
                                            </div>
                                        </div>

                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="{{ route('register') }}">Belum memiliki akun? Daftar</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/dist/js/scripts.js') }}"></script>
</body>
</html>
