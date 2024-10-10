<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>@yield("title", "Register")</title>
</head>
<body>
  @yield("content")
  <nav class="judul">
    <div class="navbar-brand">
      
      <h1>Dashboard Visual Pothole Reporting</h1>
    </div>
  </nav>
    <div class="container">
        <div class="login">
            <form method="post" action="{{route('register.post')}}">
                @csrf
              <h2>Hi Roadster!</h2>
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                @if ($errors->has('username'))
                <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="fullname">Fullname:</label>
                <input type="text" name="fullname" class="form-control" placeholder="Fullname">
                @if ($errors->has('fullname'))
                <span class="text-danger">{{ $errors->first('fullname') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="division">Division:</label>
                <input type="text" name="division" class="form-control" placeholder="Division">
                @if ($errors->has('division'))
                <span class="text-danger">{{ $errors->first('division') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password"> 
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
              </div>
              <button type="submit">Create an Account</button>
              <div class="back-to-login">
                <a href="{{ route('login') }}">Back to Login</a>
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
