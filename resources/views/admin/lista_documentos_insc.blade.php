@extends('inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')
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
    <div class="row">
        <div class="card mt50" style="margin:0px 50px 50px 50px;">
            <div class="card-header">
                <h1>Datos Solicitante</h1>
            </div>
            <div class="card-body" style="overflow: auto">
                @foreach ($lista_inscripcion as $reinsc)

                <h3>Caci SAF</h3>
                <label style="font-size: 20px;">{{$reinsc->caci}}</label>
                
                <h3>Nombre Menor</h3>
                <label style="font-size: 20px;">{{$reinsc->nombre_menor_1}} {{$reinsc->apellido_paterno_1}} {{$reinsc->apellido_materno_1}}</label>
                <h3>Fecha de Nacimiento</h3>
                <label style="font-size: 20px;">{{$reinsc->birthday}}</label>
                <h3>Edad</h3>
                <label style="font-size: 20px;">{{$reinsc->Edad_menor}}</label>
                <h3>Curp</h3>
                <label style="font-size: 20px;">{{$reinsc->curp_num}}</label>

                <h3>Nombre Tutor</h3>
                <label style="font-size: 20px;">{{$reinsc->nombre_tutor_madres}} {{$reinsc->apellido_paterno_tutor}} {{$reinsc->apellido_materno_tutor}}</label>
                <h3>Domicilio</h3>
                <label style="font-size: 20px;">{{$reinsc->domicilio_delegracion}}</label>
                <h3>Tipo Nomina</h3>
                <label style="font-size: 20px;">{{$reinsc->tipo_nomina_1}}</label>
                <h3>Numero Empleado</h3>
                <label style="font-size: 20px;">{{$reinsc->num_empleado_1}}</label>
                <h3>Numero Plaza</h3>
                <label style="font-size: 20px;">{{$reinsc->num_plaza_1}}</label>
                <h3>Clave Dependencia</h3>
                <label style="font-size: 20px;">{{$reinsc->clave_dependencia_1}}</label>
                <h3>Nivel Salarial</h3>
                <label style="font-size: 20px;">{{$reinsc->nivel_salarial_1}}</label>
                <h3>Seccion Sindical</h3>
                <label style="font-size: 20px;">{{$reinsc->seccion_sindical_1}}</label>

                <h3>Email</h3>
                <label style="font-size: 20px;">{{$reinsc->email_correo}}</label>
                <h3>Telefono Uno</h3>
                <label style="font-size: 20px;">{{$reinsc->telefono_celular}}</label>
                <h3>Telefono Dos</h3>
                <label style="font-size: 20px;">{{$reinsc->telefono_3}}</label>


                @endforeach


            </div>
        </div>
        <div class="card mt50" style="margin:0px 50px 50px 50px;">
            <div class="card-header">
                <h1>Lista de Documentos</h1>
            </div>
            <div class="card-body" style="overflow: auto">
                <table class="table table-striped table-responsive-md">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha de Creacion</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $doc)
                        <tr>
                            <td>{{$doc->nombre}}</td>
                            <td>{{$doc->created_at}}</td>
                            <td class="actions">
                                <span class="float-right">
                                    {{--  <a class="btn btn-sm btn-outline-success"
                                        href="{{route('detalles_documento',$doc->id)}}"
                                        title="Ver Detalles Documento"><i class="fa fa-file"></i></a>  --}}
                                        <a class="btn btn-sm btn-outline-success"
                                        href="{{url('uploads/documentos/'.$doc->nombre)}}"
                                        title="Ver Detalles Documento" target="_blank"><i class="fa fa-file"></i></a>
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mt50" style="margin:0px 50px 50px 50px;">
            <div class="card-header">
                <h3>Notificar</h3>
                <h3>Por Email</h3>
            </div>
            @foreach ($lista_inscripcion as $reinsc)
            <div class="card-body" style="overflow: auto">
                <span class="float-right">
                    <a class="btn btn-sm btn-outline-success"  href="{{route('email_lista_espera',[$reinsc->nombre_tutor_madres,$reinsc->apellido_paterno_tutor,$reinsc->email_correo])}}"
                    title="Notifica Lista en Espera"><i class="fa fa-send"></i></a>
                </span>
                <a class="btn btn-sm btn-outline-primary" href="{{route('email_info_recibida',[$reinsc->nombre_tutor_madres,$reinsc->apellido_paterno_tutor,$reinsc->email_correo])}}"
                title="Notifica Informacion Recibida"><i class="fa fa-send"></i></a>
            </div>
            @endforeach
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