@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')



<style>

/*Tablas*/

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


/*Img*/

.blog-img
{
    position: relative;
    margin-bottom: 20px;
    overflow: hidden;
}
.blog-img img:hover {
    opacity: 1;
    -webkit-transform: scale(1.05);
    -moz-transform: scale(1.05);
    -ms-transform: scale(1.05);
    -o-transform: scale(1.05);
    transform: scale(1.05);
}
.blog-img img {
    width: 100%;
    opacity: 0.8;
    -webkit-transition: all 0.5s linear;
    -moz-transition: all 0.5s linear;
    -ms-transition: all 0.5s linear;
    -o-transition: all 0.5s linear;
    transition: all 0.5s linear;
}







.accordions {
    font-family: arial;
    width: 50%;
    margin: 60px auto;
}

.accordion-item {
    background-color: #fefefe;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 9px;
}

.accordion-item .accordion-title {
    cursor: pointer;
    padding: 10px;
    transition: all 0.4s;
    border-radius: 5px 5px 0 0;
}

.accordion-item .accordion-title.active-title {
    background-color: #f2f2f2;
    color: #00b140;
}

.accordion-item .accordion-title h2 {
    margin: 0;
    font-size: 20px;
    display: flex;
    justify-content: space-between;
}



.accordion-item .accordion-content {
    display: none;
    line-height: 1.7;
    padding: 20px;

    border-radius: 0 0 5px 5px;
}

.accordion-item .accordion-content.active {
    display: block;
}







</style>
  <div class="container">
 </div>
        <div class="col-lg-12" style="margin-top: 3%;">
                <div class="col-sm-4" style="padding-left: 0px; padding-right: 0px;">
                      <h2 style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;text-align: center;" >Nuestros centros</h2>



<div class="accordions">
  <div class="accordion-item">
    <div class="accordion-title" data-tab="item1">
       
      <h2 style="text-align: center;">Luz María Gómez Pezuela</h2>
  
    </div>

    <div class="accordion-content" id="item1">
      <p>Dr. Claudio Bernard y Dr. Lucio No.123 (planta baja)</p>
      <p>Col.Doctores C.P. 07620</p>
      <p>Del. Cuauhtémoc</p>
      <p>Tel: 55-88-33-20</p>  
      <p>Tel. 51-34-25-50</p>      
    </div>



  <div style="background-color: #f2f2f2;" class="accordion-title">
    <a style="text-align: right; color:#00b140;" href="centros">
    <h2 class="fa fa-sign-out"> Ver información </h2></a>
  </div>



  </div>

  <div class="accordion-item">
    <div class="accordion-title" data-tab="item2">
      <h2 style="text-align: center;">Mtra. Eva Moreno Sánchez</h2>
    </div>
    <div class="accordion-content" id="item2">
        <p>Dr. Lavista No. 54 casi esquina Dr. Andrade</p>
        <p>Col.Doctores C.P. 07620</p>
        <p>Del. Cuauhtémoc</p>
        <p>Tel: 55-78-76-76</p>

    </div>


  <div style="background-color: #f2f2f2;" class="accordion-title">
    <a style="text-align: right; color:#00b140;" href="Eva_Moreno">
    <h2 class="fa fa-sign-out"> Ver información </h2></a>
  </div>



  </div>

  <div class="accordion-item">
    <div class="accordion-title" data-tab="item3">
      <h2 style="text-align: center;">Bertha von Glumer Leyva</h2>
    </div>
    <div class="accordion-content" id="item3">
         <p>Jesús García No. 63</p>
         <p>Col. Guerrero C.P. 06300</p>
         <p>Del. Cuauhtémoc</p>
         <p>Tel. 55-92-70-98</p>
         <p>Tel. 55-66-19-29</p>
    </div>


  <div style="background-color: #f2f2f2;" class="accordion-title">
    <a style="text-align: right; color:#00b140;" href="Bertha_von">
    <h2 class="fa fa-sign-out"> Ver información </h2></a>
  </div>




  </div>

  <div class="accordion-item">
    <div class="accordion-title" data-tab="item4">
      <h2 style="text-align: center;">Carolina Agazzi</h2>
    </div>
    <div class="accordion-content" id="item4">
          <p>Oriente 42 No. 360 entre Lorenzo Boturini y Avenida del Taller</p>
          <p>Col. 24 de Abril C.P. 15980</p>
          <p>Del. Venustiano Carranza</p>
          <p>Tel. 57-64-40-36</p>
          <p>Tel. 55-52-03-63</p>
    </div>


  <div style="background-color: #f2f2f2;" class="accordion-title">
    <a style="text-align: right; color:#00b140;" href="Carolina_Agazzi">
    <h2 class="fa fa-sign-out"> Ver información </h2></a>
  </div>


  </div>

  <div class="accordion-item">
    <div class="accordion-title" data-tab="item5">
      <h2 style="text-align: center;">Carmen Serdán</h2>
    </div>
    <div class="accordion-content" id="item5">
          <p>Plaza Benito Juárez No. 10</p>
          <p>Col. Ramos Millán C.P. 08000</p>
          <p>Del. Iztacalco</p>
          <p>Tel. 56-57-26-89</p>
    </div>

  <div style="background-color: #f2f2f2;" class="accordion-title">
    <a style="text-align: right; color:#00b140;" href="Carmen_Serdan">
    <h2 class="fa fa-sign-out"> Ver información </h2></a>
  </div>

 

  </div>

</div>

                    </div>

                <div class="col-sm-4" style="padding-left: 0px; padding-right: 0px;">
                	<br><br>	<br>
                     <!-- <h2 style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;">Últimos tweets</h2>-->
                      <div class="card-block" style="overflow: hidden; border-color: #cacaca; border-style: solid; border-width: 0px 0px 1px 0px; margin-bottom: 0%; margin-left: 3%; padding-right: 25px; padding-right:0px; background-color: #fff;">
                        <p class="card-text" id="texto_tweet"><font color="#00b140">
                        <div class="blog-img">
                        <a href="ubuicacion" target="_blank">
                        <img src="{{asset('img/ubicacion.png')}}" alt="Imagenes" style="width:100%;"></a>
                       </div>
                      </div>

                      <div class="card-block" style="overflow: hidden; border-color: #cacaca; border-style: solid; border-width: 0px 0px 1px 0px; margin-bottom: 0%; margin-left: 3%; padding-right: 25px; padding-right:0px; background-color: #fff;">
                        <p class="card-text" id="texto_tweet"><font color="#00b140">
                         <div class="blog-img">
					      <a href="instalaciones" target="_blank">
					     <img src="{{asset('img/resposable.jpg')}}"  href="instalaciones" target="_blank"   alt="Imagenes" style="width:100%;"></a>
                       </div>
                      </div>

                      <div class="card-block" style="overflow: hidden; border-color: #cacaca; border-style: solid; border-width: 0px 0px 1px 0px; margin-bottom: 0%; margin-left: 3%; padding-right: 25px; padding-right:0px; background-color: #fff;">
                        <p class="card-text" id="texto_tweet"><font color="#00b140">
                        <div class="blog-img">
                        <a href="tramiles_CACI" target="_blank">
                        <img src="{{asset('img/tramites.jpg')}}" alt="Imagenes" style="width:100%;"></a>
                       </div>
                      </div>
                    </div>

                <div class="col-sm-4" style="padding-left: 0px; padding-right: 0px;">
                      	<br><br><br>
                      <div class="card-block" style="overflow: hidden; border-color: #cacaca; border-style: solid; border-width: 0px 0px 1px 0px; margin-bottom: 0%; margin-left: 3%; padding-right: 25px; padding-right:0px; background-color: #fff;">
                        <p class="card-text" id="texto_tweet"><font color="#00b140">
					     <h2 style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;">Centro de Atención y Cuidado Infantil</h2>
					     <h2 style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;">Bertha von Glumer Leyva</h2>
							<br>
							<br><br>
                      </div>
                      <div class="card-block" style="overflow: hidden; border-color: #cacaca; border-style: solid; border-width: 0px 0px 1px 0px; margin-bottom: 0%; margin-left: 3%; padding-right: 25px; padding-right:0px; background-color: #fff;">
                        <p class="card-text" id="texto_tweet"><font color="#00b140">
                        <div class="blog-img">
                        <a href="titular" target="_blank">	
                        <img src="{{asset('img/instalaciones.jpg')}}" alt="Imagenes" style="width:100%;"></a>
                       </div>
                      </div>

                    <div class="card-block" style="overflow: hidden; border-color: #cacaca; border-style: solid; border-width: 0px 0px 1px 0px; margin-bottom: 0%; margin-left: 3%; padding-right: 25px; padding-right:0px; background-color: #fff;">
                        <p class="card-text" id="texto_tweet"><font color="#00b140">
                        <div class="blog-img">
                    
                        <img src="{{asset('img/civil.jpg')}}" alt="Imagenes" style="width:100%;"></a>
                       </div>
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

 
