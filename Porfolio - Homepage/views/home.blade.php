@extends('layouts.layouts')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="container-header">
                <img src="{{url('content/img/header.png')}}" alt="paragraphIcon">
    </div>
    <div class="row row1home  fs30 justify-content-center align-items-center heebo">
        <div class="col-md-1 paragraphIcon">
            <img src="{{url('content/icons/paragraphIcon.png')}}" alt="paragraphIcon">
        </div>
        <div class="col-md-7 sdniveau4">
            <i>Software developer<br>
            Niveau 4</i>    
        </div>
    </div>
    
    <div class="row2home justify-content-center pt-5" id="scroll-container">
        <h2 class="text-center secondColor"><i>Daan's tijdlijn</i></h2>
        <h1 class="text-center mainColor"><b>Mijn ontwikkeling</b></h1>
    </div>
    <div class="process-wrapper mt-4">
    <div id="progress-bar-container">
        <ul>
            <li class="step step01 active"><div class="step-inner">Middelbare school</div></li>
            <li class="step step02"><div class="step-inner">Begin opleiding</div></li>
            <li class="step step03"><div class="step-inner">Stage jaar 2</div></li>
            <li class="step step04"><div class="step-inner">Stage jaar 3</div></li>
            <li class="step step05"><div class="step-inner">Stage jaar 4</div></li>
        </ul>
        <div id="line">
            <div id="line-progress"></div>
        </div>
    </div>

    <div id="progress-content-section">
        <div class="section-content discovery active">
            <h2>Lorum ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
        </div>
        <div class="section-content strategy">
            <h2>Lorum ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
        </div>
        <div class="section-content creative">
            <h2>Lorum ipsum</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a,
        </div>
        </div>
        </div>    
    </body>
</html>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
 <script>
    
    $(".step").click( function() {
	$(this).addClass("active").prevAll().addClass("active");
	$(this).nextAll().removeClass("active");
});

$(".step01").click( function() {
	$("#line-progress").css("width", "3%");
	$(".discovery").addClass("active").siblings().removeClass("active");
});

$(".step02").click( function() {
	$("#line-progress").css("width", "25%");
	$(".strategy").addClass("active").siblings().removeClass("active");
});

$(".step03").click( function() {
	$("#line-progress").css("width", "50%");
	$(".creative").addClass("active").siblings().removeClass("active");
});

$(".step04").click( function() {
	$("#line-progress").css("width", "75%");
	$(".production").addClass("active").siblings().removeClass("active");
});

$(".step05").click( function() {
	$("#line-progress").css("width", "100%");
	$(".analysis").addClass("active").siblings().removeClass("active");
});

 
    </script>
@endsection
