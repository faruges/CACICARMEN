@extends('users.users_inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
<script src="{{URL::asset('js/add-upper-case.js')}}" type="text/javascript"> </script>
<script src="{{URL::asset('js/inscripcion.js')}}" type="text/javascript"> </script>
<script src="{{ URL::asset('js/idioma.js')}}" type="text/javascript"></script>

@endsection
@section('mycontent')
<style>
    .m-bottom{
        margin-bottom:1rem;
    }
    .m-top{
        margin-top:1rem;
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
    @if(Session::has('mensaje'))
    <p style="margin-left:70%; width:30%; font-weight: 500; font-size: 1.5rem;;" class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('mensaje') }}
        <button style="margin-left: 5rem;" type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    </p>
    @elseif(Session::has('error'))
    <p style="margin-left:70%; width:30%; font-weight: 500; font-size: 1.5rem;;" class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}
        <button style="margin-left: 5rem;" type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    </p>
    @endif
    <div class="card mt50 margin-card">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h2 class="cdmx-colorv">
                    Datos Repositorio Inscripción
                </h2>
            </div>
            <div class="float-right" style="margin-top: 1rem;">
                <div class="row">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <label
                                style="font-weight: 400; white-space: nowrap; margin-top:0.5rem; margin-right:3rem; text-align: left;font-family: -apple-system,BlinkMacSystemFont,"
                                Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif; font-size: 1rem;">Ciclo
                                Escolar:</label>
                        </div>
                        <div class="col-sm-8 col-md-8">
                            <form method="POST" action="{{route('get_list_repo_by_ciclo')}}"
                                enctype="multipart/form-data" style="margin-top: 0.5rem;">
                                @csrf                                
                                <select name="ciclo_escolar" onchange="this.form.submit()">
                                    <option value="" disabled selected>Seleccione..</option>
                                    @foreach ($ciclos_escolares_filter as $ciclo)
                                    <option value="{{$ciclo}}">{{$ciclo}}</option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="row mr-2">
                        <div class="col-sm-12 col-md-12">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <a id="repos_inscripcion" type="button" href="{{route('all_datos_repositorio')}}"
                                        class="btn btn-md btn-primary">Inscripción</a>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <a id="repos_reinscripcion" type="button"
                                        href="{{route('all_datos_repositorio_reins')}}" class="btn btn-md btn-success">
                                        Reinscripción</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row float-right" style="margin: 1rem 4.5rem;">
                    <form method="POST" action="{{route('excel_data_repository')}}" style="margin-top: 0.5rem;">
                        @csrf
                            <input id="ciclo_escolar" name="ciclo_escolar" type="text" value="{{$ciclo_escolar_report}}"
                                hidden />
                            <input id="tabla" name="tabla" type="text" value="{{$tabla}}"
                                hidden />
                            <input id="name_key_foreing_repost" name="name_key_foreing_repost" type="text" value="{{$name_key_foreing_repost}}"
                                hidden />
                        <button class="btn btn-md btn-dark" onclick="this.form.submit()">Generar Reporte</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body" style="overflow: auto">
            <div class="portlet-body flip-scroll">
                <table id="tableRegs" class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                        <tr>
                            <th>Caci</th>
                            <th>Menor</th>
                            <th>Curp (menor)</th>
                            <th>Padre o Tutor</th>
                            <th>RFC (padre)</th>
                            <th>Telefono Particular</th>
                            <th>Telefono Celular</th>
                            <th>Email</th>
                            <th>Ciclo Escolar</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datosReposPre as $repo)
                        <tr>
                            <td>{{$repo['caci']}}</td>
                            <td>{{$repo['nombre_comple_nino']}}</td>
                            <td>{{$repo['curp_nino']}}</td>
                            <td>{{$repo['nombre_completo_padre']}}</td>
                            <td>{{$repo['rfc_padre']}}</td>
                            <td>{{$repo['tel_particular_padre']}}</td>
                            <td>{{$repo['tel_celular_padre']}}</td>
                            <td>{{$repo['email_padre']}}</td>
                            <td>{{$repo['ciclo_escolar']}}</td>
                            <td>
                                <span>
                                    <a class="btn btn-lg btn-outline-primary"
                                        href="{{route('ver_detalles_repo_pre',$repo['id'])}}"
                                        title="Ver Detalles del Repositorio"><i class="fa fa-eye"></i></a>
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