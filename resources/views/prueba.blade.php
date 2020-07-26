@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
  <script src="{{URL::asset('js/consulta_webservice.js')}}" type="text/javascript"> </script> 
@endsection 
@section('mycontent')
<div class="tab">
    <br>
    <label for="curp">CURP:</label>
    <p><input id="curp" type="text" placeholder="CURP" oninput="this.className = ''" name="curp"></p>
    <button id="valida_curp" type="button" onclick="validaCurp()">Validar CURP</button> 
</div>
@endsection 