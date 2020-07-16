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


<body>

<form id="regForm" action="action_page.php">

  <!-- <img src="{{asset('img/Logo_CDMX.png')}}"  alt="Chicago" style="width:30%;">
      <img src="{{asset('img/Logo_Dependencia_n.png')}}"  alt="Chicago" style="width:15%;"> -->
  <h1>Centros de Atención, Cuidado Infantil de la Secretaría de Administración y Finanzas del Gobierno de la Ciudad de México </h1>
  <br><br>
  <!-- One "tab" for each step in the form: -->
  
  <div class="tab">	
	<h4>Datos del Menor</h4>
	<h3>Inscripción</h3> 
    <p><input placeholder="Nombre(s) del menor" oninput="this.className = ''" name="nombre" ></p>
    <p><input placeholder="Apellido paterno" oninput="this.className = ''" name="apellido_paterno"></p>
	<p><input placeholder="Apellido materno" oninput="this.className = ''" name="apellido_materno"></p>
	<p><input placeholder="CURP" oninput="this.className = ''" name="curp"></p>
  </div>
  <div class="tab">
    <br>
 <label for="birthday">Fecha de Nacimiento del menor:</label>
  <input type="date" id="birthday" name="birthday">
  <p><input placeholder="Edad del menor al ingresar al plantel (Año o Meses)" oninput="this.className = ''" name="Edad"></p>
  </div>

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

 <h1>Datos de contacto:</h1>
<!--  <div class="col-75">
     <select id="country" name="country">
     
          <option value="australia">Iztapalapa</option>
          <option value="canada">Tlalpan</option>
          <option value="usa">Álvaro Obregón</option>
          <option value="australia">Iztacalco</option>
          <option value="canada">Coyoacán</option>
          <option value="usa">Xochimilco</option>
          <option value="australia">Tláhuac</option>
          <option value="canada">Benito Juárez</option>
          <option value="usa">Venustiano Carranza</option>
          <option value="australia">Gustavo A. Madero</option>
          <option value="canada">Milpa Alta</option>
          <option value="usa">Azcapotzalco</option>
          <option value="australia">Miguel Hidalgo</option>
          <option value="canada">Cuauhtémoc</option>
          <option value="usa">ÁCuajimalpa de Morelos</option>
        </select>

  </div> -->
    <p><input placeholder="E-mail" oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Teléfono o celular" oninput="this.className = ''" name="telefono"></p>
	<p><input placeholder="Teléfono 2" oninput="this.className = ''" name="telefono_2"></p>

     <!-- <label for="appt"> <p>Horario</p></label>
  <input type="time" id="appt" name="appt"> -->

  <br><br>
  </div>

  <!-- <div class="tab">Nacimiento:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="mm"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
  </div> -->



  <div style="overflow:auto;">
    <div style="float:right;">
 
<!-- <h4>Reinscripción</h4> -->

      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Regresar</button>
   
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Continuar</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:400px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</body>

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
  } else {
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


@endsection






 
