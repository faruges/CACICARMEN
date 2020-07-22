@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')


  <div class="item active">
<a href="inscripcion">
     <img src="{{asset('img/banner.png')}}" alt="Los Angeles" style="width:100%;">
</a>
   </div>


      <div class="jumbotron">
      
        <div class="tab">
        <h4>Datos del trabajador</h4>
        <h3>Nombre del Padre/Madre o Tutor:</h3>
        <p><input placeholder="Nombre del Padre" oninput="this.className = ''" name="nombre_tutor" value="Hola Mexico"></p>
        <p><input placeholder="Apellido paterno" oninput="this.className = ''" name="ap_paterno_t"></p>
        <p><input placeholder="Apellido materno" oninput="this.className = ''" name="ap_materno_t"></p>
        <p><input placeholder="Domicilio" oninput="this.className = ''" name="domicilio"></p>
        <p><input placeholder="Tipo de nómina" oninput="this.className = ''" name="tipo_nomina"></p>
        <p><input placeholder="Número de empleado" oninput="this.className = ''" name="num_empleado"></p>
        <p><input placeholder="Número de plaza" oninput="this.className = ''" name="num_plaza"></p>
        <p><input placeholder="Clave de la dependencia" oninput="this.className = ''" name="clave_dependencia"></p>
        <p><input placeholder="Nivel salarial" oninput="this.className = ''" name="nivel_salarial"></p>
        <p><input placeholder="Sección sindical" oninput="this.className = ''" name="seccion_sindical"></p>
        <label for="appt">
          <p>Horario laboral</p>
        </label>
        <input type="time" id="appt" name="horario_laboral">

        <h1>Datos de contacto:</h1>
        <p><input placeholder="E-mail" oninput="this.className = ''" name="email"></p>
        <p><input placeholder="Teléfono o celular" oninput="this.className = ''" name="telefono_uno"></p>
        <p><input placeholder="Teléfono 2" oninput="this.className = ''" name="telefono_dos"></p>


        <br><br>
        </div>
      </div>
        

</div>
    
@endsection
