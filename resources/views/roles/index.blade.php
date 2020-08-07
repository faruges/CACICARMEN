@extends('users.users_inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')
<style>
    .margin-card{
        margin-bottom: 10%;
    }
    .btn-regresar{
        margin: 40px 20px 40px 0px;
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
    <div class="card mt50 margin-card">
        <div class="card-header">
            <div class="float-right">
                <a class="btn btn-md btn-outline-success"
                href="{{route('roles.create')}}"
                title="Crear Usuario"><i class="fa fa-plus"></i></a>
            </div>
            <h1><i class="fa fa-users"></i> Roles</h1>
        </div>
        <div class="card-body" style="overflow: auto">
            <table class="table table-striped table-responsive-lg">
                <thead>
                    <tr>
                        <th>Nombre</th>                                              
                        <th>Permissions</th>                                              
                        <th>Fecha de Creación</th>                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                    <tr>
                        <td>{{$rol->name}}</td>
                        <td>{{implode(" ", $rol->getPermissionNames()->toArray())}}</td>
                        <td>{{$rol->created_at}}</td>
                        <td>
                            <span class="float-right">
                                <a class="btn btn-md btn-outline-primary"
                                href="#"
                                title="Editar Usuarios"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-md btn-outline-danger"
                                    href="#"
                                    title="Eliminar Usuarios"><i class="fa fa-trash"></i></a>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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