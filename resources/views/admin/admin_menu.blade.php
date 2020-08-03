<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title',"Bienvenidos Plataforma CACI")</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


  <link href="{{ asset('css/nav.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/footer.css')}}" rel="stylesheet" />
  <script type="text/javascript">
    // var global URL
    var url = '{!! URL::asset('') !!}';
  </script>

</head>
<style>
  div.a {
    position: relative;
    width: 400px;
    height: 200px;
    border: 3px solid red;
  }

  div.b {
    position: absolute;
    left: auto;
    width: 100px;
    height: 120px;
    border: 3px solid blue;
  }

  div.c {
    position: absolute;
    left: 150px;
    width: 200px;
    height: 120px;
    border: 3px solid green;
  }
</style>


<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p>
          <img src="{{asset('img/Logo_CDMX.png')}}" alt="Imagenes" style="width:250px;">
        </p>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <p>
          <img src="{{asset('img/logo CACI.png')}}" alt="Imagenes" style="width:300px;">
        </p>
      </div>
    </div>
  </div>

  <div class="container">
    <!-- Static navbar -->

    <div class="topnav" id="myTopnav">
      <a style="background-color: #00B140; margin-left: 35px; margin-bottom: 23px;" class="active"></a>

      <a href="{{route('lista_inscripcion')}}"><i class="fa fa-book"></i><span> Inscripci&oacute;n</span> </a>
      <a href="{{route('lista_reinscripcion')}}"><i class="fa fa-bookmark"></i><span> Reinscripci&oacute;n</span> </a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      <div class="float-right"><a href="{{route('logout')}}"><i class="fa fa-power-off"></i><span> Cerrar Sesi&oacute;n</span></a></div>

    </div>
  </div>

  <div class="container">
    @yield('mycontent')
    @yield('scripts')
  </div>

  <br>

  <footer style="background-image:url({{url('img/footer.svg')}})" class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
      <div>
          <p>
          {{--  <a style="color:#33353d;" href="#" title="INICIO">INICIO</a>|
           <!-- |<a style="color:#00b140;" href="#" title="NOSOTROS">NOSOTROS</a>| -->
           |<a style="color:#33353d;" href="centros" title="CENTROS">CENTROS</a>|
           |<a style="color:#33353d;" href="inscripcion_from" title="INSCRIPCIÓN">INSCRIPCIÓN</a>|
        |<a style="color:#33353d;" href="reinscripcion" title="REINSCRIPCIÓN">REINSCRIPCIÓN</a>|
        |<a style="color:#33353d;" target="_blank" href="{{asset('doc/incrip_reincrip.pdf')}}" title="INFORMACIÓN DESTACADA">INFORMACIÓN DESTACADA</a>|
           |<a style="color:#33353d;" href="tramiles_CACI" title="TRAMITES">TRAMITES</a>|
           <!-- |<a style="color:#00b140;" href="#" title="PROTECCIÓN CIVIL">PROTECCIÓN</a>|
        <a style="color:#00b140;" href="#" title="CONTACTENOS">CONTACTENOS</a>| -->  --}}
         </p>
          <p style="color:#33353d;">©Copyright Plataforma CACI, Todos los derechos reservados 2020 Gobierno CDMX / Email: <a style="color:#33353d;" href="mailto:caciadministracion@finanzas.cdmx.gob.mx">caciadministracion@finanzas.cdmx.gob.mx</a></p>
       </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li style="color:#33353d;">SIGUENOS EN:</li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
</footer>
  
  <script>
    function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
  </script>

</body>

</html>