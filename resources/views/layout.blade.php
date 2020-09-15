<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" />
        <style>
            /*ul.h {margin:6px; padding:20px;}
            ul.h li {display:block; float:left; padding:0 10px;}*/
            *{/*Selector universal*/margin-top:5px;}
            nav {margin-right:5px;}
            nav a{ /*Menú*/text-decoration:none; color:inherit; font-size:14px;} 
            nav li{display:inline-block; width:10%; padding:5px 10px; background-color:#000; 
                    border:1px solid #000; text-align:center; color:#fff;}
            nav li:hover{background-color:#fff; color:#000;}
            .container{text-align:center; font-family: 'Lucida Sans Unicode';
                    font-style: italic;}
            div{padding:5px; border:1px; width:1030px; margin-left:200px; margin-top:-13px; 
                text-align:center;}

        </style>
    </head>
    <body>
    <header>
        <!--Encabezado-->
        <div class="container">
            <h1>Biblioteca Los Juanes</h1>
        </div>
    </header>

    @include('partials.nav')    
    <br><br>
    @yield('contenido')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    </body>
    </html>