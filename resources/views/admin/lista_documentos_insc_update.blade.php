@extends('users.users_inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
<script src="{{URL::asset('js/send_email.js')}}" type="text/javascript"> </script>
<script src="{{URL::asset('js/add-upper-case.js')}}" type="text/javascript"> </script>
<script src="{{URL::asset('js/inscripcion.js')}}" type="text/javascript"> </script>
<script src="{{URL::asset('js/session_out.js')}}" type="text/javascript"> </script>
{{-- <link rel="stylesheet" href="{{ asset('assets/css/uikit.min.css')}}" /> --}}
@endsection
@section('mycontent')
<style>
    .card-uno {
        margin: 0px 10px 50px 70px;
    }

    .card-dos {
        margin: 0px 0px 50px 60px;
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
        text-align: center;
        font-style: normal;
        font-size: 15px;
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
            @foreach ($lista_inscripcion as $reinsc)
            <input id="id" value="{{$reinsc->id}}" hidden>
            <input id="nombre_tutor" value="{{$reinsc->nombre_tutor_madres}}" hidden>
            <input id="ape_paterno" value="{{$reinsc->apellido_paterno_tutor}}" hidden>
            <input id="email" value="{{$reinsc->email_correo}}" hidden>
            <span class="float-right">
                <button type="button" id="envia_email" title="Notifica Información Recibida" name="envia_email" onclick="envia_email_recib_inscri()" class="btn btn-lg btn-primary"><i class="fa fa-envelope"></i></button>
                {{-- <a class="btn btn-lg btn-dark"
                    href="{{route('email_lista_espera',[$reinsc->nombre_tutor_madres,$reinsc->apellido_paterno_tutor,$reinsc->email_correo])}}"
                title="Notifica Lista en Espera"><i class="fa fa-envelope"></i></a> --}}
            </span>
            @endforeach
            <h1><i class="fa fa-file"></i> Valida Inscripci&oacute;n Solicitante</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="card mt50 card-uno col-md-5 col-lg-5 col-xl-5">
                    <div class="card-title">
                        <h1>Datos Solicitante</h1>
                    </div>
                    <div class="card-body sub-card-body">
                        @foreach ($lista_inscripcion as $reinsc)

                        <div class="row row-margin">
                            <h3>Caci SAF:</h3><label class="font-label">{{$reinsc->caci}}</label>
                        </div>

                        <div class="row row-margin">
                            <h3>Nombre Menor:</h3><label class="font-label">{{$reinsc->nombre_menor_1}}
                                {{$reinsc->apellido_paterno_1}} {{$reinsc->apellido_materno_1}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Fecha de Nacimiento:</h3><label class="font-label">{{$reinsc->birthday}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Edad:</h3><label class="font-label">{{$reinsc->Edad_menor}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Curp:</h3><label class="font-label">{{$reinsc->curp_num}}</label>
                        </div>

                        <div class="row row-margin">
                            <h3>Nombre Tutor:</h3><label class="font-label">{{$reinsc->nombre_tutor_madres}}
                                {{$reinsc->apellido_paterno_tutor}} {{$reinsc->apellido_materno_tutor}}</label>
                        </div>

                        <div class="row row-margin">
                            <h3>Calle:</h3><label class="font-label">{{$reinsc->calle}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>N&uacute;mero:</h3><label class="font-label">{{$reinsc->numero_domicilio}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Colonia:</h3><label class="font-label">{{$reinsc->colonia}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Alcald&iacute;a:</h3><label class="font-label">{{$reinsc->alcaldia}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>C&oacute;digo Postal:</h3><label class="font-label">{{$reinsc->codigo_postal}}</label>
                        </div>

                        <div class="row row-margin">
                            <h3>Tipo N&oacute;mina:</h3><label class="font-label">{{$reinsc->tipo_nomina_1}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>N&uacute;mero Empleado:</h3><label class="font-label">{{$reinsc->num_empleado_1}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>N&uacute;mero Plaza:</h3><label class="font-label">{{$reinsc->num_plaza_1}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Clave Dependencia:</h3><label class="font-label">{{$reinsc->clave_dependencia_1}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Nivel Salarial:</h3><label class="font-label">{{$reinsc->nivel_salarial_1}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Secci&oacute;n Sindical:</h3><label class="font-label">{{$reinsc->seccion_sindical_1}}</label>
                        </div>

                        <div class="row row-margin">
                            <h3>Email:</h3><label class="font-label">{{$reinsc->email_correo}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Telefono Uno:</h3><label class="font-label">{{$reinsc->telefono_celular}}</label>
                        </div>
                        <div class="row row-margin">
                            <h3>Telefono Dos:</h3><label class="font-label">{{$reinsc->telefono_3}}</label>
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
                                    <th>Fecha de Creación</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $doc)
                                <tr>
                                    <td>{{$doc->nombre_tramite}}</td>
                                    <td>{{$doc->created_at}}</td>
                                    <td class="actions">
                                        <span class="float-right">
                                            <a class="btn btn-md btn-outline-success" href="{{'uploads/documentos/'.$doc->nombre}}" title="Ver Detalles Documento" target="_blank"><i class="fa fa-file"></i></a>
                                            <button class="btn btn-md btn-info" type="button" title="Actualizar Documento" onclick="sust_file('{{$doc->id}}','inscripcion')"><i class="fa fa-recycle"></i></button>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @can('view_form_datos_repositorio')
            <div class="row">
                <div class="card mx-auto col-md-10 col-lg-10 col-xl-10">
                    <div class="card-header card-header-tabs-line">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab_1_4" data-toggle="tab" href="#kt_tab_pane_1_4">
                                            <span class="nav-icon"><i class="fa fa-user-circle"></i></span>
                                            <span class="nav-text">Datos Generales</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab_2_4"  data-toggle="tab" href="#kt_tab_pane_2_4">
                                            <span class="nav-icon"><i class="fa fa-child"></i></span>
                                            <span class="nav-text">Datos de la niña o niño</span>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab_3_4" data-toggle="tab" href="#kt_tab_pane_3_4">
                                            <span class="nav-icon"><i class="fa fa-phone"></i></span>
                                            <span class="nav-text">Datos de la Madre, Padre Y/O Persona Tutora</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab_4_4" data-toggle="tab" href="#kt_tab_pane_4_4">
                                            <span class="nav-icon"><i class="fa fa-phone"></i></span>
                                            <span class="nav-text">Datos de las Personas Autorizadas</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach ($listaDatosReposPre as $item => $reinscripcion)
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">
                                <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nombre Del CACI-SAF<span class="text-danger"></span></label>
                                            <input type="text" id="caci" name="caci" class="form-control" placeholder="CACI-SAF" value="{{$reinscripcion['caci']}}" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Detección de Nutrición<span class="text-danger"></span></label>
                                            <input type="text" id="detec_nutricion" name="detec_nutricion" class="form-control" placeholder="Detección de Nutrición" value="{{$reinscripcion['detec_nutricion']}}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de inscripción<span class="text-danger"></span></label>
                                            <input id="fecha_preins" type="date" placeholder="Fecha de inscripción" class="form-control" title="Fecha de inscripción" oninput="this.className = ''" name="fecha_preins" value="{{$reinscripcion['fecha_preins']}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Matrícula<span class="text-danger"></span></label>
                                            <input id="matricula" type="text" placeholder="Matrícula" class="form-control" title="Matrícula" oninput="this.className = ''" name="matricula" value="{{$reinscripcion['matricula']}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Grupo<span class="text-danger"></span></label>
                                            <input id="grupo_nino" type="text" placeholder="Grupo" title="Grupo" oninput="this.className = ''" class="form-control" name="grupo_nino" value="{{$reinscripcion['grupo_nino']}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de Baja<span class="text-danger"></span></label>
                                            <input id="fecha_baja_nino" type="date" placeholder="Fecha de Baja" title="Fecha de Baja" oninput="this.className = ''" class="form-control" name="fecha_baja_nino" value="{{$reinscripcion['fecha_baja_nino']}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de cambio de CACI SAF<span class="text-danger"></span></label>
                                            <input id="fecha_cambio_caci" type="date" placeholder="Fecha de cambio de CACI SAF" title="Fecha de cambio de CACI SAF" class="form-control" oninput="this.className = ''" name="fecha_cambio_caci" value="{{$reinscripcion['fecha_cambio_caci']}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
                                <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Nombre completo de la niña o niño<span class="text-danger"></span></label>
                                                    <input type="text" id="nombre_comple_nino" name="nombre_comple_ninos" class="form-control" placeholder="Nombre completo de la niña o niño" oninput="this.className = ''" value="{{$reinscripcion['nombre_comple_nino']}}" readonly />
                                                    <label>Edad<span class="text-danger"></span></label>
                                                    <input type="text" id="edad_nino" name="edad_nino" class="form-control" placeholder="Edad" value="{{$reinscripcion['edad_nino']}}" readonly />
                                                    <label>Curp<span class="text-danger"></span></label>
                                                    <input type="text" id="curp_nino" name="curp_nino" class="form-control" placeholder="Curp" value="{{$reinscripcion['curp_nino']}}" readonly maxlength="18"/>
                                                    <label>Fecha de Nacimiento<span class="text-danger"></span></label>
                                                    <input type="text" id="fecha_nac_nino" name="fecha_nac_nino" class="form-control" placeholder="Fecha de Nacimiento" value="{{$reinscripcion['fecha_nac_nino']}}" readonly/>
                                                    <label>Género<span class="text-danger"></span></label>
                                                    <input type="text" id="genero_nino" name="genero_nino" class="form-control" placeholder="Género" value="{{$reinscripcion['genero_nino']}}" maxlength="10"/>
                                                    <label>Entidad de Nacimiento<span class="text-danger"></span></label>
                                                    <input type="text" id="entidad_naci_nino" name="entidad_naci_nino" class="form-control" placeholder="Entidad de Nacimiento" value="{{$reinscripcion['entidad_naci_nino']}}" />
                                                    <label>Año de Registro de Nacimiento<span class="text-danger"></span></label>
                                                    <input type="text" id="anio_registro_nac_nino" name="anio_registro_nac_nino" class="form-control" placeholder="Año de Registro de Nacimiento" value="{{$reinscripcion['anio_registro_nac_nino']}}" maxlength="4"/>
                                                    <label>Alcaldía o Municipio de Registro<span class="text-danger"></span></label>
                                                    <input type="text" id="alcaldia_registro_nino" name="alcaldia_registro_nino" class="form-control" placeholder="Alcaldía o Municipio de Registro" value="{{$reinscripcion['alcaldia_registro_nino']}}" />
                                                    <label>Número de Acta de nacimiento<span class="text-danger"></span></label>
                                                    <input type="text" id="num_acta_nac_nino" name="num_acta_nac_nino" class="form-control" placeholder="Número de Acta de nacimiento" value="{{$reinscripcion['num_acta_nac_nino']}}" maxlength="20"/>
                                                    <label>Libro del Acta de Nacimiento<span class="text-danger"></span></label>
                                                    <input type="text" id="libro_act_nac_nino" name="libro_act_nac_nino" class="form-control" placeholder="Libro del Acta de Nacimiento" value="{{$reinscripcion['libro_act_nac_nino']}}" maxlength="20"/>
                                                    <label>Domicilio Particular(avenida o calle)<span class="text-danger"></span></label>
                                                    <input type="text" id="domicilio_part_nino" name="domicilio_part_nino" class="form-control" placeholder="Domicilio Particular(avenida o calle)" value="{{$reinscripcion['domicilio_part_nino']}}" />
                                                    <label>Número(Exterior,Interior,Lote,Manzana,etc)<span class="text-danger"></span></label>
                                                    <input type="text" id="numero_domici_nino" name="numero_domici_nino" class="form-control" placeholder="Número(Exterior,Interior,Lote,Manzana,etc)" value="{{$reinscripcion['numero_domici_nino']}}" />

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Colonia<span class="text-danger"></span></label>
                                                    <input type="text" id="colonia_nino" name="colonia_nino" class="form-control" placeholder="Colonia" value="{{$reinscripcion['colonia_nino']}}" />
                                                    <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                                    <input type="text" id="alcaldia_nino" name="alcaldia_nino" class="form-control" placeholder="Alcaldía o Municipio" value="{{$reinscripcion['alcaldia_nino']}}" />
                                                    <label>Código Postal<span class="text-danger"></span></label>
                                                    <input type="text" id="codigo_postal_nino" name="codigo_postal_nino" class="form-control" placeholder="Código Postal" value="{{$reinscripcion['codigo_postal_nino']}}" maxlength="5"/>
                                                    <label>Teléfono Particular Y/O Recados<span class="text-danger"></span></label>
                                                    <input type="text" id="telefono_recado_nino" name="telefono_recado_nino" class="form-control" placeholder="Teléfono Particular Y/O Recados" value="{{$reinscripcion['telefono_recado_nino']}}" readonly maxlength="10"/>
                                                    <label>¿Presenta alguna discapacidad?<span class="text-danger"></span></label>
                                                    <fieldset class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="ndiscapacidad" id="no_discapacidad" value="option1" checked>
                                                                    <label class="form-check-label" for="no_discapacidad">
                                                                        No
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="ndiscapacidad" id="si_discapacidad" value="option2">
                                                                    <label class="form-check-label" for="si_discapacidad">
                                                                        Si
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div id="content_discapacidad" style="display: none; margin-bottom:1rem;">
                                                        <input type="text" id="discapacidad_nino" name="discapacidad_nino" class="form-control" placeholder="Mencione Cúal" value="{{$reinscripcion['discapacidad_nino']}}" />
                                                    </div>
                                                    <label>¿Presenta algún padecimiento?<span class="text-danger"></span></label>
                                                    <fieldset class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="npadecimiento" id="no_padecimiento" value="option1" checked>
                                                                    <label class="form-check-label" for="no_padecimiento">
                                                                        No
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="npadecimiento" id="si_padecimiento" value="option2">
                                                                    <label class="form-check-label" for="si_padecimiento">
                                                                        Si
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div id="content_padecimiento" style="display: none; margin-bottom:1rem;">
                                                        <input type="text" id="padecimiento_nino" name="padecimiento_nino" class="form-control" placeholder="Mencione Cúal" value="{{$reinscripcion['padecimiento_nino']}}" />
                                                    </div>
                                                    <label>Especifique las necesidades que requiere la o el menor durante estancia CACI-SAF<span class="text-danger"></span></label>
                                                    <input type="text" id="necesidades_nino" name="necesidades_nino" class="form-control" placeholder="Especifique las necesidades que requiere la o el menor durante estancia CACI-SAF" value="{{$reinscripcion['necesidades_nino']}}" />
                                                    <label>Nombre de la institucion que atiende la niña o niño<span class="text-danger"></span></label>
                                                    <input type="text" id="institucion_nino" name="institucion_nino" class="form-control" placeholder="Nombre de la institucion que atiende la niña o niño" value="{{$reinscripcion['institucion_nino']}}" />
                                                    <label>Derechohabiencia, puede anotar mas de una (ISSSTE,IMSS,otras)<span class="text-danger"></span></label>
                                                    <input type="text" id="derechohabiencia_nino" name="derechohabiencia_nino" class="form-control" placeholder="Derechohabiencia, puede anotar mas de una (ISSSTE,IMSS,otras)" value="{{$reinscripcion['derechohabiencia_nino']}}" />
                                                    <label>¿Presenta algúna alergía?<span class="text-danger"></span></label>
                                                    <fieldset class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="nalergia" id="no_alergia" value="option1" checked>
                                                                    <label class="form-check-label" for="no_alergia">
                                                                        No
                                                                    </label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="nalergia" id="si_alergia" value="option2">
                                                                    <label class="form-check-label" for="si_alergia">
                                                                        Si
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div id="content_alergia" style="display: none;  margin-bottom:1rem;">
                                                        <input type="text" id="alergia_nino" name="alergia_nino" class="form-control" placeholder="Mencione a qué (medicamentos, ambientes y alimentos)" value="{{$reinscripcion['alergia_nino']}}" />
                                                    </div>
                                                    <label>Grupo sanguíneo y RH<span class="text-danger"></span></label>
                                                    <input type="text" id="grupo_sanguineo" name="grupo_sanguineo" class="form-control" placeholder="Grupo sanguíneo y RH" value="{{$reinscripcion['grupo_sanguineo']}}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_3_4" role="tabpanel" aria-labelledby="kt_tab_pane_3_4">
                                <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nombre Completo de la madre, Padre o Persona Tutora<span class="text-danger"></span></label>
                                            <input type="text" id="nombre_completo_padre" name="nombre_completo_padre" class="form-control" placeholder="Nombre Completo de la madre, Padre o Persona Tutora" value="{{$reinscripcion['nombre_completo_padre']}}" readonly />
                                            <label>RFC con Homoclave<span class="text-danger"></span></label>
                                            <input type="text" id="rfc_padre" name="rfc_padre" class="form-control" placeholder="RFC con Homoclave" value="{{$reinscripcion['rfc_padre']}}" readonly />
                                            <label>Curp<span class="text-danger"></span></label>
                                            <input type="text" id="curp_padre" name="curp_padre" class="form-control" placeholder="Curp" value="{{$reinscripcion['curp_padre']}}" readonly maxlength="18"/>
                                            <label>Género<span class="text-danger"></span></label>
                                            <input type="text" id="genero_padre" name="genero_padre" class="form-control" placeholder="Género" value="{{$reinscripcion['genero_padre']}}" />
                                            <label>Entidad de Nacimiento<span class="text-danger"></span></label>
                                            <input type="text" id="entidad_nac_padre" name="entidad_nac_padre" class="form-control" placeholder="Entidad de Nacimiento" value="{{$reinscripcion['entidad_nac_padre']}}" />
                                            <label>Fecha de Nacimiento<span class="text-danger"></span></label>
                                            <input type="date" id="fecha_nac_padre" name="fecha_nac_padre" class="form-control" placeholder="Fecha de Nacimiento" value="{{$reinscripcion['fecha_nac_padre']}}" />
                                            <label>Edad<span class="text-danger"></span></label>
                                            <input type="text" id="edad_padre" name="edad_padre" class="form-control" placeholder="Edad" value="{{$reinscripcion['edad_padre']}}" maxlength="2"/>
                                            <label>Estado Civil de la Persona<span class="text-danger"></span></label>
                                            <input type="text" id="edo_civil_padre" name="edo_civil_padre" class="form-control" placeholder="Estado Civil de la Persona" value="{{$reinscripcion['edo_civil_padre']}}" />
                                            <label>Nivel de Escolaridad<span class="text-danger"></span></label>
                                            <input type="text" id="nivel_escolar_padre" name="nivel_escolar_padre" class="form-control" placeholder="Nivel de Escolaridad" value="{{$reinscripcion['nivel_escolar_padre']}}" />
                                            <label>En Curso, Trunco, o Concluido<span class="text-danger"></span></label>
                                            <input type="text" id="conclusion_nive_esco_padre" name="conclusion_nive_esco_padre" class="form-control" placeholder="En Curso, Trunco, o Concluido" value="{{$reinscripcion['conclusion_nive_esco_padre']}}" />
                                            <label>Parentesco con la niña o el niño<span class="text-danger"></span></label>
                                            <input type="text" id="parentesco_con_nino" name="parentesco_con_nino" class="form-control" placeholder="Parentesco con la niña o el niño" value="{{$reinscripcion['parentesco_con_nino']}}" />
                                            <label>Domicilio particular (avenida o calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_calle_padre" name="domicilio_calle_padre" class="form-control" placeholder="Domicilio particular (avenida o calle)" value="{{$reinscripcion['domicilio_calle_padre']}}" readonly />
                                            <label>Número (Exterior, Interior, Lote, Manzana etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="numero_domici_padre" name="numero_domici_padre" class="form-control" placeholder="Número (Exterior, Interior, Lote, Manzana etc.)" value="{{$reinscripcion['numero_domici_padre']}}" readonly />
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_padre" name="colonia_padre" class="form-control" placeholder="Colonia" value="{{$reinscripcion['colonia_padre']}}" readonly />
                                            <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_padre" name="alcaldia_padre" class="form-control" placeholder="Alcaldía o Municipio" value="{{$reinscripcion['alcaldia_padre']}}" readonly />
                                            <label>Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_padre" name="codigo_postal_padre" class="form-control" placeholder="Código Postal" value="{{$reinscripcion['codigo_postal_padre']}}" readonly maxlength="5"/>
                                            <label>Teléfono Particular<span class="text-danger"></span></label>
                                            <input type="text" id="tel_particular_padre" name="tel_particular_padre" class="form-control" placeholder="Teléfono Particular" value="{{$reinscripcion['tel_particular_padre']}}" readonly maxlength="10"/>
                                            <label>Teléfono Celular<span class="text-danger"></span></label>
                                            <input type="text" id="tel_celular_padre" name="tel_celular_padre" class="form-control" placeholder="Teléfono Celular" value="{{$reinscripcion['tel_celular_padre']}}" readonly maxlength="10"/>
                                            <label>Teléfono para Recados<span class="text-danger"></span></label>
                                            <input type="text" id="tel_recados_padre" name="tel_recados_padre" class="form-control" placeholder="Teléfono para Recados" value="{{$reinscripcion['tel_recados_padre']}}" maxlength="10"/>
                                            <label>Email<span class="text-danger"></span></label>
                                            <input type="text" id="email_padre" name="email_padre" class="form-control" placeholder="Email" value="{{$reinscripcion['email_padre']}}" readonly />
                                            <label>Clave de Sector<span class="text-danger"></span></label>
                                            <input type="text" id="clave_sector_padre" name="clave_sector_padre" class="form-control" placeholder="Clave de Sector" value="{{$reinscripcion['clave_sector_padre']}}" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Secretaría o Ente Administrativo<span class="text-danger"></span></label>
                                            <input type="text" id="ente_administrativo_padre" name="ente_administrativo_padre" class="form-control" placeholder="Secretaría o Ente Administrativo" value="{{$reinscripcion['ente_administrativo_padre']}}" readonly />
                                            <label>Clave de la Unidad Administrativa<span class="text-danger"></span></label>
                                            <input type="text" id="clave_unidad_admin_padre" name="clave_unidad_admin_padre" class="form-control" placeholder="Clave de la Unidad Administrativa" value="{{$reinscripcion['clave_unidad_admin_padre']}}" readonly />
                                            <label>Nombre de la Unidad Administrativa<span class="text-danger"></span></label>
                                            <input type="text" id="nombre_unidad_administrativa_padre" name="nombre_unidad_administrativa_padre" class="form-control" placeholder="Nombre de la Unidad Administrativa" value="{{$reinscripcion['nombre_unidad_administrativa_padre']}}" readonly />
                                            <label>Oficina o Área de Adscripción<span class="text-danger"></span></label>
                                            <input type="text" id="area_adscripcion_padre" name="area_adscripcion_padre" class="form-control" placeholder="Oficina o Área de Adscripción" value="{{$reinscripcion['area_adscripcion_padre']}}" readonly />
                                            <label>Descripción del puesto<span class="text-danger"></span></label>
                                            <input type="text" id="descripcion_puesto_padre" name="descripcion_puesto_padre" class="form-control" placeholder="Descripción del puesto" value="{{$reinscripcion['descripcion_puesto_padre']}}" readonly />
                                            <label>Función Real<span class="text-danger"></span></label>
                                            <input type="text" id="funcion_real_padre" name="funcion_real_padre" class="form-control" placeholder="Función Real" value="{{$reinscripcion['funcion_real_padre']}}" />
                                            <h3 style=" color:#777777;">Domicilio Laboral</h3>
                                            <label>Domicilio Laboral(Avenida o calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_calle_laboral_padre" name="domicilio_calle_laboral_padre" class="form-control" placeholder="Domicilio Laboral(Avenida o calle)" value="{{$reinscripcion['domicilio_calle_laboral_padre']}}" />
                                            <label>Número (Exterior, Interior, Lote, Manzana, etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="num_laboral_padre" name="num_laboral_padre" class="form-control" placeholder="Número (Exterior, Interior, Lote, Manzana, etc.)" value="{{$reinscripcion['num_laboral_padre']}}" />
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_laboral_padre" name="colonia_laboral_padre" class="form-control" placeholder="Colonia" value="{{$reinscripcion['colonia_laboral_padre']}}" />
                                            <label>Alcadía<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_laboral_padre" name="alcaldia_laboral_padre" class="form-control" placeholder="Alcadía" value="{{$reinscripcion['alcaldia_laboral_padre']}}" />
                                            <label>Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_laboral_padre" name="codigo_postal_laboral_padre" class="form-control" placeholder="Código Postal" value="{{$reinscripcion['codigo_postal_laboral_padre']}}" maxlength="5"/>
                                            <label>Teléfono Laboral<span class="text-danger"></span></label>
                                            <input type="text" id="telefono_laboral_padre" name="telefono_laboral_padre" class="form-control" placeholder="Teléfono Laboral" value="{{$reinscripcion['telefono_laboral_padre']}}" maxlength="10"/>
                                            <label>Extensión del Teléfono Laboral<span class="text-danger"></span></label>
                                            <input type="text" id="extension_tel_laboral_padre" name="extension_tel_laboral_padre" class="form-control" placeholder="Extensión del Teléfono Laboral" value="{{$reinscripcion['extension_tel_laboral_padre']}}" maxlength="10"/>
                                            <label>Tipo de Nomina<span class="text-danger"></span></label>
                                            <input type="text" id="tipo_nomina_laboral_padre" name="tipo_nomina_laboral_padre" class="form-control" placeholder="Tipo de Nomina" value="{{$reinscripcion['tipo_nomina_laboral_padre']}}" readonly />
                                            <label>Número de Empleado<span class="text-danger"></span></label>
                                            <input type="text" id="num_empleado_laboral_padre" name="num_empleado_laboral_padre" class="form-control" placeholder="Número de Empleado" value="{{$reinscripcion['num_empleado_laboral_padre']}}" readonly />
                                            <label>Número de Plaza<span class="text-danger"></span></label>
                                            <input type="text" id="num_plaza_laboral_padre" name="num_plaza_laboral_padre" class="form-control" placeholder="Número de Plaza" value="{{$reinscripcion['num_plaza_laboral_padre']}}" readonly />
                                            <label>Nivel Salarial<span class="text-danger"></span></label>
                                            <input type="text" id="nivel_salarial_laboral_padre" name="nivel_salarial_laboral_padre" class="form-control" placeholder="Nivel Salarial" value="{{$reinscripcion['nivel_salarial_laboral_padre']}}" readonly />
                                            <label>Sección Sindical<span class="text-danger"></span></label>
                                            <input type="text" id="seccion_sindical_laboral_padre" name="seccion_sindical_laboral_padre" class="form-control" placeholder="Sección Sindical" value="{{$reinscripcion['seccion_sindical_laboral_padre']}}" readonly />
                                            <label>Horario Laboral (Entrada)<span class="text-danger"></span></label>
                                            <input type="text" id="horario_ent_laboral_padre" name="horario_ent_laboral_padre" class="form-control" placeholder="Horario Laboral (Entrada)" value="{{$reinscripcion['horario_ent_laboral_padre']}}" readonly />
                                            <label>Horario Laboral (Salida)<span class="text-danger"></span></label>
                                            <input type="text" id="horario_sal_laboral_padre" name="horario_sal_laboral_padre" class="form-control" placeholder="Horario Laboral (Salida)" value="{{$reinscripcion['horario_sal_laboral_padre']}}" readonly />
                                            <label>Días Laborales<span class="text-danger"></span></label>
                                            <input type="text" id="dias_laborales_padre" name="dias_laborales_padre" class="form-control" placeholder="Días Laborales" value="{{$reinscripcion['dias_laborales_padre']}}" />
                                            <label>¿Cuenta con un segundo empleo?<span class="text-danger"></span></label>
                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                                                            <label class="form-check-label" for="gridRadios1">
                                                                No
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked>
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Si
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div id="content_segundo_empleo" style="display: block;">
                                                <label>Mencione Dónde<span class="text-danger"></span></label>
                                                <input type="text" id="nombre_segundo_empleo" name="nombre_segundo_empleo" class="form-control" placeholder="Mencione Dónde" value="{{$reinscripcion['nombre_segundo_empleo']}}" />
                                                <label>Horario Laboral (Entrada)<span class="text-danger"></span></label>
                                                <input type="text" id="horario_ent_laboral_segundo_empleo" name="horario_ent_laboral_segundo_empleo" class="form-control" placeholder="Horario Laboral (Entrada)" value="{{$reinscripcion['horario_ent_laboral_segundo_empleo']}}" />
                                                <label>Horario Laboral (Salida)<span class="text-danger"></span></label>
                                                <input type="text" id="horario_sal_laboral_segundo_empleo" name="horario_sal_laboral_segundo_empleo" class="form-control" placeholder="Horario Laboral (Salida)" value="{{$reinscripcion['horario_sal_laboral_segundo_empleo']}}" />
                                                <label>Días Laborales<span class="text-danger"></span></label>
                                                <input type="text" id="dias_laborales_segundo_empleo" name="dias_laborales_segundo_empleo" class="form-control" placeholder="Días Laborales" value="{{$reinscripcion['dias_laborales_segundo_empleo']}}" />
                                                <label>Teléfono Laboral<span class="text-danger"></span></label>
                                                <input type="text" id="telefono_laboral_segundo_empleo" name="telefono_laboral_segundo_empleo" class="form-control" placeholder="Teléfono Laboral" value="{{$reinscripcion['telefono_laboral_segundo_empleo']}}" maxlength="10"/>
                                                <label>Extensión del Teléfono Laboral<span class="text-danger"></span></label>
                                                <input type="text" id="extension_tel_laboral_segundo_empleo" name="extension_tel_laboral_segundo_empleo" class="form-control" placeholder="Extensión del Teléfono Laboral" value="{{$reinscripcion['extension_tel_laboral_segundo_empleo']}}" maxlength="10"/>
                                                <label>Domicilio Laborla (Avenida o Calle)<span class="text-danger"></span></label>
                                                <input type="text" id="domicilio_laboral_segundo_empleo" name="domicilio_laboral_segundo_empleo" class="form-control" placeholder="Domicilio Laborla (Avenida o Calle)" value="{{$reinscripcion['domicilio_laboral_segundo_empleo']}}" />
                                                <label>Número (Exterior, Interior, Lote, Manzana, etc.)<span class="text-danger"></span></label>
                                                <input type="text" id="num_domicilio_laboral_segundo_empleo" name="num_domicilio_laboral_segundo_empleo" class="form-control" placeholder="Número (Exterior, Interior, Lote, Manzana, ETC.)" value="{{$reinscripcion['num_domicilio_laboral_segundo_empleo']}}" />
                                                <label>Colonia<span class="text-danger"></span></label>
                                                <input type="text" id="colonia_laboral_segundo_empleo" name="colonia_laboral_segundo_empleo" class="form-control" placeholder="Colonia" value="{{$reinscripcion['colonia_laboral_segundo_empleo']}}" />
                                                <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                                <input type="text" id="alcaldia_laboral_segundo_empleo" name="alcaldia_laboral_segundo_empleo" class="form-control" placeholder="Alcaldía o Municipio" value="{{$reinscripcion['alcaldia_laboral_segundo_empleo']}}" />
                                                <label>Código Postal<span class="text-danger"></span></label>
                                                <input type="text" id="codigo_postal_laboral_segundo_empleo" name="codigo_postal_laboral_segundo_empleo" class="form-control" placeholder="Código Postal" value="{{$reinscripcion['codigo_postal_laboral_segundo_empleo']}}" maxlength="5"/>
                                                <input type="text" id="ciclo_escolar" name="ciclo_escolar" value="{{$reinscripcion['ciclo_escolar']}}" hidden/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach($processPersonasAutorizadas as $itemDos => $personaAutorizada)
                            <div class="tab-pane fade" id="kt_tab_pane_4_4" role="tabpanel" aria-labelledby="kt_tab_pane_4_4">
                                <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <h2 style=" color:#777777;">Persona Autorizada 1</h2>
                                            <input id="idTutor" name="idTutor" value="{{$id}}" hidden readonly />
                                            <label>Nombre completo de la persona autorizada<span class="text-danger"></span></label>
                                            <input type="text" id="nombre_comple_person_autorizada" name="nombre_comple_person_autorizada" class="form-control" placeholder="Nombre completo de la persona autorizada" value="{{$personaAutorizada['nombre_comple_person_autorizada']}}" />
                                            <label>Entidad de Nacimiento<span class="text-danger"></span></label>
                                            <input type="text" id="entidad_nac_person_autorizada" name="entidad_nac_person_autorizada" class="form-control" placeholder="Entidad de Nacimiento" value="{{$personaAutorizada['entidad_nac_person_autorizada']}}" />
                                            <label>Fecha de Nacimiento<span class="text-danger"></span></label>
                                            <input type="date" id="fecha_nac_person_autorizada" name="fecha_nac_person_autorizada" class="form-control" placeholder="Fecha de Nacimiento" value="{{$personaAutorizada['fecha_nac_person_autorizada']}}" />
                                            <label>Edad<span class="text-danger"></span></label>
                                            <input type="text" id="edad_person_autorizada" name="edad_person_autorizada" class="form-control" placeholder="Edad" value="{{$personaAutorizada['edad_person_autorizada']}}" maxlength="2" />
                                            <label>Género<span class="text-danger"></span></label>
                                            <input type="text" id="genero_person_autorizada" name="genero_person_autorizada" class="form-control" placeholder="Género" value="{{$personaAutorizada['genero_person_autorizada']}}" maxlength="10"/>
                                            <label>Curp<span class="text-danger"></span></label>
                                            <input type="text" id="curp_person_autorizada" name="curp_person_autorizada" class="form-control" placeholder="Curp" value="{{$personaAutorizada['curp_person_autorizada']}}" maxlength="18"/>
                                            <label>Nivel de Escolaridad<span class="text-danger"></span></label>
                                            <input type="text" id="nivel_escol_person_autorizada" name="nivel_escol_person_autorizada" class="form-control" placeholder="Nivel de Escolaridad" value="{{$personaAutorizada['nivel_escol_person_autorizada']}}" />
                                            <label>En Curso, Trunco o Concluido<span class="text-danger"></span></label>
                                            <input type="text" id="concluido_nivel_esc_person_autorizada" name="concluido_nivel_esc_person_autorizada" class="form-control" placeholder="En Curso, Trunco o Concluido" value="{{$personaAutorizada['concluido_nivel_esc_person_autorizada']}}" />
                                            <label>Parentesco con la niña o el niño<span class="text-danger"></span></label>
                                            <input type="text" id="parentesco_nino_person_autorizada" name="parentesco_nino_person_autorizada" class="form-control" placeholder="Parentesco con la niña o el niño" value="{{$personaAutorizada['parentesco_nino_person_autorizada']}}" />
                                            <label>Domicilio Particular (Avenida o Calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_calle_person_autorizada" name="domicilio_calle_person_autorizada" class="form-control" placeholder="Domicilio Particular (Avenida o Calle)" value="{{$personaAutorizada['domicilio_calle_person_autorizada']}}" />
                                            <label>Número(Exterior, Interior, Lote, Manzana, etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="numero_domicilio_person_autorizada" name="numero_domicilio_person_autorizada" class="form-control" placeholder="Número(Exterior, Interior, Lote, Manzana, etc.)" value="{{$personaAutorizada['numero_domicilio_person_autorizada']}}" />
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_person_autorizada" name="colonia_person_autorizada" class="form-control" placeholder="Colonia" value="{{$personaAutorizada['colonia_person_autorizada']}}" />
                                            <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_person_autorizada" name="alcaldia_person_autorizada" class="form-control" placeholder="Alcaldía o Municipio" value="{{$personaAutorizada['alcaldia_person_autorizada']}}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="margin-top: 3rem;">Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_person_autorizada" name="codigo_postal_person_autorizada" class="form-control" placeholder="Código Postal" value="{{$personaAutorizada['codigo_postal_person_autorizada']}}" maxlength="5"/>
                                            <label>Teléfono Particular<span class="text-danger"></span></label>
                                            <input type="text" id="tel_particular_person_autorizada" name="tel_particular_person_autorizada" class="form-control" placeholder="Teléfono Particular" value="{{$personaAutorizada['tel_particular_person_autorizada']}}" maxlength="10"/>
                                            <label>Teléfono Celular<span class="text-danger"></span></label>
                                            <input type="text" id="tel_celular_person_autorizada" name="tel_celular_person_autorizada" class="form-control" placeholder="Teléfono Celular" value="{{$personaAutorizada['tel_celular_person_autorizada']}}" maxlength="10"/>
                                            <label>Email<span class="text-danger"></span></label>
                                            <input type="text" id="email_person_autorizada" name="email_person_autorizada" class="form-control" placeholder="Email" value="{{$personaAutorizada['email_person_autorizada']}}" />
                                            <label>Ocupación<span class="text-danger"></span></label>
                                            <input type="text" id="ocupacion_person_autorizada" name="ocupacion_person_autorizada" class="form-control" placeholder="Ocupación" value="{{$personaAutorizada['ocupacion_person_autorizada']}}" />
                                            <h3 style=" color:#777777;">Domicilio Laboral</h3>
                                            <label>Domicilio Laboral (Avenida o Calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_laboral_calle_person_autorizada" name="domicilio_laboral_calle_person_autorizada" class="form-control" placeholder="Domicilio Laboral (Avenida o Calle)" value="{{$personaAutorizada['domicilio_laboral_calle_person_autorizada']}}" />
                                            <label>Número (Exterior, Interior, Lote, Manzana etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="numero_domicilio_laboral_person_autorizada" name="numero_domicilio_laboral_person_autorizada" class="form-control" placeholder="Número (Exterior, Interior, Lote, Manzana etc.)" value="{{$personaAutorizada['numero_domicilio_laboral_person_autorizada']}}" />
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_laboral_person_autorizada" name="colonia_laboral_person_autorizada" class="form-control" placeholder="Colonia" value="{{$personaAutorizada['colonia_laboral_person_autorizada']}}" />
                                            <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_laboral_person_autorizada" name="alcaldia_laboral_person_autorizada" class="form-control" placeholder="Alcaldía o Municipio" value="{{$personaAutorizada['alcaldia_laboral_person_autorizada']}}" />
                                            <label>Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_laboral_person_autorizada" name="codigo_postal_laboral_person_autorizada" class="form-control" placeholder="Código Postal" value="{{$personaAutorizada['codigo_postal_laboral_person_autorizada']}}" maxlength="5"/>
                                            <label>Teléfono laboral<span class="text-danger"></span></label>
                                            <input type="text" id="tel_laboral_person_autorizada" name="tel_laboral_person_autorizada" class="form-control" placeholder="Teléfono laboral" value="{{$personaAutorizada['tel_laboral_person_autorizada']}}" maxlength="10"/>
                                            <label>Extensión del teléfono laboral<span class="text-danger"></span></label>
                                            <input type="text" id="extension_tel_laboral_person_autorizada" name="extension_tel_laboral_person_autorizada" class="form-control" placeholder="Extensión del teléfono laboral" value="{{$personaAutorizada['extension_tel_laboral_person_autorizada']}}" maxlength="10"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <h2 style=" color:#777777;">Persona Autorizada 2</h2>
                                            <label>Nombre completo de la persona autorizada<span class="text-danger"></span></label>
                                            <input type="text" id="nombre_comple_person_autorizada_dos" name="nombre_comple_person_autorizada_dos" class="form-control" placeholder="Nombre completo de la persona autorizada" value="{{$personaAutorizada['nombre_comple_person_autorizada_dos']}}" />
                                            <label>Entidad de Nacimiento<span class="text-danger"></span></label>
                                            <input type="text" id="entidad_nac_person_autorizada_dos" name="entidad_nac_person_autorizada_dos" class="form-control" placeholder="Entidad de Nacimiento" value="{{$personaAutorizada['entidad_nac_person_autorizada_dos']}}" />
                                            <label>Fecha de Nacimiento<span class="text-danger"></span></label>
                                            <input type="date" id="fecha_nac_person_autorizada_dos" name="fecha_nac_person_autorizada_dos" class="form-control" placeholder="Fecha de Nacimiento" value="{{$personaAutorizada['fecha_nac_person_autorizada_dos']}}" />
                                            <label>Edad<span class="text-danger"></span></label>
                                            <input type="text" id="edad_person_autorizada_dos" name="edad_person_autorizada_dos" class="form-control" placeholder="Edad" value="{{$personaAutorizada['edad_person_autorizada_dos']}}" maxlength="2"/>
                                            <label>Género<span class="text-danger"></span></label>
                                            <input type="text" id="genero_person_autorizada_dos" name="genero_person_autorizada_dos" class="form-control" placeholder="Género" value="{{$personaAutorizada['genero_person_autorizada_dos']}}" maxlength="10"/>
                                            <label>Curp<span class="text-danger"></span></label>
                                            <input type="text" id="curp_person_autorizada_dos" name="curp_person_autorizada_dos" class="form-control" placeholder="Curp" value="{{$personaAutorizada['curp_person_autorizada_dos']}}" maxlength="18"/>
                                            <label>Nivel de Escolaridad<span class="text-danger"></span></label>
                                            <input type="text" id="nivel_escol_person_autorizada_dos" name="nivel_escol_person_autorizada_dos" class="form-control" placeholder="Nivel de Escolaridad" value="{{$personaAutorizada['nivel_escol_person_autorizada_dos']}}" />
                                            <label>En Curso, Trunco o Concluido<span class="text-danger"></span></label>
                                            <input type="text" id="concluido_nivel_esc_person_autorizada_dos" name="concluido_nivel_esc_person_autorizada_dos" class="form-control" placeholder="En Curso, Trunco o Concluido" value="{{$personaAutorizada['concluido_nivel_esc_person_autorizada_dos']}}" />
                                            <label>Parentesco con la niña o el niño<span class="text-danger"></span></label>
                                            <input type="text" id="parentesco_nino_person_autorizada_dos" name="parentesco_nino_person_autorizada_dos" class="form-control" placeholder="Parentesco con la niña o el niño" value="{{$personaAutorizada['parentesco_nino_person_autorizada_dos']}}" />
                                            <label>Domicilio Particular (Avenida o Calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_calle_person_autorizada_dos" name="domicilio_calle_person_autorizada_dos" class="form-control" placeholder="Domicilio Particular (Avenida o Calle)" value="{{$personaAutorizada['domicilio_calle_person_autorizada_dos']}}" />
                                            <label>Número(Exterior, Interior, Lote, Manzana, etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="numero_domicilio_person_autorizada_dos" name="numero_domicilio_person_autorizada_dos" class="form-control" placeholder="Número(Exterior, Interior, Lote, Manzana, etc.)" value="{{$personaAutorizada['numero_domicilio_person_autorizada_dos']}}" />
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_person_autorizada_dos" name="colonia_person_autorizada_dos" class="form-control" placeholder="Colonia" value="{{$personaAutorizada['colonia_person_autorizada_dos']}}" />
                                            <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_person_autorizada_dos" name="alcaldia_person_autorizada_dos" class="form-control" placeholder="Alcaldía o Municipio" value="{{$personaAutorizada['alcaldia_person_autorizada_dos']}}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="margin-top: 3rem;">Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_person_autorizada_dos" name="codigo_postal_person_autorizada_dos" class="form-control" placeholder="Código Postal" value="{{$personaAutorizada['codigo_postal_person_autorizada_dos']}}" maxlength="5"/>
                                            <label>Teléfono Particular<span class="text-danger"></span></label>
                                            <input type="text" id="tel_particular_person_autorizada_dos" name="tel_particular_person_autorizada_dos" class="form-control" placeholder="Teléfono Particular" value="{{$personaAutorizada['tel_particular_person_autorizada_dos']}}" maxlength="10"/>
                                            <label>Teléfono Celular<span class="text-danger"></span></label>
                                            <input type="text" id="tel_celular_person_autorizada_dos" name="tel_celular_person_autorizada_dos" class="form-control" placeholder="Teléfono Celular" value="{{$personaAutorizada['tel_celular_person_autorizada_dos']}}" maxlength="10"/>
                                            <label>Email<span class="text-danger"></span></label>
                                            <input type="text" id="email_person_autorizada_dos" name="email_person_autorizada_dos" class="form-control" placeholder="Email" value="{{$personaAutorizada['email_person_autorizada_dos']}}" />
                                            <label>Ocupación<span class="text-danger"></span></label>
                                            <input type="text" id="ocupacion_person_autorizada_dos" name="ocupacion_person_autorizada_dos" class="form-control" placeholder="Ocupación" value="{{$personaAutorizada['ocupacion_person_autorizada_dos']}}" />
                                            <h3 style=" color:#777777;">Domicilio Laboral</h3>
                                            <label>Domicilio Laboral (Avenida o Calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_laboral_calle_person_autorizada_dos" name="domicilio_laboral_calle_person_autorizada_dos" class="form-control" placeholder="Domicilio Laboral (Avenida o Calle)" value="{{$personaAutorizada['domicilio_laboral_calle_person_autorizada_dos']}}" />
                                            <label>Número (Exterior, Interior, Lote, Manzana etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="numero_domicilio_laboral_person_autorizada_dos" name="numero_domicilio_laboral_person_autorizada_dos" class="form-control" placeholder="Número (Exterior, Interior, Lote, Manzana etc.)" value="{{$personaAutorizada['numero_domicilio_laboral_person_autorizada_dos']}}" />
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_laboral_person_autorizada_dos" name="colonia_laboral_person_autorizada_dos" class="form-control" placeholder="Colonia" value="{{$personaAutorizada['colonia_laboral_person_autorizada_dos']}}" />
                                            <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_laboral_person_autorizada_dos" name="alcaldia_laboral_person_autorizada_dos" class="form-control" placeholder="Alcaldía o Municipio" value="{{$personaAutorizada['alcaldia_laboral_person_autorizada_dos']}}" />
                                            <label>Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_laboral_person_autorizada_dos" name="codigo_postal_laboral_person_autorizada_dos" class="form-control" placeholder="Código Postal" value="{{$personaAutorizada['codigo_postal_laboral_person_autorizada_dos']}}" maxlength="5"/>
                                            <label>Teléfono laboral<span class="text-danger"></span></label>
                                            <input type="text" id="tel_laboral_person_autorizada_dos" name="tel_laboral_person_autorizada_dos" class="form-control" placeholder="Teléfono laboral" value="{{$personaAutorizada['tel_laboral_person_autorizada_dos']}}" maxlength="10"/>
                                            <label>Extensión del teléfono laboral<span class="text-danger"></span></label>
                                            <input type="text" id="extension_tel_laboral_person_autorizada_dos" name="extension_tel_laboral_person_autorizada_dos" class="form-control" placeholder="Extensión del teléfono laboral" value="{{$personaAutorizada['extension_tel_laboral_person_autorizada_dos']}}" maxlength="10"/>
                                        </div>
                                    </div>
                                </div>
                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <button type="button" id="updateDatosRepo" style="border-radius: 5px; background-color: #17a2b8;" onclick="editRepositorio({{$id}},{{$idRepositorio}},{{$idPersonaAutorizadaUno}},{{$idPersonaAutorizadaDos}})"><i class="fa fa-refresh"></i> Actualizar</button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endcan
            <div>
                <span class="float-right btn-regresar mt-5">
                    <a class="btn btn-lg btn-primary" href="{{route('lista_inscripcion')}}" title="Regresar"><i class="fa fa-backward"></i> Regresar</a>
                    <button type="button" id="delete_registro_sol" title="Borrar Registro del Solicitante" name="delete_registro_sol" onclick="del_reg_solicitante('{{$id}}','{{$nameUser}}','lista_inscripcion','inscripcion_menor','inscripcion_menor_id','inscripcion')" class="btn btn-lg btn-danger"><i class="fa fa-trash"></i>Borrar Registro</button>
                </span>
            </div>
        </div>
    </div>

    <div class="modal fade" id="fileEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <input type="file" id="file_upgrade" name="file_upgrade" title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">
                                    <span class="uk-link">2 Mb máximo</span>
                                </div>
                            </div>
                            <progress id="js-progressbar-disc" class="uk-progress" value="0" max="100" style="margin-top: 0rem; margin-bottom: 0rem;" hidden></progress>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="hideModal()"><i class="fa fa-close"></i>
                        Cerrar</button>
                    <button id="upgrade_doc" type="button" onclick="actualizarDocumento('{{ csrf_token() }}')" class="btn btn-primary"><i class="fa fa-edit"></i> Actualizar</button>
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