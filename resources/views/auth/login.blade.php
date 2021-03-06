<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PUSL 2002</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('dist/img/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dist/img/favicon.png')}}">
    <!-- Fonts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- Styles -->
    <style>
        html, body {
            background-image: url('https://i.pinimg.com/originals/41/aa/09/41aa09f7665923b7baa82997cdb49d67.gif');
            background-size: cover;
            background-position: center;
            color: whitesmoke;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        a{
            text-decoration: none;
        }

        .links > a {
            color: whitesmoke;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .card { background-color: rgba(0, 0, 0, 0.84); }
        .card-header, .card-footer { opacity: 1;color: whitesmoke}

        label{
            color: whitesmoke;
        }
    </style>
</head>
<body >
<div class="flex-center position-ref full-height">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">

                    <div class="card-header">Login</div>

                        <div class="col-md-12 col-md-offset-2">
                            @if ($message = Session::get('message'))
                                <div class="callout callout-danger">
                                    <p>{{$message}}</p>
                                </div>

                            @endif
                        </div>
                    

                    <div class="card-body">
                        <form method="POST" action="{{ url('/login-me') }}" aria-label="{{ __('Login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

</body>
</html>
