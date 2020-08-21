
<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title',"Bienvenidos Plataforma CACI")</title>
  <meta charset="utf-8">
	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <link href="{{ asset('css/nav.css')}}" rel="stylesheet"/>
  <link href="{{ asset('css/footer.css')}}" rel="stylesheet"/>


<link rel="stylesheet" href="{{ asset('css/bulma.css')}}"  />



  
<script type="text/javascript">
    // var global URL
    var url = '{!! URL::asset('') !!}';
</script>
  @yield('scripts')
  
</head>


 <nav style="min-height: 85px; border-bottom:0px solid #fff;"> 
 <div class="container">
    <nav class="level" id="only-mobile">
      
        <div class="level-left">
            <div class="level-item" id="SAF-mobile"> 
                <figure class="image">
                    <img style="width: 300px; height: 70px; padding-top: 10px;" src="{{asset('img/logotipoCDMX.svg')}}" alt="Imagenes" >
                </figure>
            </div>
        </div>
     
        <div  class="level-right">
            <div class="level-item" id="CIUADANA-mobile">
                <figure class="image">
                    <img style="width: 250px; padding-top: 10px;" src="{{asset('img/logo CACI.png')}}" alt="Imagenes" >
                </figure>
            </div>
        </div>
    </nav>
</div>  
</nav>






<body>
<div class="container">
<!-- Static navbar -->
<div class="topnav" id="myTopnav">
  <a class="navbar-brand" style="background-color: #00B140; margin-left: 25px;"></a>
  <a href="inicio">Inicio</a>		
  <a href="centros_Luz_María">Centros</a>
  <a href="inscripcion_from">Preinscripción</a>
  <a href="reinscripcion">Reinscripción</a>
  <a href="informacion_destacada">Información destacada</a>
  <a href="preguntas_frecuentes">Preguntas frecuentes</a>
  <a href="login">Iniciar sesión</a> 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>	

<div class="container">
@yield('mycontent')
</div>

<footer style="background-image:url({{url('img/footer.svg')}}); margin-top: 100px;" class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
           <a style="color:#33353d;" href="inicio" title="INICIO">INICIO</a>|
     	    |<a style="color:#33353d;" href="centros_Luz_María" title="CENTROS">CENTROS</a>|
     	    |<a style="color:#33353d;" href="inscripcion_from" title="INSCRIPCIÓN">PREINSCRIPCIÓN</a>|
		      |<a style="color:#33353d;" href="reinscripcion" title="REINSCRIPCIÓN">REINSCRIPCIÓN</a>|
		      |<a style="color:#33353d;" href="informacion_destacada" title="INFORMACIÓN DESTACADA">INFORMACIÓN DESTACADA</a>|
		      |<a style="color:#33353d;" href="preguntas_frecuentes" title="REINSCRIPCIÓN">PREGUNTAS FRECUENTES</a>|
		      |<a style="color:#33353d;" href="login" title="INICIAR SESIÓN">INICIAR SESIÓN</a>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
		      <p style="color:#33353d;">CACI-SAF / Email: <a style="color:#33353d;" href="mailto:caciadministracion@finanzas.cdmx.gob.mx">caciadministracion@finanzas.cdmx.gob.mx</a></p>
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
