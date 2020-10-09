@extends('users.users_inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
<script src="{{URL::asset('js/inscripcion.js')}}" type="text/javascript"> </script>
<script src="{{ URL::asset('js/idioma.js')}}" type="text/javascript"></script>
@endsection
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
<div class="container-fluid">
    <div class="card mt50 margin-card">
        {{-- <h1 style="margin-left: 10px;">Bienvenido {{auth()->user()->name}}</h1> --}}
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h2 class="cdmx-colorv">
                    Reinscripción
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
        {{-- <div class="card-header">
            <div class="float-right">
                <form id="regForm" action="{{route('export-excel-reinscripcion')}}" method="GET" enctype="multipart/form-data">
                    @csrf
                    <button id="valida_curp" type="submit" title="Generar Reporte" class="btn btn-lg btn-dark"><i class="fa fa-download"></i></button> 
                </form>
            </div>
            <h2><i class="fa fa-bookmark" style="margin-left: 20px;"></i> Reinscripci&oacute;n</h2>
        </div> --}}
        <div class="card-body" style="overflow: auto">
            <div class="portlet-body flip-scroll">
            <table class="table table-bordered table-striped table-condensed flip-content">
            {{-- <table class="table table-striped table-responsive-md"> --}}
                <thead class="flip-content">
                    <tr>
                        <th>Caci</th>
                        <th>Nombre Menor</th>
                        <th>Edad al Ingreso</th>
                        <th>Curp</th>
                        <th>Tutor</th>
                        <th>Calle</th>
                        <th>Número</th>
                        <th>Colonia</th>
                        <th>Alcald&iacute;a</th>
                        <th>C&oacute;digo Postal</th>
                        <th>Tipo n&oacute;mina</th>
                        <th>N&uacute;m. empleado</th>
                        <th>N&uacute;m. Plaza</th>
                        <th>Clave Dependencia</th>
                        <th>Nivel Salarial</th>
                        <th>Secci&oacute;n Sindical</th>
                        <th>Horario Laboral Ent.</th>
                        <th>Horario Laboral Sal.</th>
                        <th>Email</th>
                        <th>Telefono Uno</th>
                        <th>Telefono Dos</th>
                        <th>Ciclo Escolar</th>
                        <th>Email Enviado Notificación Recibida</th>
                        <th>Email Enviado Notificación Recibida Reinscripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($array_lista_preins_reins as $reinscripcion)
                    <tr>                        
                        <td>{{$reinscripcion['caci']}}</td>
                        <td>{{$reinscripcion['nombre_menor']}} {{$reinscripcion['ap_paterno']}} {{$reinscripcion['ap_materno']}}</td>
                        <td>{{$reinscripcion['edad_menor_ingreso']}}</td>
                        <td>{{$reinscripcion['curp']}}</td>
                        <td>{{$reinscripcion['nombre_tutor']}} {{$reinscripcion['ap_paterno_t']}} {{$reinscripcion['ap_materno_t']}}</td>
                        <td>{{$reinscripcion['calle']}}</td>
                        <td>{{$reinscripcion['numero_domicilio']}}</td>
                        <td>{{$reinscripcion['colonia']}}</td>
                        <td>{{$reinscripcion['alcaldia']}}</td>
                        <td>{{$reinscripcion['codigo_postal']}}</td>
                        <td>{{$reinscripcion['tipo_nomina']}}</td>
                        <td>{{$reinscripcion['num_empleado']}}</td>
                        <td>{{$reinscripcion['num_plaza']}}</td>
                        <td>{{$reinscripcion['clave_dependencia']}}</td>
                        <td>{{$reinscripcion['nivel_salarial']}}</td>
                        <td>{{$reinscripcion['seccion_sindical']}}</td>
                        <td>{{$reinscripcion['horario_laboral_ent']}}</td>
                        <td>{{$reinscripcion['horario_laboral_sal']}}</td>
                        <td>{{$reinscripcion['email']}}</td>
                        <td>{{$reinscripcion['telefono_uno']}}</td>
                        <td>{{$reinscripcion['telefono_dos']}}</td>
                        <td>{{$reinscripcion['ciclo_escolar']}}</td>
                        @if ($reinscripcion['correo_enviado_not_recibida'])
                        <td>Correo de confirmación Enviado</td>                    
                        @else
                        <td>Registros sin enviar correo de recibido</td>
                        @endif
                        @if ($reinscripcion['correo_enviado_not_recibida_reinscr'])
                        <td>Correo de confirmación Enviado</td>                    
                        @else
                        <td>Registros sin enviar correo de recibido</td>
                        @endif
                        <td class="float-right">
                                <button class="btn btn-md btn-outline-success"
                                onclick="editCaci({{$reinscripcion['id']}},'{{ $reinscripcion['caci'] }}')" title="Actualizar CACI"><i
                                    class="fa fa-recycle"></i></button>
                                <a class="btn btn-md btn-outline-primary"
                                    href="{{route('lista_documentos',$reinscripcion['id'])}}"
                                    title="Ver lista de documentos"><i class="fa fa-eye"></i></a>
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
        </div>  --}}
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
                        <input type="text" class="form-control" id="tramite" value="reinscripcion" hidden>
                        <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;" for="caci">
                            <select style="font-size: 15px;" name="caci_nombre" id="caci_nombre">
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
