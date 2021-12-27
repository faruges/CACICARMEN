<!DOCTYPE html>
<html lang="en">

<head>

    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="../">
    <!--end::Base Path -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--  <meta name="csrf-token" content="XUcxFRsXk9yRryqhhuQTNZ9FF0K4Fr3sWNQOT0wK">  --}}
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="EXPIRES" CONTENT="0">
    <title>Secretaría de Administración y Finanzas de la Ciudad de México</title>

    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->

    <!--begin:: Global Optional Vendors -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="{{ asset('assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css">
    <!--end:: Global Optional Vendors -->
    <link href="{{ asset('assets/vendors/custom/datatables/datatables.bundle.min.css')}}" rel="stylesheet"
        type="text/css">

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('assets/css/demo5/style.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/estilo_saf.css')}}" rel="stylesheet" type="text/css">
    <!--end::Global Theme Styles -->

    <script type="text/javascript">
        // var global URL
    var url = '{!! URL::asset('') !!}';
    </script>

</head>

<body>

    <!-- begin:: Page -->
    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__brand">
            <a class="kt-header-mobile__logo" href="{{url('users')}}">
                <img style="max-height: 25px; " alt="Logo" src="{{ asset('assets/img/logos/saf_logo_2021.png')}}">
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">

            <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more-1"></i></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->

    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">
                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
                    <div class="kt-header__top">
                        <div class="kt-container ">
                            <!-- begin:: Brand -->
                            <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                                <div class="kt-header__brand-logo">
                                    <a href="{{url('users')}}">
                                        <img style="max-height: 70px; " alt="Logo"
                                            src="{{ asset('assets/img/logos/saf_logo_2021.png')}}">
                                    </a>
                                </div>
                            </div>
                            <!-- end:: Brand -->
                            <!-- begin:: Header Topbar -->
                            <div class="kt-header__topbar">
                                <!--begin: Search -->
                                <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown kt-hidden-desktop"
                                    id="kt_quick_search_toggle">
                                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown"
                                        data-offset="10px,10px">
                                        <span class="kt-header__topbar-icon kt-header__topbar-icon--success">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                    <path
                                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                        id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3">
                                                    </path>
                                                    <path
                                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                        id="Path" fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    <div
                                        class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                        <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact"
                                            id="kt_quick_search_dropdown">
                                            <form method="get" class="kt-quick-search__form">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                class="flaticon2-search-1"></i></span></div>
                                                    <input type="text" class="form-control kt-quick-search__input"
                                                        placeholder="Buscar en la pagina...">
                                                    <div class="input-group-append"><span class="input-group-text"><i
                                                                class="la la-close kt-quick-search__close"></i></span>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="kt-quick-search__wrapper kt-scroll ps" data-scroll="true"
                                                data-height="325" data-mobile-height="200"
                                                style="height: 325px; overflow: hidden;">

                                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                    <div class="ps__thumb-x" tabindex="0"
                                                        style="left: 0px; width: 0px;"></div>
                                                </div>
                                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                    <div class="ps__thumb-y" tabindex="0"
                                                        style="top: 0px; height: 0px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Search -->
                            </div>
                            <!-- end:: Header Topbar -->
                        </div>
                    </div>

                    <div class="kt-header__bottom borde_inferior">
                        <div class="kt-container ">
                            <!-- begin: Header Menu -->
                            <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn">
                                <i class="la la-close"></i>
                            </button>
                            <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="opacity: 1;">
                                <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                                    <ul class="kt-menu__nav ">
                                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                            <!-- kt-menu__item--open-dropdown kt-menu__item--hover -->
                                            @canany('view_users', 'edit_users', 'delete_users', 'create_users')
                                            <a href="{{url('users')}}" class="kt-menu__link">
                                                <span class="kt-menu__link-text">Usuarios</span>
                                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            @endcan
                                        </li>

                                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                            @canany('view_roles', 'edit_roles', 'delete_roles', 'create_roles')
                                            <a href="{{url('roles')}}" class="kt-menu__link">
                                                <span class="kt-menu__link-text">Roles</span>
                                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            @endcan
                                        </li>

                                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                            @can('view_inscripcion')
                                            <a href="{{url('lista_inscripcion')}}" class="kt-menu__link">
                                                <span class="kt-menu__link-text">Inscripción</span>
                                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            @endcan
                                        </li>

                                        <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                            @can('view_reinscripcion')
                                            <a href="{{url('lista_reinscripcion')}}" class="kt-menu__link">
                                                <span class="kt-menu__link-text">Reinscripción</span>
                                                <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                            </a>
                                            @endcan
                                        </li>
                                    </ul>
                                </div>
                                <div class="kt-header-toolbar">
                                    <div class="kt-quick-search kt-quick-search--inline kt-quick-search--result-compact"
                                        id="kt_quick_search_inline">
                                        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                                            <ul class="kt-menu__nav ">
                                                <li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel ">
                                                    <a href="{{route('logout')}}" class="kt-menu__link">
                                                        <span class="kt-menu__link-text">Cerrar Sesión</span>
                                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        {{--  <form method="get" class="kt-quick-search__form">
                      <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                          <input type="text" class="form-control kt-quick-search__input" placeholder="Buscar en la pagina...">
                          <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close" style="display: none;"></i></span></div>
                      </div>
                  </form>  --}}
                                        <div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,10px">
                                        </div>
                                        <div
                                            class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                                            <div class="kt-quick-search__wrapper kt-scroll ps" data-scroll="true"
                                                data-height="300" data-mobile-height="200"
                                                style="height: 300px; overflow: hidden;">
                                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                    <div class="ps__thumb-x" tabindex="0"
                                                        style="left: 0px; width: 0px;"></div>
                                                </div>
                                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                    <div class="ps__thumb-y" tabindex="0"
                                                        style="top: 0px; height: 0px;"></div>
                                                </div>
                                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                    <div class="ps__thumb-x" tabindex="0"
                                                        style="left: 0px; width: 0px;"></div>
                                                </div>
                                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                    <div class="ps__thumb-y" tabindex="0"
                                                        style="top: 0px; height: 0px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Header Menu -->
                        </div>
                    </div>
                </div>
                <!-- end:: Header -->
                <!-- begin:: Subheader -->
                <!-- end:: Subheader -->

                <!-- begin: Content -->
                <!-- kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid -->
                <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch"
                    id="kt_body">
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <div class="kt-container  kt-grid__item kt-grid__item--fluid">

                            <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                                <div class="kt-portlet">
                                    {{-- <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
              <h2 class="cdmx-colorv">
                  Inscripción
              </h2>
          </div>
      </div> --}}
                                    <div class="kt-pricing-3" style="padding: 0 0 0 0 !important">
                                        <div class="kt-pricing-3__items">
                                            <div class="row row-no-padding">
                                                @yield('mycontent')
                                                @yield('scripts')
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </b></b>
                            </div><b id="labelFechaConsulta"><b>
                                    <!--end::Widget -->
                                </b></b>
                        </div><b id="labelFechaConsulta"><b>
                            </b></b>
                    </div><b id="labelFechaConsulta"><b>
                            <!--end:: Portlet-->
                        </b></b>
                </div><b id="labelFechaConsulta"><b>
                    </b></b>
            </div><b id="labelFechaConsulta"><b>
                </b></b>
        </div><b id="labelFechaConsulta"><b>



            </b></b>
    </div><b id="labelFechaConsulta"><b>
        </b></b></div><b id="labelFechaConsulta"><b>
        </b></b></div><b id="labelFechaConsulta"><b>
            <!-- end:: Content -->

        </b></b></div><b id="labelFechaConsulta"><b>
        </b></b></div><b id="labelFechaConsulta"><b>
            <!-- begin:: Footer -->
            <div class="kt-footer  kt-footer--extended  kt-grid__item bg-color-cdmx-gris" id="kt_footer">
                <div class="kt-footer__top">
                    <div class="kt-container ">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="kt-footer__section">
                                    <h3 class="kt-footer__title">©Copyright Plataforma CACI, Todos los derechos
                                        reservados 2020 Gobierno CDMX / Email: <a style="color:#33353d;"
                                            href="mailto:caciadministracion@finanzas.cdmx.gob.mx"></a>caciadministracion@finanzas.cdmx.gob.mx
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- end:: Footer -->
        </b></b></div><b id="labelFechaConsulta"><b>


            <!-- end:: Page -->

            <div id="kt_scrolltop" class="kt-scrolltop">
                <i class="fa fa-arrow-up"></i>
            </div>


            {{--  <script type="text/javascript">
                // var global URL
            var url = '{!! URL::asset('') !!}';
            </script>  --}}

            <!-- begin::Global Config(global config for global JS sciprts) -->
            <script>
                var KTAppOptions = {"colors":{"state":{"brand":"#3d94fb","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#3d94fb","warning":"#ffb822","danger":"#fd27eb"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
            </script>
            <!-- end::Global Config -->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            </script>


            <!--begin:: Global Mandatory Vendors -->
            <script src="{{asset('assets/vendors/general/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript">
            </script>
            <!--end:: Global Mandatory Vendors -->

            <!--begin::Page Vendors(used by this page) -->
            <script src="{{asset('assets/vendors/general/jquery-validation/dist/jquery.validate.js')}}"
                type="text/javascript"></script>
            <script src="{{asset('assets/vendors/custom/js/vendors/jquery-validation.init.js')}}"
                type="text/javascript"></script>
            {{--  <script src="{{asset('assets/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}"
            type="text/javascript"></script> --}}
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script src="{{asset('assets/vendors/custom/js/vendors/sweetalert2.init.js')}}" type="text/javascript">
            </script>
            <script src="{{asset('assets/vendors/general/block-ui/jquery.blockUI.js')}}" type="text/javascript">
            </script>
            <!--end::Page Vendors -->
            <!-- Seccion expira libreria para realizar lo antes dicho-->
            <script src="https://unpkg.com/@travishorn/session-timeout"></script>
            <!-- <script src="{{ URL::asset('js/session-timeout.js') }}"></script> -->
            <!-- <script src="{{ URL::asset('js/datatables.js') }}" defer></script> -->
            <script src="{{ URL::asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
            <script src="{{ URL::asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript">
            </script>
            <script src="{{ URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"
                type="text/javascript"></script>
            <script src="{{ URL::asset('assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"
                type="text/javascript"></script>
        </b></b>


</body>

</html>