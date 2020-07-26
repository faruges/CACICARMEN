@extends('admin.admin_inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
    <script src="{{URL::asset('js/send_email.js')}}" type="text/javascript"> </script> 
@endsection 
@section('mycontent') <style>
    
    .card {
        margin: 0px 55px 50px 60px;
    }

    .card-title {
        margin-top: 10px;
        text-align: center;
    }

    .sub-card-body {
        overflow: auto;
        height: 400px;
    }
    h3{
        text-align: center;
    }
    .font-label {
        text-align: center;
        font-style: normal;
        font-size: 20px;
    }
    .btn-regresar{
        margin: 0px 20px 40px 0px;
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
            @foreach ($lista_reinscripcion as $reinsc)
            <span class="float-right">
                <a class="btn btn-lg btn-primary"
                    href="{{route('email_info_recibida',[$reinsc->nombre_tutor,$reinsc->ap_paterno_t,$reinsc->email])}}"
                    title="Notifica Información Recibida"><i class="fa fa-envelope"></i></a>
                {{--  <button type="button" id="envia_email" name="envia_email" onclick="envia_email({{$reinsc->nombre_tutor}},'{{ csrf_token() }}')" class="button-blue">Enviar</button>  --}}
                <a class="btn btn-lg btn-dark"
                    href="{{route('email_lista_espera',[$reinsc->nombre_tutor,$reinsc->ap_paterno_t,$reinsc->email])}}"
                    title="Notifica Lista en Espera"><i class="fa fa-envelope"></i></a>
            </span>
            @endforeach
            <h1><i class="fa fa-file"></i> Valida Reinscripci&oacute;n Solicitante</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="card mt50">
                    <div class="card-title">
                        <h1> Datos Solicitante</h1>
                    </div>
                    <div class="card-body sub-card-body">
                        @foreach ($lista_reinscripcion as $reinsc)
                        <h3>Caci SAF</h3>
                        <label class="font-label">{{$reinsc->caci}}</label>
                        <h3>Curp Caci</h3>
                        <label class="font-label">{{$reinsc->curp_caci}}</label>
                        <h3>Matricula</h3>
                        <label class="font-label">{{$reinsc->matricula}}</label>
                        <h3>Nombre Menor</h3>
                        <label class="font-label">{{$reinsc->nombre_menor}} {{$reinsc->ap_paterno}}
                            {{$reinsc->ap_materno}}</label>
                        <h3>Fecha de Nacimiento</h3>
                        <label class="font-label">{{$reinsc->fecha_nacimiento}}</label>
                        <h3>Edad</h3>
                        <label class="font-label">{{$reinsc->edad_menor_ingreso}}</label>
                        <h3>Curp</h3>
                        <label class="font-label">{{$reinsc->curp}}</label>

                        <h3>Nombre Tutor</h3>
                        <label class="font-label">{{$reinsc->nombre_tutor}} {{$reinsc->ap_paterno_t}}
                            {{$reinsc->ap_materno_t}}</label>
                        <h3>Domicilio</h3>
                        <label class="font-label">{{$reinsc->domicilio}}</label>
                        <h3>Tipo Nomina</h3>
                        <label class="font-label">{{$reinsc->tipo_nomina}}</label>
                        <h3>Numero Empleado</h3>
                        <label class="font-label">{{$reinsc->num_empleado}}</label>
                        <h3>Numero Plaza</h3>
                        <label class="font-label">{{$reinsc->num_plaza}}</label>
                        <h3>Clave Dependencia</h3>
                        <label class="font-label">{{$reinsc->clave_dependencia}}</label>
                        <h3>Nivel Salarial</h3>
                        <label class="font-label">{{$reinsc->nivel_salarial}}</label>
                        <h3>Seccion Sindical</h3>
                        <label class="font-label">{{$reinsc->seccion_sindical}}</label>
                        <h3>Horario Laboral</h3>
                        <label class="font-label">{{$reinsc->horario_laboral}}</label>
                        <h3>Email</h3>
                        <label class="font-label">{{$reinsc->email}}</label>
                        <h3>Telefono Uno</h3>
                        <label class="font-label">{{$reinsc->telefono_uno}}</label>
                        <h3>Telefono Dos</h3>
                        <label class="font-label">{{$reinsc->telefono_dos}}</label>
                        <h3>Horario Laboral Entrada</h3>
                        <label class="font-label">{{$reinsc->horario_laboral_ent}}</label>
                        <h3>Horario Laboral Salida</h3>
                        <label class="font-label">{{$reinsc->horario_laboral_sal}}</label>
                        @endforeach
                    </div>
                </div>
                <div class="card mt50">
                    <div class="card-title">
                        <h1>Lista de Documentos</h1>
                    </div>
                    <div class="card-body sub-card-body">
                        <table class="table table-striped table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Fecha de Creaci&oacute;n</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $doc)
                                <tr>
                                    <td "font-size: 20px;">{{$doc->nombre}}</td>
                                    <td "font-size: 20px;">{{$doc->created_at}}</td>
                                    <td class="actions">
                                        <span class="float-right">
                                            <a class="btn btn-lg btn-outline-success"
                                                href="{{url('uploads/documentos/'.$doc->nombre)}}"
                                                title="Ver Detalles Documento" target="_blank"><i
                                                    class="fa fa-file"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="float-right btn-regresar">
                <a class="btn btn-lg btn-primary" href="{{route('lista_reinscripcion')}}"
                    title="Regresar"><i class="fa fa-backward"></i> Regresar</a>
            </span>
        </div>
    </div>
</div>

<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}">
</script>
<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

{{--  <script>
    $(document).ready(function() {
        $("#envia_email").on('click',function()
        {
            alert("hola");
        });

    });
</script>  --}}
@endsection