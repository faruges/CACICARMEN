@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/4.0.6/sweetalert2.min.css'>

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
    background-color: #C2C2C2;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.accordion-item .accordion-title {
    cursor: pointer;
    padding: 20px;
    transition: all 0.4s;
    border-radius: 5px 5px 0 0;
}

.accordion-item .accordion-title.active-title {
    background-color: #C2C2C2;
    color: #FFF;
}

.accordion-item .accordion-title h2 {
    margin: 0;
    font-size: 18px;
    display: flex;
    justify-content: space-between;
}

.accordion-item .accordion-title i.fa-chevron-down {
    transform: rotate(0);
    transition: 0.4s;
}

.accordion-item .accordion-title i.fa-chevron-down.chevron-top {
    transform: rotate(-180deg);
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

.accordion-item .accordion-content p {
    margin: 0;
}






</style>




  <div class="container">
  <div class="item active">
     <img src="{{asset('img/11.png')}}" alt="Imagenes" style="width:100%;">
   </div>
</div>


        <div class="col-lg-12" style="margin-top: 3%;">
                <div class="col-sm-4" style="padding-left: 0px; padding-right: 0px;">
                      <h2 style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;text-align: center;" >Nuestros centros</h2>





<div class="accordions">
  <div class="accordion-item">
    <div class="accordion-title" data-tab="item1">
      <h2 style="text-align: center;">Luz Maria Gomez Pezuela</h2>
    </div>
    <div class="accordion-content" id="item1">
      <p>Dr. Claudio Bernard y </p>
                    <p>Dr. Lucio No.123 (planta baja)</p>
                    <p>Luz Maria Gomez Pezuela</p>
                    <p>Col.Doctores C.P. 07620</p>
                    <p>Del. Cuauhtemoc</p>
                    <p>Tel: 55 5588 3320, 55 5134 2550</p>
                   
    </div>
  </div>

  <div class="accordion-item">
    <div class="accordion-title" data-tab="item2">
      <h2 style="text-align: center;">Mtra. Eva Moreno Sanchez</h2>
    </div>
    <div class="accordion-content" id="item2">
        <p>Nº. 54 casi esquina Dr. Andrade</p>
                    <p>Col.Doctores C.P. 07620</p>
                    <p>Del. Cuauhtemoc</p>
                    <p>Tel: 55 5578 7676</p>
    </div>
  </div>

  <div class="accordion-item">
    <div class="accordion-title" data-tab="item3">
      <h2 style="text-align: center;">Bertha Von Glümer Leyva</h2>
    </div>
    <div class="accordion-content" id="item3">
         <p>Juesus Garcia Nº. 63 </p>
                    <p>Col. Guerrero C.P. 06300</p>
                    <p>Delegracion Cuauhtemoc</p>
                    <p>Tel. 55 5592 7098, 5566 1929</p>
    </div>
  </div>

  <div class="accordion-item">
    <div class="accordion-title" data-tab="item4">
      <h2 style="text-align: center;">Carolina Agazzi</h2>
    </div>
    <div class="accordion-content" id="item4">
            <p>Oriente 42 N°. 360 entre Lorenzo Boturini y Avenida  del Taller  </p>
                    <p>Col. 24 de Abril C.P. 15980</p>
                    <p>Delegracion Venustiano Carranza</p>
                    <p>Tel. 55 5592 7098, 5566 1929</p>
    </div>
  </div>

  <div class="accordion-item">
    <div class="accordion-title" data-tab="item5">
      <h2 style="text-align: center;">Carmen Serdan</h2>
    </div>
    <div class="accordion-content" id="item5">
   <p>Plaza Benito Juarez N° 10 </p>
                    <p>Col. Ramos Miloan C.P. 08000</p>
                    <p>Delegracion Iztacalco</p>
                    <p>Tel. 56572689</p>

    </div>
  </div>
</div>


                      <div  class style="background-color: #f5f5ef;" style="overflow: hidden; border-color: #cacaca; border-style: solid; border-width: 0px 0px 1px 0px; margin-bottom: 0%; margin-left: 3%; padding-right: 25px; padding-right:0px; background-color: #fff;">
                        <p class="card-text" id="texto_tweet">



                        	<font  color="#FFFFFF">
                               <p style="text-align: justify; background-color: #999999;"></p>
									</font>

<!--

									<font color="#00b140">
                  <p style="text-align: center;">	<b>CACI</b></p>
									</font>
                  <a style="color: #00b140;" href="centros">
										<h4>Luz Maria Gomez Pezuela</h4>
                  </a>
										<p>Dr. Claudio Bernard y </p>
										<p>Dr. Lucio No.123 (planta baja)</p>
										<p>Luz Maria Gomez Pezuela</p>
										<p>Col.Doctores C.P. 07620</p>
										<p>Del. Cuauhtemoc</p>
										<p>Tel: 55 5588 3320, 55 5134 2550</p>
										<p>Luz Maria Gomez Pezuela</p>
										<br>

							<font  color="#00b140">
						    <p style="text-align: center;">	<b>CACI</b></p>
							</font>
                  <a style="color: #00b140;" href="centros1" >
										<h4>Mtra. Eva Moreno Sanchez</h4>
                  </a>
										<p>Nº. 54 casi esquina Dr. Andrade</p>
										<p>Col.Doctores C.P. 07620</p>
										<p>Del. Cuauhtemoc</p>
										<p>Tel: 55 5578 7676</p>

                    	<font>
                      <p style="text-align: center;">	<b style="color:#00b401;">CACI</b></p>
                    	</font>
                    <a style="color: #00b140;" href="centros2">
                    <h4>Bertha Von Glümer Leyva</h4>
                    </a>
                    <p>Juesus Garcia Nº. 63 </p>
                    <p>Col. Guerrero C.P. 06300</p>
                    <p>Delegracion Cuauhtemoc</p>
                    <p>Tel. 55 5592 7098, 5566 1929</p>



                      <font>
                      <p style="text-align: center;"> <b style="color:#00b401;">CACI</b></p>
                      </font>
                    <a style="color: #00b140;" href="centros3">
                    <h4>Carolina Agazzi</h4>
                    </a>
                    <p>Oriente 42 N°. 360 entre Lorenzo Boturini y Avenida  del Taller  </p>
                    <p>Col. 24 de Abril C.P. 15980</p>
                    <p>Delegracion Venustiano Carranza</p>
                    <p>Tel. 55 5592 7098, 5566 1929</p>



                      <font>
                      <p style="text-align: center;"> <b style="color:#00b401;">CACI</b></p>
                      </font>
                    <a style="color: #00b140;" href="centros4" >
                    <h4>Carmen Serdan</h4>
                    </a>
                    <p>Plaza Benito Juarez N° 10 </p>
                    <p>Col. Ramos Miloan C.P. 08000</p>
                    <p>Delegracion Iztacalco</p>
                    <p>Tel. 56572689</p>




-->

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
                      	<br><br>

                      <div class="card-block" style="overflow: hidden; border-color: #cacaca; border-style: solid; border-width: 0px 0px 1px 0px; margin-bottom: 0%; margin-left: 3%; padding-right: 25px; padding-right:0px; background-color: #fff;">
                        <p class="card-text" id="texto_tweet"><font color="#00b140">
					     <h2 style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;">Centro de Atencion y Cuidado Infantil</h2>
					     <h2 style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;">Luz Maria Gomez Pazula</h2>
							<br>
							<br><br>
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

 
