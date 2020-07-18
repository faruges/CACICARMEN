@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')


<style>
h1 {

  text-align: center;
  padding-top: 20px 0;
}

.table-bordered {
  border: 1px solid #ddd !important;
}

table caption {
  padding: .5em 0;
}

table tfoot tr td {
  text-align: center !important;
}

@media (max-width: 39.9375em) {
  .tablesaw-stack tbody tr:not(:last-child) {
    border-bottom: 2px solid #B;
  }
}

.p {
  text-align: center;
  padding-top: 140px;
  font-size: 14px;
}
</style>






<!--


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
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
	</div>-->














<br><br>


<h1>Tramites Vehiculares</h1>
<br>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <table summary="This table shows how to create responsive tables using Tablesaw's functionality" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
    
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
             <th>Domicilo</th>
            <th>Delegaciones</th>
            <th>Lista</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Brenda  </td>
            <td>Jimenez Palacios</td>
            <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)</td>
            <td>Iztapalapa</td>
            <td>2,780,387</td>
          </tr>
          <tr>
            <td>Jose </td>
            <td>Perez Flores</td>
            <td>2Dr. Lavista No. 54 casi esquina Dr. Andrade</td>
            <td>Cuauhtémoc</td>
            <td>7,739,983</td>
          </tr>
          <tr>
            <td>Gerardo </td>
            <td>Flores Palacios</td>
            <td>Oriente 42 No. 360 entre Lorenzo Boturini y Avenida del Taller</td>
            <td>Iztacalco</td>
            <td>43.2</td>
            
          </tr>
          <tr>
            <td>German</td>
            <td>Perez Jimenez</td>
            <td>Oriente 42 No. 360 entre Lorenzo Boturini y Avenida del Taller
Col. 24 de Abril C.P. 15980</td>
            <td>Venustiano Carranza</td>
            <td>2,586</td>
          </tr>
          <tr>
            <td>  García Arreguín</td>
            <td>Montserrat Carolina</td>
         <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)</td>
            <td>38.4</td>
            <td>17,076,310</td>
          </tr>
          <tr>
            <td>Karla Paulette</td>
            <td>Flores Silva</td>
         <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)</td>
            <td>41.1</td>
            <td>449,954</td>
          </tr>
                 <tr>
            <td>  Aniyensy Sarai</td>
            <td>Flores Aguilar</td>
         <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)</td>
            <td>41.1</td>
            <td>449,954</td>
          </tr>
                 <tr>
            <td>Hansel Andres</td>
            <td>Espejo Ramos</td>
         <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)</td>
            <td>41.1</td>
            <td>449,954</td>
          </tr>
                 <tr>
            <td>  Luis Felipe</td>
            <td>  Delgado Barróns</td>
           <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)</td>
            <td>41.1</td>
            <td>449,954</td>
          </tr>
                 <tr>
            <td>Ruth Silvana</td>
            <td>Chávez Heredia</td>
           <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)</td>
            <td>41.1</td>
            <td>449,954</td>
          </tr>
                 <tr>
            <td>Jaime Francisco</td>
            <td>Aguayo González</td>
           <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)</td>
            <td>Iztpalapa</td>
            <td>449,954</td>
          </tr>

 <tr>
            <td>Jaime Francisco</td>
            <td>Aguayo González</td>
           <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)</td>
            <td>Iztpalapa</td>
            <td>449,954</td>
          </tr>
           <tr>
            <td>Jaime Francisco</td>
            <td>Aguayo González</td>
           <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)</td>
            <td>Iztpalapa</td>
            <td>449,954</td>
          </tr>

           <tr>
            <td>Jaime Francisco</td>
            <td>Aguayo González</td>
           <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)</td>
            <td>Iztpalapa</td>
            <td>449,954</td>
          </tr>




        </tbody>
        <tfoot>
          <tr>
            <td colspan="5">secretaria de finanzas 
              <a style="color: #00b140;" target="_blank">Tramites Vehiculares</a>.</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>













@endsection

 



