@extends('users.users_inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
<script src="{{URL::asset('js/send_email.js')}}" type="text/javascript"> </script>
<script src="{{URL::asset('js/add-upper-case.js')}}" type="text/javascript"> </script>
<script src="{{URL::asset('js/session_out.js')}}" type="text/javascript"> </script>
@endsection
@section('mycontent')
<style>
    .card-uno {
        margin: 0px 10px 50px 70px;
    }

    .card-dos {
        margin: 0px 0px 50px 70px;
    }

    .card-title {
        margin-top: 10px;
        text-align: center;
    }

    .sub-card-body {
        overflow: auto;
        height: 500px;
    }

    h3 {
        text-align: center;
    }

    .font-label {
        text-align: right;
        font-style: normal;
        font-size: 15px;
        margin-left: 5px;
    }

    .font-label-clave {
        text-align: right;
        font-style: normal;
        font-size: 10px;
        margin-left: 5px;
    }

    .row-margin {
        margin: 10px;
        padding: 10px;
    }

    .btn-regresar {
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
            <input id="email_caci" value="{{$emailCaci}}" hidden>
            @foreach ($lista_reinscripcion as $reinsc)
            <input id="id" value="{{$reinsc->id}}" hidden>
            <input id="nombre_tutor" value="{{$reinsc->nombre_tutor}}" hidden>
            <input id="ape_paterno" value="{{$reinsc->ap_paterno_t}}" hidden>
            <input id="email" value="{{$reinsc->email}}" hidden>
            <span class="float-right">

                <button type="button" id="envia_email" title="Notifica Información Recibida" name="envia_email" onclick="envia_email_info_recib_inscr()" class="btn btn-lg btn-primary"><i class="fa fa-envelope"></i></button>
                {{-- <button type="button" id="envia_email_dos" title="Notifica Información Recibida Reinscripción"
                    name="envia_email_dos" onclick="envia_email()" class="btn btn-lg btn-info"><i
                        class="fa fa-envelope"></i></button>  --}}
                {{-- <a class="btn btn-lg btn-dark"
                    href="{{route('email_lista_espera',[$reinsc->nombre_tutor,$reinsc->ap_paterno_t,$reinsc->email])}}"
                title="Notifica Lista en Espera"><i class="fa fa-envelope"></i></a> --}}
            </span>
            @endforeach
            <h1><i class="fa fa-file"></i> Valida Reinscripci&oacute;n Solicitante</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="card mt50 card-uno col-md-5 col-lg-5 col-xl-5">
                    <div class="card-title">
                        <h1> Datos Solicitante</h1>
                    </div>
                    <div class="card-body sub-card-body">
                        @foreach ($lista_reinscripcion as $reinsc)
                        <div class="row row-margin">
                            <h3>Caci SAF: </h3> <label class="font-label"> {{$reinsc->caci}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Nombre Menor: </h3><label class="font-label">{{$reinsc->nombre_menor}}
                                {{$reinsc->ap_paterno}} {{$reinsc->ap_materno}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Fecha de Nacimiento: </h3><label class="font-label">{{$reinsc->fecha_nacimiento}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Edad: </h3><label class="font-label">{{$reinsc->edad_menor_ingreso}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Curp: </h3><label class="font-label">{{$reinsc->curp}}</label>
                        </div>

                        <div class="row row-margin">
                            <h3>Nombre Tutor: </h3><label class="font-label">{{$reinsc->nombre_tutor}}
                                {{$reinsc->ap_paterno_t}} {{$reinsc->ap_materno_t}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Calle: </h3><label class="font-label">{{$reinsc->calle}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>N&uacute;mero: </h3><label class="font-label">{{$reinsc->numero_domicilio}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Colonia: </h3><label class="font-label">{{$reinsc->colonia}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Alcald&iacute;a: </h3><label class="font-label">{{$reinsc->alcaldia}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>C&oacute;digo Postal: </h3><label class="font-label">{{$reinsc->codigo_postal}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Tipo N&oacute;mina: </h3><label class="font-label">{{$reinsc->tipo_nomina}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>N&uacute;mero Empleado: </h3><label class="font-label">{{$reinsc->num_empleado}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>N&uacute;mero Plaza: </h3><label class="font-label">{{$reinsc->num_plaza}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Clave Dependencia: </h3><label class="font-label">{{$reinsc->clave_dependencia}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Nivel Salarial: </h3><label class="font-label">{{$reinsc->nivel_salarial}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Secci&oacute;n Sindical: </h3><label class="font-label">{{$reinsc->seccion_sindical}}</label>
                        </div>

                        <div class="row row-margin">
                            <h3>Email: </h3><label class="font-label">{{$reinsc->email}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Telefono Uno: </h3><label class="font-label">{{$reinsc->telefono_uno}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Telefono Dos: </h3><label class="font-label">{{$reinsc->telefono_dos}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Horario Laboral Entrada: </h3><label class="font-label">{{$reinsc->horario_laboral_ent}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Horario Laboral Salida: </h3><label class="font-label">{{$reinsc->horario_laboral_sal}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="card mt50 card-dos col-md-5 col-lg-5 col-xl-5">
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
                                    <td "font-size: 20px;">{{$doc->nombre_tramite}}</td>
                                    <td "font-size: 20px;">{{$doc->created_at}}</td>
                                    <td class="actions">
                                        <span class="float-right">
                                            <a class="btn btn-md btn-outline-success" href="{{url('uploads/documentos/'.$doc->nombre)}}" title="Ver Detalles Documento" target="_blank"><i class="fa fa-file"></i></a>
                                            <button class="btn btn-md btn-info" type="button" title="Actualizar Documento"
                                                onclick="sust_file('{{$doc->id}}','reinscripcion')"><i
                                                    class="fa fa-recycle"></i></button>
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
                <a class="btn btn-lg btn-primary" href="{{route('lista_reinscripcion')}}" title="Regresar"><i class="fa fa-backward"></i> Regresar</a>
                <button type="button" id="delete_registro_sol" title="Borrar Registro del Solicitante" name="delete_registro_sol" onclick="del_reg_solicitante('{{$id}}','{{$nameUser}}','lista_reinscripcion','reinscripcion_menor','reinscripcion_menor_id','reinscripcion')" class="btn btn-lg btn-danger"><i class="fa fa-trash"></i>Borrar Registro</button>
            </span>
        </div>
    </div>
</div>

<div class="modal fade" id="fileEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel" style="font-size: 45px;">Actualizar Documento</h2>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="js-upload uk-placeholder uk-text-center" style="margin-top: 0rem;">
                            <span uk-icon="icon: cloud-upload"></span>
                            <span class="uk-text-small">Seleccióne Archivo</span>
                            <div uk-form-custom>
                                <input type="text" class="form-control" id="id_file" hidden>
                                <input type="text" class="form-control" id="tramite" hidden>
                                <input type="file" id="file_upgrade" name="file_upgrade"
                                    title="El tamaño del archivo no debe exceder 2 Mb"
                                    accept="application/msword, application/pdf">
                                <span class="uk-link">2 Mb máximo</span>
                            </div>
                        </div>
                        <progress id="js-progressbar-disc" class="uk-progress" value="0" max="100"
                            style="margin-top: 0rem; margin-bottom: 0rem;" hidden></progress>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hideModal()"><i class="fa fa-close"></i>
                    Cerrar</button>
                <button id="upgrade_doc" type="button" onclick="actualizarDocumento('{{ csrf_token() }}')" class="btn btn-primary"><i
                        class="fa fa-edit"></i> Actualizar</button>
            </div>
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

{{-- <script>
    $(document).ready(function() {
        $("#envia_email").on('click',function()
        {
            alert("hola");
        });

    });
</script>  --}}
@endsection