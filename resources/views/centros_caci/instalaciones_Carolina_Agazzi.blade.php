@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')


<style>
.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 65vh;
    padding: 30px 50px;
}

.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
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
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
<div class="container gallery-container">
    <div class="tz-gallery">
    <label style="color:#777777; font-size: 40px; text-align: left; ">Instalaciones</label>   
     <div class="row">
    <div class="col-sm-12 col-md-4">
    <div style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;text-align: center;" class="w3-container">
    <a class="lightbox" href="{{asset('img/CACI_Caroliona/4.jpeg')}}">
    <img src="{{asset('img/CACI_Caroliona/4.jpeg')}}" alt="Imagen">
    </a>
    <h2>Actividades Extracurriculares</h2>
    </div>
    </div>
    <div class="col-sm-6 col-md-4">
    <div style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;text-align: center;" class="w3-container">
    <a class="lightbox" href="{{asset('img/CACI_Caroliona/1.jpg')}}">
    <img style="height: 245px;" src="{{asset('img/CACI_Caroliona/1.jpg')}}" alt="Imagen">
    </a>
   <h2>Actividades Pedagógicas</h2>
    </div>
    </div>
    <div class="col-sm-6 col-md-4">
    <div style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;text-align: center;" class="w3-container">
    <a class="lightbox" href="{{asset('img/CACI_Caroliona/6.jpg')}}">
    <img src="{{asset('img/CACI_Caroliona/6.jpg')}}" alt="Imagen">
    </a>
    <h2>Instalaciones</h2>
    </div>
    </div>    
    </div>
    </div>

 <div style="text-align: right;">
    <a href="centros_Carolina_Agazzi">
   <button onclick="adicionar()" class='btn_add'>Regresar</button>
   <a>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

@endsection

 



