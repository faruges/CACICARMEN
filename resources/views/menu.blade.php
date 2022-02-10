<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title',"Bienvenidos Plataforma CACI")</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    --}}
    {{--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
    {{--
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <!--begin:: Global Optional Vendors -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    {{--
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css')}}" /> --}}
    <link href="{{ asset('assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css">
    <!--end:: Global Optional Vendors -->
    <link href="{{ asset('assets/vendors/custom/datatables/datatables.bundle.min.css')}}" rel="stylesheet"
        type="text/css">

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('assets/css/demo5/style.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/estilo_saf.css')}}" rel="stylesheet" type="text/css">
    <script src="{{URL::asset('js/showhidemenu.js')}}"></script>
    <!--end::Global Theme Styles -->


    <link href="{{ asset('css/nav.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/estilos.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/footer.css')}}" rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('css/bulma.css')}}" />

    <link href="{{asset('assets/global/plugins/boostrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet"
        type="text/css">
    <link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.min.css')}}" />
    {{--
    <link href="{{asset('assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components"
        type="text/css"> --}}
    <link href="{{asset('assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/pages/css/login-5.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z28CDQ7DVK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z28CDQ7DVK');
    </script>
    <script type="text/javascript">
        // var global URL
    var url = '{!! URL::asset('') !!}';
    </script>
    @yield('scripts')

</head>


<div style="min-height: 85px; border-bottom:0px solid #fff; background-color: #fff;">
    <div class="container">
        <div class="level" id="only-mobile">

            <div class="level-left">
                <div class="level-item" id="SAF-mobile">
                    <figure class="image">
                        <img class="logo_cdmx" id="logo_cdmx" src="{{asset('img/LOGO GOBIENO SAF-19.svg')}}"
                            alt="Imagenes">
                    </figure>
                </div>
            </div>

            <div class="level-right">
                <div class="level-item" id="CIUADANA-mobile">
                    <figure class="image">
                        <img class="logo_caci" id="logo_caci" src="{{asset('img/LOGO_CACI-20.svg')}}" alt="Imagenes">
                    </figure>
                    <!-- boton para mostrar menu-mobile -->
                    <button class="btn p-0 burger-icon burger-icon-left" id="kt_header_menu_mobile_bars_btn"
                        title="Mostrar Menú" onclick="show()" style="margin-bottom:5%; display:none">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    a:hover {
        color: #bc955c;
        text-decoration: underline
    }

    p {
        font-family: 'source sans pro', sans-serif;
    }

    ul,
    ol {
        list-style: none;
    }

    ul>li {
        float: left;
    }

    .list-menu {
        margin-bottom: 2rem;
    }

    .tel-contacto {
        font-family: 'source sans pro', sans-serif;
        margin-left: 9.1rem;
        color: #fff;
        font-size: 1rem;
        font-weight: 500;
    }

    .hour-atencion {
        font-family: 'source sans pro', sans-serif;
        margin-left: 9.1rem;
        color: #fff;
        font-size: 1rem;
        font-weight: 500;
    }

    .aviso-priv {
        margin-left: 9.1rem;
        color: #fff;
        font-size: 1rem;
        font-weight: 500;
    }

    .ini-sesion-admin {
        color: #fff;
        font-size: 2rem;
    }
    /*aqui empieza los estilos del nuevo menu*/
    .nav-enlace {
        display: inline-block;
        padding: 1.5rem 0rem;
    }
    nav {
        margin-top: 1.5rem;
        display: flex;
        justify-content: center;
    }

    .nav-boton {
        background: #f5f5f6;
        color: #235b52;
        padding: 10px 0;
        border: 2px solid #fff;
        display: none;
    }

    @media screen and (max-width: 500px) {
        ul>li {
            float: none;
        }

        .list-menu {
            margin-bottom: 2.5rem;
        }

        .list-menu-preg-frec {
            margin-bottom: 14rem;
        }

        .ini-sesion-admin {
            color: #fff;
            font-size: 1.6rem;
            margin-left: 2.5rem;
        }

        .tel-contacto {
            font-family: 'source sans pro', sans-serif;
            margin-top: 4.5rem;
            margin-left: 4rem;
            color: #fff;
            font-size: 1rem;
            font-weight: 500;
        }

        .hour-atencion {
            font-family: 'source sans pro', sans-serif;
            margin-left: 4.5rem;
            color: #fff;
            font-size: 1rem;
            font-weight: 500;
        }

        .aviso-priv {
            margin-left: 4.5rem;
            color: #fff;
            font-size: 1rem;
            font-weight: 500;
        }

        /*intento de menu responsivo*/
        nav {
            flex-direction: column;
        }

        .nav-boton {
            display: inline-block;
        }

        .oculta {
            display: none;
        }
    }
</style>

<body>
    <div class="kt-header__bottom">
        <div class="kt-container">
            <nav>
                <button class="nav-boton" onclick="accion()">Menú</button>
                <a href="{{url('inicio')}}" class="nav-enlace oculta"><span class="style-span-menu">Inicio</span></a>
                <a href="{{url('centros_caci')}}" class="nav-enlace oculta"><span class="style-span-menu">Centros</span></a>
                <a href="{{url('requisitos')}}" class="nav-enlace oculta"><span class="style-span-menu">Requisitos</span></a>
                <a href="{{url('preinscripcion_validar_rfc')}}" class="nav-enlace oculta"><span class="style-span-menu">Preinscripción</span></a>
                <a href="{{url('reinscripcion')}}" class="nav-enlace oculta"><span class="style-span-menu">Reinscripción</span></a>
                <a href="{{url('informacion_destacada')}}" class="nav-enlace oculta"><span class="style-span-menu">Información destacada</span></a>
                <a href="{{url('preguntas_frecuentes')}}" class="nav-enlace oculta"><span class="style-span-menu">Preguntas frecuentes</span></a>
            </nav>
        </div>

        <div class="container">
            @yield('mycontent')
        </div>

        <footer style=" margin-top: 100px;" class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <a href="{{url('login')}}" class="ini-sesion-admin">Iniciar sesión
                            administrador</a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                         <p class="tel-contacto"><img src="img/ICONO TELÉFONO-23.svg"
                                style="height: 1.5rem; width: 2rem;" /> 55 51 34 25 00
                            	ext. 5869 y 5870</p>
                        {{--  <p class="tel-contacto">caciadministracion@finanzas.cdmx.gob.mx</p>--}}
                        <p class="hour-atencion"> Horario de atención: 09:00 a 18:00 hrs.</p>  
                        <a class="aviso-priv" href="http://procesos.finanzas.cdmx.gob.mx/OIP/index.php/Datos_Personales"
                            target="_blank"> Ver Avisos de Privacidad</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        function accion(){
                    console.log('está funcionando');
                    var ancla = document.getElementsByClassName('nav-enlace');
                    for(var i=0; i < ancla.length; i++){
                        ancla[i].classList.toggle('oculta');
                    }
                }
    </script>
    <script src="{{URL::asset('assets/js/uikit.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/uikit-icons.min.js')}}"></script>
    <script>
        function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    </script>
</body>

</html>