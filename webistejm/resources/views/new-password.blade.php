<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/forgetpass.css') }}">
    <title>@yield("title", "forget password")</title>
</head>
<body>
    <div class="judul"><h1>Dashboard Visual AI Pothole Detection</h1></div>

    <div class="logo">
    <!-- <img src="{{ asset('/logojsmr.png') }}" alt="Login Image"> -->
    </div>
    <div class="container">
        <div class="forget">
            <form method="POST" action="{{route('reset.password.post')}}">
                @csrf
                <input type="text" name="token" hidden value="{{$token}}">
                <h2>Forget Password</h2>
                <label for="email"></label>
                <input type="text" name="email" class="form-control"placeholder="Email" required autofocus>
                <label for="Enter Password"></label>
                <input type="password" name="password" class="form-control"placeholder="Enter a new password" required autofocus>
                <label for="confirm Password"></label>
                <input type="password" name="password_confirmation" class="form-control"placeholder="Confirm a new password" required autofocus>
                <button>Send an Email</button>
            </form>
            <div class="right">
            <img src="{{ asset('img/loginn.jpg') }}" alt="">
        </div>
        </div>
    </div>
</body>
</html>