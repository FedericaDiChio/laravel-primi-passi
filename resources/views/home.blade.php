<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Hello world!</h1>
    <p>Welcome {{ $name }}</p>
    <header>
        <nav>
        <a href="{{ url('/projects') }}">Projects</a>
        <a href="{{ url('/blog') }}">Blog</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/contact') }}">Contact</a>    
        </nav>
    </header>
</body>
</html>