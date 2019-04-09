<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Minified JS library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
    <title>@yield('title')</title>
</head>
<style>
    div#cabeza
    {
       background-color: #1b4b72;
       font-family: Ubuntu;
       color: #b9bbbe;
    }
    main#container
    {
        background-color: #385d7a;
    }
    img
    {
        size: 500px;
    }
    div#myCarousel
    {
        image-rendering: auto;
        border-image-width: auto;
        width: 800px;
        height: 450px;

    }
    div.img
    {
        height: auto;
        width: auto;
    }
    body
    {
        background-color: #385d7a;
    }   
    footer
    {
        background-color: #040505;
    }

</style>
<body>
<header class="bg-primary">
    <div id="cabeza">
            <br>
        <center><h1>Sistema de Analasis para la deteccion de violencia cibernetica</h1></center>
        <br>
        <ul class="nav justify-content-center">
            <li class="nav-item"><a href="" class="nav-link text-white">Acerca de</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Test</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Comunidad</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Login</a></li>
        </ul>
        <br> <br>
    </div>
</header>
<main class="container">
    @yield("content")
    <center> <div id="myCarousel" class="carousel slide" data-ride="carousel" >
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img" src="{{url('/imagenes/4.jpg')}}" alt="Image"/>
            </div>
            <div class="item">
                <img class="img" src="{{url('/imagenes/5.jpg')}}" alt="">
            </div>
            <div class="item">
                <img class="img" src="{{url('/imagenes/6.jpeg')}}" alt="">
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div></center>

</main>
<footer class="bg-primary text-center">
    <span class="text-warning"> Powered by TeamOffice</span>
</footer>
</body>
</html>
