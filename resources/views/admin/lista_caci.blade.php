@extends('admin.admin_inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')
<style>
    .enlace-listas {
        font-size: 30px;
        margin-left: 10px;
        text-align: center;
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
    <div class="card mt50">
        <div class="card-header">
            <h1><i class="fa fa-building"></i> Lista de Menores</h1>
        </div>
        <div class="card-body" style="margin-bottom: 22%">
            <div class="row">
                <a class="enlace-listas" href="{{route('lista_inscripcion')}}"> Ver Lista Inscripci&oacute;n</a>
            </div>
            <div class="row">
                <a class="enlace-listas" href="{{route('lista_reinscripcion')}}"> Ver Lista
                    Reinscripci&oacute;n</a>
            </div>
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