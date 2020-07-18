@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
<form style="width:90%;" class="modal-content animate" action="{{route('login_post')}}" method="POST" autocomplete="off">
  @csrf
  <div class="imgcontainer">
    <img src="{{asset('img/logo CACI.png')}}" alt="Logo_CDMX" style="width:70%;">
  </div>
  <div class="container">
    <label for="usuario"><b>Nombre de usuario</b></label>
    <input type="text" placeholder="Nombre de usuario" name="usuario" required>
    <br><br>
    <label for="password"><b>Contraseña:</b></label>
    <input type="password" placeholder="Contraseña" name="password" required>
    <br><br>
    <button type="submit">Entrar</button>
    <!-- <span class="psw">¿Aún no tienes cuenta? <a style="color: #00b140;" href="regístro">Regístro</a></span> -->
  </div>
</form>
@endsection