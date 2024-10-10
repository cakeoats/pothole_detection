<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/forgetpass.css') }}">
    <title>@yield("title", "Forget Password")</title>
</head>
<body>
    <nav class="judul">
        <div class="navbar-brand">
        
            <h1>Dashboard Visual Pothole Reporting</h1>
        </div>
    </nav>
    <div class="container">
        <div class="forget">
            <form method="POST" action="{{route('forget.password.post')}}">
                @csrf
                <h2>Forget Password</h2>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                </div>
                <button type="submit">Send an Email</button>
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
