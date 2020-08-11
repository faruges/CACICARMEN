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
        <h1 style="margin-left: 10px;">Bienvenido {{auth()->user()->name}}</h1>
        <div class="card-header">
            <div class="float-right">
                <form id="regForm" action="{{route('export-excel')}}" method="GET" enctype="multipart/form-data">
                    @csrf
                    <button id="valida_curp" type="submit" title="Generar Reporte" class="btn btn-lg btn-dark"><i class="fa fa-download"></i></button> 
                </form>
            </div>
            <h2><i class="fa fa-book" style="margin-left: 20px;"></i> Inscripci&oacute;n</h2>
        </div>
        <div class="card-body" style="overflow: auto">
            <table class="table table-striped table-responsive-lg">
                <thead>
                    <tr>
                        <th>Caci</th>
                        <th>Nombre Menor</th>
                        <th>Curp</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Edad al Ingreso</th>
                        <th>Tutor</th>
                        <th>Calle</th>
                        <th>Número</th>
                        <th>Colonia</th>
                        <th>Alcaldia</th>
                        <th>Codigo Postal</th>
                        <th>Tipo nomina</th>
                        <th>N. empleado</th>
                        <th>N. Plaza</th>
                        <th>Clave Dependencia</th>
                        <th>Nivel Salarial</th>
                        <th>Seccion Sindical</th>                    
                        <th>Email</th>
                        <th>Telefono Uno</th>
                        <th>Telefono Dos</th>
                        <th>Email Enviado Notificación Recibida</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista_caci as $caci)
                    <tr>
                        <td>{{$caci->caci}}</td>
                        <td>{{$caci->nombre_menor_1}} {{$caci->apellido_paterno_1}} {{$caci->apellido_materno_1}}</td>
                        <td>{{$caci->curp_num}}</td>
                        <td>{{$caci->birthday}}</td>
                        <td>{{$caci->Edad_menor}}</td>
                        <td>{{$caci->nombre_tutor_madres}} {{$caci->apellido_paterno_tutor}} {{$caci->apellido_materno_tutor}}</td>
                        <td>{{$caci->calle}}</td>
                        <td>{{$caci->numero_domicilio}}</td>
                        <td>{{$caci->colonia}}</td>
                        <td>{{$caci->alcaldia}}</td>
                        <td>{{$caci->codigo_postal}}</td>
                        <td>{{$caci->tipo_nomina_1}}</td>
                        <td>{{$caci->num_empleado_1}}</td>
                        <td>{{$caci->num_plaza_1}}</td>
                        <td>{{$caci->clave_dependencia_1}}</td>
                        <td>{{$caci->nivel_salarial_1}}</td>
                        <td>{{$caci->seccion_sindical_1}}</td>
                        <td>{{$caci->email_correo}}</td>
                        <td>{{$caci->telefono_celular}}</td>
                        <td>{{$caci->telefono_3}}</td>
                        @if ($caci->correo_enviado_not_recibida)
                        <td>Correo de confirmación Enviado</td>                    
                        @else
                        <td>Registros sin enviar correo de recibido</td>
                        @endif
                        <td>
                            <span class="float-right">
                                <a class="btn btn-md btn-outline-primary"
                                    href="{{route('lista_documentos_inscr',$caci->id)}}"
                                    title="Ver lista de documentos"><i class="fa fa-eye"></i></a>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{--  <div>
            <span class="float-right btn-regresar">
                <a class="btn btn-lg btn-primary" href="{{url('/admin')}}"
                    title="Regresar"><i class="fa fa-backward"></i> Regresar</a>
            </span>
        </div>  --}}
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
