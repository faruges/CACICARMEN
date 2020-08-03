@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
  <script src="{{URL::asset('js/consulta_webservice.js')}}" type="text/javascript"> </script> 
@endsection 
@section('mycontent')
<div class="tab">
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
    <br>
    <form id="regForm" action="{{route('webservicecp')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <p style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Código postal<input id="codigo_postal" placeholder="Código postal" title="NCódigo postal" oninput="this.className = ''" name="CP"></p>
          <input id="tokenId" oninput="this.className = ''" name="tokenId" value="SistemaDeRpueba4as4x4vdlsad">
    <button id="valida_cp" type="submit">Validar CURP</button> 
    </form>
</div>
@endsection 