@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')


<link href="{{ asset('css/style.css')}}" rel="stylesheet" />

<div class="item active">
  <img src="{{asset('img/11.png')}}" alt="Imagenes" style="width:100%;">
</div>
<div class="row">
  <div class="col-sm-4 col-md-4 col-lg-4">
    <h2 style=" font-weight:bold; text-align: center; color:#777777;">Nuestro CACI-SAF</h2>

    <div class="accordions">

      <div class="accordion-item">
        <div class="accordion-title" data-tab="item1">
          <h2 style="color: #777777;">Luz María Gómez Pezuela</h2>
        </div>
        <div class="accordion-content" id="item1">
          <p>Dr. Claudio Bernard No.123 </p>
          <p>Col.Doctores C.P. 06720</p>
          <p>Alcaldía. Cuauhtémoc</p>
          <p>Tel: 55-88-33-20</p>
          <p>Tel. 51-34-25-50</p>
        </div>
        <div style="background-color: #f2f2f2;" class="accordion-title">
          <a style="text-align: right; color:#235B4E;" href="centros_Luz_María">
            <h2> Ver información </h2>
          </a>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-title" data-tab="item2">
          <h2 style="color: #777777;">Mtra. Eva Moreno Sánchez</h2>
        </div>
        <div class="accordion-content" id="item2">
          <p>Dr. Lavista No. 54 </p>
          <p>Col.Doctores C.P. 06720</p>
          <p>Alcaldía. Cuauhtémoc</p>
          <p>Tel: 55-78-76-76</p>
        </div>
        <div style="background-color: #f2f2f2;" class="accordion-title">
          <a style="text-align: right; color:#235B4E;" href="centros_Eva_Moreno">
            <h2> Ver información </h2>
          </a>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-title" data-tab="item3">
          <h2 style="color: #777777;">Bertha Von Glümer Leyva</h2>
        </div>
        <div class="accordion-content" id="item3">
          <p>Jesús García No. 63</p>
          <p>Col. Buenavista C.P. 06350</p>
          <p>Alcaldía. Cuauhtémoc</p>
          <p>Tel. 55-92-70-98</p>
          <p>Tel. 55-66-19-29</p>
        </div>
        <div style="background-color: #f2f2f2;" class="accordion-title">
          <a style="text-align: right; color:#235B4E;" href="centros_Bertha_von">
            <h2> Ver información </h2>
          </a>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-title" data-tab="item4">
          <h2 style="color: #777777;">Carolina Agazzi</h2>
        </div>
        <div class="accordion-content" id="item4">
          <p>Oriente 42 No. 360 entre Lorenzo Boturini y Avenida del Taller</p>
          <p>Col. 24 de Abril C.P. 15980</p>
          <p>Alcaldía. Venustiano Carranza</p>
          <p>Tel. 57-64-40-36</p>
          <p>Tel. 55-52-03-63</p>
        </div>
        <div style="background-color: #f2f2f2;" class="accordion-title">
          <a style="text-align: right; color:#235B4E;" href="centros_Carolina_Agazzi">
            <h2> Ver información </h2>
          </a>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-title" data-tab="item5">
          <h2>Carmen Serdán</h2>
        </div>
        <div class="accordion-content" id="item5">
          <p>Plaza Benito Juárez No. 10</p>
          <p>Col. Gabriel Ramos Millán C.P. 08000</p>
          <p>Alcaldía. Iztacalco</p>
          <p>Tel. 56-57-26-89</p>
          <p>Tel. 56-34-38-58</p>
        </div>
        <div style="background-color: #f2f2f2;" class="accordion-title">
          <a style="text-align: right; color:#235B4E;" href="centros_Carmen_Serdan">
            <h2> Ver información </h2>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-4 col-md-4 col-lg-4" style="padding-top: 12px;">
    <div class="card-block">
      <p class="card-text" id="texto_tweet">
        <div class="blog-img">
          <a href="mapas" target="_blank">
            <img src="{{asset('img/ubicacion.png')}}" alt="Imagenes" style="width:100%;"></a>
        </div>
    </div>

    <div class="card-block">
      <p class="card-text" id="texto_tweet">
        <div class="blog-img">
          <a href="titular_María_Ofelia">
            <img src="{{asset('img/resposable.jpg')}}" alt="Imagenes" style="width:100%;"></a>
        </div>
    </div>

    <div class="card-block">
      <p class="card-text" id="texto_tweet">
        <div class="blog-img">
          <!-- <a href="tramiles_CACI" target="_blank"> -->
          <img src="{{asset('img/tramites.jpg')}}" alt="Imagen" style="width:100%;"></a>
        </div>
    </div>
  </div>

  <div class="col-sm-4 col-md-4 col-lg-4" style="text-align: center;">
    <div class="card-block">
      <p class="card-text" id="texto_tweet">
        <h2 style=" font-weight: bold; color:#777777;">Centro de Atención y Cuidado Infantil</h2>
        <h2 style="font-weight: bold; color:#235B4E;">Carmen Serdán</h2>
        <br><br><br>
    </div>

    <div class="card-block">
      <p class="card-text" id="texto_tweet">
        <div class="blog-img">
          <a href="instalaciones_Carmen_Serdan">
            <img src="{{asset('img/instalaciones.jpg')}}" alt="Imagenes" style="width:100%;"></a>
        </div>
    </div>

    <div class="card-block">
      <p class="card-text" id="texto_tweet">
        <div class="blog-img">
          <img src="{{asset('img/civil.jpg')}}" alt="Imagenes" style="width:100%;"></a>
        </div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function(){
    $(".accordion-title").click(function(e){
        var accordionitem = $(this).attr("data-tab");
        $("#"+accordionitem).slideToggle().parent().siblings().find(".accordion-content").slideUp();

        $(this).toggleClass("active-title");
        $("#"+accordionitem).parent().siblings().find(".accordion-title").removeClass("active-title");

        $("i.fa-chevron-down",this).toggleClass("chevron-top");
        $("#"+accordionitem).parent().siblings().find(".accordion-title i.fa-chevron-down").removeClass("chevron-top");
    });
    
});

</script>
@endsection