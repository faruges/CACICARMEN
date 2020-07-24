@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')





<style>


a {
  text-decoration: none;
}

.alert {
	background: #FFF;
	padding: 40px;	
  position: relative;
  font-weight: 600;
}

.close_btn {
	color: #000;
	padding: 15px 0px 5px 10px;
	display: block;
	position: absolute;
	top: 2px;
	right: 0px;	
}

.content {
  padding: 0px;
}
</style>





<div class="alert">
	       <img src="{{asset('img/CCC.png')}}" alt="Imagenes" style="width:20%; text-align: right;"></a>

<br><br>
    <h3 style="text-align: center; font-family:  fantasy;">AVISO DE PRIVACIDAD DEL SISTEMA DE DATOS PERSONALES 
“EXPEDIENTES ÚNICOS DE LAS NIÑAS Y LOS NIÑOS DE LOS CACI-SAF DE LA SECRETARÍA DE ADMINISTRACIÓN Y FINANZAS”.

</h3>

    <a href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>
</div><!-- /popup message  -->
<div class="content">
<h4>
 La o el titular de la Dirección General de Política y Relaciones Laborales con domicilio en Fray Servando Teresa de Mier, Numero 77 piso 2, Colonia Obrera, Alcaldía Cuauhtémoc, C.P. 06000, Ciudad de México, es el Responsable del tratamiento de los datos personales que nos proporcione, los cuales serán protegidos en el Sistema de Datos Personales “Expedientes Únicos de las Niñas y los Niños de los CACI-SAF de la Secretaría de Administración y Finanzas”, con fundamento en el Reglamento Interior del Poder Ejecutivo y de la Administración Pública de la Ciudad de México,  la CIRCULAR UNO 2019 Normatividad en Materia de Administración de Recursos para las Dependencias, Órganos Desconcentrados y Entidades de la Administración Pública de la Ciudad de México, la Ley de Protección de Datos personales en Posesión de Sujetos Obligados de la Ciudad de México y la Ley de Transparencia, Acceso a la Información Pública y Rendición de Cuentas de la Ciudad de México; que faculta al Responsable para llevar a cabo el tratamiento.</h4>




<h4>
	<p><b>•	Finalidad:</b></p>

Recopilar los datos necesarios de los trabajadores del Gobierno de la Ciudad de México que cubren el perfil establecido para la prestación del servicio de los Centros de Atención y Cuidado Infantil para iniciar el trámite de preinscripción de sus hijas e hijos. </h4>





<h4>
	<p><b>•	Usos: </b></p>

Los datos obtenidos para la conformación del expediente único del menor al que se le brindará el servicio educativo-asistencial, dando tratamiento y resguardo a la información contenida en dicho expediente con respecto a su entorno educativo, familiar y personal.

<tr>
Para las finalidades antes señaladas, de manera enunciativa mas no limitativa se recabarán los siguientes datos personales:


</h4>


<h4>
	<p><b>•	Datos Identificativos:  </b></p>Nombre completo, edad, sexo, nacionalidad, lugar y fecha de nacimiento, domicilio, número teléfono particular, número teléfono celular, Clave Federal de Contribuyentes (RFC), Clave Única de Registro de Población (CURP), fotografía, firma autógrafa.</h4>
<h4>





	<p><b>•	Datos biométricos:  </b></p>Grupo sanguíneo, huellas dactilares.</h4>


<h4>
	<p><b>•	Datos sobre la salud </b></p>Antecedentes hereditarios y familiares no patológicos, perinatales, uso de aparatos oftalmológicos, ortopédicos, auditivos, prótesis, intervenciones quirúrgicas, valoraciones y resultados de test psicológicos (Frostig y Denver), sonometría (peso y talla), estado nutricional, información dental, padecimientos, estado físico o mental, aptitudes sobresalientes, discapacidad, tratamiento médico, incapacidades médicas, inmunizaciones.</h4>


<h4>
	<p><b>•	Datos académicos: </b></p>

Trayectoria educativa, evidencias, evaluaciones, matricula. </h4>

<h4>
	<p><b>•	Datos laborales</b></p>

Denominación del puesto, domicilio oficial, teléfono de oficina, número de empleado, número de plaza. </h4>


<h4>
	<p><b>•	Datos afectivos y familiares: </b></p>

Nombre, edad, parentesco de los familiares y beneficiarios.  </h4>



<h4>
	<p><b>•	Datos especialmente protegidos (sensibles):  </b></p>

Origen étnico o racial, características morales, características emocionales, ideología y opiniones políticas, creencias, convicciones religiosas, filosofía y preferencias sexuales.  </h4>


<h4>
	<p><b>•	Datos patrimoniales:   </b></p>

Ingresos y egresos.<br>

 Los cuales tendrán cinco años de ciclo de vida de vigencia documental.
 </h4>


<h4>
	<p><b>Área ante la cual podrá ejercer los derechos ARCO: </b></p>

Usted podrá ejercer sus derechos de acceso, rectificación, cancelación u oposición, de sus datos personales (derechos ARCO), así como la revocación del consentimiento directamente ante la Unidad de Transparencia de Secretaría de Administración y Finanzas de la Ciudad de México, ubicada en Plaza de la Constitución 1, Planta Baja, Colonia Centro, Alcaldía Cuauhtémoc, C.P. 06000, Ciudad de México con número telefónico 5345 8000 extensión 1599, o bien, a través del Sistema INFOMEX www.infomexdf.org.mx o  la Plataforma Nacional de Transparencia http://www.plataformadetransparencia.org.mx , o en el correo electrónico ut@finanzas.cdmx.gob.mx.  </h4>




</div>


<h4>
	
Si desea conocer el procedimiento para el ejercicio de estos derechos puede acudir a la Unidad de Transparencia, enviar un correo electrónico a la dirección antes señalada o comunicarse al TEL-INFO (56364636)
 </h4>







<script>



	$(document).ready(function() {

  if ($(window).width() > 786) {
    $('.alert').hide().delay(750).slideDown(400);
  };
  $('.close_btn').click(function() {
    $('.close_btn').fadeOut(200);
    $('.alert').slideUp(400);
  });

});
</script>




@endsection

 
