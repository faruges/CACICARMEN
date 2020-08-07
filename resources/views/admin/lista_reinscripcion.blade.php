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
            <h2><i class="fa fa-bookmark"></i> Reinscripci&oacute;n</h2>
        </div>
        <div class="card-body" style="overflow: auto">
            <table class="table table-striped table-responsive-md">
                <thead>
                    <tr>
                        <th>Caci</th>
                        <th>Nombre Menor</th>
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
                        <th>Horario Laboral Ent</th>
                        <th>Horario Laboral Sal</th>
                        <th>Email</th>
                        <th>Telefono Uno</th>
                        <th>Telefono Dos</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista_reinscripciones as $reinscripcion)
                    <tr>                        
                        <td>{{$reinscripcion->caci}}</td>
                        <td>{{$reinscripcion->nombre_menor}} {{$reinscripcion->ap_paterno}}
                            {{$reinscripcion->ap_materno}}</td>
                        <td>{{$reinscripcion->fecha_nacimiento}}</td>
                        <td>{{$reinscripcion->edad_menor_ingreso}}</td>
                        <td>{{$reinscripcion->nombre_tutor}} {{$reinscripcion->ap_paterno_t}}
                            {{$reinscripcion->ap_materno_t}}</td>
                        <td>{{$reinscripcion->calle}}</td>
                        <td>{{$reinscripcion->numero_domicilio}}</td>
                        <td>{{$reinscripcion->colonia}}</td>
                        <td>{{$reinscripcion->alcaldia}}</td>
                        <td>{{$reinscripcion->codigo_postal}}</td>
                        <td>{{$reinscripcion->tipo_nomina}}</td>
                        <td>{{$reinscripcion->num_empleado}}</td>
                        <td>{{$reinscripcion->num_plaza}}</td>
                        <td>{{$reinscripcion->clave_dependencia}}</td>
                        <td>{{$reinscripcion->nivel_salarial}}</td>
                        <td>{{$reinscripcion->seccion_sindical}}</td>
                        <td>{{$reinscripcion->horario_laboral_ent}}</td>
                        <td>{{$reinscripcion->horario_laboral_sal}}</td>
                        <td>{{$reinscripcion->email}}</td>
                        <td>{{$reinscripcion->telefono_uno}}</td>
                        <td>{{$reinscripcion->telefono_dos}}</td>
                        <td>
                            <span class="float-right">
                                <a class="btn btn-md btn-outline-primary"
                                    href="{{route('lista_documentos',$reinscripcion->id)}}"
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
