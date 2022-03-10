@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

    <link href="{{ asset('css/style.css')}}" rel="stylesheet"/>

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
            font-size: 1rem;
            font-family: 'source sans pro', sans-serif;
        }

        .style-tel-caci {
            margin-left: 1.3rem;
            margin-top: 0;
            font-size: 1.1rem;
            font-family: 'source sans pro', sans-serif;
        }

        .style-location-caci {
            /*  margin-top: 2rem; */
            background-color: #9F2241;
            padding-right: 0.9rem;
            padding-left: 0.9rem;
            padding-top: 0.4rem;
            padding-bottom: 0.69rem;
        }

        .style-gallery-caci {
            /* margin-top: 2rem; */
            margin-left:0.5rem ;
            background-color: #9F2241;
            padding-bottom: 0.5rem;
            padding-top: 0.5rem;
            color: #fff;
            font-weight: 700;
            font-size: 1.2rem;
            font-family: 'sans source pro', sans-serif;
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
            .relative {
                position: relative;
            }

            .absolute1 {
                position: absolute;
                z-idex: 1;
            }

            .absolute2 {
                position: absolute;
                top: 10rem;
                z-index: 2;
            }

            .style-location-caci {
                margin-top: 2rem;
                margin-bottom: 2rem;
                margin-left: 2.5rem;
                background-color: #9F2241;
                padding: 0.5rem 4.3rem;
            }

            .style-gallery-caci {
                margin-top: 2rem;
                margin-bottom: 2rem;
                margin-left: 2.5rem;
                background-color: #9F2241;
                padding: 0.5rem 5rem;
                padding-right: 4rem;
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

        /* modal carrussel */
        * {
            box-sizing: border-box;
        }

        img {
            vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        .mySlides2 {
            display: none;
        }

        .mySlides3 {
            display: none;
        }

        .mySlides4 {
            display: none;
        }

        .mySlides5 {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .demo2 {
            opacity: 0.6;
        }

        .demo3 {
            opacity: 0.6;
        }

        .demo4 {
            opacity: 0.6;
        }

        .demo5 {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        .demo2:hover {
            opacity: 1;
        }

        .demo3:hover {
            opacity: 1;
        }

        .demo4:hover {
            opacity: 1;
        }

        .demo5:hover {
            opacity: 1;
        }

    </style>

    <div class="row" style="margin-top: 2rem; margin-bottom:3rem;">
        <h1 style="font-family: 'source sans pro', sans-serif; color:#235B52;">CONOCE NUESTROS CENTROS DE ATENCIÓN Y
            CUIDADO INFANTIL</h1>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card-text">
                <h2 class="style-centro-caci">CACI #2 LUZ MA. GÓMEZ
                    PEZUELA</h2>
                <p class="style-dir-caci"><img src="img/ICONO UBICACIÓN-31.svg" style="height: 1rem; width: 1rem;"/>
                    Claudio
                    Bernard No. 123, Col. Doctores
                    C.P. 07620, Alcaldía Cuauhtémoc</p>
                <p class="style-email-caci">
                    <img src="img/ICONO CORREO-32.svg" style="height: 1rem; width: 1rem;"/>
                    caciluzmariagomez@finanzas.cdmx.gob.mx
                </p>
                <p class="style-tel-caci"><img src="img/ICONO TELÉFONO 2-33.svg" style="height: 1rem; width: 1rem;"/>
                    55-88-33-20
                    / 51-34-25-50</p>
                <div><a href="https://goo.gl/maps/Ts16yzXegSedRCg38" target="_blank" class="style-location-caci"><span
                            style="color: #fff; font-weight: 700; font-size: 1rem; font-family: 'sans source pro', sans-serif;">VER UBICACIÓN</span></a>

                    <button type="button" class=" style-gallery-caci" data-toggle="modal"
                            data-target="#ModalCarousel">
                        Ver Imagenes
                    </button>
                </div>
            </div>
            <div>


                <!-- Modal -->
                <div class="modal fade" id="ModalCarousel" tabindex="-1" role="dialog"
                     aria-labelledby="ModalCarouselLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div id="carousel-modal-demo" class="carousel slide" data-ride="carousel">


                                <div class="container">
                                    <div class="mySlides">
                                        <div class="numbertext">1 / 8</div>
                                        <img src="img/modal_carussel_centro_casi/FOTOS_CACI_2/1.jpeg"
                                             style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">2 / 8</div>
                                        <img src="img/modal_carussel_centro_casi/FOTOS_CACI_2/2.jpeg"
                                             style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">3 / 8</div>
                                        <img src="img/modal_carussel_centro_casi/FOTOS_CACI_2/3.jpeg"
                                             style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">4 / 8</div>
                                        <img src="img/modal_carussel_centro_casi/FOTOS_CACI_2/4.jpeg"
                                             style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">5 / 8</div>
                                        <img src="img/modal_carussel_centro_casi/FOTOS_CACI_2/5.jpeg"
                                             style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">6 / 8</div>
                                        <img src="img/modal_carussel_centro_casi/FOTOS_CACI_2/6.jpeg"
                                             style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">7 / 8</div>
                                        <img src="img/modal_carussel_centro_casi/FOTOS_CACI_2/7.jpeg"
                                             style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">8 / 8</div>
                                        <img src="img/modal_carussel_centro_casi/FOTOS_CACI_2/8.jpeg"
                                             style="width:100%">
                                    </div>

                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                            <img class="demo cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_2/1.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(1)" alt="1">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_2/2.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(2)" alt="2">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_2/3.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(3)" alt="3">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_2/4.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(4)" alt="4">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_2/5.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(5)" alt="5">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_2/6.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(6)" alt="6">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_2/7.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(7)" alt="7">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_2/8.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(8)" alt="8">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card card-info-caci">
                <div class="card-body">
                    <div class="row relative">
                        <div class="col-sm-3 col-md-3 col-lg-4 absolute1">
                            <img class="img-circle-responsable" src="img/Responsables/1.png"/>
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
                <p class="style-dir-caci"><img src="img/ICONO UBICACIÓN-31.svg" style="height: 1rem; width: 1rem;"/> Dr.
                    Lavista No. 54, Col. Doctores C.P. 06720, Alcaldía Cuauhtémoc.</p>
                <p class="style-email-caci">
                    <img src="img/ICONO CORREO-32.svg" style="height: 1rem; width: 1rem;"/>
                    cacievamoreno@finanzas.cdmx.gob.mx</p>
                <p class="style-tel-caci"><img src="img/ICONO TELÉFONO 2-33.svg" style="height: 1rem; width: 1rem;"/>
                    55-78-76-76</p>
                <div><a href="https://goo.gl/maps/9CqK6D3MNmFqobA68" target="_blank" class="style-location-caci"><span
                            style="color: #fff; font-weight: 700; font-size: 1rem; font-family: 'sans source pro', sans-serif;">VER UBICACIÓN</span></a>

                    <button type="button" onclick="showl2(4)" class="style-gallery-caci" data-toggle="modal"
                            data-target="#ModalCarousel2">
                        Ver Imagenes
                    </button>
                </div>

                <div>


                    <!-- Modal -->
                    <div class="modal fade" id="ModalCarousel2" tabindex="-1" role="dialog"
                         aria-labelledby="ModalCarouselLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div id="carousel-modal-demo" class="carousel slide" data-ride="carousel">


                                    <div class="container">
                                        <div class="mySlides2">
                                            <div class="numbertext">1 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/PHOTO-2022-01-13-14-52-17.jpeg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">2 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/PHOTO-2022-01-13-14-52-17_(2).jpg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">3 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.11 _(1).jpeg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">4 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.12 _(2).jpeg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">5 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.12 _(4).jpeg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">6 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.12 _(7).jpeg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">7 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.12_(5).jpeg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">8 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.12_(10).jpeg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">9 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.12_(11).jpeg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">10 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.13.jpeg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">11 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.13_(2).jpeg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">12 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.13_(3).jpeg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">13 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.14.jpeg"
                                                style="width:100%">
                                        </div>

                                        <div class="mySlides2">
                                            <div class="numbertext">14 / 14</div>
                                            <img
                                                src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.14 _(1).jpeg"
                                                style="width:100%">
                                        </div>

                                        <a class="prev" onclick="plusSlides2(-1)">❮</a>
                                        <a class="next" onclick="plusSlides2(1)">❯</a>

                                        <div class="caption-container">
                                            <p id="caption2"></p>
                                        </div>

                                        <div class="row">
                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/PHOTO-2022-01-13-14-52-17.jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(1)" alt="1"
                                                     id="inicio">
                                            </div>
                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/PHOTO-2022-01-13-14-52-17_(2).jpg"
                                                     style="width:100%"
                                                     onclick="currentSlide(2)" alt="2">
                                            </div>
                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.11 _(1).jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(3)" alt="3">
                                            </div>
                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.12 _(2).jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(4)" alt="4">
                                            </div>
                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.12 _(4).jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(5)" alt="5">
                                            </div>
                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.12 _(7).jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(6)" alt="6">
                                            </div>
                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.12_(5).jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(7)" alt="7">
                                            </div>
                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.12_(10).jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(8)" alt="8">
                                            </div>

                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.12_(11).jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(9)" alt="9">
                                            </div>

                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.13.jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(10)" alt="10">
                                            </div>

                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.13_(2).jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(11)" alt="11">
                                            </div>

                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.13_(3).jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(12)" alt="12">
                                            </div>

                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.14.jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(13)" alt="13">
                                            </div>

                                            <div class="column">
                                                <img class="demo2 cursor"
                                                     src="img/modal_carussel_centro_casi/FOTOS_CACI_4/WhatsApp_Image_2022-02-17_at_16.04.14 _(1).jpeg"
                                                     style="width:100%"
                                                     onclick="currentSlide(14)" alt="14">
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card card-info-caci">
                <div class="card-body">
                    <div class="row relative">
                        <div class="col-sm-3 col-md-3 col-lg-4 absolute1">
                            <img class="img-circle-responsable" src="img/Responsables/2.png"/>
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
                <p class="style-dir-caci"><img src="img/ICONO UBICACIÓN-31.svg" style="height: 1rem; width: 1rem;"/>
                    Jesús García No. 63, Col. Guerrero C.P. 06350, Alcaldía Cuauhtémoc.</p>
                <p class="style-email-caci">
                    <img src="img/ICONO CORREO-32.svg" style="height: 1rem; width: 1rem;"/>
                    caciberthavonglumer@finanzas.cdmx.gob.mx</p>
                <p class="style-tel-caci"><img src="img/ICONO TELÉFONO 2-33.svg" style="height: 1rem; width: 1rem;"/>
                    55-92-70-98 / 55-66-19-29</p>
                <div><a href="https://goo.gl/maps/HB3mgqfYiWXWPeRr8" target="_blank" class="style-location-caci"><span
                            style="color: #fff; font-weight: 700; font-size: 1rem; font-family: 'sans source pro', sans-serif;">VER UBICACIÓN</span></a>

                    <button type="button" onclick="showl2(6)" class=" style-gallery-caci" data-toggle="modal"
                            data-target="#ModalCarousel3">
                        Ver Imagenes
                    </button>
                </div>
            </div>
            <!--            modal -->
            <div>


                <!-- Modal -->
                <div class="modal fade" id="ModalCarousel3" tabindex="-1" role="dialog"
                     aria-labelledby="ModalCarouselLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div id="carousel-modal-demo" class="carousel slide" data-ride="carousel">


                                <div class="container">
                                    <div class="mySlides3">
                                        <div class="numbertext">1 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-06.jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides3">
                                        <div class="numbertext">2 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-06 (1).jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides3">
                                        <div class="numbertext">3 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-07.jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides3">
                                        <div class="numbertext">4 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-08.jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides3">
                                        <div class="numbertext">5 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-09.jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides3">
                                        <div class="numbertext">6 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-10.jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides3">
                                        <div class="numbertext">7 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-11.jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides3">
                                        <div class="numbertext">8 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-12.jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides3">
                                        <div class="numbertext">9 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-12 (1).jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides3">
                                        <div class="numbertext">10 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-36.jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides3">
                                        <div class="numbertext">11 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-46-01.jpg"
                                            style="width:100%">
                                    </div>


                                    <a class="prev" onclick="plusSlides3(-1)">❮</a>
                                    <a class="next" onclick="plusSlides3(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption3"></p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                            <img class="demo3 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-06.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(1)" alt="1"
                                                 id="inicio">
                                        </div>
                                        <div class="column">
                                            <img class="demo3 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-06 (1).jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(2)" alt="2">
                                        </div>
                                        <div class="column">
                                            <img class="demo3 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-07.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(3)" alt="3">
                                        </div>
                                        <div class="column">
                                            <img class="demo3 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-08.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(4)" alt="4">
                                        </div>
                                        <div class="column">
                                            <img class="demo3 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-09.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(5)" alt="5">
                                        </div>
                                        <div class="column">
                                            <img class="demo3 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-10.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(6)" alt="6">
                                        </div>
                                        <div class="column">
                                            <img class="demo3 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-11.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(7)" alt="7">
                                        </div>
                                        <div class="column">
                                            <img class="demo3 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-12.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(8)" alt="8">
                                        </div>

                                        <div class="column">
                                            <img class="demo3 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-12 (1).jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(9)" alt="9">
                                        </div>

                                        <div class="column">
                                            <img class="demo3 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-45-36.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(10)" alt="10">
                                        </div>

                                        <div class="column">
                                            <img class="demo3 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CAC_6/PHOTO-2022-01-12-14-46-01.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(11)" alt="11">
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--            modal -->

        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card card-info-caci">
                <div class="card-body">
                    <div class="row relative">
                        <div class="col-sm-3 col-md-3 col-lg-4 absolute1">
                            <img class="img-circle-responsable" src="img/Responsables/3.png"/>
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
                <p class="style-dir-caci"><img src="img/ICONO UBICACIÓN-31.svg" style="height: 1rem; width: 1rem;"/>
                    Oriente 42 No. 360, Col. 24 de abril C.P. 15980, Alcaldía Venustiano Carranza.</p>
                <p class="style-email-caci">
                    <img src="img/ICONO CORREO-32.svg" style="height: 1rem; width: 1rem;"/>
                    cacicarolinaagazzi@finanzas.cdmx.gob.mx</p>
                <p class="style-tel-caci"><img src="img/ICONO TELÉFONO 2-33.svg" style="height: 1rem; width: 1rem;"/>
                    57-64-40-36 / 55-52-03-63</p>
                <div>
                    <a href="https://www.google.com.mx/maps/place/Ote.+42+360,+24+de+Abril,+Venustiano+Carranza,+15980+Ciudad+de+M%C3%A9xico,+CDMX/@19.415703,-99.118255,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1febc6e4fee5d:0x5ce6a39b00030f8!8m2!3d19.415703!4d-99.1160663"
                       target="_blank" class="style-location-caci"><span
                            style="color: #fff; font-weight: 700; font-size: 1rem; font-family: 'sans source pro', sans-serif;">
                            VER UBICACIÓN</span></a>

                    <button type="button" onclick="showl2(7)" class="style-gallery-caci" data-toggle="modal"
                            data-target="#ModalCarousel4">
                        Ver Imagenes
                    </button>
                </div>
            </div>
            <!--            modal -->
            <div>

                <div class="modal fade" id="ModalCarousel4" tabindex="-1" role="dialog"
                     aria-labelledby="ModalCarouselLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div id="carousel-modal-demo" class="carousel slide" data-ride="carousel">


                                <div class="container">
                                    <div class="mySlides4">
                                        <div class="numbertext">1 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp_Image_2022-02-17_at_14-14-18_(1).jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">2 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.18 (2).jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">3 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.19.jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">4 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.19 (1).jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">5 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.20.jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">6 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.20 (1).jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">7 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.20 (2).jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">8 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.21 (1).jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">9 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.21 (2).jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">10 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.21 (4).jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">11 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.22.jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">12 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.32.31.jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">13 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.33.01.jpeg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides4">
                                        <div class="numbertext">14 / 11</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.35.42.jpeg"
                                            style="width:100%">
                                    </div>


                                    <a class="prev" onclick="plusSlides4(-1)">❮</a>
                                    <a class="next" onclick="plusSlides4(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption4"></p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp_Image_2022-02-17_at_14-14-18_(1).jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(1)" alt="1"
                                                 id="inicio">
                                        </div>
                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.18 (2).jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(2)" alt="2">
                                        </div>
                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.19.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(3)" alt="3">
                                        </div>
                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.19 (1).jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(4)" alt="4">
                                        </div>
                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.20.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(5)" alt="5">
                                        </div>
                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.20 (1).jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(6)" alt="6">
                                        </div>
                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.20 (2).jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(7)" alt="7">
                                        </div>
                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.21 (1).jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(8)" alt="8">
                                        </div>

                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.21 (2).jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(9)" alt="9">
                                        </div>

                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.21 (4).jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(10)" alt="10">
                                        </div>

                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.14.22.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(11)" alt="11">
                                        </div>

                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.32.31.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(12)" alt="12">
                                        </div>

                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.33.01.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(13)" alt="13">
                                        </div>

                                        <div class="column">
                                            <img class="demo4 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_7/WhatsApp Image 2022-02-17 at 14.35.42.jpeg"
                                                 style="width:100%"
                                                 onclick="currentSlide(14)" alt="14">
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--            modal -->
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card card-info-caci">
                <div class="card-body">
                    <div class="row relative">
                        <div class="col-sm-3 col-md-3 col-lg-4 absolute1">
                            <img class="img-circle-responsable" src="img/Responsables/4.png"/>
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
                <p class="style-dir-caci"><img src="img/ICONO UBICACIÓN-31.svg" style="height: 1rem; width: 1rem;"/>
                    Plaza Benito Juárez No. 10, Col. Gabriel Ramos Millán, C.P. 08000 Alcaldía Iztacalco.</p>
                <p class="style-email-caci">
                    <img src="img/ICONO CORREO-32.svg" style="height: 1rem; width: 1rem;"/>
                    cacicarmenserdan@finanzas.cdmx.gob.mx</p>
                <p class="style-tel-caci"><img src="img/ICONO TELÉFONO 2-33.svg" style="height: 1rem; width: 1rem;"/>
                    56-57-26-89</p>
                <div><a href="https://goo.gl/maps/ufsH814YwNL2Zhu56" target="_blank" class="style-location-caci"><span
                            style="color: #fff; font-weight: 700; font-size: 1rem; font-family: 'sans source pro', sans-serif;">
                            VER UBICACIÓN</span></a>

                    <button type="button" onclick="showl2(8)" class=" style-gallery-caci" data-toggle="modal"
                            data-target="#ModalCarousel5">
                        Ver Imagenes
                    </button>
                </div>

            </div>

            <!--            modal -->
            <div>


                <!-- Modal -->
                <div class="modal fade" id="ModalCarousel5" tabindex="-1" role="dialog"
                     aria-labelledby="ModalCarouselLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div id="carousel-modal-demo" class="carousel slide" data-ride="carousel">


                                <div class="container">
                                    <div class="mySlides5">
                                        <div class="numbertext">1 / 9</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-51.jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides5">
                                        <div class="numbertext">2 / 9</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-51 (1).jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides5">
                                        <div class="numbertext">3 / 9</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-52.jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides5">
                                        <div class="numbertext">4 / 9</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-52 (1).jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides5">
                                        <div class="numbertext">5 / 9</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-52 (2).jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides5">
                                        <div class="numbertext">6 / 9</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-53.jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides5">
                                        <div class="numbertext">7 / 9</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-54 (1).jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides5">
                                        <div class="numbertext">8 / 9</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-55.jpg"
                                            style="width:100%">
                                    </div>

                                    <div class="mySlides5">
                                        <div class="numbertext">9 / 9</div>
                                        <img
                                            src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-56.jpg"
                                            style="width:100%">
                                    </div>

                                    <a class="prev" onclick="plusSlides5(-1)">❮</a>
                                    <a class="next" onclick="plusSlides5(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption5"></p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                            <img class="demo5 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-51.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(1)" alt="1"
                                                 id="inicio">
                                        </div>
                                        <div class="column">
                                            <img class="demo5 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-51 (1).jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(2)" alt="2">
                                        </div>
                                        <div class="column">
                                            <img class="demo5 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-52.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(3)" alt="3">
                                        </div>
                                        <div class="column">
                                            <img class="demo5 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-52 (1).jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(4)" alt="4">
                                        </div>
                                        <div class="column">
                                            <img class="demo5 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-52 (2).jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(5)" alt="5">
                                        </div>
                                        <div class="column">
                                            <img class="demo5 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-53.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(6)" alt="6">
                                        </div>
                                        <div class="column">
                                            <img class="demo5 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-54 (1).jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(7)" alt="7">
                                        </div>
                                        <div class="column">
                                            <img class="demo5 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-55.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(8)" alt="8">
                                        </div>

                                        <div class="column">
                                            <img class="demo5 cursor"
                                                 src="img/modal_carussel_centro_casi/FOTOS_CACI_8/PHOTO-2022-01-13-20-05-56.jpg"
                                                 style="width:100%"
                                                 onclick="currentSlide(9)" alt="9">
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--            modal -->


        </div>

        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card card-info-caci">
                <div class="card-body">
                    <div class="row relative">
                        <div class="col-sm-3 col-md-3 col-lg-4 absolute1">
                            <img class="img-circle-responsable" src="img/Responsables/5.png"/>
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
    <script>

        var slideIndex = 1;
        var stado;
        showSlides(slideIndex);
        sSlider2(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function plusSlides2(n) {
            sSlider2(slideIndex += n, stado);
        }

        function plusSlides3(n) {
            sSlider2(slideIndex += n, stado);
        }

        function plusSlides4(n) {
            sSlider2(slideIndex += n, stado);
        }

        function plusSlides5(n) {
            sSlider2(slideIndex += n, stado);
        }

        function currentSlide(n) {

            showSlides(slideIndex = n);
            sSlider2(slideIndex = n, stado);

        }


        function showl2(m) {
            stado = m;
            sSlider2(slideIndex, m);
            return m;
        }


        function showSlides(n) {

            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");


            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;


        }

        function sSlider2(n, m) {
            console.log(n, m);
            var i;
            var slides2 = document.getElementsByClassName("mySlides2");
            var dots2 = document.getElementsByClassName("demo2");
            var captionText2 = document.getElementById("caption2");

            var slides3 = document.getElementsByClassName("mySlides3");
            var dots3 = document.getElementsByClassName("demo3");
            var captionText3 = document.getElementById("caption3");

            var slides4 = document.getElementsByClassName("mySlides4");
            var dots4 = document.getElementsByClassName("demo4");
            var captionText4 = document.getElementById("caption4");

            var slides5 = document.getElementsByClassName("mySlides5");
            var dots5 = document.getElementsByClassName("demo5");
            var captionText5 = document.getElementById("caption5");

            if (m === 4) {

                if (n > slides2.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides2.length
                }
                for (i = 0; i < slides2.length; i++) {
                    slides2[i].style.display = "none";
                }
                for (i = 0; i < dots2.length; i++) {
                    dots2[i].className = dots2[i].className.replace(" active", "");
                }
                slides2[slideIndex - 1].style.display = "block";
                dots2[slideIndex - 1].className += " active";
                captionText2.innerHTML = dots2[slideIndex - 1].alt;
            }
            if (m === 6) {

                if (n > slides3.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides3.length
                }
                for (i = 0; i < slides3.length; i++) {
                    slides3[i].style.display = "none";
                }
                for (i = 0; i < dots3.length; i++) {
                    dots3[i].className = dots3[i].className.replace(" active", "");
                }
                slides3[slideIndex - 1].style.display = "block";
                dots3[slideIndex - 1].className += " active";
                captionText3.innerHTML = dots3[slideIndex - 1].alt;
            }

            if (m === 7) {
                if (n > slides4.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides4.length
                }
                for (i = 0; i < slides4.length; i++) {
                    slides4[i].style.display = "none";
                }
                for (i = 0; i < dots4.length; i++) {
                    dots4[i].className = dots4[i].className.replace(" active", "");
                }
                slides4[slideIndex - 1].style.display = "block";
                dots4[slideIndex - 1].className += " active";
                captionText4.innerHTML = dots4[slideIndex - 1].alt;
            }

            if (m === 8) {
                if (n > slides5.length) {
                    slideIndex = 1;
                }
                if (n < 1) {
                    slideIndex = slides5.length;
                }
                for (i = 0; i < slides5.length; i++) {
                    slides5[i].style.display = "none";
                }
                for (i = 0; i < dots5.length; i++) {
                    dots5[i].className = dots5[i].className.replace(" active", "");
                }
                slides5[slideIndex - 1].style.display = "block";
                dots5[slideIndex - 1].className += " active";
                captionText5.innerHTML = dots5[slideIndex - 1].alt;
            }

        }


    </script>

@endsection
