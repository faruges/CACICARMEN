@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<link href="{{ asset('css/style.css') }}" rel="stylesheet"> 

 <form style="width:85%;" class="modal-content animate" action="action_page.php" method="post">
    <div class="imgcontainer">
       <img src="{{asset('img/logo CACI.png')}}"  alt="Logo_CDMX" style="width:70%;">
    </div>
    <div class="container">
      <label for="uname"><b>Nombre de usuario</b></label>
       <input type="text" placeholder="Nombre de usuario" name="uname" required>
       <br><br>
       <label for="psw"><b>Contraseña:</b></label>
       <input type="password" placeholder="Contraseña" name="psw" required>
        <br><br>
      <button type="submit">Entrar</button>
    <!-- <span class="psw">¿Aún no tienes cuenta? <a style="color: #00b140;" href="regístro">Regístro</a></span> -->
    </div>
  </form>
@endsection

 

