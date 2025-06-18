<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>👋 Welcome to NoteApp!</h1>

    @auth
        <p>You’re logged in. Go to <a href="{{ route('dashboard') }}">Dashboard</a>.</p>
    @else
        <p><a href="{{ route('login') }}">Log in</a> or <a href="{{ route('register') }}">Register</a></p>
    @endauth
</body>
</html>
