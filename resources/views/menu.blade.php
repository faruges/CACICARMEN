
<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title',"Bienvenidos Plataforma CACI")</title>
  <meta charset="utf-8">
	
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>


  <link href="{{ asset('css/nav.css')}}" rel="stylesheet"/>
  <link href="{{ asset('css/footer.css')}}" rel="stylesheet"/>
  
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

  <a href="inicio"> Inicio </a>		
  <!--<a href="nosotros"> Nosotros </a>-->
  <a href="centros"> Centros </a>
  <!--<a href="requisitos"> Requisitos </a>-->
  <!--<a href="tramites"> Trámites </a>-->
  <!-- <a href="civil_proteccion"> Proteccion Civil </a> -->
   <a href="inscripcion"> Inscripción </a>
     <a style= type="button"  data-toggle="modal" data-target="#myModal" href="#"> Reinscripción </a>
   <a style="margin-right:  -800px;" href="login"> Iniciar sesión</a>   
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
</div>	


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div  class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 style="color: #00b140;" class="modal-title">Proceso de Inscripción</h2>
        </div>
        <div class="modal-body">
        <p>Para pode iniciar el proceso de inscripción debes cumplir con los siguientes requisitos:</p>
                <p>*Madres, padres o quien ejerza la patria potestad, o guarda y custodia del menor, que sean trabajadoras (es) del Gobierno de la Ciudad de Mexico basificadas (os) y sindizadas (os) que contricen al SUTGCDMX.</p>
                <P>*Asi mismo, el personal de estructura, nomina 8, base sin digito sindical, del ambito Central de los Organos politico Administrativos del Gobierno de la Ciudad de Mexico podran gozar de los beneficios que ofrecen los CACI-SAF, Lo anterior, considerando solo hasta un 30% de su capacidad instalada, como se establece en los "Lineamientos Generales para la Operacion de los Centros de Atencion y Cuidado infantil de la Secretaria de Administracion y Finanzas del Gobierno de la Cuidad de Mexico y sus 16 Alcaldias."</P>

                <h4>Contar con los siguientes documentos digitalizados:</h4>

                <p>-Solicitud de ingreso perfectamente llenada y firmada.</p> 
                <p>-Acta de nacimiento del (a) menor (original y copia ambos lados).</p>
                <p>En caso de que el ingreso sea para nivel preescolar el acta de nacimiento original permanecera en el Centro hasta el egreso de la o el menor Copia Fotostatica del certificado de nacimiento o de la hoja de registro de recien nacido, o Documento que contengan datos de nacimiento del(a) menor tales como peso, talla, APGAR,etc.</p>
                <p>*Cartilla de vacunacion al corriente (original y copia)</p>
                <p>*Copia fotostatica de la Clave Unica de Registro de Poblacion, CURP del (la) menor</p>
                <p>*Constancia de labores actualizada, (con una antiguedad no mayor de 30 dias al momento del tramite) expdida por Recursos Humanos de la Unidad Administrativa en la que pertenece, horario, dia laborales, fecha de ingreso y periodos vacaciones, sellada y firmada.</p>
                <p>Ultimo recibo de pago impreso del (a) trabajador (a* Analisis clinicos completos.)</p>

                <p>-Biometria Hematica</p>
                <p>-Exudado Faringeo</p>
                <p>General de Orina</p>
                <p>Coproparasitoscopico en serie de tres</p>
                <p>Seis fotografias tamaño infantil del(a) menor (recientes y de la misma toma).</p>
                <p>Cuatro fotografias tamaño infantil del (a) trabajador(a) solicitante del servicio (recientes y de la misma toma).</p>
<p>En caso que las o el menor tenga alguna discapacidad o enfermedad cronica presentar copias de los documentos medicos del tratamiento y/o seguimiento para proporcionarle la atencion adecuada.</p>
<p>CHECK SOLAMENTE Y EN LA VISITA FISITA LLEVAR DOCUMENTAL Y EL ADMINISTRATIVO LLENARA LA INFORMACION</p>
<p>En caso de que el trabajador(a)sea el tutor del menor, debera presentar el documento legal que dictamine la patria potestado o guarda y custodia del mismo.</p>
                <h5>NOTA IMPORTANTE:</h5>
                <P>Documentos para enviar electronicamente</P>
                <P>Documentos para entrega fisica</P>
        </div>
        <div style="background-color: #00b140;" class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
        </div>
      </div>
    </div>
  </div>






	
<div class="container">
@yield('mycontent')
</div>
	<div class="container">
	<div style="text-align: center; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'">
	<h5>SUBSECRETARÍA DE ADMINISTRACIÓN Y CAPITAL HUMANO.</h5>
    <h5>DIRECCIÓN GENERAL DE DESARROLLO HUMANO Y PROFESIONALIZACIÓN.</h5>
	</div>
	</div>	
	<br>

	<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
			  <div>
     			 <p>
            <a style="color:#00b140;" href="http://caci.ochentayocho.net/" title="INICIO">INICIO</a>|
     				|<a style="color:#00b140;" href="http://caci.ochentayocho.net/nosotros/" title="NOSOTROS">NOSOTROS</a>|
     				|<a style="color:#00b140;" href="http://caci.ochentayocho.net/nuestros_caci/" title="NUESTROS CACI">NUESTROS CACI</a>|
     				|<a style="color:#00b140;" href="http://caci.ochentayocho.net/requisitos/" title="REQUISITOS">REQUISITOS</a>|
     				|<a style="color:#00b140;" href="http://caci.ochentayocho.net/tramites/" title="TRAMITES">TRAMITES</a>|
     				|<a style="color:#00b140;" href="http://caci.ochentayocho.net/proteccion_civil/" title="PROTECCIÓN CIVIL">PROTECCIÓN</a>|
            <a style="color:#00b140;" href="http://caci.ochentayocho.net/contactenos/" title="CONTACTENOS">CONTACTENOS</a>|
     			</p>
            <p>©Copyright Plataforma CACI, Todos los derechos reservados 2020 Gobierno CDMX / Teléfonos 5555555555 / ext: 123 - Email: <a href="mailto:caci@finanzas.cdmx.gob.com">caci@finanzas.cdmx.gob.com</a></p>
     		</div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li>SIGUENOS EN:</li>
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
