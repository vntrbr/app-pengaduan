<!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <title>KuyLapor!</title>
      <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    
<link rel="stylesheet" href="/assets/css/templatemo-lava.css">


</head>

<body>
        <div class="left-image-decor"></div>

  </head>

  <body>
      <div class="kotak_login">
          @if(session('sukses'))
          <div class="alert alert-danger" role="alert">
              {{session('sukses')}}
          </div>
          
          @endif
          <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
      <div class="container">
        <div class="card login-card">
          <div class="row no-gutters">
            <div class="col-md-5">
              <img src="/assets/img/logos/warga.jpeg" alt="login" class="login-card-img">
      </div>
      <div class="col-md-7">
              <div class="card-body">
                <div class="brand-wrapper">
                  <img src="assets/img/123.svg" alt="logo" class="logo">
                </div>
                <p class="login-card-description">Register Account</p>
                <div>

               
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                   
                            <div class="form-group">
                      <label for="email"  class="sr-only" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>  
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Tambah Username" autofocus>
                      @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                    </div>

                    <div class="form-group mb-4">
                      <label for="email" class="sr-only" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>
                      <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required placeholder="Tambah Email" autocomplete="Masukkan Email">
                      @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror

                                  <div class="form-group mb-4">
                      <label for="password" class="sr-only" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                      <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required placeholder="Tambah Password" autocomplete="current-password">
                      @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                 
                                  <div class="form-group mb-4">
                      <label for="password-confirm" class="sr-only" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                      <input type="password" name="password_confirmation" id="password-confirm" class="form-control @error('password-confirm') is-invalid @enderror" required placeholder="Password Confirmation" autocomplete="current-password">
                      @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                 

              

                                  <button type="submit" class="btn btn-block login-btn mb-4">Register</button>
                                     <p class="login-card-footer-text">Already have an account? <a href="{{ route('login') }}" class="text-reset">Sign In</a></p>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
