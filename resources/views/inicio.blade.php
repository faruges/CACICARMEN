@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
<script src="{{URL::asset('js/add-upper-case.js')}}" type="text/javascript"></script>
{{--
<link rel="stylesheet" href="{{ asset('assets/css/uikit.min.css')}}" /> --}}
@endsection
@section('mycontent')
<style>
  h1 {
    font-size: 3.2rem;
    color: rgb(63, 63, 63);
    font-family: 'source sans pro', sans-serif;
  }

  p {
    font-size: 1.3rem;
    color: rgb(63, 63, 63);
    font-family: 'source sans pro', sans-serif;
  }

  ul_1 {
    font-size: 1.3rem;
    color: rgb(63, 63, 63);
    font-family: 'source sans pro', sans-serif;

  }

  #centrador {
    margin: 2rem 2rem 2rem 0rem;
  }

  #centrador-caci {
    margin: 2rem 2rem 2rem 0rem;
  }

  .hover-img:hover {
    color: #BC955C;
  }


  #centrador-t {
    margin: 1rem 2rem 1rem 0rem;

  }

  #centrador-t2 {
    margin: 1rem 1rem 1rem -3rem;

  }

  .color-yum {
    background-color: #848484;
    opacity: 1;

  }

  .imagen-tamano {
    width: 100px
  }

  .imagen-tamano2 {
    width: 60px
  }

  .mensaje1 {
    display: block;
  }


  .margin-nota {

    margin-top: 2rem;
    margin-left: 11rem;
    opacity: 1;

  }

  @media screen and (max-width: 500px) {
    .imagen-tamano {
      width: 65px
    }

    .margin-nota {
      margin-left: 80%;
      opacity: 1;

    }

    #centrador-caci {
      margin: 2rem 2rem 2rem 8rem;
    }
    .margin-letters{
      margin-left: 3.5rem;
    }
  }

  /*@media  screen and (max-width: 1500px) { .imagen-tamano{ width: 300px }}*/
</style>

<div class="item active" style="margin-top: 1.5rem;">
  <div align="center">
    <div uk-slideshow="animation: push; autoplay: true">

      <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slideshow-items" uk-slider="autoplay: true autoplay-interval: 1000">
          <li>
            <a href="https://aplicaciones.finanzas.cdmx.gob.mx/caciadmin/public/requisitos"><img
                src="img/banner web página caci-07.jpg" alt="" uk-cover></a>
            {{--  <a href="https://aplicaciones.finanzas.cdmx.gob.mx/caciadmin/public/requisitos"><img
                src="img/BANNER REQUISITOS-26.svg" alt="" uk-cover></a>  --}}
          </li>
          <li>
            <a href="https://aplicaciones.finanzas.cdmx.gob.mx/caciadmin/public/preinscripcion_validar_rfc"><img
                src="img/BANNER PREINSCRIPCIÓN-27.svg" alt="" uk-cover></a>
          </li>
          <li>
            <a href="https://aplicaciones.finanzas.cdmx.gob.mx/caciadmin/public/reinscripcion"><img
                src="img/BANNER REINSCRIPCIÓN-28.svg" alt="" uk-cover></a>
          </li>
          <li>
            <a href="../public/doc/CACI_UBICACION.pdf" target="_blank"><img src="img/BANNER UBICACIÓN-29.svg" alt=""
                uk-cover></a>
          </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
          uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
          uk-slideshow-item="next"></a>

      </div>
      <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
    </div>
    {{-- <button type="button" onclick="pruebas()">Prueba</button> --}}
  </div>
  <div class="container">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="card-deck">
        <div class="col-sm-12 col-md-12 col-lg-4">
          <div class="card border-0 mb-3 bg-ligh">
            <div class="row no-gutters " onclick="addClase('#mensaje1'); addClaseMobil('#mensajeUno');">
              <div class="col-md-4 ">
                <img id="centrador-caci" class="card-img-top imagen-tamano " src="img/NINOS ICONO-21.svg"
                  alt="Card image">


              </div>


              <div class="col-md-8  " style="margin-top: 1rem">
                <div class="card-body text-center" style="margin-left: 1rem;  padding: 0rem;">
                  <h3 id="centrador-t" style="cursor:pointer; font-size: 1.3rem;" class="card-text "><strong
                      class="hover-img">&iquest;QU&Eacute; SON LOS CACI? </strong></h3>
                </div>
              </div>

            </div>
          </div>

        </div>
        <div id="mensajeUno" class="container my-auto mx-auto" style="display: none;">
          <div class="jumbotron color-yum">
            <button class="btn btn-md btn-dark float-right" type="button"
              onclick="deleteClase('#mensaje1'); deleteClaseMobil('#mensajeUno'); "><i class="fa fa-times"></i></button>
            <p class="text-white">Los Centros de Atenci&oacute;n y Cuidado Infantil de la Secretar&iacute;a de
              Administraci&oacute;n y Finanzas (CACI-SAF) ofrecen un servicio
              asistencial y pedag&oacute;gico a las hijas e hijos de las personas
              servidoras p&uacute;blicas del Gobierno de la Ciudad de M&eacute;xico en
              edades desde los 43 d&iacute;as hasta los 5 a&ntilde;os 11 meses.</p>
          </div>

        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
          <div class="card border-0 mb-3 bg-ligh">
            <div class="row no-gutters " onclick="addClase('#mensaje2'); addClaseMobil('#mensajeDos');">
              <div class="col-md-4 mx-auto d-block ">
                <img id="centrador-caci" class="card-img-top imagen-tamano2 " src="img/CHECK ICONO-22.svg"
                  alt="Card image">
              </div>
              <div class="col-md-8">
                <div class="card-body  text-center margin-letters">
                  <h3 style="cursor:pointer; font-size: 1.3rem;" id="centrador-t2" class="card-text hover-img"> <strong>
                      OBJETIVO </strong>
                  </h3>
                </div>
              </div>

            </div>
          </div>

        </div>
        <div id="mensajeDos" class="container jum my-auto mx-auto" style="display: none;">
          <div class="jumbotron color-yum">
            <button class="btn btn-md btn-dark float-right" type="button"
              onclick="deleteClase('#mensaje2'); deleteClaseMobil('#mensajeDos'); "><i class="fa fa-times"></i></button>
            <p class=" text-white">Favorecer el desarrollo integral de las ni&ntilde;as y los ni&ntilde;os en un
              ambiente arm&oacute;nico, igualitario e inclusivo, a trav&eacute;s de los
              programas establecidos por la Secretar&iacute;a de Educaci&oacute;n P&uacute;blica
              (SEP) y actividades l&uacute;dicas y recreativas apegadas a su nivel de
              desarrollo, edad y contexto sociocultural.</p>
          </div>

        </div>

        <div class="col-sm-12 col-md-12 col-lg-4">
          <div class="card border-0 mb-3 bg-ligh">
            <div class="row no-gutters " onclick="addClase('#mensaje3'); addClaseMobil('#mensajeTres');">
              <div class="col-md-4 mx-auto d-block">
                <img id="centrador-caci" class="card-img-top imagen-tamano2" src="img/ICONO SERVICIOS-24.svg"
                  alt="Card image">
              </div>
              <div class="col-md-8">
                <div class="card-body text-center margin-letters">
                  <h3 style="cursor:pointer; font-size: 1.3rem;" id="centrador-t2" class="card-text hover-img">
                    <strong>SERVICIOS </strong>
                  </h3>
                </div>
              </div>
            </div>
          </div>



        </div>
        <div id="mensajeTres" class="container jum my-auto mx-auto" style="display: none;">
          <div class="jumbotron color-yum">
            <button class="btn btn-md btn-dark float-right" type="button"
              onclick="deleteClase('#mensaje3'); deleteClaseMobil('#mensajeTres');"><i class="fa fa-times"></i></button>
            <p class=" text-white">El servicio se brinda a ni&ntilde;os y ni&ntilde;as en edades desde los 43
              d&iacute;as
              hasta los 5 a&ntilde;os 11 meses, organizado en grupos
              cronol&oacute;gicamente:</p>

            <ul_1 class=" text-white">
              <li>Lactante: de 43 d&iacute;as de nacido a 1 a&ntilde;o 6 meses</li>
              <li>Maternal: de 1 a&ntilde;os 7 meses a 2 a&ntilde;os 11 meses</li>
              <li>Preescolar 1: de 3 a&ntilde;os a 3 a&ntilde;os 11 meses</li>
              <li> Preescolar 2: de 4 a&ntilde;os a 4 a&ntilde;os 11 meses</li>
              <li>Preescolar 3: de 5 a&ntilde;os a 5 a&ntilde;os 11 meses</li>
            </ul_1>
            <p class=" text-white"> El horario de servicio es de lunes a viernes de 8:10 a 15:00 horas.</p>


          </div>

        </div>

      </div>
      <div id="mensaje1" class="container jum  my-auto mx-auto" style="display: none;">
        <div class="jumbotron color-yum">
          <button class="btn btn-md btn-dark float-right" type="button" onclick="deleteClase('#mensaje1')"><i
              class="fa fa-times"></i></button>
          <p class="text-white">Los Centros de Atenci&oacute;n y Cuidado Infantil de la Secretar&iacute;a de
            Administraci&oacute;n y Finanzas (CACI-SAF) ofrecen un servicio
            asistencial y pedag&oacute;gico a las hijas e hijos de las personas
            servidoras p&uacute;blicas del Gobierno de la Ciudad de M&eacute;xico en
            edades desde los 43 d&iacute;as hasta los 5 a&ntilde;os 11 meses.</p>
        </div>

      </div>
      <div id="mensaje2" class="container jum my-auto mx-auto" style="display: none;">
        <div class="jumbotron color-yum">
          <button class="btn btn-md btn-dark float-right" type="button" onclick="deleteClase('#mensaje2')"><i
              class="fa fa-times"></i></button>
          <p class=" text-white">Favorecer el desarrollo integral de las ni&ntilde;as y los ni&ntilde;os en un
            ambiente arm&oacute;nico, igualitario e inclusivo, a trav&eacute;s de los
            programas establecidos por la Secretar&iacute;a de Educaci&oacute;n P&uacute;blica
            (SEP) y actividades l&uacute;dicas y recreativas apegadas a su nivel de
            desarrollo, edad y contexto sociocultural.</p>
        </div>

      </div>
      <div id="mensaje3" class="container jum my-auto mx-auto" style="display: none;">
        <div class="jumbotron color-yum">
          <button class="btn btn-md btn-dark float-right" type="button" onclick="deleteClase('#mensaje3')"><i
              class="fa fa-times"></i></button>
          <p class=" text-white">El servicio se brinda a ni&ntilde;os y ni&ntilde;as en edades desde los 43 d&iacute;as
            hasta los 5 a&ntilde;os 11 meses, organizado en grupos
            por edad:</p>

          <ul_1 class=" text-white">
            <li>Lactante: de 43 d&iacute;as de nacido a 1 a&ntilde;o 6 meses</li>
            <li>Maternal: de 1 a&ntilde;os 7 meses a 2 a&ntilde;os 11 meses</li>
            <li>Preescolar 1: de 3 a&ntilde;os a 3 a&ntilde;os 11 meses</li>
            <li> Preescolar 2: de 4 a&ntilde;os a 4 a&ntilde;os 11 meses</li>
            <li>Preescolar 3: de 5 a&ntilde;os a 5 a&ntilde;os 11 meses</li>
          </ul_1>
          <p class=" text-white"> El horario de servicio es de lunes a viernes de 8:10 a 15:00 horas.</p>


        </div>

      </div>
    </div>
    <!--    <div id="mensaje1" class="container jum " style="display: none;">
      <div class="jumbotron color-yum">
        <button class="btn btn-md btn-dark float-right" type="button" onclick="deleteClase('#mensaje1')"><i
            class="fa fa-times"></i></button>
        <p class="text-white">Los Centros de Atenci&oacute;n y Cuidado Infantil de la Secretar&iacute;a de
          Administraci&oacute;n y Finanzas (CACI-SAF) ofrecen un servicio
          asistencial y pedag&oacute;gico a las hijas e hijos de las personas
          servidoras p&uacute;blicas del Gobierno de la Ciudad de M&eacute;xico en
          edades desde los 43 d&iacute;as hasta los 5 a&ntilde;os 11 meses.</p>
      </div>

    </div>-->



  </div>
</div>
</div>
{{-- <script src="{{URL::asset('assets/js/uikit.min.js')}}"></script>
<script src="{{URL::asset('assets/js/uikit-icons.min.js')}}"></script> --}}
@endsection