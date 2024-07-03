<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/dash.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/fonts.css') }}" />
    <title>Dash</title>
</head>
<body>
<div class="row canada">
    <div class="col-2 pt-3 pl-4 boxShadow">
        <img src="{{ URL::asset('content/img/logoText.png') }}" alt="logoText" width="225px" height="40px">
        <a href="/dash" class="link-no-style">
            <div class="pt-5 d-flex justify-content-center">
                <img src="{{ URL::asset('content/img/home.png') }}" alt="house" width="28px" height="28px">
                &nbsp;&nbsp;<h4>Dashboard</h4>
            </div>
        </a>
        <hr>
        <a href="/flights" class="link-no-style">
            <div class="d-flex justify-content-center">
                <img src="{{ URL::asset('content/img/plane.png') }}" alt="plane" width="28px" height="28px">
                &nbsp;&nbsp;<h4>Uw reizen</h4>
            </div>
        </a>

    </div>
    <div class="col-10">
        <div class="row-2 pt-4 pr-4 pb-4 d-flex justify-content-end" style="background-color: #2b3d50">
            <a href="{{ url('/profile') }}">
                <img class="mr-4" src="{{ URL::asset('content/img/accountIMG.png') }}" alt="AccountIcon" width="60px" height="60px">
            </a>
        </div>
        <div class="row-10 pt-5 pl-5 pr-5 pb-3">
            <h2>Dashboard</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Bestemming</th>
                        <th>Begin</th>
                        <th>Eind</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($travels as $travel)
                        <tr>
                            <td>{{ $travel->destination }}</td>
                            <td>{{ $travel->begin }}</td>
                            <td>{{ $travel->end }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
