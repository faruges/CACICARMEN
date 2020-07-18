@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')


<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
 <div class="item active">
     <img src="{{asset('img/11.png')}}" alt="Los Angeles" style="width:100%;">
   </div>
      
   <div class="item">
      <img src="{{asset('img/banner.png')}}"  alt="Chicago" style="width:100%;">
   </div>

   <div class="item">
      <img src="{{asset('img/3.png')}}"  alt="New york" style="width:100%;">
   </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
	</div><br><br>

    <div style="text-align: center; background-color: #FFFFFF; margin-top: -90px;" class="jumbotron">
		 <h2>Centro de atención y cuidado infantil</h2>
		 <h2>(CACI)</h2>
		 <h2>PERFIL DEL USUARIO</h2>
         <br>
		<p>Padres, Madres o de quien ejerza la patria potestad, o guarda y custodia, trabajadores en servicio activo de base de la Ciudad de México y que cotice al Sindicato Único de Trabajadores de la Ciudad de México.</p>
		<p>Así mismo de conformidad con la CIRCULAR SFCDMX/SSACH/DGDHP/003/2018 desde el 8 de enero del 2018, gozan del servicio los trabajadores de base sin dígito sindical, nómina 8 y personal de estructura
           del ámbito central y de los Órganos Políticos Administrativos del Gobierno de la Ciudad de México.</p>
		<p>En caso de que la o el trabajador solicitante sea el tutor de la o el menor deberá presentar la documentación que lo acredite, expedida por las instancias correspondientes.</p>
	</div>

@endsection

