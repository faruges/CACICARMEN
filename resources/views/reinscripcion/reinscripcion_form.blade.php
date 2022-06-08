@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
    <script src="{{URL::asset('js/consulta_webservice.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('js/add-upper-case.js')}}" type="text/javascript"></script>
    {{-- <link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/uikit.min.css')}}"/>

@endsection
@section('mycontent')
    <style>
        h1, label, span {
            font-family: 'source sans pro', sans-serif;
        }
    </style>
    <div class="card card-custom" style="margin-top: 2rem;">
        <div class="card-header card-header-tabs-line">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
                                <span class="nav-icon"><i class="fa fa-user-circle"></i></span>
                                <span class="nav-text">Información de la persona trabajadora</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
                                <span class="nav-icon"><i class="fa fa-child"></i></span>
                                <span class="nav-text">Información del niño o niña</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body" style="margin-bottom: 8rem;">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel"
                     aria-labelledby="kt_tab_pane_1_4">
                    <link href="{{ asset('css/style.css')}}" rel="stylesheet"/>

                    <body>
                    <div class="fondo" style="padding: 5rem;">
                        <h1 style="color: #054a41;">Reinscripción a los Centros de Atención y Cuidado Infantil</h1><br>
                        @foreach ($data as $item=>$value)
                            <div class="col-lg-12">
                                <label style="color: #235B4E;">Datos de la persona trabajadora</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Nombre(s)<input id="nombre_tutor" type="text"
                                                           placeholder="Nombre(s) del Padre/Madre o Tutor"
                                                           title="Nombre del Padre/Madre o Tutor"
                                                           oninput="this.className = ''" name="nombre_tutor"
                                                           value="{{$value['CH_nombres']}}" readonly></p>
                                        <p>Apellido paterno<input id="ap_paterno_t" type="text"
                                                                  placeholder="Apellido paterno"
                                                                  title="Apellido paterno" oninput="this.className = ''"
                                                                  name="ap_paterno_t" value="{{$value['CH_paterno']}}"
                                                                  readonly></p>
                                        <p>Apellido materno<input id="ap_materno_t" type="text"
                                                                  placeholder="Apellido materno"
                                                                  title="Apellido materno" oninput="this.className = ''"
                                                                  name="ap_materno_t" value="{{$value['CH_materno']}}"
                                                                  readonly></p>
                                        <p>Tipo de nómina<input id="tipo_nomina" placeholder="Tipo de nómina"
                                                                title="Tipo de nómina" oninput="this.className = ''"
                                                                name="tipo_nomina" value="{{$value['TipoNomina']}}"
                                                                readonly></p>
                                        <p>Número de empleado<input id="num_empleado" placeholder="Número de empleado"
                                                                    title="Número de empleado"
                                                                    oninput="this.className = ''" name="num_empleado"
                                                                    value="{{$value['NumEmpleado']}}" readonly></p>
                                        <p>Número de plaza<input id="num_plaza" placeholder="Número de plaza"
                                                                 title="Número de plaza" oninput="this.className = ''"
                                                                 name="num_plaza" value="{{$value['NUM_PLAZA']}}"
                                                                 readonly></p>
                                        <p>Unidad administrativa Área de adscripción
                                            <input
                                                id="unidad_administrativa"
                                                type="text"
                                                placeholder="Unidad administrativa"
                                                title="Clave de la dependencia"
                                                oninput="this.className = ''"
                                                name="unidad_administrativa"
                                                value="{{$value['UA']}}"
                                                readonly>
                                        </p>
                                        <p>Clave de la dependencia
                                            <input
                                                id="clave_dependencia"
                                                type="text"
                                                placeholder="Clave de la dependencia"
                                                title="Clave de la dependencia"
                                                oninput="this.className = ''"
                                                name="clave_dependencia"
                                                value="{{$value['Clave_Dependencia']}}"
                                                readonly>
                                        </p>

                                        <p>Nivel salarial<input id="nivel_salarial" placeholder="Nivel salarial"
                                                                title="Nivel salarial" oninput="this.className = ''"
                                                                name="nivel_salarial"
                                                                value="{{$value['NIVEL_SALARIAL']}}" readonly></p>
                                        <p>Sección sindical<input id="seccion_sindical" placeholder="Sección sindical"
                                                                  title="Sección sindical" oninput="this.className = ''"
                                                                  name="seccion_sindical"
                                                                  value="{{$value['SECCION_SINDICAL']}}" readonly>
                                        </p>
                                        <h5 style="font-family: Arial, Helvetica; color:#777777;">Horario laboral</h5>
                                        <input type="time" id="horario_laboral_ent" name="horario_laboral_ent"
                                               style="margin-bottom: 1rem;">
                                        <input type="time" id="horario_laboral_sal" name="horario_laboral_sal">
                                    </div>

                                    <div class="col-sm-6">
                                        <h5 style=" color:#777777; text-align: center;"><label>Domicilio
                                                particular</label>
                                        </h5>

                                        <p>Calle<input id="calle" type="text" placeholder="Calle" title="Calle"
                                                       oninput="this.className = ''" name="calle"></p>
                                        <p>Número<input id="numero_domicilio" placeholder="Número" title="Número"
                                                        oninput="this.className = ''" name="numero_domicilio"></p>
                                        <p>Código postal<input id="codigo_postal" placeholder="Código postal"
                                                               title="NCódigo postal" oninput="this.className = ''"
                                                               name="codigo_postal" maxlength="5"></p>
                                        <input id="tokenCodigoPostalId" oninput="this.className = ''"
                                               name="tokenCodigoPostalId" value="SistemaDeRpueba4as4x4vdlsad" hidden>
                                        <p style="margin-bottom: 0rem;">Colonia </p>
                                        <div class="form-group">
                                            <select style="font-size: 15px; padding-bottom:5px;" name="colonia"
                                                    id="colonia" required class="form-control"></select>
                                        </div>
                                        {{-- <p> Colonia <select style="font-size: 15px;" name="colonia" id="colonia"
                                                required></select></p>  --}}
                                        <p>Alcaldía/Municipio<input id="alcaldia" type="text" placeholder="Alcaldía"
                                                                    title="Alcaldía" oninput="this.className = ''"
                                                                    name="alcaldia" readonly>
                                        </p>
                                        <p>E-mail<input id="email" type="email" placeholder="E-mail" title="E-mail"
                                                        oninput="this.className = ''" name="email"
                                                        value="{{$value['CH_mail']}}"></p>
                                        <p>Teléfono a 10 dígitos<input id="telefono_uno" type="tel"
                                                                       placeholder="Teléfono o celular"
                                                                       title="Teléfono o celular"
                                                                       oninput="this.className = ''" name="telefono_uno"
                                                                       maxlength="10" pattern="[0-9]{10}"></p>
                                        <p>Celular a 10 dígitos<input id="telefono_dos" type="tel"
                                                                      placeholder="Teléfono 2" title="Teléfono 2"
                                                                      oninput="this.className = ''" name="telefono_dos"
                                                                      maxlength="10" pattern="[0-9]{10}"></p>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <p style="color: #f5f5f0;">.</p>
                    </div>
                    </body>
                </div>
                </body>
                <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
                    <link href="{{ asset('css/style.css')}}" rel="stylesheet"/>
                    <link rel="stylesheet"
                          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
                    <div class="tab"><br>
                        <div class="fondo" style="padding: 5rem;">
                            <h1 style="color: #054a41;">Reinscripción a los Centros de Atención y Cuidado Infantil</h1>
                            <label style="color:#777777;" for="curp">CURP de la niña o niño:</label>
                            <p><input id="curp" type="text" placeholder="CURP" oninput="this.className = ''" name="curp"
                                      onkeyup="mayus(this);" maxlength="18"
                                      pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]">
                            </p>
                            <input type="text" id="nombre_proceso" oninput="this.className = ''" name="nombre_proceso"
                                   value="reinscripcion" readonly hidden></p>
                            <button id="valida_curp" type="button" onclick="validaCurp()">Validar CURP</button>
                        </div>
                    </div>
                    <div class="tab"><br>
                        <div class="fondo" style="padding: 5rem;">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <label style="color:#235B4E;">Datos de la niña o niño</label><br>

                                        <div class="form-group">
                                            <p>Nombre(s)<input type="text" id="nombre_menor_1"
                                                               placeholder="Nombre(s) del menor"
                                                               title="Nombre(s) del menor" oninput="this.className = ''"
                                                               name="nombre_menor_1" readonly></p>
                                        </div>
                                        <div class="form-group">
                                            <p>Apellido paterno<input type="text" id="apellido_paterno_1"
                                                                      placeholder="Apellido paterno"
                                                                      title="Apellido paterno"
                                                                      oninput="this.className = ''"
                                                                      name="apellido_paterno_1" readonly></p>
                                        </div>
                                        <div class="form-group">
                                            <p>Apellido materno
                                                <input type="text" id="apellido_materno_1"
                                                       placeholder="Apellido materno" title="Apellido materno"
                                                       oninput="this.className = ''" name="apellido_materno_1" readonly>
                                            </p>
                                        </div>
                                        <div class="form-group">
                                            <p>CURP<input type="text" id="curp_num" placeholder="CURP" title="CURP"
                                                          oninput="this.className = ''" name="curp_num"
                                                          pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]"
                                                          onkeyup="mayus(this);" readonly></p>
                                        </div>

                                        <div class="form-group">
                                            <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;"
                                                for="birthday">Fecha de
                                                Nacimiento de la niña o niño:</h5>
                                            <input type="text" id="birthday" placeholder="Fecha de Nacimiento del menor"
                                                   title="Fecha de Nacimiento del menor" oninput="this.className = ''"
                                                   name="birthday" readonly>
                                        </div>

                                        <div class="form-group">
                                            <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">
                                                Edad
                                                de
                                                la niña o niño al
                                                ingresar al plantel (Año y/o meses)</h5>
                                            <input id="Edad_menor" type="text"
                                                   placeholder="Edad del menor al ingresar al plantel (Año o Meses)"
                                                   title="Edad del menor al ingresar al plantel (Año o Meses)"
                                                   oninput="this.className = ''" name="Edad_menor"
                                                   onkeyup="mayus(this);" readonly>
                                        </div>
                                        {{-- <div class="form-group">
                                            <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;"
                                                for="cars">Centro de
                                                Atención y
                                                Cuidado Infantil deseado:
                                                <select style="font-size: 15px;" name="caci" id="caci">
                                                    <option value="Luz Maria Gomez Pezuela">Luz María Gómez Pezuela</option>
                                                    <option value="Mtra Eva Moreno Sanchez">Mtra. Eva Moreno Sánchez
                                                    </option>
                                                    <option value="Bertha Von Glumer Leyva">Bertha von Glumer Leyva</option>
                                                    <option value="Carolina Agazzi">Carolina Agazzi</option>
                                                    <option value="Carmen S">Carmen Serdán</option>
                                                </select></h5>
                                        </div>  --}}
                                        <div class="form-group">
                                            <label
                                                style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;"
                                                for="cars">Centro de
                                                Atención y Cuidado Infantil deseado: <span
                                                    class="text-danger"></span></label>
                                            <input id="caci_menor_inscrito" type="text" name="caci_menor_inscrito"
                                                   readonly>
                                            <!-- <select style="font-size: 15px; padding-bottom: 5px;" name="caci" id="caci" class="form-control">
                                                <option value="Luz Maria Gomez Pezuela">Luz María Gómez Pezuela</option>
                                                <option value="Mtra Eva Moreno Sanchez">Mtra. Eva Moreno Sánchez</option>
                                                <option value="Bertha Von Glumer Leyva">Bertha von Glumer Leyva</option>
                                                <option value="Carolina Agazzi">Carolina Agazzi</option>
                                                <option value="Carmen S">Carmen Serdán</option>
                                            </select> -->
                                            <div class="form-group" style="margin-top: 2rem;">
                                                <label
                                                    style="font-size: 15px; font-family: Arial, Helvetica; color:#777777; margin-bottom:0rem; margin-top:0rem;">Cartilla
                                                    de vacunación, solo las páginas
                                                    de datos identificativos, esquema de vacunación y
                                                    estado nutricional.</label>
                                                <div class="js-upload uk-placeholder uk-text-center"
                                                     style="margin-top: 0rem;">
                                                    <span uk-icon="icon: cloud-upload"></span>
                                                    <span class="uk-text-small">Arraste y suelte un archivo ó Selecciónelo</span>
                                                    <div uk-form-custom>
                                                        <input type="file" id="filename_vacu" name="filename_vacu"
                                                               title="El tamaño del archivo no debe exceder 2 Mb"
                                                               accept="application/msword, application/pdf">
                                                        <span class="uk-link">2 Mb máximo</span>
                                                    </div>
                                                </div>
                                                <progress id="js-progressbar-vacu" class="uk-progress" value="0"
                                                          max="100" style="margin-top: 0rem; margin-bottom: 0rem;"
                                                          hidden></progress>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    style="font-size: 15px; font-family: Arial, Helvetica; color:#777777; margin-bottom:0rem; margin-top:0rem;">Último
                                                    comprobante de pago del trabajador o trabajadora.</label>
                                                <div class="js-upload uk-placeholder uk-text-center"
                                                     style="margin-top: 0rem;">
                                                    <span uk-icon="icon: cloud-upload"></span>
                                                    <span class="uk-text-small">Arraste y suelte un archivo ó Selecciónelo</span>
                                                    <div uk-form-custom>
                                                        <input type="file" id="filename_compr_pago"
                                                               name="filename_compr_pago"
                                                               title="El tamaño del archivo no debe exceder 2 Mb"
                                                               accept="application/msword, application/pdf">
                                                        <span class="uk-link">2 Mb máximo</span>
                                                    </div>
                                                </div>
                                                <progress id="js-progressbar-compr-pago" class="uk-progress" value="0"
                                                          max="100" style="margin-top: 0rem; margin-bottom: 0rem;"
                                                          hidden></progress>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    style="font-family: Arial, Helvetica; color:#777777; margin-bottom:0rem; margin-top:0rem;">Documentación
                                                    clínica y diagnóstico de la condición y del
                                                    tratamiento que recibe, en caso de presentar algún tipo de
                                                    discapacidad o enfermedad crónica.</label>
                                                <div class="js-upload uk-placeholder uk-text-center"
                                                     style="margin-top: 0rem;">
                                                    <span uk-icon="icon: cloud-upload"></span>
                                                    <span class="uk-text-small">Arraste y suelte un archivo ó Selecciónelo</span>
                                                    <div uk-form-custom>
                                                        <input type="file" id="filename_disc" name="filename_disc"
                                                               title="El tamaño del archivo no debe exceder 2 Mb"
                                                               accept="application/msword, application/pdf">
                                                        <span class="uk-link">2 Mb máximo</span>
                                                    </div>
                                                </div>
                                                <progress id="js-progressbar-disc" class="uk-progress" value="0"
                                                          max="100" style="margin-top: 0rem; margin-bottom: 0rem;"
                                                          hidden></progress>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6"><br>
                                        <div class="form-group">
                                            <label
                                                style="font-family: Arial, Helvetica; color:#777777; margin-bottom:0rem; margin-top:0rem;">Credencial</label>
                                            <div class="js-upload uk-placeholder uk-text-center"
                                                 style="margin-top: 0rem;">
                                                <span uk-icon="icon: cloud-upload"></span>
                                                <span
                                                    class="uk-text-small">Arraste y suelte un archivo ó Selecciónelo</span>
                                                <div uk-form-custom>
                                                    <input type="file" id="filename_credencial"
                                                           name="filename_credencial"
                                                           title="El tamaño del archivo no debe exceder 2 Mb"
                                                           accept="application/msword, application/pdf">
                                                    <span class="uk-link">2 Mb máximo</span>
                                                </div>
                                            </div>
                                            <progress id="js-progressbar-credencial" class="uk-progress" value="0"
                                                      max="100"
                                                      style="margin-top: 0rem; margin-bottom: 0rem;" hidden></progress>
                                        </div>
                                        <div class="form-group">
                                            <label
                                                style="font-family: Arial, Helvetica; color:#777777; margin-bottom:0rem; margin-top:0rem;">Gafete</label>
                                            <div class="js-upload uk-placeholder uk-text-center"
                                                 style="margin-top: 0rem;">
                                                <span uk-icon="icon: cloud-upload"></span>
                                                <span
                                                    class="uk-text-small">Arraste y suelte un archivo ó Selecciónelo</span>
                                                <div uk-form-custom>
                                                    <input type="file" id="filename_gafete" name="filename_gafete"
                                                           title="El tamaño del archivo no debe exceder 2 Mb"
                                                           accept="application/msword, application/pdf">
                                                    <span class="uk-link">2 Mb máximo</span>
                                                </div>
                                            </div>
                                            <progress id="js-progressbar-gafete" class="uk-progress" value="0" max="100"
                                                      style="margin-top: 0rem; margin-bottom: 0rem;" hidden></progress>
                                        </div>
                                        <div class="form-group">
                                            <label
                                                style="font-family: Arial, Helvetica; color:#777777; margin-bottom:0rem; margin-top:0rem;">Solicitud
                                                de preinscripción</label>
                                            <div class="js-upload uk-placeholder uk-text-center"
                                                 style="margin-top: 0rem;">
                                                <span uk-icon="icon: cloud-upload"></span>
                                                <span
                                                    class="uk-text-small">Arraste y suelte un archivo ó Selecciónelo</span>
                                                <div uk-form-custom>
                                                    <input type="file" id="filename_solicitud" name="filename_solicitud"
                                                           title="El tamaño del archivo no debe exceder 2 Mb"
                                                           accept="application/msword, application/pdf">
                                                    <span class="uk-link">2 Mb máximo</span>
                                                </div>
                                            </div>
                                            <progress id="js-progressbar-solicitud" class="uk-progress" value="0"
                                                      max="100"
                                                      style="margin-top: 0rem; margin-bottom: 0rem;" hidden></progress>
                                        </div>
                                        <div class="form-group">
                                            <label
                                                style="font-family: Arial, Helvetica; color:#777777; margin-bottom:0rem; margin-top:0rem;">Carta
                                                de autorización</label>
                                            <div class="js-upload uk-placeholder uk-text-center"
                                                 style="margin-top: 0rem;">
                                                <span uk-icon="icon: cloud-upload"></span>
                                                <span
                                                    class="uk-text-small">Arraste y suelte un archivo ó Selecciónelo</span>
                                                <div uk-form-custom>
                                                    <input type="file" id="filename_carta" name="filename_carta"
                                                           title="El tamaño del archivo no debe exceder 2 Mb"
                                                           accept="application/msword, application/pdf">
                                                    <span class="uk-link">2 Mb máximo</span>
                                                </div>
                                            </div>
                                            <progress id="js-progressbar-carta" class="uk-progress" value="0" max="100"
                                                      style="margin-top: 0rem; margin-bottom: 0rem;" hidden></progress>
                                        </div>
                                        <div class="form-group">
                                            <label
                                                style="font-family: Arial, Helvetica; color:#777777; margin-bottom:0rem; margin-top:0rem;">Solicitud
                                                de análisis clinicos</label>
                                            <div class="js-upload uk-placeholder uk-text-center"
                                                 style="margin-top: 0rem;">
                                                <span uk-icon="icon: cloud-upload"></span>
                                                <span
                                                    class="uk-text-small">Arraste y suelte un archivo ó Selecciónelo</span>
                                                <div uk-form-custom>
                                                    <input type="file" id="filename_sol_anali" name="filename_sol_anali"
                                                           title="El tamaño del archivo no debe exceder 2 Mb"
                                                           accept="application/msword, application/pdf">
                                                    <span class="uk-link">2 Mb máximo</span>
                                                </div>
                                            </div>
                                            <progress id="js-progressbar-sol-anali" class="uk-progress" value="0"
                                                      max="100"
                                                      style="margin-top: 0rem; margin-bottom: 0rem;" hidden></progress>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label
                                                style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Cartilla
                                                de vacunación, solo las páginas
                                                de datos identificativos, esquema de vacunación y
                                                estado nutricional.
                                            </label>
                                            <div></div>
                                            <div class="custom-file">
                                                <input type="file" id="filename_vacu" name="filename_vacu"
                                                    class="custom-file-input"
                                                    title="El tamaño del archivo no debe exceder 2 Mb"
                                                    accept="application/msword, application/pdf">
                                                <label class="custom-file-label" for="filename_vacu">Examinar..</label>
                                            </div>
                                        </div>  --}}

                                        {{-- <div class="form-group">
                                            <label
                                                style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Último
                                                comprobante de pago del trabajador o trabajadora.</label>
                                            <div></div>
                                            <div class="custom-file">
                                                <input type="file" id="filename_compr_pago" name="filename_compr_pago"
                                                    class="custom-file-input"
                                                    title="El tamaño del archivo no debe exceder 2 Mb"
                                                    accept="application/msword, application/pdf">
                                                <label class="custom-file-label"
                                                    for="filename_compr_pago">Examinar..</label>
                                            </div>
                                        </div>  --}}
                                        {{-- <div class="form-group">
                                            <label
                                                style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Documentación
                                                clínica y diagnóstico de la condición y del
                                                tratamiento que recibe, en caso de presentar algún tipo de
                                                discapacidad o enfermedad crónica.</label>
                                            <div></div>
                                            <div class="custom-file">
                                                <input type="file" id="filename_disc" name="filename_disc"
                                                    class="custom-file-input"
                                                    title="El tamaño del archivo no debe exceder 2 Mb"
                                                    accept="application/msword, application/pdf">
                                                <label class="custom-file-label" for="filename_disc">Examinar..</label>
                                            </div>
                                        </div>  --}}
                                        <input type="text" id="rfc_tutor" value="{{$value['RFC']}}" hidden/>
                                        <h4 style="color:#545151;"><i style="color: #235B4E; font-size:30px;"
                                                                      class="fa fa-newspaper-o"></i>
                                            <b>Nota:</b> Los archivos soportados son .pdf, .docx. Asegúrese que sus
                                            archivos cumplan el requisito
                                        </h4>
                                        <h4><input id="terminos" style="width: 10%;" type="checkbox" name="terminos"
                                                   required><a
                                                href="img/PDF/20_A_AVISO_DE_PRIVACIDAD_INTEGRAL_Tramites_procedimientos_CACI_SAF.pdf"
                                                target="_blank">Revisar y aceptar términos y
                                                condiciones</a></h4>
                                    </div>
                                </div>
                            </div>
                            <p style="color: #f5f5f0;">.</p>
                        </div>
                        <div class="fondo" style="padding: 0rem 5rem;">
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="button" id="enviar" onclick="reinscripcion()">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fondo" style="padding: 5rem;">
                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Continuar</button>
                            </div>
                        </div>
                    </div>
                    <div style="text-align:center; margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    {{-- <script src="{{URL::asset('assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script> --}}

    <script src="{{URL::asset('assets/js/uikit.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/uikit-icons.min.js')}}"></script>

    <script>
        Swal.fire({
            title: '<strong>Atención</u></strong>',
            icon: 'warning',
            html: '<b>Estos  datos son privados solo la madre, padre o persona tutora  es  responsable de la información capturada.</b> ' +
                '<a target="_blank" href="{{asset('img/PDF/20_B_AVISO_DE_PRIVACIDAD_SIMPLIFICADO_Tramites_procedimientos_CACI_SAF.pdf')}}"><h5 style="color: #235B4E;">Ver aviso de privacidad</h5></a>',
            showCloseButton: true
        })
    </script>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
    </script>
@endsection
