@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
  <script src="{{URL::asset('js/consulta_webservice.js')}}" type="text/javascript"> </script> 
@endsection 
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
    padding: 0px;
    width: 100%;
    font-size: 13px;
    font-family: Arial, Helvetica, sans-serif;
    border: 1px solid #00b140;
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



body {
  margin: 0;
  padding: 0;
  font-family: 'Open Sans';
  font-weight: 400;
  line-height: 1.7em;
}

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
<h1 style="color:  #054a41; text-align: center;"  class="modal-title">Calendario de reinscripción</h1>
<a href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>
<div class="modal-content">
  <div class="modal-body">
   <div class="modal-body">
    <div style="background-color: #054a41;" class="col-lg-12" >
      <div class="row">
        <div class="col-sm-4" style="padding-left: 0px; padding-right: 0px;"><br>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Lunes</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Martes</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Miércoles</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Jueves</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Viernes</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Lunes</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Martes</h4>
        </div>

      <div class="col-sm-4" style="padding-left: 0px; padding-right: 0px;"><br>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">3/08/2020</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">4/08/2020</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">5/08/2020</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">6/08/2020</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">7/08/2020</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">10/08/2020</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">11/08/2020</h4>
      </div>

      <div class="col-sm-4" style="padding-left: 0px; padding-right: 0px;"><br>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Lactantes 1</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Lactantes 2</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Lactantes 3</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Maternal 1</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Maternal 2</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Preescolar 1</h4>
          <h4 style="color: #FFF; text-align: center;" id="letra_banner">Preescolar 2</h4>
      </div>
    </div>
  </div>
</div>
      <div class="col-lg-12" style="margin-top: 2%;">
            <div class="row">
                <div class="col-sm-6">
                <h2 style="color: #054a41;" id="title_list_ip">REQUISITOS:</h2>
                <ul class="list-group" style="color: #000000; font-size: 20px; font-weight: 500;">
                </i>1. Llenar el formulario en el siguiente enlace:</li><br><br>
                </i>2. Cargar la siguiente documentación en versión digital (PDF):</li><br>
                <h5>a) Acta de nacimiento original por ambos lados, del o la menor.</h5>
                <h5>b) Certicado de nacimiento del o la menor.</h5>
                <h5>c) Cartilla de vacunación al corriente.</h5>
                <h5>d) Clave Única de Registro de Población, (CURP) del o la menor.</h5>
                <h5>e) Si el menor presenta algún tipo de discapacidad o enfermedad crónica, adjuntar documentación clínica y diagnóstico de la condición y del tratamiento que recibe.</h5>
                <h5>f) En caso de que el o la trabajador(a) sea la persona tutora, deberá adjuntar el documento legal que dictamine la patria potestad o guarda y custodia.</h5>
            </div>
            <div class="col-sm-6"><br>
                <ul class="list-group" style="color: #000000; font-size: 20px; font-weight: 500;"><br><br>
                </i>3. Entregar en original la siguiente documentación:</li><br><br>
                <h5>a) Acta de nacimiento del o la menor, excepto quienes ingresan a preescolar 2 y 3.</h5>
                <h5>b) Cartilla de vacunación del o la menor.</h5>
                <h5>c) Análisis clínicos. Debido a la contingencia sanitaria deberán entregarse durante los primeros tres meses, a partir del primer día de servicio.</h5>
                <h5>d) Seis fotografías tamaño infantil recientes e iguales, del o la menor.</h5>
                <h5>e) Cuatro fotografías tamaño infantil, recientes e iguales del o la trabajador(a).</h5>
                <h5>f) Cuatro fotografías tamaño infantil, recientes e iguales, de dos personas mayores de edad autorizadas por el (la) solicitante del servicio para recoger a la o el menor.</h5>
               </div>
            </div>
        </div>  
    </div>
    <div style="background-color: #FFF;" class="modal-footer">
    </div>
  </div>
</div>

<body>
 
    <form id="regForm" action="{{route('guardar_reinscripcion_bd')}}" method="POST" enctype="multipart/form-data">

       <h1 style="color: #054a41;">Centros de Atención y Cuidado Infantil</h1>
         <div class="tab">
      @csrf
      @foreach ($data as $item=>$value)
         
          {{--  <h2>RFC</h2>
          <p><input id="rfc" placeholder="RFC" oninput="this.className = ''" name="rfc"></p>  --}}
<<<<<<< HEAD
         



 <div class="col-lg-12">

    <div class="row">
      


    <div class="col-sm-6">
      <br><br>
    <label style="color: #054a41;">Datos del trabajador</label>
       <br><br>    <br>

          <ul class="list-group" style="color: #000000; font-size: 20px; font-weight: 500;">
   
          <p><input placeholder="Nombre del Padre/Madre o Tutor" oninput="this.className = ''" name="nombre_tutor" value="{{$value['CH_nombres']}}"></p>
          <p><input placeholder="Apellido paterno" oninput="this.className = ''" name="ap_paterno_t" value="{{$value['CH_paterno']}}"></p>
          <p><input placeholder="Apellido materno" oninput="this.className = ''" name="ap_materno_t" value="{{$value['CH_materno']}}"></p>
          <p><input placeholder="Domicilio particular" oninput="this.className = ''" name="domicilio"></p>
          <p><input placeholder="Tipo de nómina" oninput="this.className = ''" name="tipo_nomina" value="{{$value['TipoNomina']}}"></p>
          <p><input placeholder="Número de empleado" oninput="this.className = ''" name="num_empleado" value="{{$value['NumEmpleado']}}"></p>
          <p><input placeholder="Número de plaza" oninput="this.className = ''" name="num_plaza" value="{{$value['NUM_PLAZA']}}"></p>
          <p><input placeholder="Clave de la dependencia" oninput="this.className = ''" name="clave_dependencia" value="{{$value['Clave_Dependencia']}}"></p>
          <p><input placeholder="Nivel salarial" oninput="this.className = ''" name="nivel_salarial" value="{{$value['NIVEL_SALARIAL']}}"></p>
          <p><input placeholder="Sección sindical" oninput="this.className = ''" name="seccion_sindical" value="{{$value['SECCION_SINDICAL']}}"></p>
          


    </div>



    <div class="col-sm-6"><br>
    <ul class="list-group" style="color: #000000; font-size: 20px; font-weight: 500;"><br>
 <br><br><br>

          <label for="appt"><p>Horario laboral</p></label>
=======
          <h3>Nombre del Padre/Madre o Tutor:</h3>
          <p><input type="text" placeholder="Nombre del Padre/Madre o Tutor" oninput="this.className = ''" name="nombre_tutor" value="{{$value['CH_nombres']}}"></p>
          <p><input type="text" placeholder="Apellido paterno" oninput="this.className = ''" name="ap_paterno_t" value="{{$value['CH_paterno']}}"></p>
          <p><input type="text" placeholder="Apellido materno" oninput="this.className = ''" name="ap_materno_t" value="{{$value['CH_materno']}}"></p>
          <p><input type="text" placeholder="Domicilio" oninput="this.className = ''" name="domicilio"></p>
          <p><input type="number" placeholder="Tipo de nómina" oninput="this.className = ''" name="tipo_nomina" value="{{$value['TipoNomina']}}"></p>
          <p><input type="number" placeholder="Número de empleado" oninput="this.className = ''" name="num_empleado" value="{{$value['NumEmpleado']}}"></p>
          <p><input type="number" placeholder="Número de plaza" oninput="this.className = ''" name="num_plaza" value="{{$value['NUM_PLAZA']}}"></p>
          <p><input type="number" placeholder="Clave de la dependencia" oninput="this.className = ''" name="clave_dependencia" value="{{$value['Clave_Dependencia']}}"></p>
          <p><input type="number" placeholder="Nivel salarial" oninput="this.className = ''" name="nivel_salarial" value="{{$value['NIVEL_SALARIAL']}}"></p>
          <p><input type="number" step="0.01" min="0" max="10" placeholder="Sección sindical" oninput="this.className = ''" name="seccion_sindical" value="{{$value['SECCION_SINDICAL']}}"></p>
          <label for="appt">
            <p>Horario laboral</p>
          </label>
>>>>>>> f30f738b7b6516121932392fe326dd15eb1dd808
          <input type="time" id="appt" name="horario_laboral_ent">
          <input type="time" id="appt" name="horario_laboral_sal">
          <br><br>
          <label for="appt"><p>Datos de contacto:</p></label>
         
          <p><input placeholder="E-mail" oninput="this.className = ''" name="email" value="{{$value['CH_mail']}}"></p>
          <p><input placeholder="Teléfono o celular" oninput="this.className = ''" name="telefono_uno"></p>
          <p><input placeholder="Teléfono 2" oninput="this.className = ''" name="telefono_dos"></p>
          <br><br>

    </div>
</div>
</div>
<p style="color: #f5f5f0;">.</p>
</div>

<<<<<<< HEAD
=======
      <p><input type="email" placeholder="E-mail" oninput="this.className = ''" name="email" value="{{$value['CH_mail']}}"></p>
      <p><input type="tel" placeholder="Teléfono o celular" oninput="this.className = ''" name="telefono_uno" pattern="[0-9]{10}" required></p>
      <p><input type="tel" placeholder="Teléfono 2" oninput="this.className = ''" name="telefono_dos" pattern="[0-9]{10}"></p>
      <br><br>
  </div>
>>>>>>> f30f738b7b6516121932392fe326dd15eb1dd808

  <div class="tab">
    <br>
    <label for="curp">CURP:</label>
    <p><input id="curp" type="text" placeholder="CURP" oninput="this.className = ''" name="curp"></p>
    <button id="valida_curp" type="button" onclick="validaCurp()" pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]">Validar CURP</button> 
  </div>


  <div class="tab">
<<<<<<< HEAD
     
  
 <div class="col-lg-12">
        <div class="row">
 

    <div class="col-sm-6">
    <br><br>

        <label style="color:#054a41;" >Datos del Menor</label>
        <br><br>
       
    <ul class="list-group" style="color: #000000; font-size: 20px; font-weight: 5500;">
      
    <p><input placeholder="CURP" oninput="this.className = ''" name="curp_caci"></p>
    <p><input placeholder="Matricula" oninput="this.className = ''" name="matricula"></p>
    <p><input placeholder="Nombre(s) del menor" oninput="this.className = ''" name="nombre_menor"></p>
    <p><input placeholder="Apellido paterno" oninput="this.className = ''" name="ap_paterno"></p>
    <p><input placeholder="Apellido materno" oninput="this.className = ''" name="ap_materno"></p>
    <label for="birthday">Fecha de Nacimiento del menor:</label>
    <input type="date" id="birthday" name="fecha_nacimiento">
    <p><input placeholder="Edad del menor al ingresar al plantel (Año o Meses)" oninput="this.className = ''"name="edad_menor_ingreso"></p>
  <h4 for="cars">Directorio de los CACI SAF:</h4>
  <select style="font-size: 15px;" name="caci" id="cars">
    <option value="Luz Maria Gomez Pezuela">Luz María Gómez Pezuela</option>
    <option value="Mtra Eva Moreno Sanchez">Mtra. Eva Moreno Sánchez</option>
    <option value="Bertha Von Glumer Leyva">Bertha von Glumer Leyva</option>
    <option value="Garolina Agazzi">Carolina Agazzi</option>
    <option value="Carmen S">Carmen Serdán</option>
  </select>
    <br><br>
    <h5 style="color: #00;">Acta de nacimiento.</h5>
=======
    <h4>Datos del Menor</h4>
    <h3>Reinscripción</h3>
    <p><input type="text" placeholder="Matricula" oninput="this.className = ''" name="matricula"></p>
    <p><input type="text" id="nombre_menor_1" placeholder="Nombre(s) del menor" oninput="this.className = ''" name="nombre_menor"></p>
    <p><input type="text" id="apellido_paterno_1" placeholder="Apellido paterno" oninput="this.className = ''" name="ap_paterno"></p>
    <p><input type="text" id="apellido_materno_1" placeholder="Apellido materno" oninput="this.className = ''" name="ap_materno"></p>

    <label for="birthday">Fecha de Nacimiento del menor:</label>
    <input type="date" id="birthday" name="fecha_nacimiento">
    <p><input type="text" placeholder="Edad del menor al ingresar al plantel (Año o Meses)" oninput="this.className = ''"
        name="edad_menor_ingreso"></p>
    <p><input type="text" id="curp_num" pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]" 
      placeholder="CURP" oninput="this.className = ''" name="curp"></p>


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
>>>>>>> f30f738b7b6516121932392fe326dd15eb1dd808
    <input type="file" id="myFile" name="filename_act">
    <h5 style="color: #000;">Solicitud de ingreso perfectamente llenada y firmada.</h5>
    <input type="file" id="myFile" name="filename_sol">
    <h5 style="color: #000;">Cartilla de vacunacion al corriente (original y copia).</h5>
    <input type="file" id="myFile" name="filename_vacu">
    <h5 style="color: #000;">Certificado de nacimiento.</h5>
    <input type="file" id="myFile" name="filename_nac">
    </div>



    <div class="col-sm-6">
    <ul class="list-group" style="color: #000000; font-size: 20px; font-weight: 500;"><br><br><br><br>

    <h5 style="color: #000;">Copia fotostática del certificado de nacimiento o de la hoja de registro de recién nacido, o Documento que contengan datos de nacimiento del(a) menor tales como peso, talla, APGAR, etc.</h5>
    <input type="file" id="myFile" name="filename_cert">
    <h5 style="color: #000;">Último recibo de pago impreso del(a) trabajador (a).</h5>
    <input type="file" id="myFile" name="filename_rec">
    <h5 style="color: #000;">En caso que la o el menor tenga alguna discapacidad o enfermedad crónica, presentar copias de los documentos médicos del tratamiento y/o seguimiento para proporcionarle la atención adecuada.</h5>
    <input type="file" id="myFile" name="filename_disc">
    <h5 style="color: #000;">En caso de que el trabajador(a) sea el tutor del menor, deberá presentar el documento
      legal que dictamine la patria potestad o guarda y custodia del mismo.</h5>
    <input type="file" id="myFile" name="filename_trab">
    <h5 style="color: #000;">Carta compromiso.</h5>
    <input type="file" id="myFile" name="filename_com">
    <h5 style="color: #000;">Copia del último recibo de pago de la persona trabajadora o usuaria.</h5>
    <input type="file" id="myFile" name="filename_recp">
    @endforeach
    


    </div>

    </div>
 </div>
    <p style="color: #f5f5f0;">.</p>
  </div>



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
      
  } else {
    document.getElementById("prevBtn").style.display = "inline";
Swal.fire({
  title: '<strong>Bienvenido</u></strong>',
  icon: 'success',
  html:
    '<b>Estos datos son privados solo el padre o tutor son responsable de dichos datos establecidos.</b> ' +
    '<a target="_blank" href="{{asset('img/PDF/Aviso_Integral_CACI_SAF.pdf')}}"><h3 style="color: #00b140;">Ver aviso</h3></a> ',
  showCloseButton: true,
//  showCancelButton: true,
})



      
  }
  if (n == (x.length - 1)) {


    document.getElementById("nextBtn").innerHTML = "Enviar";


  // swal("Bienvenidos", "Esta datos son privados solo el padre o tutor son responsable de dichos datos establecidos", "success" , { buttons: ["Ver Aviso", true],  
 //});


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

      Swal.fire({
  title: '<strong>Bienvenido</u></strong>',
  icon: 'success',
  html:
    '<b>La información a sido registrada en el sistema.</b> ' +
    '<a target="_blank" href="{{asset('img/PDF/Aviso_Integral_CACI_SAF.pdf')}}"><h3 style="color: #00b140;">Ver aviso</h3></a> ',
  showCloseButton: true,
//  showCancelButton: true,
})

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