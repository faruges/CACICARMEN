@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')


<style>
  


.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 65vh;
    padding: 30px 50px;
}

.gallery-container h1 {
    text-align: center;
    margin-top: 50px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 25px auto;
    font-size: 18px;
    color: #999;
}

.tz-gallery {
    padding: 40px;
}

/* Override bootstrap column paddings */
.tz-gallery .row > div {
    padding: 2px;
}

.tz-gallery .lightbox img {
    width: 100%;
    border-radius: 0;
    position: relative;
}

.tz-gallery .lightbox:before {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -13px;
    margin-left: -13px;
    opacity: 0;
    color: #fff;
    font-size: 26px;
    font-family: 'Glyphicons Halflings';
    content: '\e003';
    pointer-events: none;
    z-index: 9000;
    transition: 0.4s;
}


.tz-gallery .lightbox:after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(46, 132, 206, 0.7);
    content: '';
    transition: 0.4s;
}

.tz-gallery .lightbox:hover:after,
.tz-gallery .lightbox:hover:before {
    opacity: 1;
}

.baguetteBox-button {
    background-color: transparent !important;
}

@media(max-width: 768px) {
    body {
        padding: 0;
    }
}
</style>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">



<div class="container gallery-container">

    <div class="tz-gallery">

        <div class="row">




            <div class="col-sm-12 col-md-4">

      <div style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;text-align: center; " class="w3-container">
   
                
                <a style="height: 900px;" class="lightbox" href="{{asset('img/1.png')}}">
                    <img src="{{asset('img/1.png')}}" alt="Bridge">
                </a>

     <h2>Salón maternal</h2>
      </div>

            </div>




            <div class="col-sm-6 col-md-4">
      <div style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;text-align: center;" class="w3-container">
     
                
                <a class="lightbox" href="{{asset('img/22.png')}}">
                    <img src="{{asset('img/22.png')}}" alt="Park">
                </a>
   <h2>salón de juegos</h2>
      </div>

            </div>



            <div class="col-sm-6 col-md-4">
                    <div style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;text-align: center;" class="w3-container">
     
                <a class="lightbox" href="{{asset('img/3.png')}}">
                    <img src="{{asset('img/3.png')}}" alt="Tunnel">
                </a>

                 <h2>Feachada</h2>
      </div>
            </div>
            <div class="col-sm-10 col-md-6">
 <div style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;text-align: center;" class="w3-container">
                <a class="lightbox" href="{{asset('img/1.png')}}">
                    <img src="{{asset('img/1.png')}}" alt="Traffic">
                </a>

                          <h2>Salón maternal</h2>
      </div>
            </div>
               <div class="col-sm-10 col-md-6">

                 <div style="color: #333333; font-size: 29px; font-weight: bold; text-transform: none; margin-left: 3%;text-align: center;" class="w3-container">
                <a class="lightbox" href="{{asset('img/3.png')}}">
                    <img src="{{asset('img/3.png')}}" alt="Tunnel">
                </a>

                          <h2>Gimnasio</h2>
      </div>
            </div>
           

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>







@endsection

 



