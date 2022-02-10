@extends('users.users_inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
<script src="{{URL::asset('js/add-upper-case.js')}}" type="text/javascript"> </script>
<script src="{{URL::asset('js/inscripcion.js')}}" type="text/javascript"> </script>
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
            <h1><i class="fa fa-file"></i> Datos Repositorio {{$proceso}}</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="card mx-auto col-md-10 col-lg-10 col-xl-10">
                    <div class="card-header card-header-tabs-line">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                                            <span class="nav-icon"><i class="fa fa-user-circle"></i></span>
                                            <span class="nav-text">Datos Generales</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                                            <span class="nav-icon"><i class="fa fa-child"></i></span>
                                            <span class="nav-text">Datos de la niña o niño</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_4">
                                            <span class="nav-icon"><i class="fa fa-phone"></i></span>
                                            <span class="nav-text">Datos de la Madre, Padre Y/O Persona Tutora</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4_4">
                                            <span class="nav-icon"><i class="fa fa-phone"></i></span>
                                            <span class="nav-text">Datos de las Personas Autorizadas</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach ($datoByIdReposPre as $item => $reinscripcion)
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
                                            <input type="text" id="detec_nutricion" name="detec_nutricion" class="form-control" placeholder="Detección de Nutrición" value="{{$reinscripcion['detec_nutricion']}}" readonly/>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de inscripción<span class="text-danger"></span></label>
                                            <input id="fecha_preins" type="text" placeholder="Fecha de inscripción" class="form-control" title="Fecha de inscripción" oninput="this.className = ''" name="fecha_preins" value="{{$reinscripcion['fecha_preins']}}" readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Matrícula<span class="text-danger"></span></label>
                                            <input id="matricula" type="text" placeholder="Matrícula" class="form-control" title="Matrícula" oninput="this.className = ''" name="matricula" value="{{$reinscripcion['matricula']}}"readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Grupo<span class="text-danger"></span></label>
                                            <input id="grupo_nino" type="text" placeholder="Grupo" title="Grupo" oninput="this.className = ''" class="form-control" name="grupo_nino" value="{{$reinscripcion['grupo_nino']}}"readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de Baja<span class="text-danger"></span></label>
                                            <input id="fecha_baja_nino" type="text" placeholder="Fecha de Baja" title="Fecha de Baja" oninput="this.className = ''" class="form-control" name="fecha_baja_nino" value="{{$reinscripcion['fecha_baja_nino']}}"readonly />
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de cambio de CACI SAF<span class="text-danger"></span></label>
                                            <input id="fecha_cambio_caci" placeholder="Fecha de cambio de CACI SAF" title="Fecha de cambio de CACI SAF" class="form-control" oninput="this.className = ''" name="fecha_cambio_caci" value="{{$reinscripcion['fecha_cambio_caci']}}"readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
                                <link href="{{ asset('css/style.css')}}" rel="stylesheet" readonly/>
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
                                                    <input type="text" id="curp_nino" name="curp_nino" class="form-control" placeholder="Curp" value="{{$reinscripcion['curp_nino']}}" readonly />
                                                    <label>Fecha de Nacimiento<span class="text-danger"></span></label>
                                                    <input type="text" id="fecha_nac_nino" name="fecha_nac_nino" class="form-control" placeholder="Fecha de Nacimiento" value="{{$reinscripcion['fecha_nac_nino']}}" readonly/>
                                                    <label>Género<span class="text-danger"></span></label>
                                                    <input type="text" id="genero_nino" name="genero_nino" class="form-control" placeholder="Género" value="{{$reinscripcion['genero_nino']}}" readonly/>
                                                    <label>Entidad de Nacimiento<span class="text-danger"></span></label>
                                                    <input type="text" id="entidad_naci_nino" name="entidad_naci_nino" class="form-control" placeholder="Entidad de Nacimiento" value="{{$reinscripcion['entidad_naci_nino']}}" readonly/>
                                                    <label>Año de Registro de Nacimiento<span class="text-danger"></span></label>
                                                    <input type="text" id="anio_registro_nac_nino" name="anio_registro_nac_nino" class="form-control" placeholder="Año de Registro de Nacimiento" value="{{$reinscripcion['anio_registro_nac_nino']}}" readonly/>
                                                    <label>Alcaldía o Municipio de Registro<span class="text-danger"></span></label>
                                                    <input type="text" id="alcaldia_registro_nino" name="alcaldia_registro_nino" class="form-control" placeholder="Alcaldía o Municipio de Registro" value="{{$reinscripcion['alcaldia_registro_nino']}}" readonly/>
                                                    <label>Número de Acta de nacimiento<span class="text-danger"></span></label>
                                                    <input type="text" id="num_acta_nac_nino" name="num_acta_nac_nino" class="form-control" placeholder="Número de Acta de nacimiento" value="{{$reinscripcion['num_acta_nac_nino']}}" readonly/>
                                                    <label>Libro del Acta de Nacimiento<span class="text-danger"></span></label>
                                                    <input type="text" id="libro_act_nac_nino" name="libro_act_nac_nino" class="form-control" placeholder="Libro del Acta de Nacimiento" value="{{$reinscripcion['libro_act_nac_nino']}}" readonly/>
                                                    <label>Domicilio Particular(avenida o calle)<span class="text-danger"></span></label>
                                                    <input type="text" id="domicilio_part_nino" name="domicilio_part_nino" class="form-control" placeholder="Domicilio Particular(avenida o calle)" value="{{$reinscripcion['domicilio_part_nino']}}" readonly/>
                                                    <label>Número(Exterior,Interior,Lote,Manzana,etc)<span class="text-danger"></span></label>
                                                    <input type="text" id="numero_domici_nino" name="numero_domici_nino" class="form-control" placeholder="Número(Exterior,Interior,Lote,Manzana,etc)" value="{{$reinscripcion['numero_domici_nino']}}" readonly/>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Colonia<span class="text-danger"></span></label>
                                                    <input type="text" id="colonia_nino" name="colonia_nino" class="form-control" placeholder="Colonia" value="{{$reinscripcion['colonia_nino']}}" readonly/>
                                                    <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                                    <input type="text" id="alcaldia_nino" name="alcaldia_nino" class="form-control" placeholder="Alcaldía o Municipio" value="{{$reinscripcion['alcaldia_nino']}}" readonly/>
                                                    <label>Código Postal<span class="text-danger"></span></label>
                                                    <input type="text" id="codigo_postal_nino" name="codigo_postal_nino" class="form-control" placeholder="Código Postal" value="{{$reinscripcion['codigo_postal_nino']}}" readonly/>
                                                    <label>Teléfono Particular Y/O Recados<span class="text-danger"></span></label>
                                                    <input type="text" id="telefono_recado_nino" name="telefono_recado_nino" class="form-control" placeholder="Teléfono Particular Y/O Recados" value="{{$reinscripcion['telefono_recado_nino']}}" readonly />
                                                    <label>¿Presenta alguna discapacidad?<span class="text-danger"></span></label>
                                                    <input type="text" id="discapacidad_nino" name="discapacidad_nino" class="form-control" placeholder="Mencione Cúal" value="{{$reinscripcion['discapacidad_nino']}}" readonly/>
                                                    <label>¿Presenta algún padecimiento?<span class="text-danger"></span></label>
                                                    <input type="text" id="padecimiento_nino" name="padecimiento_nino" class="form-control" placeholder="Mencione Cúal" value="{{$reinscripcion['padecimiento_nino']}}" readonly/>
                                                    <label>Especifique las necesidades que requiere la o el menor durante estancia CACI-SAF<span class="text-danger"></span></label>
                                                    <input type="text" id="necesidades_nino" name="necesidades_nino" class="form-control" placeholder="Especifique las necesidades que requiere la o el menor durante estancia CACI-SAF" value="{{$reinscripcion['necesidades_nino']}}" readonly/>
                                                    <label>Nombre de la institucion que atiende la niña o niño<span class="text-danger"></span></label>
                                                    <input type="text" id="institucion_nino" name="institucion_nino" class="form-control" placeholder="Nombre de la institucion que atiende la niña o niño" value="{{$reinscripcion['institucion_nino']}}" readonly/>
                                                    <label>Derechohabiencia, puede anotar mas de una (ISSSTE,IMSS,otras)<span class="text-danger"></span></label>
                                                    <input type="text" id="derechohabiencia_nino" name="derechohabiencia_nino" class="form-control" placeholder="Derechohabiencia, puede anotar mas de una (ISSSTE,IMSS,otras)" value="{{$reinscripcion['derechohabiencia_nino']}}" readonly/>
                                                    <label>¿Presenta algúna alergía?<span class="text-danger"></span></label>
                                                    <input type="text" id="alergia_nino" name="alergia_nino" class="form-control" placeholder="Mencione a qué (medicamentos, ambientes y alimentos)" value="{{$reinscripcion['alergia_nino']}}" readonly/>
                                                    <label>Grupo sanguíneo y RH<span class="text-danger"></span></label>
                                                    <input type="text" id="grupo_sanguineo" name="grupo_sanguineo" class="form-control" placeholder="Grupo sanguíneo y RH" value="{{$reinscripcion['grupo_sanguineo']}}" readonly/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_3_4" role="tabpanel" aria-labelledby="kt_tab_pane_3_4">
                                <link href="{{ asset('css/style.css')}}" rel="stylesheet" readonly/>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nombre Completo de la madre, Padre o Persona Tutora<span class="text-danger"></span></label>
                                            <input type="text" id="nombre_completo_padre" name="nombre_completo_padre" class="form-control" placeholder="Nombre Completo de la madre, Padre o Persona Tutora" value="{{$reinscripcion['nombre_completo_padre']}}" readonly />
                                            <label>RFC con Homoclave<span class="text-danger"></span></label>
                                            <input type="text" id="rfc_padre" name="rfc_padre" class="form-control" placeholder="RFC con Homoclave" value="{{$reinscripcion['rfc_padre']}}" readonly />
                                            <label>Curp<span class="text-danger"></span></label>
                                            <input type="text" id="curp_padre" name="curp_padre" class="form-control" placeholder="Curp" value="{{$reinscripcion['curp_padre']}}" readonly />
                                            <label>Género<span class="text-danger"></span></label>
                                            <input type="text" id="genero_padre" name="genero_padre" class="form-control" placeholder="Género" value="{{$reinscripcion['genero_padre']}}" readonly/>
                                            <label>Entidad de Nacimiento<span class="text-danger"></span></label>
                                            <input type="text" id="entidad_nac_padre" name="entidad_nac_padre" class="form-control" placeholder="Entidad de Nacimiento" value="{{$reinscripcion['entidad_nac_padre']}}" readonly/>
                                            <label>Fecha de Nacimiento<span class="text-danger"></span></label>
                                            <input type="text" id="fecha_nac_padre" name="fecha_nac_padre" class="form-control" placeholder="Fecha de Nacimiento" value="{{$reinscripcion['fecha_nac_padre']}}" readonly/>
                                            <label>Edad<span class="text-danger"></span></label>
                                            <input type="text" id="edad_padre" name="edad_padre" class="form-control" placeholder="Edad" value="{{$reinscripcion['edad_padre']}}" readonly/>
                                            <label>Estado Civil de la Persona<span class="text-danger"></span></label>
                                            <input type="text" id="edo_civil_padre" name="edo_civil_padre" class="form-control" placeholder="Estado Civil de la Persona" value="{{$reinscripcion['edo_civil_padre']}}" readonly/>
                                            <label>Nivel de Escolaridad<span class="text-danger"></span></label>
                                            <input type="text" id="nivel_escolar_padre" name="nivel_escolar_padre" class="form-control" placeholder="Nivel de Escolaridad" value="{{$reinscripcion['nivel_escolar_padre']}}" readonly/>
                                            <label>En Curso, Trunco, o Concluido<span class="text-danger"></span></label>
                                            <input type="text" id="conclusion_nive_esco_padre" name="conclusion_nive_esco_padre" class="form-control" placeholder="En Curso, Trunco, o Concluido" value="{{$reinscripcion['conclusion_nive_esco_padre']}}" readonly/>
                                            <label>Parentesco con la niña o el niño<span class="text-danger"></span></label>
                                            <input type="text" id="parentesco_con_nino" name="parentesco_con_nino" class="form-control" placeholder="Parentesco con la niña o el niño" value="{{$reinscripcion['parentesco_con_nino']}}" readonly/>
                                            <label>Domicilio particular (avenida o calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_calle_padre" name="domicilio_calle_padre" class="form-control" placeholder="Domicilio particular (avenida o calle)" value="{{$reinscripcion['domicilio_calle_padre']}}" readonly />
                                            <label>Número (Exterior, Interior, Lote, Manzana etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="numero_domici_padre" name="numero_domici_padre" class="form-control" placeholder="Número (Exterior, Interior, Lote, Manzana etc.)" value="{{$reinscripcion['numero_domici_padre']}}" readonly />
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_padre" name="colonia_padre" class="form-control" placeholder="Colonia" value="{{$reinscripcion['colonia_padre']}}" readonly />
                                            <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_padre" name="alcaldia_padre" class="form-control" placeholder="Alcaldía o Municipio" value="{{$reinscripcion['alcaldia_padre']}}" readonly />
                                            <label>Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_padre" name="codigo_postal_padre" class="form-control" placeholder="Código Postal" value="{{$reinscripcion['codigo_postal_padre']}}" readonly />
                                            <label>Teléfono Particular<span class="text-danger"></span></label>
                                            <input type="text" id="tel_particular_padre" name="tel_particular_padre" class="form-control" placeholder="Teléfono Particular" value="{{$reinscripcion['tel_particular_padre']}}" readonly />
                                            <label>Teléfono Celular<span class="text-danger"></span></label>
                                            <input type="text" id="tel_celular_padre" name="tel_celular_padre" class="form-control" placeholder="Teléfono Celular" value="{{$reinscripcion['tel_celular_padre']}}" readonly />
                                            <label>Teléfono para Recados<span class="text-danger"></span></label>
                                            <input type="text" id="tel_recados_padre" name="tel_recados_padre" class="form-control" placeholder="Teléfono para Recados" value="{{$reinscripcion['tel_recados_padre']}}" readonly/>
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
                                            <input type="text" id="funcion_real_padre" name="funcion_real_padre" class="form-control" placeholder="Función Real" value="{{$reinscripcion['funcion_real_padre']}}" readonly/>
                                            <h3 style=" color:#777777;">Domicilio Laboral</h3>
                                            <label>Domicilio Laboral(Avenida o calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_calle_laboral_padre" name="domicilio_calle_laboral_padre" class="form-control" placeholder="Domicilio Laboral(Avenida o calle)" value="{{$reinscripcion['domicilio_calle_laboral_padre']}}" readonly/>
                                            <label>Número (Exterior, Interior, Lote, Manzana, etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="num_laboral_padre" name="num_laboral_padre" class="form-control" placeholder="Número (Exterior, Interior, Lote, Manzana, etc.)" value="{{$reinscripcion['num_laboral_padre']}}" readonly/>
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_laboral_padre" name="colonia_laboral_padre" class="form-control" placeholder="Colonia" value="{{$reinscripcion['colonia_laboral_padre']}}" readonly/>
                                            <label>Alcadía<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_laboral_padre" name="alcaldia_laboral_padre" class="form-control" placeholder="Alcadía" value="{{$reinscripcion['alcaldia_laboral_padre']}}" readonly/>
                                            <label>Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_laboral_padre" name="codigo_postal_laboral_padre" class="form-control" placeholder="Código Postal" value="{{$reinscripcion['codigo_postal_laboral_padre']}}" readonly/>
                                            <label>Teléfono Laboral<span class="text-danger"></span></label>
                                            <input type="text" id="telefono_laboral_padre" name="telefono_laboral_padre" class="form-control" placeholder="Teléfono Laboral" value="{{$reinscripcion['telefono_laboral_padre']}}" readonly/>
                                            <label>Extensión del Teléfono Laboral<span class="text-danger"></span></label>
                                            <input type="text" id="extension_tel_laboral_padre" name="extension_tel_laboral_padre" class="form-control" placeholder="Extensión del Teléfono Laboral" value="{{$reinscripcion['extension_tel_laboral_padre']}}" readonly/>
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
                                            <input type="text" id="dias_laborales_padre" name="dias_laborales_padre" class="form-control" placeholder="Días Laborales" value="{{$reinscripcion['dias_laborales_padre']}}" readonly/>
                                            <label>¿Cuenta con un segundo empleo?<span class="text-danger"></span></label>
                                            <label>Mencione Dónde<span class="text-danger"></span></label>
                                            <input type="text" id="nombre_segundo_empleo" name="nombre_segundo_empleo" class="form-control" placeholder="Mencione Dónde" value="{{$reinscripcion['nombre_segundo_empleo']}}" readonly/>
                                            <label>Horario Laboral (Entrada)<span class="text-danger"></span></label>
                                            <input type="text" id="horario_ent_laboral_segundo_empleo" name="horario_ent_laboral_segundo_empleo" class="form-control" placeholder="Horario Laboral (Entrada)" value="{{$reinscripcion['horario_ent_laboral_segundo_empleo']}}" readonly/>
                                            <label>Horario Laboral (Salida)<span class="text-danger"></span></label>
                                            <input type="text" id="horario_sal_laboral_segundo_empleo" name="horario_sal_laboral_segundo_empleo" class="form-control" placeholder="Horario Laboral (Salida)" value="{{$reinscripcion['horario_sal_laboral_segundo_empleo']}}" readonly/>
                                            <label>Días Laborales<span class="text-danger"></span></label>
                                            <input type="text" id="dias_laborales_segundo_empleo" name="dias_laborales_segundo_empleo" class="form-control" placeholder="Días Laborales" value="{{$reinscripcion['dias_laborales_segundo_empleo']}}" readonly/>
                                            <label>Teléfono Laboral<span class="text-danger"></span></label>
                                            <input type="text" id="telefono_laboral_segundo_empleo" name="telefono_laboral_segundo_empleo" class="form-control" placeholder="Teléfono Laboral" value="{{$reinscripcion['telefono_laboral_segundo_empleo']}}" readonly/>
                                            <label>Extensión del Teléfono Laboral<span class="text-danger"></span></label>
                                            <input type="text" id="extension_tel_laboral_segundo_empleo" name="extension_tel_laboral_segundo_empleo" class="form-control" placeholder="Extensión del Teléfono Laboral" value="{{$reinscripcion['extension_tel_laboral_segundo_empleo']}}" readonly/>
                                            <label>Domicilio Laborla (Avenida o Calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_laboral_segundo_empleo" name="domicilio_laboral_segundo_empleo" class="form-control" placeholder="Domicilio Laborla (Avenida o Calle)" value="{{$reinscripcion['domicilio_laboral_segundo_empleo']}}" readonly/>
                                            <label>Número (Exterior, Interior, Lote, Manzana, etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="num_domicilio_laboral_segundo_empleo" name="num_domicilio_laboral_segundo_empleo" class="form-control" placeholder="Número (Exterior, Interior, Lote, Manzana, ETC.)" value="{{$reinscripcion['num_domicilio_laboral_segundo_empleo']}}" readonly/>
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_laboral_segundo_empleo" name="colonia_laboral_segundo_empleo" class="form-control" placeholder="Colonia" value="{{$reinscripcion['colonia_laboral_segundo_empleo']}}" readonly/>
                                            <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_laboral_segundo_empleo" name="alcaldia_laboral_segundo_empleo" class="form-control" placeholder="Alcaldía o Municipio" value="{{$reinscripcion['alcaldia_laboral_segundo_empleo']}}" readonly/>
                                            <label>Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_laboral_segundo_empleo" name="codigo_postal_laboral_segundo_empleo" class="form-control" placeholder="Código Postal" value="{{$reinscripcion['codigo_postal_laboral_segundo_empleo']}}" readonly/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach($processPersonasAutorizadas as $itemDos => $personaAutorizada)
                            <div class="tab-pane fade" id="kt_tab_pane_4_4" role="tabpanel" aria-labelledby="kt_tab_pane_4_4">
                                <link href="{{ asset('css/style.css')}}" rel="stylesheet" readonly/>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <h2 style=" color:#777777;">Persona Autorizada 1</h2>
                                            <label>Nombre completo de la persona autorizada<span class="text-danger"></span></label>
                                            <input type="text" id="nombre_comple_person_autorizada" name="nombre_comple_person_autorizada" class="form-control" placeholder="Nombre completo de la persona autorizada" value="{{$personaAutorizada['nombre_comple_person_autorizada']}}" readonly/>
                                            <label>Entidad de Nacimiento<span class="text-danger"></span></label>
                                            <input type="text" id="entidad_nac_person_autorizada" name="entidad_nac_person_autorizada" class="form-control" placeholder="Entidad de Nacimiento" value="{{$personaAutorizada['entidad_nac_person_autorizada']}}" readonly/>
                                            <label>Fecha de Nacimiento<span class="text-danger"></span></label>
                                            <input type="text" id="fecha_nac_person_autorizada" name="fecha_nac_person_autorizada" class="form-control" placeholder="Fecha de Nacimiento" value="{{$personaAutorizada['fecha_nac_person_autorizada']}}" readonly/>
                                            <label>Edad<span class="text-danger"></span></label>
                                            <input type="text" id="edad_person_autorizada" name="edad_person_autorizada" class="form-control" placeholder="Edad" value="{{$personaAutorizada['edad_person_autorizada']}}" readonly/>
                                            <label>Género<span class="text-danger"></span></label>
                                            <input type="text" id="genero_person_autorizada" name="genero_person_autorizada" class="form-control" placeholder="Género" value="{{$personaAutorizada['genero_person_autorizada']}}" readonly/>
                                            <label>Curp<span class="text-danger"></span></label>
                                            <input type="text" id="curp_person_autorizada" name="curp_person_autorizada" class="form-control" placeholder="Curp" value="{{$personaAutorizada['curp_person_autorizada']}}" readonly/>
                                            <label>Nivel de Escolaridad<span class="text-danger"></span></label>
                                            <input type="text" id="nivel_escol_person_autorizada" name="nivel_escol_person_autorizada" class="form-control" placeholder="Nivel de Escolaridad" value="{{$personaAutorizada['nivel_escol_person_autorizada']}}" readonly/>
                                            <label>En Curso, Trunco o Concluido<span class="text-danger"></span></label>
                                            <input type="text" id="concluido_nivel_esc_person_autorizada" name="concluido_nivel_esc_person_autorizada" class="form-control" placeholder="En Curso, Trunco o Concluido" value="{{$personaAutorizada['concluido_nivel_esc_person_autorizada']}}" readonly/>
                                            <label>Parentesco con la niña o el niño<span class="text-danger"></span></label>
                                            <input type="text" id="parentesco_nino_person_autorizada" name="parentesco_nino_person_autorizada" class="form-control" placeholder="Parentesco con la niña o el niño" value="{{$personaAutorizada['parentesco_nino_person_autorizada']}}" readonly/>
                                            <label>Domicilio Particular (Avenida o Calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_calle_person_autorizada" name="domicilio_calle_person_autorizada" class="form-control" placeholder="Domicilio Particular (Avenida o Calle)" value="{{$personaAutorizada['domicilio_calle_person_autorizada']}}" readonly/>
                                            <label>Número(Exterior, Interior, Lote, Manzana, etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="numero_domicilio_person_autorizada" name="numero_domicilio_person_autorizada" class="form-control" placeholder="Número(Exterior, Interior, Lote, Manzana, etc.)" value="{{$personaAutorizada['numero_domicilio_person_autorizada']}}" readonly/>
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_person_autorizada" name="colonia_person_autorizada" class="form-control" placeholder="Colonia" value="{{$personaAutorizada['colonia_person_autorizada']}}" readonly/>
                                            <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_person_autorizada" name="alcaldia_person_autorizada" class="form-control" placeholder="Alcaldía o Municipio" value="{{$personaAutorizada['alcaldia_person_autorizada']}}" readonly/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="margin-top: 3rem;">Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_person_autorizada" name="codigo_postal_person_autorizada" class="form-control" placeholder="Código Postal" value="{{$personaAutorizada['codigo_postal_person_autorizada']}}" readonly/>
                                            <label>Teléfono Particular<span class="text-danger"></span></label>
                                            <input type="text" id="tel_particular_person_autorizada" name="tel_particular_person_autorizada" class="form-control" placeholder="Teléfono Particular" value="{{$personaAutorizada['tel_particular_person_autorizada']}}" readonly/>
                                            <label>Teléfono Celular<span class="text-danger"></span></label>
                                            <input type="text" id="tel_celular_person_autorizada" name="tel_celular_person_autorizada" class="form-control" placeholder="Teléfono Celular" value="{{$personaAutorizada['tel_celular_person_autorizada']}}" readonly/>
                                            <label>Email<span class="text-danger"></span></label>
                                            <input type="text" id="email_person_autorizada" name="email_person_autorizada" class="form-control" placeholder="Email" value="{{$personaAutorizada['email_person_autorizada']}}" readonly/>
                                            <label>Ocupación<span class="text-danger"></span></label>
                                            <input type="text" id="ocupacion_person_autorizada" name="ocupacion_person_autorizada" class="form-control" placeholder="Ocupación" value="{{$personaAutorizada['ocupacion_person_autorizada']}}" readonly/>
                                            <h3 style=" color:#777777;">Domicilio Laboral</h3>
                                            <label>Domicilio Laboral (Avenida o Calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_laboral_calle_person_autorizada" name="domicilio_laboral_calle_person_autorizada" class="form-control" placeholder="Domicilio Laboral (Avenida o Calle)" value="{{$personaAutorizada['domicilio_laboral_calle_person_autorizada']}}" readonly/>
                                            <label>Número (Exterior, Interior, Lote, Manzana etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="numero_domicilio_laboral_person_autorizada" name="numero_domicilio_laboral_person_autorizada" class="form-control" placeholder="Número (Exterior, Interior, Lote, Manzana etc.)" value="{{$personaAutorizada['numero_domicilio_laboral_person_autorizada']}}" readonly/>
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_laboral_person_autorizada" name="colonia_laboral_person_autorizada" class="form-control" placeholder="Colonia" value="{{$personaAutorizada['colonia_laboral_person_autorizada']}}" readonly/>
                                            <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_laboral_person_autorizada" name="alcaldia_laboral_person_autorizada" class="form-control" placeholder="Alcaldía o Municipio" value="{{$personaAutorizada['alcaldia_laboral_person_autorizada']}}" readonly/>
                                            <label>Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_laboral_person_autorizada" name="codigo_postal_laboral_person_autorizada" class="form-control" placeholder="Código Postal" value="{{$personaAutorizada['codigo_postal_laboral_person_autorizada']}}" readonly/>
                                            <label>Teléfono laboral<span class="text-danger"></span></label>
                                            <input type="text" id="tel_laboral_person_autorizada" name="tel_laboral_person_autorizada" class="form-control" placeholder="Teléfono laboral" value="{{$personaAutorizada['tel_laboral_person_autorizada']}}" readonly/>
                                            <label>Extensión del teléfono laboral<span class="text-danger"></span></label>
                                            <input type="text" id="extension_tel_laboral_person_autorizada" name="extension_tel_laboral_person_autorizada" class="form-control" placeholder="Extensión del teléfono laboral" value="{{$personaAutorizada['extension_tel_laboral_person_autorizada']}}" readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <h2 style=" color:#777777;">Persona Autorizada 2</h2>
                                            <label>Nombre completo de la persona autorizada<span class="text-danger"></span></label>
                                            <input type="text" id="nombre_comple_person_autorizada_dos" name="nombre_comple_person_autorizada_dos" class="form-control" placeholder="Nombre completo de la persona autorizada" value="{{$personaAutorizada['nombre_comple_person_autorizada_dos']}}" readonly/>
                                            <label>Entidad de Nacimiento<span class="text-danger"></span></label>
                                            <input type="text" id="entidad_nac_person_autorizada_dos" name="entidad_nac_person_autorizada_dos" class="form-control" placeholder="Entidad de Nacimiento" value="{{$personaAutorizada['entidad_nac_person_autorizada_dos']}}" readonly/>
                                            <label>Fecha de Nacimiento<span class="text-danger"></span></label>
                                            <input type="text" id="fecha_nac_person_autorizada_dos" name="fecha_nac_person_autorizada_dos" class="form-control" placeholder="Fecha de Nacimiento" value="{{$personaAutorizada['fecha_nac_person_autorizada_dos']}}" readonly/>
                                            <label>Edad<span class="text-danger"></span></label>
                                            <input type="text" id="edad_person_autorizada_dos" name="edad_person_autorizada_dos" class="form-control" placeholder="Edad" value="{{$personaAutorizada['edad_person_autorizada_dos']}}" readonly/>
                                            <label>Género<span class="text-danger"></span></label>
                                            <input type="text" id="genero_person_autorizada_dos" name="genero_person_autorizada_dos" class="form-control" placeholder="Género" value="{{$personaAutorizada['genero_person_autorizada_dos']}}" readonly/>
                                            <label>Curp<span class="text-danger"></span></label>
                                            <input type="text" id="curp_person_autorizada_dos" name="curp_person_autorizada_dos" class="form-control" placeholder="Curp" value="{{$personaAutorizada['curp_person_autorizada_dos']}}" readonly/>
                                            <label>Nivel de Escolaridad<span class="text-danger"></span></label>
                                            <input type="text" id="nivel_escol_person_autorizada_dos" name="nivel_escol_person_autorizada_dos" class="form-control" placeholder="Nivel de Escolaridad" value="{{$personaAutorizada['nivel_escol_person_autorizada_dos']}}" readonly/>
                                            <label>En Curso, Trunco o Concluido<span class="text-danger"></span></label>
                                            <input type="text" id="concluido_nivel_esc_person_autorizada_dos" name="concluido_nivel_esc_person_autorizada_dos" class="form-control" placeholder="En Curso, Trunco o Concluido" value="{{$personaAutorizada['concluido_nivel_esc_person_autorizada_dos']}}" readonly/>
                                            <label>Parentesco con la niña o el niño<span class="text-danger"></span></label>
                                            <input type="text" id="parentesco_nino_person_autorizada_dos" name="parentesco_nino_person_autorizada_dos" class="form-control" placeholder="Parentesco con la niña o el niño" value="{{$personaAutorizada['parentesco_nino_person_autorizada_dos']}}" readonly/>
                                            <label>Domicilio Particular (Avenida o Calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_calle_person_autorizada_dos" name="domicilio_calle_person_autorizada_dos" class="form-control" placeholder="Domicilio Particular (Avenida o Calle)" value="{{$personaAutorizada['domicilio_calle_person_autorizada_dos']}}" readonly/>
                                            <label>Número(Exterior, Interior, Lote, Manzana, etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="numero_domicilio_person_autorizada_dos" name="numero_domicilio_person_autorizada_dos" class="form-control" placeholder="Número(Exterior, Interior, Lote, Manzana, etc.)" value="{{$personaAutorizada['numero_domicilio_person_autorizada_dos']}}" readonly/>
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_person_autorizada_dos" name="colonia_person_autorizada_dos" class="form-control" placeholder="Colonia" value="{{$personaAutorizada['colonia_person_autorizada_dos']}}" readonly/>
                                            <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_person_autorizada_dos" name="alcaldia_person_autorizada_dos" class="form-control" placeholder="Alcaldía o Municipio" value="{{$personaAutorizada['alcaldia_person_autorizada_dos']}}" readonly/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label style="margin-top: 3rem;">Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_person_autorizada_dos" name="codigo_postal_person_autorizada_dos" class="form-control" placeholder="Código Postal" value="{{$personaAutorizada['codigo_postal_person_autorizada_dos']}}" readonly/>
                                            <label>Teléfono Particular<span class="text-danger"></span></label>
                                            <input type="text" id="tel_particular_person_autorizada_dos" name="tel_particular_person_autorizada_dos" class="form-control" placeholder="Teléfono Particular" value="{{$personaAutorizada['tel_particular_person_autorizada_dos']}}" readonly/>
                                            <label>Teléfono Celular<span class="text-danger"></span></label>
                                            <input type="text" id="tel_celular_person_autorizada_dos" name="tel_celular_person_autorizada_dos" class="form-control" placeholder="Teléfono Celular" value="{{$personaAutorizada['tel_celular_person_autorizada_dos']}}" readonly/>
                                            <label>Email<span class="text-danger"></span></label>
                                            <input type="text" id="email_person_autorizada_dos" name="email_person_autorizada_dos" class="form-control" placeholder="Email" value="{{$personaAutorizada['email_person_autorizada_dos']}}" readonly/>
                                            <label>Ocupación<span class="text-danger"></span></label>
                                            <input type="text" id="ocupacion_person_autorizada_dos" name="ocupacion_person_autorizada_dos" class="form-control" placeholder="Ocupación" value="{{$personaAutorizada['ocupacion_person_autorizada_dos']}}" readonly/>
                                            <h3 style=" color:#777777;">Domicilio Laboral</h3>
                                            <label>Domicilio Laboral (Avenida o Calle)<span class="text-danger"></span></label>
                                            <input type="text" id="domicilio_laboral_calle_person_autorizada_dos" name="domicilio_laboral_calle_person_autorizada_dos" class="form-control" placeholder="Domicilio Laboral (Avenida o Calle)" value="{{$personaAutorizada['domicilio_laboral_calle_person_autorizada_dos']}}" readonly/>
                                            <label>Número (Exterior, Interior, Lote, Manzana etc.)<span class="text-danger"></span></label>
                                            <input type="text" id="numero_domicilio_laboral_person_autorizada_dos" name="numero_domicilio_laboral_person_autorizada_dos" class="form-control" placeholder="Número (Exterior, Interior, Lote, Manzana etc.)" value="{{$personaAutorizada['numero_domicilio_laboral_person_autorizada_dos']}}" readonly/>
                                            <label>Colonia<span class="text-danger"></span></label>
                                            <input type="text" id="colonia_laboral_person_autorizada_dos" name="colonia_laboral_person_autorizada_dos" class="form-control" placeholder="Colonia" value="{{$personaAutorizada['colonia_laboral_person_autorizada_dos']}}" readonly/>
                                            <label>Alcaldía o Municipio<span class="text-danger"></span></label>
                                            <input type="text" id="alcaldia_laboral_person_autorizada_dos" name="alcaldia_laboral_person_autorizada_dos" class="form-control" placeholder="Alcaldía o Municipio" value="{{$personaAutorizada['alcaldia_laboral_person_autorizada_dos']}}" readonly/>
                                            <label>Código Postal<span class="text-danger"></span></label>
                                            <input type="text" id="codigo_postal_laboral_person_autorizada_dos" name="codigo_postal_laboral_person_autorizada_dos" class="form-control" placeholder="Código Postal" value="{{$personaAutorizada['codigo_postal_laboral_person_autorizada_dos']}}" readonly/>
                                            <label>Teléfono laboral<span class="text-danger"></span></label>
                                            <input type="text" id="tel_laboral_person_autorizada_dos" name="tel_laboral_person_autorizada_dos" class="form-control" placeholder="Teléfono laboral" value="{{$personaAutorizada['tel_laboral_person_autorizada_dos']}}" readonly/>
                                            <label>Extensión del teléfono laboral<span class="text-danger"></span></label>
                                            <input type="text" id="extension_tel_laboral_person_autorizada_dos" name="extension_tel_laboral_person_autorizada_dos" class="form-control" placeholder="Extensión del teléfono laboral" value="{{$personaAutorizada['extension_tel_laboral_person_autorizada_dos']}}" readonly/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>
                @if ($proceso == 'Preinscripción')
                <span class="float-right btn-regresar mt-5">
                    <a class="btn btn-lg btn-primary" href="{{route('all_datos_repositorio')}}" title="Regresar"><i class="fa fa-backward"></i> Regresar</a>
                </span>                    
                @else
                <span class="float-right btn-regresar mt-5">
                    <a class="btn btn-lg btn-primary" href="{{route('all_datos_repositorio_reins')}}" title="Regresar"><i class="fa fa-backward"></i> Regresar</a>
                </span>                                        
                @endif
            </div>
        </div>
    </div>
</div>
@endsection