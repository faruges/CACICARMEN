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



</style>

  <div class="container">

</div>
        <div class="col-lg-12" style="margin-top: 3%;">
                <div class="col-sm-4" style="padding-left: 0px; padding-right: 0px;">
                      <h2 style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;text-align: center;" >Nuestros centros</h2>
                      <div  class style="background-color: #f5f5ef;" style="overflow: hidden; border-color: #cacaca; border-style: solid; border-width: 0px 0px 1px 0px; margin-bottom: 0%; margin-left: 3%; padding-right: 25px; padding-right:0px; background-color: #fff;">
                        <p class="card-text" id="texto_tweet">
                        	<font  color="#FFFFFF">
                               <p style="text-align: justify; background-color: #999999;"></p>
									</font>
									<font color="#00b140"> 
                                        <p style="text-align: center;">	<b>CACI</b>
                                        </p>
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
                    <a style="color: #00b140;" href="centros1">
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

                      </div>
                    </div>

                <div class="col-sm-4" style="padding-left: 0px; padding-right: 0px;">
                	<br><br>	<br>
                     <!-- <h2 style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;">Últimos tweets</h2>-->
                      <div class="card-block" style="overflow: hidden; border-color: #cacaca; border-style: solid; border-width: 0px 0px 1px 0px; margin-bottom: 0%; margin-left: 3%; padding-right: 25px; padding-right:0px; background-color: #fff;">
                        <p class="card-text" id="texto_tweet"><font color="#00b140">
                        <div class="blog-img">
                        <a href="http://procesos.finanzas.cdmx.gob.mx/sistema_mapas/mapas.html" target="_blank">
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
					     <h2 style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;">Mtra. Eva Moreno Sanchez</h2>
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

@endsection

 
