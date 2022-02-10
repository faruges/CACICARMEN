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
    <link href="{{ asset('css/footer.css')}}" rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('css/bulma.css')}}" />

    <link href="{{asset('assets/global/plugins/boostrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet"
        type="text/css">
    <link href="{{asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet"
        type="text/css">
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


<nav style="min-height: 85px; border-bottom:0px solid #fff; background-color: #fff;">
    <div class="container">
        <nav class="level" id="only-mobile">

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
                    <button class="btn p-0 burger-icon burger-icon-left" id="kt_header_menu_mobile_bars_btn"
                        title="Mostrar Menú" onclick="show()" style="margin-bottom:5%; display:none">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</nav>






<body>
    <div class="kt-header__bottom">
        <div class="kt-container">
            <!-- begin: Header Menu -->
            <button class="kt-header-menu-wrapper-close" title="Cerrar Menú" id="kt_header_menu_mobile_close_btn"
                onclick="hide()" style="margin-left:55%;">
                <i class="fa fa-times"></i>
            </button>
            {{-- <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="margin-left:66%;  opacity: 1;">
                --}}
                <div class="kt-header-menu-wrapper menumargin" id="kt_header_menu_wrapper">
                    <div id="kt_header_menu" style="background-color: #235B52;" class="kt-header-menu kt-header-menu-mobile ">
                        {{-- <div class="topnav" id="myTopnav kt-header-menu"> --}}
                            <ul class="kt-menu__nav">
                                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                    <!-- kt-menu__item--open-dropdown kt-menu__item--hover -->
                                    <a href="{{url('inicio')}}" class="kt-menu__link">
                                        <span class="kt-menu__link-text-redu fuente-menu">Inicio</span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                </li>

                                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                    <a href="{{url('centros_Luz_María')}}" class="kt-menu__link">
                                        <span class="kt-menu__link-text-redu">Centros</span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                </li>

                                {{-- <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                    <a href="{{url('inscripcion_from')}}" class="kt-menu__link">
                                        <span class="kt-menu__link-text-redu">Preinscripción</span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                </li> --}}
                                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                    <a href="{{url('requisitos')}}" class="kt-menu__link">
                                        <span class="kt-menu__link-text-redu">Requisitos</span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                </li>
                                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                    <a href="{{url('preinscripcion_validar_rfc')}}" class="kt-menu__link">
                                        <span class="kt-menu__link-text-redu">Preinscripción</span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                </li>

                                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                    <a href="{{url('reinscripcion')}}" class="kt-menu__link">
                                        <span class="kt-menu__link-text-redu">Reinscripción</span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                </li>
                                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                    <a href="{{url('informacion_destacada')}}" class="kt-menu__link">
                                        <span class="kt-menu__link-text-redu">Información destacada</span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                </li>
                                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                    <a href="{{url('preguntas_frecuentes')}}" class="kt-menu__link">
                                        <span class="kt-menu__link-text-redu">Preguntas frecuentes</span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                </li>
                                {{-- <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                    <a href="{{url('login')}}" class="kt-menu__link">
                                        <span class="kt-menu__link-text-redu">Iniciar sesión</span>
                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="kt-header-toolbar">
                            <div class="kt-quick-search kt-quick-search--inline kt-quick-search--result-compact"
                                id="kt_quick_search_inline">
                                <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,10px">
                                </div>
                                <div
                                    class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                    <div class="kt-quick-search__wrapper kt-scroll ps" data-scroll="true"
                                        data-height="300" data-mobile-height="200"
                                        style="height: 300px; overflow: hidden;">
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                        </div>
                                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                        </div>
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                        </div>
                                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: Header Menu -->
                </div>
            </div>

            <div class="container">
                @yield('mycontent')
            </div>

            <footer style="background-image:url({{url('img/footer_linea_SVG.svg')}}); margin-top: 100px;" class="site-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <a href="{{url('login')}}" style="color:#fff; font-size:2rem;">Iniciar sesión
                                administrador</a>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <p style="margin-left:7rem; color:#fff;font-size:2rem; font-weight: 500;"><i
                                    class="fa fa-phone"></i> 55 5588 4155 ext.5831</p>
                        </div>
                    </div>
                </div>
            </footer>

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