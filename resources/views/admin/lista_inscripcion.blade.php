@extends('users.users_inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
<script src="{{URL::asset('js/inscripcion.js')}}" type="text/javascript"> </script>
<script src="{{ URL::asset('js/idioma.js')}}" type="text/javascript"></script>
@endsection
@section('mycontent')
<style>
    .margin-card {
        margin-bottom: 10%;
    }

    .btn-regresar {
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

<div class="container-fluid">
    <div class="card mt50 margin-card">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h2 class="cdmx-colorv">
                    Inscripción
                </h2>
            </div>
            <div class="float-right">
                <form id="regForm" action="{{route('export-excel')}}" method="GET" enctype="multipart/form-data">
                    @csrf
                    <button id="valida_curp" type="submit" title="Generar Reporte" class="btn btn-lg btn-dark"><i
                            class="fa fa-download"></i></button>
                </form>
            </div>
        </div>
        {{-- <h1 style="margin-left: 10px;">Bienvenido {{auth()->user()->name}}</h1> --}}
        {{-- <div class="card-header">
            <div class="float-right">
                <form id="regForm" action="{{route('export-excel')}}" method="GET" enctype="multipart/form-data">
                    @csrf
                    <button id="valida_curp" type="submit" title="Generar Reporte" class="btn btn-lg btn-dark"><i
                            class="fa fa-download"></i></button>
                </form>
            </div>
            <h2><i class="fa fa-book" style="margin-left: 20px;"></i> Inscripci&oacute;n</h2>
        </div> --}}
        <div class="card-body" style="overflow: auto">
            <div class="portlet-body flip-scroll">
            <table class="table table-bordered table-striped table-condensed flip-content">
            {{-- <table class="table table-striped table-responsive-lg"> --}}
                <thead class="flip-content">
                    <tr>
                        <th>Caci</th>
                        <th>Nombre Menor</th>
                        <th>Curp</th>
                        <th>Edad al Ingreso</th>
                        <th>Tutor</th>
                        <th>Calle</th>
                        <th>Número</th>
                        <th>Colonia</th>
                        <th>Alcald&iacute;a</th>
                        <th>C&oacute;digo Postal</th>
                        <th>Tipo nomina</th>
                        <th>N&uacute;m. empleado</th>
                        <th>N&uacute;m. Plaza</th>
                        <th>Clave Dependencia</th>
                        <th>Nivel Salarial</th>
                        <th>Secci&oacute;n Sindical</th>
                        <th>Email</th>
                        <th>Telefono Uno</th>
                        <th>Telefono Dos</th>
                        <th>Ciclo Escolar</th>
                        <th>Email Enviado Notificación Recibida</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($array_lista_preins_reins as $caci)
                    <tr>
                        <td>{{$caci['caci']}}</td>
                        <td>{{$caci['nombre_menor_1']}} {{$caci['apellido_paterno_1']}} {{$caci['apellido_materno_1']}}</td>
                        <td>{{$caci['curp_num']}}</td>
                        <td>{{$caci['Edad_menor']}}</td>
                        <td>{{$caci['nombre_tutor_madres']}} {{$caci['apellido_paterno_tutor']}} {{$caci['apellido_materno_tutor']}}</td>
                        <td>{{$caci['calle']}}</td>
                        <td>{{$caci['numero_domicilio']}}</td>
                        <td>{{$caci['colonia']}}</td>
                        <td>{{$caci['alcaldia']}}</td>
                        <td>{{$caci['codigo_postal']}}</td>
                        <td>{{$caci['tipo_nomina_1']}}</td>
                        <td>{{$caci['num_empleado_1']}}</td>
                        <td>{{$caci['num_plaza_1']}}</td>
                        <td>{{$caci['clave_dependencia_1']}}</td>
                        <td>{{$caci['nivel_salarial_1']}}</td>
                        <td>{{$caci['seccion_sindical_1']}}</td>
                        <td>{{$caci['email_correo']}}</td>
                        <td>{{$caci['telefono_celular']}}</td>
                        <td>{{$caci['telefono_3']}}</td>
                        <td>{{$caci['ciclo_escolar']}}</td>
                        @if ($caci['correo_enviado_not_recibida'])
                        <td>Correo de confirmación Enviado</td>
                        @else
                        <td>Registros sin enviar correo de recibido</td>
                        @endif
                        <td>
                            <span class="float-right">
                                <button class="btn btn-md btn-outline-success"
                                onclick="editCaci({{$caci['id']}},'{{ $caci['caci']}}')" title="Actualizar CACI"><i
                                class="fa fa-recycle"></i></button>
                                <a class="btn btn-md btn-outline-primary"
                                href="{{route('lista_documentos_inscr',$caci['id'])}}" title="Ver lista de documentos"><i
                                class="fa fa-eye"></i></a>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        {{--  <div>
            <span class="float-right btn-regresar">
                <a class="btn btn-lg btn-primary" href="{{url('/admin')}}"
        title="Regresar"><i class="fa fa-backward"></i> Regresar</a>
        </span>
    </div> --}}
</div>
</div>

<div class="modal fade" id="caciEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Cambia Menor a Otro CACI</h2>
              </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Centro de Atención y Cuidado Infantil:
                        </label>
                        <input type="text" class="form-control" id="id_caci" hidden>
                        <input type="text" class="form-control" id="tramite" value="inscripcion" hidden>
                        <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;" for="caci">
                            <select style="font-size: 15px;" name="caci_nombre" id="caci_nombre" >
                                <option value="Luz Maria Gomez Pezuela">Luz María Gómez Pezuela</option>
                                <option value="Mtra Eva Moreno Sanchez">Mtra. Eva Moreno Sánchez</option>
                                <option value="Bertha Von Glumer Leyva">Bertha Von Glumer Leyva</option>
                                <option value="Carolina Agazzi">Carolina Agazzi</option>
                                <option value="Carmen S">Carmen Serdán</option>
                            </select></h5>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i>
                    Cerrar</button>
                <button type="button" onclick="actualizarCaci('{{ csrf_token() }}')"
                    class="btn btn-primary"><i class="fa fa-edit"></i> Actualizar</button>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

@endsection