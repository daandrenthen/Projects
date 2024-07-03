<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/dash.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/fonts.css') }}" />
    <title>Profile</title>
</head>
<body>
<div class="row canada">
    <div class="col-2 pt-3 pl-4 boxShadow">
        <img src="{{ URL::asset('content/img/logoText.png') }}" alt="logoText" width="225px" height="40px">
        <div class="pt-5 d-flex justify-content-center">
            <img src="{{ URL::asset('content/img/home.png') }}" alt="house" width="28px" height="28px">
            &nbsp;&nbsp;<h4>Dashboard</h4>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
            <img src="{{ URL::asset('content/img/plane.png') }}" alt="house" width="28px" height="28px">
            &nbsp;&nbsp;<h4>Uw reizen</h4>
        </div>
    </div>
    <div class="col-10">
        <div class="row-2 pt-4 pr-4 pb-4 d-flex justify-content-end" style="background-color: #2b3d50">
            <img class="mr-4" src="{{ URL::asset('content/img/accountIMG.png') }}" alt="AccountIcon" width="60px" height="60px">
        </div>
        <div class="row-10 pt-5 pl-5 pr-5 pb-3">
            <h3>Jouwn profiel {{ $user->name }}</h3>
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                </div>
                <!-- Voeg hier andere profielvelden toe -->
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-danger">Uitloggen</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
