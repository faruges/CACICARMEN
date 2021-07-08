@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<div class="item active">
  <a href="#">
    <img src="{{asset('img/banner.png')}}" alt="Imagen" style="width:100%;">
  </a>
</div>
<div class="jumbotron">
  <h1>Centros de Atención y</h1>
  <h1>Cuidado Infantil (CACI-SAF)</h1>
 
  <p>Los Centros de Atención y Cuidado Infantil de la Secretaría de Administración y Finanzas (CACI-SAF), que
   dirige la Dirección Ejecutiva de Desarrollo de Personal y Derechos Humanos,  ofrecen un servicio pedagógico
    y asistencial a las hijas e hijos de las personas servidoras públicas del Gobierno de la Ciudad de México, 
    en edades desde los 43 días hasta los 5 años 11 meses, favoreciendo su desarrollo integral en un ambiente armónico,
     igualitario e inclusivo, a través de los programas establecidos por la Secretaría de Educación Pública (SEP) y actividades
      lúdicas y recreativas apegadas a su nivel de desarrollo, edad y contexto sociocultural.
  </p>
</div>

@endsection