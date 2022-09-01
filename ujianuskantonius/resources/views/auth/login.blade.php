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
              <img src="assets/img/portfolio/6.jpg" alt="login" class="login-card-img">
      </div>
      <div class="col-md-7">
              <div class="card-body">
                <div class="brand-wrapper">
                  <img src="assets/img/123.svg" alt="logo" class="logo">
                </div>
                <p class="login-card-description">Sign into your account</p>
                <div>
              
                <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-group">
                      <label for="email"  class="sr-only" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>   
                      <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror"value="{{ old('email') }}" required autocomplete="email" placeholder="masukkan Email"autofocus>
                      @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                    </div>
                    <div class="form-group mb-4">
                      <label for="password" class="sr-only" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                      <input type="password" name="password" id="passwxord" class="form-control @error('password') is-invalid @enderror" required placeholder="masukkan Password" autocomplete="current-password">
                      @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                    </div>
        <button type="submit" class="btn btn-block login-btn mb-4">Login</button>
                  </form>
                 
                 
                  <nav class="login-card-footer-nav">
                    <a href="#!">Terms of use.</a>
                    <a href="#!">Privacy policy</a>
                  </nav>
              </div>
            </div>
          </div>
        </div>
          </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
      </script>
  </body>

  </html>
