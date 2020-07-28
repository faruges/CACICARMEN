@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
  <script src="{{URL::asset('js/consulta_webservice.js')}}" type="text/javascript"> </script> 
@endsection 
@section('mycontent')
<div class="tab">
    <br>
    <form id="regForm" action="{{route('guardar_inscripcion_bd')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <p><input id="nombre_tutor_madres" placeholder="Nombre del Padre/Madre o Tutor" oninput="this.className = ''"
        name="nombre_tutor_madres" ></p>
{{--      <p><input id="apellido_paterno_tutor" placeholder="Apellido paterno" oninput="this.className = ''"
        name="apellido_paterno_tutor" ></p>
    <p><input id="apellido_materno_tutor" placeholder="Apellido materno" oninput="this.className = ''"
        name="apellido_materno_tutor" ></p>
    <p><input id="domicilio_delegracion" type="text" placeholder="Domicilio" oninput="this.className = ''" name="domicilio_delegracion">
    </p>
    <p><input id="tipo_nomina_1"  placeholder="Tipo de nómina" oninput="this.className = ''" name="tipo_nomina_1"
      ></p>


      <p><input id="num_empleado_1"  placeholder="Número de empleado" oninput="this.className = ''"
        name="num_empleado_1" ></p>
    <p><input id="" placeholder="Número de plaza" oninput="this.className = ''" name="num_plaza_1"
      ></p>
    <p><input id="clave_dependencia_1" placeholder="Clave de la dependencia" oninput="this.className = ''"
        name="clave_dependencia_1" ></p>
    <p><input id="nivel_salarial_1"  placeholder="Nivel salarial" oninput="this.className = ''" name="nivel_salarial_1"
      ></p>
    <p><input id="seccion_sindical_1"  placeholder="Sección sindical" oninput="this.className = ''"
        name="seccion_sindical_1">


        <p><input id="nombre_menor_1" placeholder="Nombre(s) del menor" oninput="this.className = ''"
          name="nombre_menor_1"></p>
      <p><input id="apellido_paterno_1" placeholder="Apellido paterno" oninput="this.className = ''"
          name="apellido_paterno_1"></p>
      <p><input id="apellido_materno_1" placeholder="Apellido materno" oninput="this.className = ''"
          name="apellido_materno_1"></p>


      <h5 for="birthday">Fecha de Nacimiento del menor:</h5>
      <input type="date" id="birthday" name="birthday">
      <p><input placeholder="Edad del menor al ingresar al plantel (Año o Meses)"
        oninput="this.className = ''" name="Edad_menor"></p>
        <h5 for="caci">Caci:</h5>
        <input id="caci" name="caci">

        <p><input  id="email_correo" oninput="this.className = ''" name="email_correo"></p>
      <p><input placeholder="Teléfono " oninput="this.className = ''" name="telefono_celular"></p>
      <p><input placeholder="Celular" oninput="this.className = ''" name="telefono_3"></p>  --}}


    <button id="valida_curp" type="submit">Validar CURP</button> 
    </form>
</div>
@endsection 