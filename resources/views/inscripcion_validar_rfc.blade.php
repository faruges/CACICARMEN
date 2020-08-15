@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')
@section('scripts')
<script src="{{URL::asset('js/add-upper-case.js')}}" type="text/javascript"> </script>
@endsection
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
@if($errors->any())
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
  <div class="alert-text">
    @foreach ($errors->all() as $error)
    <span>{{$error}}</span>
    @endforeach
  </div>
</div>
@endif
<form id="regForm" action="{{route('guardar_inscripcion')}}" method="POST" enctype="multipart/form-data">
    <label style="color:#777777; font-size: 40px; text-align: left; ">Preinscripción</label>
    @csrf
 <label style="color:#054a41; font-size: 30px; text-align: center; " >Para iniciar el proceso de preinscripción, proporciona el siguiente dato.</label>
 
     <label style="color:#777777; font-size: 25px; text-align: left; " >RFC</label>
    <p><input type="text" id="rfc" placeholder="RFC de la persona trabajadora"onkeyup="mayus(this);" oninput="this.className = ''" maxlength="13" name="RFC" pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))([A-Z\d]{3})?$" required></p>
  {{--  <label style="color:#000; font-size: 25px; text-align: left; " >Token</label>  --}}
    <p><input id="tokenId" placeholder="Token" oninput="this.className = ''" name="tokenId" value="SistemaDeRpueba4as4x4vdlsad" hidden></p>
    <button type="submit">Validar RFC</button>
</form>    



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