<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

  <!-- slider css -->
  <link rel="stylesheet" href="{{ asset('dist/css/slider.css') }}">

</head>

<body class="login-page">

  <div class="container-fluid">
    <div class="row col-12">
      <!-- slider -->
      <div class="col-6">
        <section class="carousel" aria-label="Gallery">
          <ol class="carousel__viewport">
            <li id="carousel__slide1" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper d-flex justify-content-center">
                some content here
              </div>
            </li>
            <li id="carousel__slide2" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper"></div>
            </li>
            <li id="carousel__slide3" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper"></div>
            </li>
            <li id="carousel__slide4" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper"></div>
            </li>
          </ol>
          <aside class="carousel__navigation">
            <ol class="carousel__navigation-list">
              <li class="carousel__navigation-item">
                <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
              </li>
              <li class="carousel__navigation-item">
                <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
              </li>
              <li class="carousel__navigation-item">
                <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
              </li>
              <li class="carousel__navigation-item">
                <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
              </li>
            </ol>
          </aside>
        </section>
      </div>
      <!-- end slider -->
      <div class="login-box col-6 d-flex justify-content-center">
        <div class="col-4">
          <div class="login-logo" style="margin-top: 50%">
            <a href="../../index2.html"><b>SDC</b>| Patient Login</a>
          </div>
          <!-- /.login-logo -->
          <div class="card">
            <div class="card-body login-card-body">
              <p class="login-box-msg">Enter credentials to login</p>

              <form action="{{ route('patients.loginAction') }}" method="post">
                @csrf
                <div class="input-group">
                  <input type="email" value="@if(Session::get('username')) {{Session::get('username')}} @endif" class="form-control @error('username') is-invalid @enderror @if(Session::get('usernameError')) is-invalid @endif" placeholder="Email" name="username">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <span class="text-danger">@error('username') {{$message}} @enderror</span>
                  <span class="text-danger">@if(Session::get('usernameError')) {{Session::get('usernameError')}} @endif</span>
                </div>
                <div class="input-group">
                  <input type="password" class="form-control @error('password') is-invalid @enderror @if(Session::get('passwordError')) is-invalid @endif" placeholder="Password" name="password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <span class="text-danger">@error('password') {{$message}} @enderror</span>
                  <span class="text-danger">@if(Session::get('passwordError')) {{Session::get('passwordError')}} @endif</span>
                </div>
                <div class="row">
                  <div class="col-8">
                    <div class="icheck-primary">
                      <input type="checkbox" id="remember">
                      <label for="remember">
                        Remember Me
                      </label>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>

              <!-- /.social-auth-links -->

              <p class="mb-1">
                <a href="{{ route('patients.forgot') }}">I forgot my password</a>
              </p>
              <p class="mb-0">
                <a href="{{ route('patients.register') }}" class="text-center">Register a new membership</a>
              </p>
            </div>
            <!-- /.login-card-body -->
          </div>
        </div>
        <!-- /.login-box -->
      </div>
    </div>

  </div>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>

</html>