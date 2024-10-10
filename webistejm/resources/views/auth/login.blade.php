<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>@yield("title", "LOGIN")</title>
</head>
<body>
  <nav class="judul">
    <div class="navbar-brand">
      
      <h1>Dashboard Visual Pothole Reporting</h1>
    </div>
  </nav>
  
  @yield("content")

  <div class="container">
      <div class="login">
          <form method="POST" action="{{ route('login.post') }}">
              @csrf
            <h2>Sign In</h2>
            @if(session('error'))
              <div class="alert alert-danger">
                {{ session('error') }}
              </div>
            @endif
            @if ($errors->has('login'))
              <div class="alert alert-danger">
                {{ $errors->first('login') }}
              </div>
            @endif

            <label for="username"></label>
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password"></label>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="cek">
              
              
            </div>
            <button type="submit">Sign In</button>
            
            <div class="inline-links">
              <a href="{{ route('forget.password') }}">Forgot Password</a>
              <span></span>
              <a href="{{ route('register') }}">Create an account</a>
            </div>
          </form>
      </div>
      <div class="right">
        <div class="image-container">
          <img src="{{ asset('img/loginn.jpg') }}" alt="Login Image">
        </div>
      </div>
  </div>
</body>
</html>
