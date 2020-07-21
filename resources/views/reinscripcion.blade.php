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
 <h1 style="color: #00b140; text-align: center;" class="modal-title">Proceso de Inscripción</h1>
    <a href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>
     <div class="modal-content">
        <div class="modal-body">
        <h3 style="color: #000000; text-align: center;">Para pode iniciar el proceso de inscripción debes cumplir con los siguientes requisitos:</h3><br>

                <p>*Madres, padres o quien ejerza la patria potestad, o guarda y custodia del menor, que sean trabajadoras (es) del Gobierno de la Ciudad de México basificadas (os) y sindicalizadas (os) que coticen al SUTGCDMX.</p>

                <P>*Así mismo, el personal de estructura, nomina 8, base sin digito sindical, del ámbito Central de los Órganos político Administrativos del Gobierno de la Ciudad de México podrán gozar de los beneficios que ofrecen los CACI-SAF, Lo anterior, considerando solo hasta un 30% de su capacidad instalada, como se establece en los "Lineamientos Generales para la Operación de los Centros de Atención y Cuidado Infantil de la Secretaria de Administración y Finanzas del Gobierno de la Cuidad de México y sus 16 Alcaldías.</P>

                <h4>Contar con los siguientes documentos digitalizados:</h4>

                <p>-Solicitud de ingreso perfectamente llenada y firmada.</p> 
                <p>-Acta de nacimiento del (a) menor (original y copia ambos lados).</p>

                <p>En caso de que el ingreso sea para nivel preescolar el acta de nacimiento original permanecerá en el Centro hasta el egreso de la o el menor.</p>

				<p>Copia fotostática del certificado de nacimiento o de la hoja de registro de recién nacido, o Documento que contengan datos de nacimiento del (a) menor tales como peso, talla, APGAR, etc.</p>

                <p>Cartilla de vacunación al corriente (original y copia).</p>

                <p>Copia fotostática de la Clave Única de Registro de Población, CURP del (la) menor</p>

                <p>Constancia de labores actualizada, (con una antigüedad no mayor de 30 días al momento del trámite) expedida por Recursos Humanos de la Unidad Administrativa en la que labora la persona tutora indicando Dependencia, Oficina de adscripción a la que pertenece, horario, días laborales, fecha de ingreso y periodos vacacionales, sellada y firmada.
                </p>

                <p>Ultimo recibo de pago impreso del (a) trabajador (a)*</p>


                <p>Análisis clínicos completos.</p>

                <p>-Biometría Hemática</p>
                <p>-Exudado Faríngeo</p>
                <p>-General de Orina</p>
                <p>-Coproparasitoscópico en serie de tres</p>

                <p>Seis fotografías tamaño infantil del (a) menor (recientes y de la misma toma).</p>

			     <p>Cuatro fotografías tamaño infantil del (a) trabajador (a) solicitante del servicio (recientes y de la misma toma).</p>



			     <p>Cuatro fotografías tamaño infantil de las dos personas autorizadas (mayores de 18 años) por el (a) solicitante del servicio para recoger al (a) menor.</p>



                <p>Las fotografías deberán de ser recientes y de la misma toma.</p>

                <p>En caso que las o el menor tenga alguna discapacidad o enfermedad crónica, presentar copias de los documentos médicos del tratamiento y/o seguimiento para proporcionarle la atención adecuada. </p>
                
                <p>CHECK SOLAMENTE Y EN LA VISITA FISITA LLEVAR DOCUMENTAL Y EL ADMINISTRATIVO LLENARA LA INFORMACIÓN</p>

                <p>En caso de que el trabajador (a) sea el tutor del menor, deberá presentar el documento legal que dictamine la patria potestad o guarda y custodia del mismo.</p>

                <h5>NOTA IMPORTANTE:</h5>

                <P>Documentos para enviar electrónicamente</P>
                <P>Documentos para entrega física</P>



<p>Si cuentas con todos los documentos requeridos para enviar electronicamente, de clic en continuar</p>


        </div>
        <div style="background-color: #00b140;" class="modal-footer">
         
        </div>
      </div>
</div> 

<body>

<form id="regForm" action="action_page.php">
<h1>Centros de Atención, Cuidado Infantil de la Secretaría de Administración y Finanzas del Gobierno de la Ciudad de México </h1>
  <br><br>




  <div class="tab">
  <h4>Datos del trabajador</h4>
  <h2>RFC</h2>

    <p><input placeholder="RFC" oninput="this.className = ''" name="rfc"></p>
  <h3>Nombre del Padre/Madre o Tutor:</h3>
  <p><input placeholder="Nombre del Padre/Madre o Tutor" oninput="this.className = ''" name="nombre" ></p>
  <p><input placeholder="Apellido paterno" oninput="this.className = ''" name="apellidos_paterno"></p>
  <p><input placeholder="Apellido materno" oninput="this.className = ''" name="apellidos_materno"></p>
  <p><input placeholder="Domicilio" oninput="this.className = ''" name="domicilio"></p>
  <p><input placeholder="Tipo de nómina" oninput="this.className = ''" name="tp_nomina"></p>
  <p><input placeholder="Número de empleado" oninput="this.className = ''" name="n_empleado"></p>
  <p><input placeholder="Número de plaza" oninput="this.className = ''" name="n_plaza"></p>
  <p><input placeholder="Clave de la dependencia" oninput="this.className = ''" name="n_plaza"></p>
  <p><input placeholder="Nivel salarial" oninput="this.className = ''" name="n_plaza"></p>
  <p><input placeholder="Sección sindical" oninput="this.className = ''" name="n_plaza"></p>
  <label for="appt"> <p>Horario laboral</p></label>
  <input type="time" id="appt" name="appt">
  <input type="time" id="appt" name="appt">
 <h1>Datos de contacto:</h1>

    <p><input placeholder="E-mail" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Teléfono o celular" oninput="this.className = ''" name="telefono"></p>
  <p><input placeholder="Teléfono 2" oninput="this.className = ''" name="telefono_2"></p>
  <br><br>
  </div>


  
  <div class="tab">	
	<h4>Datos del Menor</h4>
	<h3>Reinscripción</h3> 
   <p><input placeholder="Matricula" oninput="this.className = ''" name="matricula" ></p>
    <p><input placeholder="Nombre(s) del menor" oninput="this.className = ''" name="nombre" ></p>
    <p><input placeholder="Apellido paterno" oninput="this.className = ''" name="apellido_paterno"></p>
	<p><input placeholder="Apellido materno" oninput="this.className = ''" name="apellido_materno"></p>

  <label for="birthday">Fecha de Nacimiento del menor:</label>
  <input type="date" id="birthday" name="birthday">
  <p><input placeholder="Edad del menor al ingresar al plantel (Año o Meses)" oninput="this.className = ''" name="Edad"></p>
	<p><input placeholder="CURP" oninput="this.className = ''" name="curp"></p>
  

   <label for="cars">Directorio de los CACI SAF:</label>
  <select name="cars" id="cars">
    <option value="Luz Maria Gomez Pezuela">Luz Maria Gomez Pezuela</option>
    <option value="Mtra Eva Moreno Sanchez">Mtra Eva Moreno Sanchez</option>
    <option value="Bertha Von Glumer Leyva">Bertha Von Glumer Leyva</option>
    <option value="Garolina Agazzi">Garolina Agazzi</option>
      <option value="Carmen S">Carmen S</option>
  </select>
    <br>





    <h4 style="color: #00b140;">Acta de nacimiento </h4>
    <input type="file" id="myFile" name="filename">
    <h4 style="color: #00b140;">Solicitud de ingreso perfectamente llenada y firmada.</h4>
    <input type="file" id="myFile" name="filename">
    <h4 style="color: #00b140;">Cartilla de vacunacion al corriente (original y copia)</h4>
    <input type="file" id="myFile" name="filename">
    <h4 style="color: #00b140;">Certificado de nacimiento</h4>
    <input type="file" id="myFile" name="filename">



    <h4 style="color: #00b140;">Copia fotostática del certificado de nacimiento o de la hoja de registro de recién nacido, o         Documento que contengan datos de nacimiento del(a) menor tales como peso, talla, APGAR, etc. </h4>
    <input type="file" id="myFile" name="filename">
    <h4 style="color: #00b140;">Último recibo de pago impreso del(a) trabajador (a)</h4>
    <input type="file" id="myFile" name="filename">
    <h4 style="color: #00b140;">En caso que la o el menor tenga alguna discapacidad o enfermedad crónica, presentar copias de los documentos médicos del tratamiento y/o seguimiento para proporcionarle la atención adecuada.</h4>
    <input type="file" id="myFile" name="filename">
    <h4 style="color: #00b140;">En caso de que el trabajador(a) sea el tutor del menor, deberá presentar el documento legal que dictamine la patria potestad o guarda y custodia del mismo.</h4>
    <input type="file" id="myFile" name="filename">


    <h4 style="color: #00b140;">Carta compromiso.</h4>
    <input type="file" id="myFile" name="filename">
    <h4 style="color: #00b140;">Copia del último recibo de pago de la persona trabajadora o usuaria.</h4>
    <input type="file" id="myFile" name="filename">

    <BR>
  </div>
<!--
  <div class="tab">
	<h4>Datos del trabajador</h4>
	<h3>Nombre del Padre/Madre o Tutor:</h3>
  <p><input placeholder="Nombre del Padre/Madre o Tutor" oninput="this.className = ''" name="nombre" ></p>
  <p><input placeholder="Apellido paterno" oninput="this.className = ''" name="apellidos_paterno"></p>
	<p><input placeholder="Apellido materno" oninput="this.className = ''" name="apellidos_materno"></p>
  <p><input placeholder="Domicilio" oninput="this.className = ''" name="domicilio"></p>
	<p><input placeholder="Tipo de nómina" oninput="this.className = ''" name="tp_nomina"></p>
	<p><input placeholder="Número de empleado" oninput="this.className = ''" name="n_empleado"></p>
	<p><input placeholder="Número de plaza" oninput="this.className = ''" name="n_plaza"></p>
	<p><input placeholder="Clave de la dependencia" oninput="this.className = ''" name="n_plaza"></p>
	<p><input placeholder="Nivel salarial" oninput="this.className = ''" name="n_plaza"></p>
	<p><input placeholder="Sección sindical" oninput="this.className = ''" name="n_plaza"></p>
	<label for="appt"> <p>Horario laboral</p></label>
  <input type="time" id="appt" name="appt">
  <input type="time" id="appt" name="appt">
 <h1>Datos de contacto:</h1>

    <p><input placeholder="E-mail" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Teléfono o celular" oninput="this.className = ''" name="telefono"></p>
	<p><input placeholder="Teléfono 2" oninput="this.className = ''" name="telefono_2"></p>
  <br><br>
  </div>-->

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













@endsection






 
