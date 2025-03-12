<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Login | {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="c-app flex-row align-items-center">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5">
                @if(Session::has('account_deactivated'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('account_deactivated') }}
                </div>
                @endif
                <div class="card p-4 border-0 shadow-sm">
                    <div class="card-title text-center">
                        <img width="400" src="{{ asset('images/logo.png') }}" alt="Logo">
                    </div>
                    <div class="card-body">
                        <form id="login" method="post" action="{{ url('/login') }}">
                            @csrf
                            <p class="text-muted text-center">Sign In to your account</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-person"></i>
                                    </span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="bi bi-lock"></i>
                                    </span>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button id="submit" class="btn btn-outline-info btn-block px-4 d-flex align-items-center" type="submit" style="text-align: center;">
                                        Login
                                        <div id="spinner" class="spinner-border text-info" role="status" style="height: 20px;width: 20px;margin-left: 5px;display: none;">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </button>
                                </div>
                                <!-- <div class="col-2 text-right">
                                    <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                        Forgot password?
                                    </a>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                @if(Session::has('account_deactivated'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('account_deactivated') }}
                </div>
                @endif
                <div class="p-4 border-0">
                    <div class="">
                        <img width="" src="{{ asset('images/SIXX Database.png') }}" alt="Logo">
                    </div>
                </div>

                <!-- <p class="text-center mt-5 lead">
                Developed By
                <a href="https://sbong.xyz" class="font-weight-bold text-primary">tlms</a>
            </p> -->
            </div>
        </div>
    </div>

    <!-- CoreUI -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script>
        let login = document.getElementById('login');
        let submit = document.getElementById('submit');
        let email = document.getElementById('email');
        let password = document.getElementById('password');
        let spinner = document.getElementById('spinner')

        login.addEventListener('submit', (e) => {
            submit.disabled = true;
            email.readonly = true;
            password.readonly = true;

            spinner.style.display = 'block';

            login.submit();
        });

        setTimeout(() => {
            submit.disabled = false;
            email.readonly = false;
            password.readonly = false;

            spinner.style.display = 'none';
        }, 3000);
    </script>

</body>

</html>