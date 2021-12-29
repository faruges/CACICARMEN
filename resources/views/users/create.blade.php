@extends('users.users_inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
<script src="{{URL::asset('js/inscripcion.js')}}" type="text/javascript"> </script>
<!-- <script src="{{URL::asset('js/session_out.js')}}" type="text/javascript"> </script> -->
<script src="{{URL::asset('js/usuarios.js')}}" type="text/javascript"> </script>
@endsection
@section('mycontent')
<style>
    .margin-card {
        margin-bottom: 10%;
    }

    .btn-regresar {
        margin: 40px 20px 40px 0px;
    }

    .container {
        margin-top: 10px;
    }

    .table-plain {
        width: 100%;
        border-bottom: 1px solid #dee2e6
    }

    .table-striped .table-plain tbody tr:nth-of-type(2n+1) {
        background-color: transparent;
    }

    .table-plain tbody td {
        background-color: transparent;
        padding: 2px .75rem;
    }

    .pn {
        margin-right: 10px;
    }

    h2 {
        margin-top: 20px;
    }

    .format-label {
        font-size: 50px;
        margin-bottom: 1rem;
    }

    .label-red {
        background-color: #ff4040;
        padding: 1rem;
        color: #fff;
        font-weight: 500;
        border-radius: 1rem;
        width: 20rem;
    }

    .label-green {
        background-color: #00ab6b;
        padding: 1rem;
        color: #fff;
        font-weight: 500;
        border-radius: 1rem;
        width: 20rem;
    }
</style>
<br>
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

<link href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/animate/animate.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/animsition/css/animsition.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}" rel="stylesheet">

<link href="{{ asset('css/util.css') }}" rel="stylesheet">

<link href="{{ asset('css/main.css') }}" rel="stylesheet">

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 style="font-size: 35px;"><i class="fa fa-user"></i> Crear Usuario</h2>
        </div>
        <div class="card-body">
            <form id="regForm" action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="format-label">Nombre de Usuario</label>
                    <input id="name" type="text" class="form-control" name="name" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <label class="format-label">Elije el Rol</label>
                    <select style="font-size: 15px;" class="form-control" name="rol" id="rol">
                        <option value='super_caci'>Super Caci</option>
                        <option value='caciluz'>Caci Luz</option>
                        <option value='cacieva'>Caci Eva</option>
                        <option value='cacibertha'>Caci Bertha</option>
                        <option value='cacicarolina'>Caci Carolina</option>
                        <option value='cacicarmen'>Caci Carmen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="format-label">Email</label>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email" readonly required>
                    {{-- <input id="status" type="text" class="form-control" name="status" value="1" hidden>  --}}
                </div>
                <div class="form-group">
                    <label class="format-label">Password</label>
                    <div class="input-group">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" minlength="8" required>
                        <div class="input-group-append">
                            <button id="show_pass" type="button" class="btn btn-primary" title="Mostrar Contraseña" onclick="mostrarPass('pass')"><span class="fa fa-eye-slash icon"></span></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="format-label">Repite Password</label>
                    <div class="input-group">                        
                        <input id="password_repeat" type="password" class="form-control" name="password_repeat" placeholder="Repite Password" minlength="8" required>
                        <div class="input-group-append">
                            <button id="show_pass" type="button" title="Mostrar Contraseña" class="btn btn-primary" onclick="mostrarPass('pass_repeat')"><span class="fa fa-eye-slash icon-repeat"></span></button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div id="label-warning-pass"></div>
                    <div id="label-success-pass"></div>
                </div>
                <div>
                    {{-- <button type="button" onclick="createUsuario()" class="btn btn-success float-right"><i class="fa fa-save"></i> Guardar</button>  --}}
                    <span class="float-right">
                        <a class="btn btn-md btn-dark" href="{{route('users.index')}}" title="Regresar"><i class="fa fa-arrow-left"></i> Regresar</a>
                        <button id="save_user" type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button>
                    </span>
                </div>
            </form>            
        </div>
    </div>
</div>

<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@endsection