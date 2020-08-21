@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')
<style>

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 2px;
  display: inline-block;
  border: 1px solid rgb(0, 177, 64);
  box-sizing: border-box;

  font-size: 20px;
  font-family: Arial, Helvetica, sans-serif;
}

/* Set a style for all buttons */
button {
  background-color: #00b140;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 480%;
  border-radius: 50%;
}

.container {
  padding-bottom: 20px;
  width:75%;
  font-size: 15px;
  font-family: Arial;

}

/* The Modal (background) */
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 50;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 

}

/* Modal */
.modal-content {
  background-color: #fefefe;
  margin: 0% auto 15% auto; 
  border: 1px solid #888;

}

.close:hover,
.close:focus {
  color: green;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}

}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
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
<form style="width:90%;" class="modal-content animate" action="{{route('login_post')}}" method="POST" autocomplete="off">
  @csrf
    <a style=" text-align: center;"><img src="{{asset('img/logo CACI.png')}}" alt="Logo_CDMX"></a>
  <div class="container">
    <label for="usuario"><b>Nombre de usuario:</b></label>
    <input type="text" placeholder="Nombre de usuario" name="name" required>
    <br><br>
    <label for="password"><b>Contraseña:</b></label>
    <input type="password" placeholder="Contraseña" name="password" required>
    <br><br>
    <button type="submit">Entrar</button>
  </div>
</form>



@endsection