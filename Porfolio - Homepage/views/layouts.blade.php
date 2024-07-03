<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/header.css')}}">
    <link rel="stylesheet" href="{{url('css/fonts.css')}}">
    <link rel="stylesheet" href="{{url('css/home.css')}}">
    <link rel="stylesheet" href="{{url('css/footer.css')}}">
    <link rel="stylesheet" href="{{url('css/skills.css')}}">
    <link rel="stylesheet" href="{{url('css/contact.css')}}">
    <link rel="stylesheet" href="{{url('css/timeline.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
        @yield('content')
    <footer>
        @include('layouts.footer')
    </footer>
</body>
</html>