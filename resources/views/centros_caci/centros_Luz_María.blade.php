@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<link href="{{ asset('css/style.css')}}" rel="stylesheet" />

<style>
  .style-centro-caci {
    color: #9F2241;
    font-weight: 700;
    font-family: 'source sans pro', sans-serif;
    margin-bottom: 1rem;
  }

  .style-dir-caci {
    margin-left: 1.3rem;
    margin-bottom: 0;
    font-size: 1.1rem;
    font-family: 'source sans pro', sans-serif;
  }

  .style-email-caci {
    margin-left: 1.3rem;
    margin-top: 0;
    margin-bottom: 0;
    font-size: 1.1rem;
    font-family: 'source sans pro', sans-serif;
  }

  .style-tel-caci {
    margin-left: 1.3rem;
    margin-top: 0;
    font-size: 1.1rem;
    font-family: 'source sans pro', sans-serif;
  }

  .style-location-caci {
    margin-top: 2rem;
    background-color: #9F2241;
    padding: 0.5rem 5rem;
  }

  .card-info-caci {
    width: 100%;
    background-color: #EAEAEA;
    margin-right: 0;
    height: 220px;
  }

  .img-circle-responsable {
    margin-top: 1.5rem;
    border: 5px solid #9F2241;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    display: inline-block;
    vertical-align: middle;
  }

  .responsable-caci {
    margin-bottom: 0;
    margin-top: 3rem;
    color: #9F2241;
    font-size: 1rem;
    font-weight: 50;
    font-family: 'source sans pro', sans-serif;
  }

  .name-responsable {
    margin-top: 0;
    font-weight: 600;
    color: #9F2241;
    font-size: 1.3rem;
    font-family: 'source sans pro', sans-serif;
  }

  @media screen and (max-width: 500px) {
    .relative{
      position: relative;
    }
    .absolute1{
      position: absolute; z-idex:1;
    }
    .absolute2{
      position: absolute; top: 10rem; z-index:2;
    }
    .style-location-caci {
      margin-top: 2rem;
      margin-bottom: 2rem;
      margin-left: 3rem;
      background-color: #9F2241;
      padding: 0.5rem 5rem;
    }

    .card-info-caci {
      width: 100%;
      background-color: #EAEAEA;
      margin-right: 0;
      height: 320px;
      margin-top: 2rem;
    }
    .img-circle-responsable {
      margin-top: 0.5rem;
      margin-left: 6rem;
      border: 5px solid #9F2241;
      width: 120px;
      height: 120px;
      border-radius: 50%;
      overflow: hidden;
      display: inline-block;
      vertical-align: middle;
    }
    .responsable-caci {
      margin-bottom: 0;
      margin-top: 1rem;
      color: #9F2241;
      font-size: 1rem;
      font-weight: 50;
      font-family: 'source sans pro', sans-serif;
    }

    .name-responsable {
      margin-top: 0;
      font-weight: 600;
      color: #9F2241;
      font-size: 1.3rem;
      font-family: 'source sans pro', sans-serif;
    }
  }
</style>

<div class="row" style="margin-top: 2rem; margin-bottom:3rem;">
  <h1 style="font-family: 'source sans pro', sans-serif; color:#235B52;">CONOCE NUESTROS CENTROS DE ATENCIÓN Y CUIDADO INFANTIL</h1>
</div>
<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-6">
    <div class="card-text">
      <h2 class="style-centro-caci">CACI #2 LUZ MA. GÓMEZ
        PEZUELA</h2>
      <p class="style-dir-caci"><img src="img/ICONO UBICACIÓN-31.svg" style="height: 1rem; width: 1rem;" /> Claudio
        Bernard No. 123, Col. Doctores
        C.P. 07620, Alcaldía Cuauhtémoc</p>
      <p class="style-email-caci">
        <img src="img/ICONO CORREO-32.svg" style="height: 1rem; width: 1rem;" /> caciluzmariagomez@finanzas.cdmx.gob.mx
      </p>
      <p class="style-tel-caci"><img src="img/ICONO TELÉFONO 2-33.svg" style="height: 1rem; width: 1rem;" /> 55-88-33-20
        / 51-34-25-50</p>
      <div><a href="https://goo.gl/maps/Ts16yzXegSedRCg38" target="_blank" class="style-location-caci"><span
            style="color: #fff; font-weight: 700; font-size: 1rem; font-family: 'sans source pro', sans-serif;">VER
            UBICACIÓN</span></a></div>
    </div>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-6">
    <div class="card card-info-caci">
      <div class="card-body">
        <div class="row relative">
          <div class="col-sm-3 col-md-3 col-lg-4 absolute1">
              <img class="img-circle-responsable" src="img/Responsables/1.png" />
          </div>
          <div class="col-sm-9 col-md-9 col-lg-8 absolute2">
              <p class="responsable-caci">
                Responsable</p>
              <p class="name-responsable">
                Mtra. Elisa Tamara Prado Viveros</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row" style="margin-top:2rem;">
  <div class="col-sm-12 col-md-12 col-lg-6">
    <div class="card-text">
      <h2 class="style-centro-caci">CACI #4 MTRA. EVA MORENO SÁNCHEZ</h2>
      <p class="style-dir-caci"><img src="img/ICONO UBICACIÓN-31.svg" style="height: 1rem; width: 1rem;" /> Dr. Lavista No. 54, Col. Doctores C.P. 06720, Alcaldía Cuauhtémoc.</p>
      <p class="style-email-caci">
        <img src="img/ICONO CORREO-32.svg" style="height: 1rem; width: 1rem;" /> cacievamoreno@finanzas.cdmx.gob.mx</p>
      <p class="style-tel-caci"><img src="img/ICONO TELÉFONO 2-33.svg" style="height: 1rem; width: 1rem;" /> 55-78-76-76</p>
      <div><a href="https://goo.gl/maps/9CqK6D3MNmFqobA68" target="_blank" class="style-location-caci"><span
            style="color: #fff; font-weight: 700; font-size: 1rem; font-family: 'sans source pro', sans-serif;">VER
            UBICACIÓN</span></a></div>
    </div>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-6">
    <div class="card card-info-caci">
      <div class="card-body">
        <div class="row relative">
          <div class="col-sm-3 col-md-3 col-lg-4 absolute1">
              <img class="img-circle-responsable" src="img/Responsables/2.png" />
          </div>
          <div class="col-sm-9 col-md-9 col-lg-8 absolute2">
              <p class="responsable-caci">
                Responsable</p>
              <p class="name-responsable"> Lic. Laura Patricia Navarro Aguilera</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row" style="margin-top:2rem;">
  <div class="col-sm-12 col-md-12 col-lg-6">
    <div class="card-text">
      <h2 class="style-centro-caci">CACI #6 BERTHA VON GLUMER LEYVA</h2>
      <p class="style-dir-caci"><img src="img/ICONO UBICACIÓN-31.svg" style="height: 1rem; width: 1rem;" /> Jesús García No. 63, Col. Guerrero C.P. 06350, Alcaldía Cuauhtémoc.</p>
      <p class="style-email-caci">
        <img src="img/ICONO CORREO-32.svg" style="height: 1rem; width: 1rem;" /> caciberthavonglumer@finanzas.cdmx.gob.mx</p>
      <p class="style-tel-caci"><img src="img/ICONO TELÉFONO 2-33.svg" style="height: 1rem; width: 1rem;" /> 55-92-70-98 / 55-66-19-29</p>
      <div><a href="https://goo.gl/maps/HB3mgqfYiWXWPeRr8" target="_blank" class="style-location-caci"><span
            style="color: #fff; font-weight: 700; font-size: 1rem; font-family: 'sans source pro', sans-serif;">VER
            UBICACIÓN</span></a></div>
    </div>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-6">
    <div class="card card-info-caci">
      <div class="card-body">
        <div class="row relative">
          <div class="col-sm-3 col-md-3 col-lg-4 absolute1">
              <img class="img-circle-responsable" src="img/Responsables/3.png" />
          </div>
          <div class="col-sm-9 col-md-9 col-lg-8 absolute2">
              <p class="responsable-caci">
                Responsable</p>
              <p class="name-responsable"> Lic. Judith Valera Espinosa</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row" style="margin-top:2rem;">
  <div class="col-sm-12 col-md-12 col-lg-6">
    <div class="card-text">
      <h2 class="style-centro-caci">CACI #7 CAROLINA AGAZZI</h2>
      <p class="style-dir-caci"><img src="img/ICONO UBICACIÓN-31.svg" style="height: 1rem; width: 1rem;" /> Oriente 42 No. 360, Col. 24 de abril C.P. 15980, Alcaldía Venustiano Carranza.</p>
      <p class="style-email-caci">
        <img src="img/ICONO CORREO-32.svg" style="height: 1rem; width: 1rem;" /> cacicarolinaagazzi@finanzas.cdmx.gob.mx</p>
      <p class="style-tel-caci"><img src="img/ICONO TELÉFONO 2-33.svg" style="height: 1rem; width: 1rem;" /> 57-64-40-36 / 55-52-03-63</p>
      <div><a href="https://www.google.com.mx/maps/place/Ote.+42+360,+24+de+Abril,+Venustiano+Carranza,+15980+Ciudad+de+M%C3%A9xico,+CDMX/@19.415703,-99.118255,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1febc6e4fee5d:0x5ce6a39b00030f8!8m2!3d19.415703!4d-99.1160663" target="_blank" class="style-location-caci"><span
            style="color: #fff; font-weight: 700; font-size: 1rem; font-family: 'sans source pro', sans-serif;">VER
            UBICACIÓN</span></a></div>
    </div>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-6">
    <div class="card card-info-caci">
      <div class="card-body">
        <div class="row relative">
          <div class="col-sm-3 col-md-3 col-lg-4 absolute1">
              <img class="img-circle-responsable" src="img/Responsables/4.png" />
          </div>
          <div class="col-sm-9 col-md-9 col-lg-8 absolute2">
              <p class="responsable-caci">
                Responsable</p>
              <p class="name-responsable"> Lic. María De Jesús García Bustamante</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row" style="margin-top:2rem;">
  <div class="col-sm-12 col-md-12 col-lg-6">
    <div class="card-text">
      <h2 class="style-centro-caci">CACI #8 CARMEN SERDÁN</h2>
      <p class="style-dir-caci"><img src="img/ICONO UBICACIÓN-31.svg" style="height: 1rem; width: 1rem;" /> Plaza Benito Juárez No. 10, Col. Gabriel Ramos Millán, C.P. 08000 Alcaldía Iztacalco.</p>
      <p class="style-email-caci">
        <img src="img/ICONO CORREO-32.svg" style="height: 1rem; width: 1rem;" /> cacicarmenserdan@finanzas.cdmx.gob.mx</p>
      <p class="style-tel-caci"><img src="img/ICONO TELÉFONO 2-33.svg" style="height: 1rem; width: 1rem;" /> 56-57-26-89</p>
      <div><a href="https://goo.gl/maps/ufsH814YwNL2Zhu56" target="_blank" class="style-location-caci"><span
            style="color: #fff; font-weight: 700; font-size: 1rem; font-family: 'sans source pro', sans-serif;">VER
            UBICACIÓN</span></a></div>
    </div>
  </div>
  <div class="col-sm-12 col-md-12 col-lg-6">
    <div class="card card-info-caci">
      <div class="card-body">
        <div class="row relative">
          <div class="col-sm-3 col-md-3 col-lg-4 absolute1">
              <img class="img-circle-responsable" src="img/Responsables/5.png" />
          </div>
          <div class="col-sm-9 col-md-9 col-lg-8 absolute2">
              <p class="responsable-caci">
                Responsable</p>
              <p class="name-responsable"> Lic. Ma. Ofelia Covarrubias González</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection