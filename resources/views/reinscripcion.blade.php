@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<style>
  #regForm {
    background-color: #f5f5f0;
    margin: 100px auto;
    font-family: Arial, Helvetica, sans-serif;
    padding: 40px;
    width: 70%;
    min-width: 300px;
  }

  h1 {
    text-align: center;
  }

  input {
    padding: 10px;
    width: 100%;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    border: 1px solid #00b140;
  }

  input.invalid {
    background-color: #ffdddd;
  }

  .tab {
    display: none;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 30px;
    color: #000000;

  }

  button {
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
</style>
<style>
  a {
    text-decoration: none;
  }

  .alert {
    background: #eee;
    padding: 40px;
    position: relative;
    font-weight: 600;
  }

  .close_btn {
    color: #000;
    padding: 15px 0px 5px 10px;
    display: block;
    position: absolute;
    top: 40px;
    right: 40px;
  }

  .content {
    padding: 40px;
  }
</style>


<div class="alert">
  <h1 style="color: #00b140; text-align: center;" class="modal-title">Proceso de Reinscripcion</h1>
  <a href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>
  <div class="modal-content">
    <div class="modal-body">
      

     

      <h3>Requisitos  para realizar trámite de reinscripción en los Centros de Atención y Cuidado Infantil, CACI-SAF.</h3>



       <p> Solicitud de inscripción – reinscripción. *</p>

      <h4> Acta de nacimiento de la niña o niño en original y copia, en el caso de que la reinscripción sea para preescolar 1º, los documentos  permanecerán en el CACI-SAF hasta su egreso. +</h4>

      <p> Copia de la cartilla de vacunación .*</p>
      <p> Constancia de labores. +</p>
      <p> Copia del último recibo de pago de la persona trabajadora o usuaria. *</p>
      <p> Análisis clínicos completos. +</p>

      <p>- Biometría Hemática</p>
      <p>- Exudado Faríngeo</p>
      <p>- General de Orina</p>
      <p>- Coproparasitoscópico en serie de tres</p>

      <p> Seis fotografías tamaño infantil de la niña o niño. +</p>

      <p> Cuatro fotografías tamaño infantil de la persona trabajadora o usuaria del servicio. +</p>

      <p> Cuatro fotografías de cada una de las personas autorizadas. +</p>

      <p> Carta compromiso. *</p>
 
      <p> Tarjeta de identificación de la niña o niño. */+</p>

      <p>  Gafete de la niña o niño. +</p>
      <p>  Credencial. +</p> 

      <P>Documentos  para enviar electrónicamente *</P>
      <P>Documentos para entrega física +</P>


    </div>
    <div style="background-color: #00b140;" class="modal-footer">

    </div>
  </div>
</div>

<body>


  <h1>Centros de Atención, Cuidado Infantil de la Secretaría de Administración y Finanzas del Gobierno de la Ciudad de
    México </h1>
  <br><br>
  <div class="tab">
    <form id="regForm" action="{{route('guardar_reinscripcion_bd')}}" method="POST" enctype="multipart/form-data">
      @csrf
      @foreach ($data as $item=>$value)
          
          <h4>Datos del trabajador</h4>
          <h2>RFC</h2>
          <p><input id="rfc" placeholder="RFC" oninput="this.className = ''" name="rfc"></p>
          <h3>Nombre del Padre/Madre o Tutor:</h3>
          <p><input placeholder="Nombre del Padre/Madre o Tutor" oninput="this.className = ''" name="nombre_tutor" value="{{$value['CH_nombres']}}"></p>
          <p><input placeholder="Apellido paterno" oninput="this.className = ''" name="ap_paterno_t" value="{{$value['CH_paterno']}}"></p>
          <p><input placeholder="Apellido materno" oninput="this.className = ''" name="ap_materno_t" value="{{$value['CH_materno']}}"></p>
          <p><input placeholder="Domicilio" oninput="this.className = ''" name="domicilio"></p>
          <p><input placeholder="Tipo de nómina" oninput="this.className = ''" name="tipo_nomina" value="{{$value['TipoNomina']}}"></p>
          <p><input placeholder="Número de empleado" oninput="this.className = ''" name="num_empleado" value="{{$value['NumEmpleado']}}"></p>
          <p><input placeholder="Número de plaza" oninput="this.className = ''" name="num_plaza" value="{{$value['NUM_PLAZA']}}"></p>
          <p><input placeholder="Clave de la dependencia" oninput="this.className = ''" name="clave_dependencia" value="{{$value['Clave_Dependencia']}}"></p>
          <p><input placeholder="Nivel salarial" oninput="this.className = ''" name="nivel_salarial" value="{{$value['NIVEL_SALARIAL']}}"></p>
          <p><input placeholder="Sección sindical" oninput="this.className = ''" name="seccion_sindical" value="{{$value['SECCION_SINDICAL']}}"></p>
          <label for="appt">
            <p>Horario laboral</p>
          </label>
          <input type="time" id="appt" name="horario_laboral_ent">
          <input type="time" id="appt" name="horario_laboral_sal">
      
          <h1>Datos de contacto:</h1>

      <p><input placeholder="E-mail" oninput="this.className = ''" name="email" value="{{$value['CH_mail']}}"></p>
      <p><input placeholder="Teléfono o celular" oninput="this.className = ''" name="telefono_uno"></p>
      <p><input placeholder="Teléfono 2" oninput="this.className = ''" name="telefono_dos"></p>
      <br><br>
  </div>



  <div class="tab">
    <h4>Datos del Menor</h4>
    <h3>Reinscripción</h3>
    <p><input placeholder="Matricula" oninput="this.className = ''" name="matricula"></p>
    <p><input placeholder="Nombre(s) del menor" oninput="this.className = ''" name="nombre_menor"></p>
    <p><input placeholder="Apellido paterno" oninput="this.className = ''" name="ap_paterno"></p>
    <p><input placeholder="Apellido materno" oninput="this.className = ''" name="ap_materno"></p>

    <label for="birthday">Fecha de Nacimiento del menor:</label>
    <input type="date" id="birthday" name="fecha_nacimiento">
    <p><input placeholder="Edad del menor al ingresar al plantel (Año o Meses)" oninput="this.className = ''"
        name="edad_menor_ingreso"></p>
    <p><input placeholder="CURP" oninput="this.className = ''" name="curp"></p>


    <label for="cars">Directorio de los CACI SAF:</label>
    <select name="caci" id="cars">
      <option value="Luz Maria Gomez Pezuela">Luz Maria Gomez Pezuela</option>
      <option value="Mtra Eva Moreno Sanchez">Mtra Eva Moreno Sanchez</option>
      <option value="Bertha Von Glumer Leyva">Bertha Von Glumer Leyva</option>
      <option value="Garolina Agazzi">Garolina Agazzi</option>
      <option value="Carmen S">Carmen S</option>
    </select>
    <br>

    <p><input placeholder="CURP" oninput="this.className = ''" name="curp_caci"></p>

    <h4 style="color: #00b140;">Acta de nacimiento </h4>
    <input type="file" id="myFile" name="filename_act">
    <h4 style="color: #00b140;">Solicitud de ingreso perfectamente llenada y firmada.</h4>
    <input type="file" id="myFile" name="filename_sol">
    <h4 style="color: #00b140;">Cartilla de vacunacion al corriente (original y copia)</h4>
    <input type="file" id="myFile" name="filename_vacu">
    <h4 style="color: #00b140;">Certificado de nacimiento</h4>
    <input type="file" id="myFile" name="filename_nac">

    <h4 style="color: #00b140;">Cartilla de vacunacion al corriente (original y copia)</h4>
    <input type="file" id="myFile" name="filename_vacu_2">


    <h4 style="color: #00b140;">Copia fotostática del certificado de nacimiento o de la hoja de registro de recién
      nacido, o Documento que contengan datos de nacimiento del(a) menor tales como peso, talla, APGAR, etc. </h4>
    <input type="file" id="myFile" name="filename_cert">
    <h4 style="color: #00b140;">Último recibo de pago impreso del(a) trabajador (a)</h4>
    <input type="file" id="myFile" name="filename_rec">
    <h4 style="color: #00b140;">En caso que la o el menor tenga alguna discapacidad o enfermedad crónica, presentar
      copias de los documentos médicos del tratamiento y/o seguimiento para proporcionarle la atención adecuada.</h4>
    <input type="file" id="myFile" name="filename_disc">
    <h4 style="color: #00b140;">En caso de que el trabajador(a) sea el tutor del menor, deberá presentar el documento
      legal que dictamine la patria potestad o guarda y custodia del mismo.</h4>
    <input type="file" id="myFile" name="filename_trab">


    <h4 style="color: #00b140;">Carta compromiso.</h4>
    <input type="file" id="myFile" name="filename_com">
    <h4 style="color: #00b140;">Copia del último recibo de pago de la persona trabajadora o usuaria.</h4>
    <input type="file" id="myFile" name="filename_recp">
    @endforeach
    <br>
  </div>
  {{--  <!--
  <div class="tab">
	<h4>Datos del trabajador</h4>
	<h3>Nombre del Padre/Madre o Tutor:</h3>
  <p><input placeholder="Nombre del Padre/Madre o Tutor" oninput="this.className = ''" name="nombre_tutor" ></p>
  <p><input placeholder="Apellido paterno" oninput="this.className = ''" name="ap_paterno_t"></p>
	<p><input placeholder="Apellido materno" oninput="this.className = ''" name="ap_materno_t"></p>
  <p><input placeholder="Domicilio" oninput="this.className = ''" name="domicilio"></p>
	<p><input placeholder="Tipo de nómina" oninput="this.className = ''" name="tipo_nomina"></p>
	<p><input placeholder="Número de empleado" oninput="this.className = ''" name="num_empleado"></p>
	<p><input placeholder="Número de plaza" oninput="this.className = ''" name="num_plaza"></p>
	<p><input placeholder="Clave de la dependencia" oninput="this.className = ''" name="clave_dependencia"></p>
	<p><input placeholder="Nivel salarial" oninput="this.className = ''" name="nivel_salarial"></p>
	<p><input placeholder="Sección sindical" oninput="this.className = ''" name="seccion_sindical"></p>
	<label for="appt"> <p>Horario laboral</p></label>
  <input type="time" id="appt" name="horario_laboral_ent">
  <input type="time" id="appt" name="horario_laboral_sal">
 <h1>Datos de contacto:</h1>

    <p><input placeholder="E-mail" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Teléfono o celular" oninput="this.className = ''" name="telefono_uno"></p>
	<p><input placeholder="Teléfono 2" oninput="this.className = ''" name="telefono_dos"></p>
  <br><br>
  </div>-->  --}}

  <div style="overflow:auto;">
    <div style="float:right;">


      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Regresar</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Continuar</button>

    </div>
  </div>


  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>

  </div>
  </form>


</body>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



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
      
  } else {
    document.getElementById("prevBtn").style.display = "inline";
      
  }
  if (n == (x.length - 1)) {


    document.getElementById("nextBtn").innerHTML = "Enviar";
   swal("Bienvenidos", "Esta datos son privados solo el padre o tutor son responsable de dichos datos establecidos", "success");

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
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();

      swal("Exito", "Tus datos han sido enviados con exito", "success");

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