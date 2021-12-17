@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<style>
  
.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 60vh;
    padding: 30px 50px;
}
.gallery-container h1 {
    text-align: center;
  
    font-weight: bold;
}
.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}
.tz-gallery {
    padding: 40px;
}

/* Override bootstrap column paddings */
.tz-gallery .row > div {
    padding: 2px;
}
.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 0;
    position: relative;
}
.tz-gallery .lightbox:before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    opacity: 0;
    color: #fff;
    font-size: 26px;
    font-family: 'Glyphicons Halflings';
    content: '\e003';
    pointer-events: none;
    z-index: 9000;
    transition: 0.4s;
}
.tz-gallery .lightbox:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(46, 132, 206, 0.7);
    content: '';
    transition: 0.4s;
}
.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

.baguetteBox-button {
    background-color: transparent !important;
}

@media(max-width: 768px) {
    body {
        padding: 0;
    }
}
#user {
  width: 60%;
  min-width: 400px;
  left;
}
input,
button {
  font: 400 20px "Lato", sans-serif;
}
input {
  width: 60%;
  height: 40px;
  color: #6a737d;
  border: 1px solid #e1e4e8;
  border-radius: 8px;
  padding: 0 24px;
  margin-right: 10px;
}
.btn_add {
  width: 30%;
  height: 40px;
  border: 1px solid #e1e4e8;
  border-radius: 8px;
  background-color: #235B4E;
  color: #fff;
  cursor: pointer;
}

</style>
<div style="text-align: center;" class="container gallery-container">
    <h1 style="text-align: center;">Titular del Centro de Atención y</h1>
    <h1 style="text-align: center;">Cuidado Infantil</h1>
    <img src="{{asset('img/Responsables/3.jpg')}}" alt="Imagenes" style="width:30%;">
 <!-- <h1 style="text-align: center;">Estanislao Ramírez Ruiz</h1>--> 
    <h1 style="text-align: center;">Alicia Judith Valera Espinosa</h1>
</div>
 <div style="text-align: right;">
    <a href="centros_Bertha_von">
   <button onclick="adicionar()" class='btn_add'>Regresar</button>
   <a>
</div>

<br><br>



@endsection

 








 



