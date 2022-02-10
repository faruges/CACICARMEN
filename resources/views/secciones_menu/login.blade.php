@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" /> -->


<body class=" login" style="margin-bottom: 30px;">

    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login-5" style="margin-top: 2rem;">
        <div class="row bs-reset">
            <div class="col-12 col-sm-12 col-md-5 bs-reset mt-login-5-bsfix">
                <div>
                    <img src="{{asset('assets/pages/img/login/cdmx3.svg')}}">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-7 login-container bs-reset mt-login-5-bsfix">
                {{--  <img class="logo_cdmx_login" src="{{asset('img/saf_logo_2021.png')}}">  --}}
                <div class="login-content" style="margin-left: 3rem;">
                    <h1 style="font-family: 'sans source pro'; font-size: 2.23rem; color:#9F2241; font-weight:800;">SISTEMA CACI-SAF</h1>
                    <p style="font-family: 'sans source pro'; font-weight: 500; color: #403B3A;">CENTRO DE ATENCI&Oacute;N Y CUIDADO INFANTIL.
                    </p>                    
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <div class="alert-text">
                            @foreach ($errors->all() as $error)
                            <span>{{$error}}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <form method="POST" class="login-form" style="margin-left: 1rem;" action="{{route('login_post')}}" novalidate="novalidate">
                        @csrf
                        <br><br><br>
                        <div class="row">
                            <div class="col-xs-6">
                                <input id="name" type="text" class="form-control form-control-solid placeholder-no-fix form-group" autocomplete="off" autofocus="" placeholder="Ingresa el usuario" name="name" required="" value="" aria-required="true">

                            </div>

                            <div class="col-xs-6">
                                <input class="form-control form-control-solid placeholder-no-fix form-group" id="password" type="password" autocomplete="off" placeholder="Contraseña" name="password" required="" aria-required="true">
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-8 text-left">

                                <button type="submit" class="btn btn-md" style="background-color: #9F2241;">
                                    <span style="color: #fff;">Entrar</span>
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript">
    </script>
    <script src="{{asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/backstretch/jquery.backstretch.min.js')}}" type="text/javascript">
    </script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('assets/pages/scripts/login-5.min.js')}}" type="text/javascript"></script>


</body>


@endsection