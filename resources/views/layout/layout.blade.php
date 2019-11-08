<!doctype html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <title>@yield('title')</title>
  </head>
  <body>   

  <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand ml-3 page-scroll" href="#home">Adrian Salasa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>    

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-3"><a class="nav-link page-scroll" href="#home" >Home</a></li>          
          <li class="nav-item mr-3"><a class="nav-link page-scroll" href="#portfolio" >PortFolio</a></li>     
          <li class="nav-item mr-3"><a class="nav-link page-scroll" href="#about" >About</a></li>
          <li class="nav-item mr-3"><a class="nav-link page-scroll" href="#contact" >Contact</a></li>      
      </ul>
    </div>
  </nav>

     @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!--     <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">      
    </script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

    <script src="{{asset('JS/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('JS/popper.min.js')}}"></script>
    <script src="{{asset('JS/bootstrap.min.js')}}"></script>
    <script src="{{asset('JS/scriptScroll.js')}}"></script>

  </body>
</html>