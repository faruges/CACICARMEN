@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
<script src="{{URL::asset('js/consulta_webservice.js')}}" type="text/javascript"> </script>
<script src="{{URL::asset('js/add-upper-case.js')}}" type="text/javascript"> </script>
{{--  <script src="{{URL::asset('js/inscripcion.js')}}" type="text/javascript"> </script> --}}
@endsection
@section('mycontent')

<link href="{{ asset('css/style.css')}}" rel="stylesheet" />

<div class="alert">
  <!--<a  href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>-->
  <div class="modal-content">
    <div class="modal-body">
      <div style="background-color: #054a41;" class="col-sm-12">
        <h1 style="color:#FFF; text-align: center; ">Calendario de reinscripción</h1>
        <div class="col-sm-12">
          <h3 style="color:#FFF; text-align: center;" id="letra_banner">Primera estapa de reinscripción</h4>
            <h3 style="color:#FFF; text-align: center;" id="letra_banner"><u>Del 20 agosto al 4 de septiembre</u></h4>
              <h3 style="color:#FFF; text-align: center;" id="letra_banner">Periodo extraordinario</h4>
                <h3 style="color:#FFF; text-align: center;" id="letra_banner"><u>Del 7 al 11 de septiembre</u></h4><br>
        </div>
      </div>

      <div class="col-lg-12" style="margin-top: 2%;">
        <div class="row">
          <div class="col-sm-6">
            <h2 style="color: #054a41;" id="title_list_ip">REQUISITOS:</h2>
            </i>1. Cargar la siguiente documentación en versión digital (PDF):</li>
            <h5>a) Acta de nacimiento original por ambos lados, del o la menor.</h5>
            <h5>b) Certicado de nacimiento del o la menor.</h5>
            <h5>c) Cartilla de vacunación al corriente.</h5>
            <h5>d) Clave Única de Registro de Población, (CURP) del o la menor.</h5>
            <h5>e) Si el menor presenta algún tipo de discapacidad o enfermedad crónica, adjuntar documentación clínica
              y diagnóstico de la condición y del tratamiento que recibe.</h5>
            <h5>f) En caso de que la madre o el padre del o la menor, no sean los solicitantes del servicio, la persona
              tutora trabajadora del gobierno, adjuntar el documento legal que dictamine la patria potestad y/o guarda y
              custodia.</h5>
          </div>
          <div class="col-sm-6">
            </i>2. Entregar en original la siguiente documentación:</li>
            <h5>a) Acta de nacimiento del o la menor, excepto quienes ingresan a preescolar 2 y 3.</h5>
            <h5>b) Cartilla de vacunación del o la menor.</h5>
            <h5>c) Análisis clínicos. Debido a la contingencia sanitaria deberán entregarse durante los primeros tres
              meses, a partir del primer día de servicio.</h5>
            <h5>d) Seis fotografías tamaño infantil recientes e iguales, del o la menor.</h5>
            <h5>e) Cuatro fotografías tamaño infantil, recientes e iguales del o la trabajador(a).</h5>
            <h5>f) Cuatro fotografías tamaño infantil, recientes e iguales, de dos personas mayores de edad autorizadas
              por el (la) solicitante del servicio para recoger a la o el menor.</h5>
            </i>3. Llenar el siguiente formulario</li>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer"></div>
  </div>
</div>

<body>
  <div class="fondo">
    {{--  <form id="regForm" action="{{route('guardar_reinscripcion_bd')}}" method="POST" enctype="multipart/form-data">
    --}}
    <form id="regForm" method="POST" enctype="multipart/form-data">
      <h1 style="color: #054a41;">Reinscripción a los Centros de Atención y Cuidado Infantil</h1>
      <br>
      <div class="tab">
        @csrf
        @foreach ($data as $item=>$value)
        {{--  <h2>RFC</h2>
      <p><input id="rfc" placeholder="RFC" oninput="this.className = ''" name="rfc"></p>  --}}

        <div class="col-lg-12">
          <label style="color: #00b140;">Datos de la persona trabajadora</label>
          <div class="row">
            <div class="col-sm-6">
              <p>Nombre(s)<input id="nombre_tutor" type="text" placeholder="Nombre(s) del Padre/Madre o Tutor"
                  title="Nombre del Padre/Madre o Tutor" oninput="this.className = ''" name="nombre_tutor"
                  value="{{$value['CH_nombres']}}" readonly></p>
              <p>Apellido paterno<input id="ap_paterno_t" type="text" placeholder="Apellido paterno"
                  title="Apellido paterno" oninput="this.className = ''" name="ap_paterno_t"
                  value="{{$value['CH_paterno']}}" readonly></p>
              <p>Apellido materno<input id="ap_materno_t" type="text" placeholder="Apellido materno"
                  title="Apellido materno" oninput="this.className = ''" name="ap_materno_t"
                  value="{{$value['CH_materno']}}" readonly></p>
              <p>Tipo de nómina<input id="tipo_nomina" placeholder="Tipo de nómina" title="Tipo de nómina"
                  oninput="this.className = ''" name="tipo_nomina" value="{{$value['TipoNomina']}}" readonly></p>
              <p>Número de empleado<input id="num_empleado" placeholder="Número de empleado" title="Número de empleado"
                  oninput="this.className = ''" name="num_empleado" value="{{$value['NumEmpleado']}}" readonly></p>
              <p>Número de plaza<input id="num_plaza" placeholder="Número de plaza" title="Número de plaza"
                  oninput="this.className = ''" name="num_plaza" value="{{$value['NUM_PLAZA']}}" readonly></p>
              <p>Áreas de adscripción<input id="clave_dependencia" type="text" placeholder="Clave de la dependencia"
                  title="Clave de la dependencia" oninput="this.className = ''" name="clave_dependencia"
                  value="{{$value['Clave_Dependencia']}}" readonly></p>
              <p>Nivel salarial<input id="nivel_salarial" placeholder="Nivel salarial" title="Nivel salarial"
                  oninput="this.className = ''" name="nivel_salarial" value="{{$value['NIVEL_SALARIAL']}}" readonly></p>
              <p>Sección sindical<input id="seccion_sindical" placeholder="Sección sindical" title="Sección sindical"
                  oninput="this.className = ''" name="seccion_sindical" value="{{$value['SECCION_SINDICAL']}}" readonly>
              </p>
              <h5 style="font-family: Arial, Helvetica; color:#777777;">Horario laboral</h5>
              <input type="time" id="horario_laboral_ent" name="horario_laboral_ent">
              <input type="time" id="horario_laboral_sal" name="horario_laboral_sal">
            </div>

            <div class="col-sm-6">
              <h5 style=" color:#777777; text-align: center;"><label>Domicilio particular</label></h5>

              <p>Calle<input id="calle" type="text" placeholder="Calle" title="Calle" oninput="this.className = ''"
                  name="calle"></p>
              <p>Número<input id="numero_domicilio" placeholder="Número" title="Número" oninput="this.className = ''"
                  name="numero_domicilio"></p>
              <p>Código postal<input id="codigo_postal" placeholder="Código postal" title="NCódigo postal"
                  oninput="this.className = ''" name="codigo_postal" maxlength="5"></p>
              <input id="tokenCodigoPostalId" oninput="this.className = ''" name="tokenCodigoPostalId"
                value="SistemaDeRpueba4as4x4vdlsad" hidden>
              <p> Colonia <select style="font-size: 15px;" name="colonia" id="colonia" required></select>
                <!---<p style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Colonia<input id="colonia" type="text" placeholder="Colonia" title="Colonia" oninput="this.className = ''" name="colonia" readonly></p>-->
                <p>Alcaldía/Municipio<input id="alcaldia" type="text" placeholder="Alcaldía" title="Alcaldía"
                    oninput="this.className = ''" name="alcaldia" readonly></p>
                <p>E-mail<input id="email" type="email" placeholder="E-mail" title="E-mail"
                    oninput="this.className = ''" name="email" value="{{$value['CH_mail']}}" readonly></p>
                <p>Teléfono a 10 dígitos<input id="telefono_uno" type="tel" placeholder="Teléfono o celular"
                    title="Teléfono o celular" oninput="this.className = ''" name="telefono_uno" maxlength="10"
                    pattern="[0-9]{10}"></p>
                <p>Celular a 10 dígitos<input id="telefono_dos" type="tel" placeholder="Teléfono 2" title="Teléfono 2"
                    oninput="this.className = ''" name="telefono_dos" maxlength="10" pattern="[0-9]{10}"></p>
                <br><br>
            </div>
          </div>
        </div>
        <p style="color: #f5f5f0;">.</p>
      </div>
      <div class="tab">
        <br>
        <label style="color:#777777;" for="curp">CURP de la niña o niño:</label>
        <p><input id="curp" type="text" placeholder="CURP" oninput="this.className = ''" name="curp"
            onkeyup="mayus(this);" maxlength="18"
            pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]">
        </p>
        <input type="text" id="nombre_proceso" oninput="this.className = ''" name="nombre_proceso" value="reinscripcion"
          readonly hidden></p>
        <button id="valida_curp" type="button" onclick="validaCurp()">Validar CURP</button>
      </div>
      <div class="tab">
        <br>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-sm-6">
              <label style="color:#00b140;">Datos de la niña o niño</label>

              <p>Nombre(s)<input type="text" id="nombre_menor_1" placeholder="Nombre(s) del menor"
                  title="Nombre(s) del menor" oninput="this.className = ''" name="nombre_menor" readonly></p>
              <p>Apellido paterno<input type="text" id="apellido_paterno_1" placeholder="Apellido paterno"
                  title="Apellido paterno" oninput="this.className = ''" name="ap_paterno" readonly></p>
              <p>Apellido materno<input type="text" id="apellido_materno_1" placeholder="Apellido materno"
                  title="Apellido materno" oninput="this.className = ''" name="ap_materno" readonly></p>
              <p>CURP<input type="text" id="curp_num" placeholder="CURP" title="CURP" oninput="this.className = ''"
                  name="curp"
                  pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]"
                  readonly></p>
              <!-- <p style="font-size: 12px; font-family: Arial, Helvetica;">Matricula<input type="text" id="" placeholder="Matricula" onkeyup="mayus(this);" title="Matricula"  oninput="this.className = ''" name="matricula"></p>-->
              <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;" for="birthday">Fecha de
                Nacimiento de la niña o niño:</h5>
              <input type="text" id="birthday" placeholder="Fecha de Nacimiento del menor"
                title="Fecha de Nacimiento del menor" oninput="this.className = ''" name="fecha_nacimiento" readonly>

              <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Edad de la niña o niño al
                ingresar al plantel (Año o Meses)<input id="Edad_menor" type="text"
                  placeholder="Edad del menor al ingresar al plantel (Año o Meses)"
                  title="Edad del menor al ingresar al plantel (Año o Meses)" oninput="this.className = ''"
                  name="edad_menor_ingreso" onkeyup="mayus(this);" readonly></h5>

              <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;" for="cars">Centro de Atención y
                Cuidado Infantil al que pertenece el menor(No se permiten cambios de CACI al ya asigando):
                <select style="font-size: 15px;" name="caci" id="caci">
                  <option value="Luz Maria Gomez Pezuela">Luz María Gómez Pezuela</option>
                  <option value="Mtra Eva Moreno Sanchez">Mtra. Eva Moreno Sánchez</option>
                  <option value="Bertha Von Glumer Leyva">Bertha von Glumer Leyva</option>
                  <option value="Carolina Agazzi">Carolina Agazzi</option>
                  <option value="Carmen S">Carmen Serdán</option>
                </select></h5>

              <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Acta de nacimiento original por
                ambos lados, de la niña o niño.</h5>
              <input type="file" id="filename_act" name="filename_act" accept="application/msword, application/pdf">

              <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Certificado de nacimiento de la
                niña o niño.</h5>
              <input type="file" id="filename_nac" name="filename_nac" accept="application/msword, application/pdf">
              <!--<h5>Acta de nacimiento.</h5>
    <input type="file" id="myFile" name="filename_act">
    {{--  <h5>Solicitud de ingreso perfectamente llenada y firmada.</h5>
    <input type="file" id="myFile" name="filename_sol">  --}}
    <h5>Cartilla de vacunacion al corriente (original y copia).</h5>
    <input type="file" id="myFile" name="filename_vacu">
    <h5>Certificado de nacimiento.</h5>
    <input type="file" id="myFile" name="filename_nac">-->

            </div>
            <div class="col-sm-6"><br>
              <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Cartilla de vacunación al
                corriente de la niña o niño.</h5>
              <input type="file" id="filename_vacu" name="filename_vacu" accept="application/msword, application/pdf">

              <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">CURP de la niña o niño.</h5>
              <input type="file" id="filename_com" name="filename_com" accept="application/msword, application/pdf">

              <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Si la niña o niño presenta
                algún tipo de discapacidad o enfermedad crónica, adjuntar documentación clínica y diagnóstico de la
                condición y del tratamiento que recibe.</h5>
              <input type="file" id="filename_disc" name="filename_disc" accept="application/msword, application/pdf">

              <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">En caso de que la madre o el
                padre del o la menor, no sean los solicitantes del servicio, la persona tutora trabajadora del gobierno,
                adjuntar el documento legal que dictamine la patria potestad y/o guarda y custodia.</h5>
              <input type="file" id="filename_trab" name="filename_trab" accept="application/msword, application/pdf">

              {{--  <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Copia fotostática del certificado de nacimiento o de la hoja de registro de recién nacido, o Documento que contengan datos de nacimiento del(a) menor tales como peso, talla, APGAR, etc.</h5>
    <input type="file" id="myFile" name="filename_cert">  --}}

              {{--  <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Último recibo de pago impreso del(a) trabajador (a).</h5>
    <input type="file" id="myFile" name="filename_rec">  --}}
              <!-- <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">En caso que la o el menor tenga alguna discapacidad o enfermedad crónica, presentar copias de los documentos médicos del tratamiento y/o seguimiento para proporcionarle la atención adecuada.</h5>
    <input type="file" id="myFile" name="filename_disc">
    <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">En caso de que el trabajador(a) sea el tutor del menor, deberá presentar el documento
      legal que dictamine la patria potestad o guarda y custodia del mismo.</h5>
    <input type="file" id="myFile" name="filename_trab">
    <h5>Carta compromiso.</h5>
    <input type="file" id="myFile" name="filename_com">-->

              {{--  <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Copia del último recibo de pago de la persona trabajadora o usuaria.</h5>
    <input type="file" id="myFile" name="filename_recp">  --}}<br>
              <h4 style="color:#545151;"><i style="color: #00b140; font-size:30px;" class="fa fa-newspaper-o"></i> <b>
                  Nota:</b>Los archivos soportados son .pdf, .docx. Asegúrese que sus archivos cumplan el requisito</h4>

              <!--<h4><input style="width: 10%;" type="checkbox" id="cbox1" value="first_checkbox"> Acepto términos y condiciones</h4>-->
              <!--{{--  <h5 >Copia fotostática del certificado de nacimiento o de la hoja de registro de recién nacido, o Documento que contengan datos de nacimiento del(a) menor tales como peso, talla, APGAR, etc.</h5>
    <input type="file" id="myFile" name="filename_cert">  --}}
    {{--  <h5 >Último recibo de pago impreso del(a) trabajador (a).</h5>
    <input type="file" id="myFile" name="filename_rec">  --}}
    <h5>En caso que la o el menor tenga alguna discapacidad o enfermedad crónica, presentar copias de los documentos médicos del tratamiento y/o seguimiento para proporcionarle la atención adecuada.</h5>
    <input type="file" id="myFile" name="filename_disc">
    <h5>En caso de que el trabajador(a) sea el tutor del menor, deberá presentar el documento
    legal que dictamine la patria potestad o guarda y custodia del mismo.</h5>
    <input type="file" id="myFile" name="filename_trab">
    <h5>Carta compromiso.</h5>
    <input type="file" id="myFile" name="filename_com">
    {{--  <h5>Copia del último recibo de pago de la persona trabajadora o usuaria.</h5>
    <input type="file" id="myFile" name="filename_recp">  --}}
    @endforeach-->
              <h4><input id="terminos" style="width: 10%;" type="checkbox" name="terminos" required><a
                  href="img/PDF/Terminos_cond_caci_agosto20.pdf" target="_blank">Revisar y aceptar términos y
                  condiciones</a></h4>
            </div>
          </div>
        </div>
        <p style="color: #f5f5f0;">.</p>
      </div>
      <div style="overflow:auto;">
        <div style="float:right;">
          <!-- <button type="button" id="prevBtn" onclick="nextPrev(-1)">Regresar</button> -->
          <button type="button" id="nextBtn" onclick="nextPrev(1)">Continuar</button>
        </div>
      </div>
      <div class="bgcontainer">
        <div id="st-box"
          style="background-image: url('./img/dados.png'); background-repeat: no-repeat; background-position: left bottom;">
          <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <div id="rd-box"
          style="background-image: url('./img/FondoCuna.png'); background-repeat: no-repeat; background-position: right bottom;">
          <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
      </div>
      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>
    </form>
  </div>
</body>
<!--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
//<script src="sweetalert2.all.min.js"></script>
<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  var act_supera_tamanio_permitido = false;
var nac_supera_tamanio_permitido = false;
var vac_supera_tamanio_permitido = false;
var curp_supera_tamanio_permitido = false;
var disc_supera_tamanio_permitido = false;
var trab_supera_tamanio_permitido = false;
showTab(currentTab); // Display the current tab
function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    //document.getElementById("prevBtn").style.display = "none";
	Swal.fire({
  title: '<strong>Atención</u></strong>',
  icon: 'success',
  html:
    '<b>Estos  datos son privados solo la madre, padre o persona tutora  es  responsable de la información capturada</b> ' +
    '<a target="_blank" href="{{asset('img/PDF/aviso_simplificado_sitio_caci.pdf')}}"><h5 style="color: #00b140;">Ver aviso de privacidad</h5></a> ',
  showCloseButton: true,
//  showCancelButton: true,
})  
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {

    document.getElementById("nextBtn").innerHTML = "Enviar";
  } 
  else {
    document.getElementById("nextBtn").innerHTML = "Continuar";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

$(document).ready(function () {
  $("#filename_act").on('change', function () {
    console.log(act_supera_tamanio_permitido);
    const tamanioArchivoPermitido = 2000000;
    var dato_archivo_act = $('#filename_act').prop("files")[0];
    if(dato_archivo_act.size > tamanioArchivoPermitido){
      act_supera_tamanio_permitido = true;
        //console.log(dato_archivo_act.size);
        //$("#nextBtn").attr("disabled", true);
        Swal.fire({
            title: 'El tamaño del archivo no debe de exceder los 2 Mb',
            text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false
      });    
    }else{
        //alert("si hiciste caso se habilita boton");
        act_supera_tamanio_permitido = false;
        console.log(act_supera_tamanio_permitido);
        $("#nextBtn").attr("disabled", false);
    }
});
$("#filename_nac").on('change', function () {
  const tamanioArchivoPermitido = 2000000;
  var dato_archivo_act = $('#filename_nac').prop("files")[0];
  if(dato_archivo_act.size > tamanioArchivoPermitido){
    nac_supera_tamanio_permitido = true;
        //console.log(dato_archivo_act.size);
        //$("#nextBtn").attr("disabled", true);
        Swal.fire({
            title: 'El tamaño del archivo no debe de exceder los 2 Mb',
            text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false
      });    
    }else{
        //alert("si hiciste caso se habilita boton");
        nac_supera_tamanio_permitido = false;
        console.log(nac_supera_tamanio_permitido);
        $("#nextBtn").attr("disabled", false);
    }
});
$("#filename_vacu").on('change', function () {
  const tamanioArchivoPermitido = 2000000;
  var dato_archivo_act = $('#filename_vacu').prop("files")[0];
  if(dato_archivo_act.size > tamanioArchivoPermitido){
    vac_supera_tamanio_permitido = true;
        //console.log(dato_archivo_act.size);
        //$("#nextBtn").attr("disabled", true);
        Swal.fire({
            title: 'El tamaño del archivo no debe de exceder los 2 Mb',
            text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false
      });    
    }else{
        vac_supera_tamanio_permitido = false;
        console.log(vac_supera_tamanio_permitido);
        $("#nextBtn").attr("disabled", false);
    }
});
$("#filename_com").on('change', function () {
  const tamanioArchivoPermitido = 2000000;
  var dato_archivo_act = $('#filename_com').prop("files")[0];
  if(dato_archivo_act.size > tamanioArchivoPermitido){
    curp_supera_tamanio_permitido = true;
        //console.log(dato_archivo_act.size);
        //$("#nextBtn").attr("disabled", true);
        Swal.fire({
            title: 'El tamaño del archivo no debe de exceder los 2 Mb',
            text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false
      });    
    }else{
      curp_supera_tamanio_permitido = false;
      console.log(curp_supera_tamanio_permitido);
        $("#nextBtn").attr("disabled", false);
    }
});
$("#filename_disc").on('change', function () {
  const tamanioArchivoPermitido = 2000000;
  var dato_archivo_act = $('#filename_disc').prop("files")[0];
  if(dato_archivo_act.size > tamanioArchivoPermitido){
    disc_supera_tamanio_permitido = true;
        //console.log(dato_archivo_act.size);
        //$("#nextBtn").attr("disabled", true);
        Swal.fire({
            title: 'El tamaño del archivo no debe de exceder los 2 Mb',
            text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false
      });    
    }else{
        disc_supera_tamanio_permitido = false;
        console.log(disc_supera_tamanio_permitido);
        $("#nextBtn").attr("disabled", false);
    }
});
$("#filename_trab").on('change', function () {
  const tamanioArchivoPermitido = 2000000;
  var dato_archivo_act = $('#filename_trab').prop("files")[0];
  if(dato_archivo_act.size > tamanioArchivoPermitido){
    trab_supera_tamanio_permitido = true;
        //console.log(dato_archivo_act.size);
        //$("#nextBtn").attr("disabled", true);
        Swal.fire({
            title: 'El tamaño del archivo no debe de exceder los 2 Mb',
            text: 'Por favor seleccione un archivo que no exceda el tamaño permitido',
            icon: 'warning',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok',
            allowOutsideClick: false
      });    
    }else{
        trab_supera_tamanio_permitido = false;
        $("#nextBtn").attr("disabled", false);
    }
});
});

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  if(currentTab === 1){
    $(document).ready(function() {
      $("#nextBtn").attr("disabled", true);
    });
    //alert("Hola");
  }
  if(currentTab === 2){
    $(document).ready(function() {
      $("#nextBtn").attr("disabled", true);
    });
  }
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    if(act_supera_tamanio_permitido === false && nac_supera_tamanio_permitido === false && vac_supera_tamanio_permitido === false && 
    curp_supera_tamanio_permitido === false && disc_supera_tamanio_permitido === false && trab_supera_tamanio_permitido === false){

      if (!$('#terminos').is(':checked')) {
        $("#nextBtn").attr("disabled", true);
        console.log($('#terminos').value);
        Swal.fire({
          title: 'Acepte los terminos y condiciones',
          text: 'Por favor seleccione la casilla para terminar el proceso de Preinscripción',
          icon: 'warning',
          showCancelButton: false,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ok',
          allowOutsideClick: false
        });   
        console.log("este es la pestañña " + currentTab-1);
        var x = document.getElementsByClassName("tab");
        x[n-1].style.display = "block";
        currentTab = currentTab - 1;
      } else {
        //solo cuando le dde el checked se podra inscribir en la bd
        $("#nextBtn").attr("disabled", false);
        console.log($('#terminos').value);
        var form_data = new FormData();

    form_data.append("_token", $("meta[name='csrf-token']").attr("content"));
    form_data.append("nombre_tutor", $("#nombre_tutor").val());
    form_data.append("ap_paterno_t", $("#ap_paterno_t").val());
    form_data.append("ap_materno_t", $("#ap_materno_t").val());
    form_data.append("calle", $("#calle").val());
    form_data.append("numero_domicilio", $("#numero_domicilio").val());
    form_data.append("colonia", $("#colonia").val());
    form_data.append("alcaldia", $("#alcaldia").val());
    form_data.append("codigo_postal", $("#codigo_postal").val());

    form_data.append("tipo_nomina", $("#tipo_nomina").val());
    form_data.append("num_empleado", $("#num_empleado").val());
    form_data.append("num_plaza", $("#num_plaza").val());
    form_data.append("clave_dependencia", $("#clave_dependencia").val());
    form_data.append("nivel_salarial", $("#nivel_salarial").val());
    form_data.append("seccion_sindical", $("#seccion_sindical").val());
    form_data.append("horario_laboral_ent", $("#horario_laboral_ent").val());
    form_data.append("horario_laboral_sal", $("#horario_laboral_sal").val());
    form_data.append("caci", $("#caci").val());
    form_data.append("email", $("#email").val());
    form_data.append("telefono_uno", $("#telefono_uno").val());
    form_data.append("telefono_dos", $("#telefono_dos").val());
    form_data.append("nombre_menor", $("#nombre_menor_1").val());
    form_data.append("ap_paterno", $("#apellido_paterno_1").val());
    form_data.append("ap_materno", $("#apellido_materno_1").val());
    form_data.append("curp", $("#curp_num").val());
    form_data.append("fecha_nacimiento", $("#birthday").val());
    form_data.append("edad_menor_ingreso", $("#Edad_menor").val());
    form_data.append("terminos", $("#terminos").val());

    var dato_archivo_act = $('#filename_act').prop("files")[0];
    var dato_archivo_nac = $('#filename_nac').prop("files")[0];
    var dato_archivo_vacu = $('#filename_vacu').prop("files")[0];
    var dato_archivo_com = $('#filename_com').prop("files")[0];
    var dato_archivo_disc = $('#filename_disc').prop("files")[0];
    var dato_archivo_trab = $('#filename_trab').prop("files")[0];
    
    if (dato_archivo_disc !== undefined) {
        form_data.append("filename_disc", dato_archivo_disc);
    }
    if (dato_archivo_trab !== undefined) {
        form_data.append("filename_trab", dato_archivo_trab);
    }
    form_data.append("filename_nac", dato_archivo_nac);
    form_data.append("filename_act", dato_archivo_act);
    form_data.append("filename_vacu", dato_archivo_vacu);
    form_data.append("filename_com", dato_archivo_com);

    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: form_data,
        processData: false,
        contentType: false,
        url: url + 'guardar_reinscripcion_bd',
        success: function (data) {
            console.log(data);
            if (data.ok) {
                if (data.Exist) {
                    Swal.fire({
                        icon: 'warning',
                        title: data.result,
                        showConfirmButton: false,
                        timer: 10000,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'reinscripcion';
                        }
                    });
                    return;
                }
                Swal.fire({
                    icon: 'success',
                    title: 'Su solicitud se ha registrado en el sistema, en breve recibirá un correo electrónico referente al registro de su solicitud',
                    showConfirmButton: false,
                    timer: 10000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        $("#new_reminder").modal("hide");
                        location.href = url + 'inicio';
                        //document.getElementById("regForm").submit();
                    }
                });
            } else {
                if (data.err_valid) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error, Validaciones!',
                        text: data.result,
                        showConfirmButton: false,
                        timer: 15000,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'reinscripcion';
                        }
                    });
                    return;
                }
                if (data.err_valid_docs) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Documentos, Validaciones!',
                        text: data.result,
                        showConfirmButton: false,
                        timer: 10000,
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.href = url + 'reinscripcion';
                        }
                    });
                    return;
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Error de Sistema!',
                    text: data.result,
                    showConfirmButton: false,
                    timer: 10000,
                    allowOutsideClick: false
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.href = url + 'reinscripcion';
                    }
                });
            }
            //alert("Los Datos se Consultaron Correctamente");
        },
        error: function (data_e) {
            console.log(data_e);
            //alert("No se pudo inscribir");
        }
    });
    console.log("este es la pestañña " + currentTab+1);
    //showTab(currentTab+1);
    var x = document.getElementsByClassName("tab");
      x[n+1].style.display = "block";
      currentTab = currentTab + 1;
      return false;
      }

    
    }else{
      var x = document.getElementsByClassName("tab");
      x[n-1].style.display = "block";
      currentTab = currentTab - 1;
      Swal.fire({
        title: 'Verifica, uno o varios de tus documentos son mayores a 2Mb',
        text: 'Por favor seleccione archivos que no excedan el tamaño permitido',
        icon: 'warning',
        showCancelButton: false,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok',
        allowOutsideClick: false
      }); 
    }
  }
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
    if (y[i].value == "" && y[i].name != 'filename_disc' && y[i].name != 'filename_trab') {
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