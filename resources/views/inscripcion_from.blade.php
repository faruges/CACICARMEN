@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
  <script src="{{URL::asset('js/consulta_webservice.js')}}" type="text/javascript"> </script> 
  <script src="{{URL::asset('js/add-upper-case.js')}}" type="text/javascript"> </script> 
@endsection 
@section('mycontent')

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


<style>
  #regForm {
    margin: 100px auto;
    font-family: Arial, Helvetica, sans-serif;
    padding: 20px;
    width: 70%;
    min-width: 300px;
    margin-top: -0px;
  }

  h1 {
    text-align: center;
  }

  input {
    padding: 10px;
    width: 100%;
    font-size: 16px;
    font-family: Arial, Helvetica, sans-serif;
    border: 3px solid #00b140;
  }

  input.invalid {
    background-color:#ffe6e6;
  }

  .tab {
    display: none;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
    color: #000000;

  }

  button   {
    background-color: #00b140;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    cursor: pointer;
  }

  button:hover {
    opacity: 0.8;

  }

  #prevBtn {
    background-color: #bbbbbb;
  }

  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }

  .step.active {
    opacity: 1;
  }

  .step.finish {
    background-color: #00b140;
  }

a , h1 {

  font-family: 'Open Sans';
  text-decoration: none;

}

.alert {
  background: #eee;
  padding: 40px;  
  position: relative;
  font-weight: 600;
}

.close_btn {
  color: #00B140;
  padding: 15px 0px 5px 10px;
  display: block;
  position: absolute;
  top: 10px;
  right: 10px;  
}

.fondo {
  background-image: url("./img/FondoRepeat.png");
  background-repeat: repeat;
  
}

.bgcontainer { 
            width: 100%;
        } 
        #st-box { 
            float:left; 
            width:50%; 
        } 
        #rd-box { 
            float:right; 
            width:50%; 	
        } 
</style>

<div class="alert">
  <a href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>
  <div class="modal-content">
    <div class="modal-body">

      <div style="background-color: #054a41;" class="modal-body">
      <h1 style="color:  #FFF; text-align: center;" >Proceso de Inscripción</h1><br>

      <h4 style="color: #FFF; text-align: left;">
      * Madres, padres o quien ejerza la patria potestad y/o guarda y custodia del o la menor, que sean trabajadoras(es) del Gobierno de la Ciudad de México, con base, sindicalizadas(os) y que coticen al SUTGCDMX.</h4><br>

      <h4 style="color: #FFF; text-align: left;">
      * Personal de estructura, nómina 8, base sin dígito sindical y trabajadores del ámbito central y de las alcaldías del Gobierno de la Ciudad de México, podrán gozar de los benecios que ofrece el CACI-SAF, considerando sólo hasta un 30% de su capacidad instalada, como se establece en los Lineamientos Generales para la Operación de los Centros de Atención y Cuidado Infantil de la Secretaría de Finanzas de la Ciudad de México y de sus Alcadías.</h4><br>

      <h4 style="color: #FFF; text-align: left;">
      * El personal de estructura aportará una cuota quincenal de recuperación que será retenida vía nómina.</h4><br>
      </div>
      <div class="col-lg-12" style="margin-top: 2%;">
        <div class="row">
          <div class="col-sm-6">
          <h2 style="color: #054a41;" id="title_list_ip">REQUISITOS:</h2>
          <ul class="list-group" style="color: #000000; font-size: 20px; font-weight: 500;">
          </i>1. Llenar el siguiente formulario.</li><br><br>
          </i>2. Cargar la siguiente documentación en versión digital (PDF):</li><br>
          <h5>a) Acta de nacimiento original por ambos lados, del o la menor.</h5>
          <h5>b) Certicado de nacimiento del o la menor.</h5>
          <h5>c) Cartilla de vacunación al corriente.</h5>
          <h5>d) Clave Única de Registro de Población, (CURP) del o la menor.</h5>
          <h5>e) Si el menor presenta algún tipo de discapacidad o enfermedad crónica, adjuntar documentación clínica y diagnóstico de la condición y del tratamiento que recibe.</h5>
          <h5>f) En caso de que el o la trabajador(a) sea la persona tutora, deberá adjuntar el documento legal que dictamine la patria potestad o guarda y custodia.</h5>
        </div>
     <div class="col-sm-6"><br>
        <ul class="list-group" style="color: #000000; font-size: 20px; font-weight: 500;"><br>
          </i>3. Entregar en original la siguiente documentación:</li>
          <h5>a) Acta de nacimiento del o la menor.</h5>
          <h5>b) Cartilla de vacunación del o la menor.</h5>
          <h5>c) Análisis clínicos indicados en la conrmación de inscripción.</h5>
          <h5>d) Documentación clínica y diagnóstico de la condición y del tratamiento que recibe, en caso de presentar algún tipo de discapacidad o enfermedad crónica.</h5>
          <h5>e) Documento legal que dictamine la patria potestad o guarda y custodia.</h5>
          <h5>f) Seis fotografías tamaño infantil recientes e iguales, del o la menor.</h5>
          <h5>g) Cuatro fotografías tamaño infantil, recientes e iguales del o la trabajador(a).</h5>
          <h5>h) Cuatro fotografías tamaño infantil, recientes e iguales, de dos personas mayores de edad autorizadas por el (la) solicitante del servicio para recoger a la o el menor.</h5> 
      </div>
    </div>
  </div>
</div>
    <div style="background-color: #fff;" class="modal-footer">
    </div>
  </div>
</div>

<body>
  @if($errors->any())
  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <div class="alert-text">
      @foreach ($errors->all() as $error)
      <span>{{$error}}</span>
      @endforeach
    </div>
  </div>
  @elseif (session('mensaje'))
  <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i> Mensaje Sistema Biblioteca</h4>
      <ul>
          <li>{{session('mensaje')}}</li>
      </ul>
  </div>
  @endif
<div class="fondo">   
<form id="regForm" action="{{route('guardar_inscripcion_bd')}}" method="POST" enctype="multipart/form-data">
<h1 style="color: #054a41;">Centros de Atención y Cuidado Infantil</h1>
   <div class="tab">
  <br>

        @csrf

 @foreach ($data as $item=>$value)
      {{--  <h2>RFC</h2>
<p><input id="rfc" placeholder="RFC" oninput="this.className = ''" name="rfc_num"></p>  --}}
 <div class="col-lg-12">
     <label style="color:#054a41; ">Datos del trabajador</label>
    <div class="row">
    <div class="col-sm-6">
      <ul class="list-group" style="color: #000000; font-size: 20px; font-weight: 500;">

      <p style="font-size: 12px; font-family: Arial, Helvetica;">Nombre del Padre/Madre o Tutor

        <input  type="text"placeholder="Nombre del Padre/Madre o Tutor"  title="Nombre del Padre/Madre o Tutor" oninput="this.className = ''"  name="nombre_tutor_madres" value="{{$value['CH_nombres']}}" readonly> </p>
      <p style="font-size: 12px; font-family: Arial, Helvetica;">Apellido paterno<input type="text"placeholder="Apellido paterno" title="Apellido paterno" oninput="this.className = ''" name="apellido_paterno_tutor" value="{{$value['CH_paterno']}}" readonly></p>
      <p style="font-size: 12px; font-family: Arial, Helvetica;">Apellido materno<input type="text"placeholder="Apellido materno" title="Apellido materno" oninput="this.className = ''" name="apellido_materno_tutor" value="{{$value['CH_materno']}}" readonly></p>
      <p style="font-size: 12px; font-family: Arial, Helvetica;">Domicilio particular<input id="domicilio" type="text"placeholder="Domicilio particular" onkeyup="mayus(this);" title="Domicilio particular" oninput="this.className = ''" name="domicilio_delegracion"></p>
      <p style="font-size: 12px; font-family: Arial, Helvetica;">Tipo de nómina<input  placeholder="Tipo de nómina" title="Tipo de nómina" oninput="this.className = ''" name="tipo_nomina_1" value="{{$value['TipoNomina']}}" readonly></p>
	  <p style="font-size: 12px; font-family: Arial, Helvetica;">Número de empleado<input placeholder="Número de empleado" title="Número de empleado" oninput="this.className = ''" name="num_empleado_1" value="{{$value['NumEmpleado']}}" readonly></p>
      <p style="font-size: 12px; font-family: Arial, Helvetica;">Número de plaza<input placeholder="Número de plaza" title="Número de plaza" oninput="this.className = ''" name="num_plaza_1" value="{{$value['NUM_PLAZA']}}" readonly></p>
      <p style="font-size: 12px; font-family: Arial, Helvetica;">Clave de la dependencia<input type="text"placeholder="Clave de la dependencia" title="Clave de la dependencia" oninput="this.className = ''" name="clave_dependencia_1" value="{{$value['Clave_Dependencia']}}" readonly></p>
    </div>
    <div class="col-sm-6">
    <ul class="list-group" style="color: #000000; font-size: 20px; font-weight: 500;">      
      <p style="font-size: 12px; font-family: Arial, Helvetica;">Nivel salarial<input placeholder="Nivel salarial" title="Nivel salarial" oninput="this.className = ''" name="nivel_salarial_1" value="{{$value['NIVEL_SALARIAL']}}" readonly></p>
      <p style="font-size: 12px; font-family: Arial, Helvetica;">Sección sindical<input placeholder="Sección sindical" title="Sección sindical" oninput="this.className = ''" name="seccion_sindical_1" value="{{$value['SECCION_SINDICAL']}}" readonly></p><br><br>
	  <h5>Horario laboral</h5>
          <input type="time" id="appt" name="horario_laboral_ent">
          <input type="time" id="appt" name="horario_laboral_sal">
    </div>
	
</div>
</div>
<p style="color: #f5f5f0;">.</p>
</div>

<div class="tab">
  <br>
  <label for="curp">CURP:</label>
  <p><input id="curp" type="text" placeholder="CURP" onkeyup="mayus(this);" oninput="this.className = ''" name="curp"
    pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]"></p>
  <button id="valida_curp" type="button" onclick="validaCurp()">Validar CURP</button> 
</div>

    <div class="tab">
          <br>
    <div class="col-lg-12">
    <div class="row">
    <div class="col-sm-6">
  
    <label style="color:#054a41;" >Datos del Menor</label><br>
    <ul class="list-group" style="color: #000000; font-size: 24px;">
    <p style="font-size: 12px; font-family: Arial, Helvetica;">CURP<input type="text" id="curp_num" placeholder="CURP" title="CURP" oninput="this.className = ''" name="curp_num"
      pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]" onkeyup="mayus(this);" readonly></p>
    <p style="font-size: 12px; font-family: Arial, Helvetica;">Nombre(s) del menor<input type="text" id="nombre_menor_1" placeholder="Nombre(s) del menor" title="Nombre(s) del menor" oninput="this.className = ''" name="nombre_menor_1" readonly></p>
    <p style="font-size: 12px; font-family: Arial, Helvetica;">Apellido paterno<input type="text" id="apellido_paterno_1" placeholder="Apellido paterno" title="Apellido paterno" oninput="this.className = ''" name="apellido_paterno_1" readonly></p>
    <p style="font-size: 12px; font-family: Arial, Helvetica;">Apellido materno<input type="text" id="apellido_materno_1" placeholder="Apellido materno" title="Apellido materno" oninput="this.className = ''" name="apellido_materno_1" readonly></p>


    <h5 for="birthday">Fecha de Nacimiento del menor:</h5>
    <input type="text" id="birthday" name="birthday" readonly>
    <p style="font-size: 12px; font-family: Arial, Helvetica;">Edad del menor al ingresar al plantel (Año o Meses)<input type="text" placeholder="Edad del menor al ingresar al plantel (Año o Meses)" title="Edad del menor al ingresar al plantel (Año o Meses)" oninput="this.className = ''" name="Edad_menor" onkeyup="mayus(this);"></p>

  <h5 for="cars">Directorio de los CACI SAF:</h5>
  <select style="font-size: 15px;" name="caci" id="cars">
    <option value="Luz Maria Gomez Pezuela">Luz María Gómez Pezuela</option>
    <option value="Mtra Eva Moreno Sanchez">Mtra. Eva Moreno Sánchez</option>
    <option value="Bertha Von Glumer Leyva">Bertha von Glumer Leyva</option>
    <option value="Garolina Agazzi">Carolina Agazzi</option>
    <option value="Carmen S">Carmen Serdán</option>
  </select>

    <h5>Acta de nacimiento.</h5>
    <input type="file"  name="filename_act">
    {{--  <h5>Solicitud de ingreso perfectamente llenada y firmada.</h5>
    <input type="file" id="myFile" name="filename_sol">  --}}
    <h5>Cartilla de vacunación al corriente (original y copia).</h5>
    <input type="file" id="myFile" name="filename_vacu">
    <h5>Certificado de nacimiento.</h5>
    <input type="file" id="myFile" name="filename_nac">
    </div>

    <div class="col-sm-6"><br>
    <h5 >Carta compromiso.</h5>
    <input type="file" id="myFile" name="filename_com">
    {{--  <h5 >Copia fotostática del certificado de nacimiento o de la hoja de registro de recién nacido, o Documento que contengan datos de nacimiento del(a) menor tales como peso, talla, APGAR, etc.</h5>
    <input type="file" id="myFile" name="filename_cert">  --}}
    {{--  <h5 >Último recibo de pago impreso del(a) trabajador (a).</h5>
    <input type="file" id="myFile" name="filename_rec">  --}}
    <ul class="list-group" style="color: #000; font-size: 20px; font-weight: 500;">
    <h5>En caso que la o el menor tenga alguna discapacidad o enfermedad crónica, presentar copias de los documentos médicos del tratamiento y/o seguimiento para proporcionarle la atención adecuada.</h5>
    <input type="file" id="myFile" name="filename_disc">
    <h5>En caso de que el trabajador(a) sea el tutor del menor, deberá presentar el documento legal que dictamine la patria potestad o guarda y custodia del mismo.</h5>
    <input type="file" id="myFile" name="filename_trab">
    {{--  <h5>Copia del último recibo de pago de la persona trabajadora o usuaria.</h5>
    <input type="file" id="myFile" name="filename_recp"><br><br>  --}}
    </div>
</div>
</div>
<p style="color: #f5f5f0;">.</p>
</div>
  <div class="tab">
    <br>
 <div class="col-lg-12">
    <div class="row">
    <div class="col-sm-6">
 <label style="color:#054a41; ">Datos de contacto</label>
 <br>
  <p style="font-size: 12px; font-family: Arial, Helvetica;">E-mail<input placeholder="E-mail" title="E-mail" oninput="this.className = ''" name="email_correo" value="{{$value['CH_mail']}}" readonly></p>
  <p style="font-size: 12px; font-family: Arial, Helvetica;">Teléfono<input type="tel" placeholder="Teléfono" title="Teléfono"  oninput="this.className = ''" name="telefono_celular" maxlength="10" pattern="[0-9]{10}"></p>
  <p style="font-size: 12px; font-family: Arial, Helvetica;">Celular<input type="tel" placeholder="Celular" title="Celular"  oninput="this.className = ''" name="telefono_3" maxlength="10" pattern="[0-9]{10}"></p>

  @endforeach
  <br><br>

</div></div></div>
<p style="color: #f5f5f0;">.</p>
  </div>

  <div style="overflow:auto;">
    <div style="float:right;">

      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Regresar</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Continuar</button>
    </div>
	
  </div>
  <div class="bgcontainer"> 
            <div id="st-box" style="background-image: url('./img/dados.png'); background-repeat: no-repeat; background-position: left bottom;"> 
                <br><br><br><br><br><br><br><br><br><br><br><br>
            </div> 
              
            
              
            <div id="rd-box" style="background-image: url('./img/FondoCuna.png'); background-repeat: no-repeat; background-position: right bottom;"> 
                <br><br><br><br><br><br><br><br><br><br><br><br>
            </div> 
        </div> 
  
  <div style="text-align:center;margin-top:40px;">
	<span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
   <span class="step"></span>

  </div>
</form>

</div>
</body>

<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="sweetalert2.all.min.js"></script>

<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
      
  } 

  else {
 document.getElementById("prevBtn").style.display = "inline";
Swal.fire({
  title: '<strong>Importante</u></strong>',
  icon: 'success',
  html:
    '<b>Estos datos son privados solo el padre o tutor son responsable de dichos datos establecidos.</b> ' +
    '<a target="_blank" href="{{asset('img/PDF/Aviso_Integral_CACI_SAF.pdf')}}"><h4 style="color: #00b140;">Ver aviso</h4></a> ',
  showCloseButton: true,
  
//  showCancelButton: true,
})
 
  
  }

  if (n == (x.length - 1)) {


    document.getElementById("nextBtn").innerHTML = "Enviar";


 //swal("Bienvenidos", "Tutor son responsable de dichos datos establecidos", "success");

  } 
  else {
    document.getElementById("nextBtn").innerHTML = "Continuar";
  
  }

  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  console.log("n es esto",n);
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  console.log("esto lleva x y current",x,currentTab);
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();


Swal.fire({
  title: '<strong>Bienvenido2</u></strong>',
  icon: 'success',
  html:
    '<b>La información a sido registrada en el sistema.</b> ' +
    '<a target="_blank" href="{{asset('img/PDF/Aviso_Integral_CACI_SAF.pdf')}}"><h4 style="color: #00b140;">Ver aviso</h4></a> ',
  showCloseButton: true,
//  showCancelButton: true,
})

     // swal("Exito", "Tus documentos fueron enviados.", "success");

    return false;

  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");

  //console.log("x y i",x, y, i)
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
   
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

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

{{--  <script>
  $(document).ready(function() {
    $( "#rfc" ).on('change',function() {
      $("#enlace_ws").get(0).click();
    });
  });
</script>  --}}



@endsection