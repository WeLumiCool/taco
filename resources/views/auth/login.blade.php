<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>TACO</title>

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <style>
    body {
      background-color: #2A2F42;
    }
  </style>
</head>
<body>

<div class="container h-100">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-md-6">
      <h1 class="opensans text-center text-white font-weight-bold mb-3" style="font-size: 36px;">
        TACO
      </h1>
      <div class="card">
        {{--<div class="card-header">{{ __('Login') }}</div>--}}

        <div class="card-body py-5">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

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
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-6 offset-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                    {{ __('запомнить пароль') }}
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group row mb-0 justify-content-center">
              <div class="col-md-8">
                <button type="submit" class="btn btn-primary w-100">
                  {{ __('Вход') }}
                </button>

                {{--@if (Route::has('password.request'))--}}
                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                {{--{{ __('Forgot Your Password?') }}--}}
                {{--</a>--}}
                {{--@endif--}}
              </div>
            </div>
            <div class="mt-3 text-center">
              <a href="/term_of_use">
                Договор по офферте
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>