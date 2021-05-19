@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
<script src="{{URL::asset('js/consulta_webservice.js')}}" type="text/javascript"> </script>
<script src="{{URL::asset('js/add-upper-case.js')}}" type="text/javascript"> </script>
<link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
{{--  <link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" /> --}}

{{--  <link href="{{ asset('assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" /> --}}
{{--  <link href="{{ asset('assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" /> --}}
@endsection
@section('mycontent')
<div class="card card-custom">
  <div class="card-header card-header-tabs-line">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card-toolbar">
        <ul class="nav nav-tabs nav-bold nav-tabs-line">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_4">
              <span class="nav-icon"><i class="fa fa-user-circle"></i></span>
              <span class="nav-text">Información de Empleado</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_4">
              <span class="nav-icon"><i class="fa fa-child"></i></span>
              <span class="nav-text">Información del menor</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_4">
              <span class="nav-icon"><i class="fa fa-phone"></i></span>
              <span class="nav-text">Datos de Contacto</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="tab-content">
      <div class="tab-pane fade show active" id="kt_tab_pane_1_4" role="tabpanel" aria-labelledby="kt_tab_pane_1_4">
        <link href="{{ asset('css/style.css')}}" rel="stylesheet" />

        <body>
          <div class="fondo">


            <h1 style="color: #054a41;">Preinscripción a los Centros de Atención y Cuidado Infantil</h1>
            {{--  <div class="tab"><br>  --}}
            @foreach ($data as $item=>$value)
            <div class="col-lg-12">
              <label style="color:#00b140; ">Datos de la persona trabajadora</label>
              <div class="row">
                <div class="col-sm-6">

                  <div class="form-group">
                    <label>Nombre(s)<span class="text-danger"></span></label>
                    <input type="text" id="nombre_tutor_madres" name="nombre_tutor_madres" class="form-control"
                      placeholder="Nombre del Padre/Madre o Tutor" value="{{$value['CH_nombres']}}" readonly />
                  </div>
                  <div class="form-group">
                    <label>Apellido paterno<span class="text-danger"></span></label>
                    <input id="apellido_paterno_tutor" type="text" placeholder="Apellido paterno" class="form-control"
                      title="Apellido paterno" oninput="this.className = ''" name="apellido_paterno_tutor"
                      value="{{$value['CH_paterno']}}" readonly>
                  </div>
                  <div class="form-group">
                    <label>Apellido materno<span class="text-danger"></span></label>
                    <input id="apellido_materno_tutor" type="text" placeholder="Apellido materno" class="form-control"
                      title="Apellido materno" oninput="this.className = ''" name="apellido_materno_tutor"
                      value="{{$value['CH_materno']}}" readonly>
                  </div>

                  <div class="form-group">
                    <label>Tipo de nómina<span class="text-danger"></span></label>
                    <input id="tipo_nomina_1" placeholder="Tipo de nómina" title="Tipo de nómina" class="form-control"
                      oninput="this.className = ''" name="tipo_nomina_1" value="{{$value['TipoNomina']}}" readonly>
                  </div>
                  <div class="form-group">
                    <label>Número de empleado<span class="text-danger"></span></label>
                    <input id="num_empleado_1" placeholder="Número de empleado" class="form-control"
                      title="Número de empleado" oninput="this.className = ''" name="num_empleado_1"
                      value="{{$value['NumEmpleado']}}" readonly>
                  </div>
                  <div class="form-group">
                    <label>Número de plaza<span class="text-danger"></span></label>
                    <input id="num_plaza_1" placeholder="Número de plaza" title="Número de plaza" class="form-control"
                      oninput="this.className = ''" name="num_plaza_1" value="{{$value['NUM_PLAZA']}}" readonly>
                  </div>
                  <div class="form-group">
                    <label>Áreas de adscripción<span class="text-danger"></span></label>
                    <input id="clave_dependencia_1" type="text" placeholder="Clave de la dependencia"
                      title="Clave de la dependencia" class="form-control" oninput="this.className = ''"
                      name="clave_dependencia_1" value="{{$value['Clave_Dependencia']}}" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nivel salarial<span class="text-danger"></span></label>
                    <input id="nivel_salarial_1" placeholder="Nivel salarial" title="Nivel salarial"
                      class="form-control" oninput="this.className = ''" name="nivel_salarial_1"
                      value="{{$value['NIVEL_SALARIAL']}}" readonly>
                  </div>
                  <div class="form-group">
                    <label>Sección sindical<span class="text-danger"></span></label>
                    <input id="seccion_sindical_1" placeholder="Sección sindical" class="form-control"
                      title="Sección sindical" oninput="this.className = ''" name="seccion_sindical_1"
                      value="{{$value['SECCION_SINDICAL']}}" readonly>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Horario laboral<span class="text-danger"></span></label>
                    <input type="time" id="horario_laboral_ent" name="horario_laboral_ent" class="form-control">
                    <input type="time" id="horario_laboral_sal" name="horario_laboral_sal" class="form-control">
                  </div>

                  <h5 style=" color:#777777; text-align: center;"><label>Domicilio particular</label></h5>

                  <div class="form-group">
                    <label>Calle<span class="text-danger"></span></label>
                    <input id="calle" type="text" placeholder="Calle" title="Calle" oninput="this.className = ''"
                      class="form-control" name="calle">
                  </div>
                  <div class="form-group">
                    <label>Número<span class="text-danger"></span></label>
                    <input id="numero_domicilio" placeholder="Número" title="Número" class="form-control"
                      oninput="this.className = ''" name="numero_domicilio">
                  </div>
                  <div class="form-group">
                    <label>Código postal<span class="text-danger"></span></label>
                    <input id="codigo_postal" placeholder="Código postal" title="NCódigo postal" class="form-control"
                      oninput="this.className = ''" name="codigo_postal" maxlength="5">
                  </div>

                  <input id="tokenCodigoPostalId" oninput="this.className = ''" name="tokenCodigoPostalId"
                    value="SistemaDeRpueba4as4x4vdlsad" hidden>

                  <div class="form-group">
                    <label>Colonia <span class="text-danger"></span></label>
                    <select style="font-size: 15px; padding-bottom:5px;" name="colonia" id="colonia" required
                      class="form-control"></select>
                  </div>

                  <div class="form-group">
                    <label>Alcaldía/Municipio<span class="text-danger"></span></label>
                    <input id="alcaldia" type="text" placeholder="Alcaldía" title="Alcaldía" class="form-control"
                      oninput="this.className = ''" name="alcaldia" readonly>
                  </div>
                </div>
              </div>
            </div>
            <p style="color: #f5f5f0;">.</p>
            @endforeach
          </div>
      </div>
      </body>
      <div class="tab-pane fade" id="kt_tab_pane_2_4" role="tabpanel" aria-labelledby="kt_tab_pane_2_4">
        <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
        <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <div class="tab"><br>
          <div class="fondo" style="padding: 5rem;">
            <h1 style="color: #054a41;">Preinscripción a los Centros de Atención y Cuidado Infantil</h1>
            <div class="form-group">
              <label style="color:#777777; font-size: 20px;" for="curp">CURP de la niña o niño:<span
                  class="text-danger"></span></label>
              <input id="curp" type="text" placeholder="CURP" onkeyup="mayus(this);" oninput="this.className = ''"
                class="form-control" name="curp" maxlength="18"
                pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]">
            </div>
            <input type="text" id="nombre_proceso" oninput="this.className = ''" name="nombre_proceso"
              value="inscripcion" readonly hidden></p>
            <button id="valida_curp" type="button" onclick="validaCurp()">Validar CURP</button>
          </div>
        </div>
        <div class="tab"><br>
          <div class="fondo" style="padding: 5rem;">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-sm-6">

                  <label style="color:#00b140;">Datos de la niña o niño</label><br>

                  <div class="form-group">
                    <label style="font-family: Arial, Helvetica; color:#777777;">Nombre(s)<span
                        class="text-danger"></span></label>
                    <input type="text" id="nombre_menor_1" placeholder="Nombre(s) del menor" class="form-control"
                      title="Nombre(s) del menor" oninput="this.className = ''" name="nombre_menor_1" readonly>
                  </div>
                  <div class="form-group">
                    <label style="font-family: Arial, Helvetica; color:#777777;">Apellido paterno<span
                        class="text-danger"></span></label>
                    <input type="text" id="apellido_paterno_1" placeholder="Apellido paterno" class="form-control"
                      title="Apellido paterno" oninput="this.className = ''" name="apellido_paterno_1" readonly>
                  </div>
                  <div class="form-group">
                    <label style="font-family: Arial, Helvetica; color:#777777;">Apellido materno<span
                        class="text-danger"></span></label>
                    <input type="text" id="apellido_materno_1" placeholder="Apellido materno" title="Apellido materno"
                      class="form-control" oninput="this.className = ''" name="apellido_materno_1" readonly>
                  </div>
                  <div class="form-group">
                    <label style="font-family: Arial, Helvetica; color:#777777;">CURP<span
                        class="text-danger"></span></label>
                    <input type="text" id="curp_num" placeholder="CURP" title="CURP" oninput="this.className = ''"
                      class="form-control" name="curp_num"
                      pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]"
                      onkeyup="mayus(this);" readonly>
                  </div>
                  <div class="form-group">
                    <label style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;" for="birthday">Fecha
                      de Nacimiento de la niña o niño:<span class="text-danger"></span></label>
                    <input type="text" id="birthday" placeholder="Fecha de Nacimiento del menor" class="form-control"
                      title="Fecha de Nacimiento del menor" oninput="this.className = ''" name="birthday" readonly>
                  </div>
                  <div class="form-group">
                    <label style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Edad de la niña o niño
                      al ingresar al plantel (Año y/o meses)<span class="text-danger"></span></label>
                    <input id="Edad_menor" type="text" placeholder="Edad del menor al ingresar al plantel (Año o Meses)"
                      class="form-control" title="Edad del menor al ingresar al plantel (Año o Meses)"
                      oninput="this.className = ''" name="Edad_menor" onkeyup="mayus(this);" readonly>
                  </div>

                  <div class="form-group">
                    <label style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;" for="cars">Centro de
                      Atención y Cuidado Infantil deseado: <span class="text-danger"></span></label>
                    <select style="font-size: 15px; padding-bottom: 5px;" name="caci" id="caci" class="form-control">
                      <option value="Luz Maria Gomez Pezuela">Luz María Gómez Pezuela</option>
                      <option value="Mtra Eva Moreno Sanchez">Mtra. Eva Moreno Sánchez</option>
                      <option value="Bertha Von Glumer Leyva">Bertha von Glumer Leyva</option>
                      <option value="Carolina Agazzi">Carolina Agazzi</option>
                      <option value="Carmen S">Carmen Serdán</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Acta de nacimiento
                      original por ambos lados de la niña o niño.</label>
                    <div></div>
                    <div class="custom-file">
                      <input type="file" id="filename_act" name="filename_act" class="custom-file-input"
                        title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">
                      <label class="custom-file-label" for="filename_act">Examinar..</label>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6"><br>
                  <div class="form-group">
                    <label style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Certificado de
                      nacimiento
                      de la
                      niña o niño.</label>
                    <div></div>
                    <div class="custom-file">
                      <input type="file" id="filename_nac" name="filename_nac" class="custom-file-input"
                        title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">
                      <label class="custom-file-label" for="filename_nac">Examinar..</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Cartilla de vacunación
                      al
                      corriente de la niña o niño.</label>
                    <div></div>
                    <div class="custom-file">
                      <input type="file" id="filename_vacu" name="filename_vacu" class="custom-file-input"
                        title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">
                      <label class="custom-file-label" for="filename_vacu">Examinar..</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">CURP de la niña o
                      niño.</label>
                    <div></div>
                    <div class="custom-file">
                      <input type="file" id="filename_com" name="filename_com" class="custom-file-input"
                        title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">
                      <label class="custom-file-label" for="filename_com">Examinar..</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-family: Arial, Helvetica; color:#777777;">Si la niña o niño presenta algún tipo
                      de
                      discapacidad o enfermedad crónica, adjuntar documentación clínica y diagnóstico de la condición y
                      del
                      tratamiento que recibe.</label>
                    <div></div>
                    <div class="custom-file">
                      <input type="file" id="filename_disc" name="filename_disc" class="custom-file-input"
                        title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">
                      <label class="custom-file-label" for="filename_disc">Examinar..</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label style="font-family: Arial, Helvetica; color:#777777;">En caso de que la madre o el padre del
                      o la
                      menor, no sean los solicitantes del servicio, la persona tutora trabajadora del gobierno, adjuntar
                      el documento legal que dictamine la patria potestad y/o guarda y custodia.</label>
                    <div></div>
                    <div class="custom-file">
                      <input type="file" id="filename_trab" name="filename_trab" class="custom-file-input"
                        title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">
                      <label class="custom-file-label" for="filename_trab">Examinar..</label>
                    </div>
                  </div>
                  <h4 style="color:#545151;"><i style="color: #00b140; font-size:30px;" class="fa fa-newspaper-o"></i>
                    <b>
                      Nota:</b> Los archivos soportados son .pdf, .docx. Asegúrese que sus archivos cumplan el requisito
                  </h4>
                </div>
              </div>
            </div>
            <p style="color: #f5f5f0;">.</p>
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
      <div class="tab-pane fade" id="kt_tab_pane_3_4" role="tabpanel" aria-labelledby="kt_tab_pane_3_4">
        <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
        <div class="fondo" style="padding: 5rem;">
          <div class="row">
            <div class="col-sm-6">
              <label style="color:#00b140; ">Datos de contacto</label>
              <br>
              <div class="form-group">
                <label>E-mail<span class="text-danger"></span></label>
                <input id="email_correo" placeholder="E-mail" title="E-mail" oninput="this.className = ''"
                  class="form-control" name="email_correo" value="{{$value['CH_mail']}}" readonly>
              </div>
              <div class="form-group">
                <label>Teléfono a 10 dígitos<span class="text-danger"></span></label>
                <input id="telefono_celular" type="tel" placeholder="Teléfono" title="Teléfono" class="form-control"
                  oninput="this.className = ''" name="telefono_celular" maxlength="10" pattern="[0-9]{10}">
              </div>
              <div class="form-group">
                <label>Celular a 10 dígitos<span class="text-danger"></span></label>
                <input id="telefono_3" type="tel" placeholder="Celular" title="Celular" class="form-control"
                  oninput="this.className = ''" name="telefono_3" maxlength="10" pattern="[0-9]{10}">
              </div>
              <h4><input id="terminos" style="width: 10%;" type="checkbox" name="terminos" required><a
                  href="img/PDF/Terminos_cond_caci_agosto20.pdf" target="_blank">Revisar y aceptar términos y
                  condiciones</a></h4>
              <br>
            </div>
          </div>
          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="button" id="enviar" onclick="preinscripcion()">Enviar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{URL::asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{URL::asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
{{--  <script src="{{URL::asset('assets/js/scripts.bundle.js')}}"></script> --}}
<script>
  Swal.fire({
    title: '<strong>Atención</u></strong>',
    icon: 'warning',
    html:
      '<b>Estos  datos son privados solo la madre, padre o persona tutora  es  responsable de la información capturada.</b> ' +
      '<a target="_blank" href="{{asset('img/PDF/aviso_simplificado_sitio_caci.pdf')}}"><h5 style="color: #00b140;">Ver aviso de privacidad</h5></a> ',
    showCloseButton: true
  })
</script>
<script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab
</script>
@endsection