<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/fonts.css') }}" />
    <title>Registratie</title>
</head>
<body class="d-flex justify-content-center align-items-center bg-light">
    <div class="container-login d-flex justify-content-center align-items-center bg-white shadow p-4 rounded" style="max-width: 500px;">
        <div class="w-100">
        <img src="{{ URL::asset('content/img/logo.png') }}" alt="logo" class="mb-4" width="150" height="150">
            <br><b class="fs30">Registreren</b>
            <p>U kunt hier beneden uw account registeren</p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ url('register') }}">
                @csrf
                <div class="form-group mt-5">
                    <label for="email">E-mailadres</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group mt-4">
                    <label for="password">Wachtwoord</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group mt-5">
                    <label for="submit">Heeft u al een account? <a href="/" class="darkBlue"><b>Inloggen</b></a></label>
                </div>
                <button class="btn text-center btnRegister">
                    <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" fill="currentColor" class="bi bi-airplane-fill" viewBox="0 0 16 16" transform="rotate(90)"><path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Z"></path></svg></span><span class="text">Registreren</span>
                </button>

                
            </form>
        </div>
    </div>
</body>
</html>
