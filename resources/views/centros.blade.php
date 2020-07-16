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

<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">

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




  <div class="item active">
     <img src="{{asset('img/11.png')}}" alt="Imagenes" style="width:100%;">
   </div>

 <div class="container">

  <div class="column nature">


  
    <div class="content">
    		<div class="blog-img">
     <img src="{{asset('img/ubicacion.png')}}" alt="Imagenes" style="width:30%;">
    </div>
      <h2>Centro de Atencion y Cuidado Infantil</h2>
      <h3>Luz Maria Gomez Pazuela</h3>
    </div>



  <div class="column nature">
    <div class="content">
    <img src="/w3images/lights.jpg" alt="Imagenes" style="width:100%">
      <h4>Imagenes</h4>
      <p>.............................</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="/w3images/nature.jpg" alt="Imagenes" style="width:100%">
      <h4>Imagenes</h4>
      <p>..............................</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="/w3images/cars1.jpg" alt="Imagenes" style="width:100%">
      <h4>Imagenes</h4>
      <p>.............................</p>
    </div>
  </div>

</div>

</div>

<br>
  <div class="container">
  <div style="text-align: center; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'">
<h5 style="color: #00b140;">CENTROS DE ATENCIÓN Y CUIDADO INFANTIL DE LA SECRETARÍA DE ADMINISTRACIÓN Y FINANZAS DEL GOBIERNO DE LA CIUDAD DE MÉXICO</h5>




<table width="200" border="1">
  <tbody>
    <tr>
      <td>DOMICILIO</td>
      <td>TELEFONO</td>
    </tr>
    <tr>
      <td>Dr. Claudio Bernard y Dr. Lucio No. 123 (planta baja)
Col. Doctores C.P. 07620
Del. Cuauhtémoc</td>
      <td>55-88-33-20 y 
51-34-25-50</td>
    </tr>
    <tr>
      <td>Dr. Lavista No. 54 casi esquina Dr. Andrade
Col. Doctores C.P. 07620
Del. Cuauhtémoc</td>
      <td>55-78-76-76</td>
    </tr>
    <tr>
      <td>Jesús García No. 63
Col. Guerrero   C.P. 06300
Delegación Cuauhtémoc</td>
      <td>55-92-70-98 y 
55-66-19-29</td>
    </tr>
    <tr>
      <td>Oriente 42 No. 360 entre Lorenzo Boturini y Avenida del Taller
Col. 24 de Abril C.P. 15980
Delegación Venustiano Carranza</td>
      <td>57-64-40-36 y 
55-52-03-63</td>
    </tr>
    <tr>
      <td>Plaza Benito Juárez No. 10
Col. Ramos Millán C.P. 08000
Delegación Iztacalco</td>
      <td>56-57-26-89</td>
    </tr>
   
  </tbody>
</table>


</div>
</div>
<br>

<br>



<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>







@endsection

 
