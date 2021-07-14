@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')
<style>
  h1 {
    font-size: 3.2rem;
    color: rgb(63, 63, 63);
  }
  p{
    font-size: 1.3rem;
    color: rgb(63, 63, 63);
  }
</style>

<div class="item active">
  <a href="#">
    <img src="{{asset('img/banner_PIZARRON-02.svg')}}" alt="Imagen" style="width:100%;">
  </a>
</div>
<div class="jumbotron" align="center">
  <h1>Centros de Atención y Cuidado Infantil (CACI-SAF)</h1>

  <p align="left">Los Centros de Atención y Cuidado Infantil de la Secretaría de Administración y Finanzas (CACI-SAF), que
    dirige la Dirección Ejecutiva de Desarrollo de Personal y Derechos Humanos, ofrecen un servicio pedagógico
    y asistencial a las hijas e hijos de las personas servidoras públicas del Gobierno de la Ciudad de México,
    en edades desde los 43 días hasta los 5 años 11 meses, favoreciendo su desarrollo integral en un ambiente armónico,
    igualitario e inclusivo, a través de los programas establecidos por la Secretaría de Educación Pública (SEP) y
    actividades
    lúdicas y recreativas apegadas a su nivel de desarrollo, edad y contexto sociocultural.
  </p>
</div>

@endsection