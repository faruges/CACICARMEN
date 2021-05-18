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

        <div class="alert">
          <!-- <a href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>-->
          <div class="modal-content">
            <div class="modal-body">
              <div style="background-color:#054a41;" class="modal-body">
                <h1 style="color:#FFF; text-align:center;">Proceso de Preinscripción</h1><br>

                <h4 style="color:#FFF; text-align:left;">* Madres, padres o quien ejerza la patria potestad y/o guarda y
                  custodia del o la menor, que sean trabajadoras(es) del Gobierno de la Ciudad de México, con base,
                  sindicalizadas(os) y que coticen al SUTGCDMX.</h4><br>

                <h4 style="color: #FFF; text-align:left;">* Personal de estructura, nómina 8, base sin dígito sindical y
                  trabajadores del ámbito central y de las alcaldías del Gobierno de la Ciudad de México, podrán gozar
                  de los
                  beneficios que ofrece el CACI-SAF, considerando sólo hasta un 30% de su capacidad instalada, como se
                  establece
                  en los Lineamientos Generales para la Operación de los Centros de Atención y Cuidado Infantil de la
                  Secretaría
                  de Finanzas de la Ciudad de México y de sus Alcadías.</h4><br>

                <h4 style="color: #FFF; text-align:left;">* El personal de estructura aportará una cuota quincenal de
                  recuperación que será retenida vía nómina.</h4>
              </div>

              <div class="col-lg-12" style="margin-top: 2%;">
                <div class="row">
                  <div class="col-sm-6">
                    <h2 style="color: #054a41;" id="title_list_ip">REQUISITOS:</h2>
                    </i>1. Cargar la siguiente documentación en versión digital (PDF):</li>
                    <h5>a) Acta de nacimiento original por ambos lados, del o la menor.</h5>
                    <h5>b) Certicado de nacimiento del o la menor.</h5>
                    <h5>c) Cartilla de vacunación al corriente.</h5>
                    <h5>d) Clave Única de Registro de Población, (CURP) del o la menor.</h5>
                    <h5>e) Si el menor presenta algún tipo de discapacidad o enfermedad crónica, adjuntar documentación
                      clínica
                      y diagnóstico de la condición y del tratamiento que recibe.</h5>
                    <h5>f) En caso de que la madre o el padre del o la menor, no sean los solicitantes del servicio, la
                      persona
                      tutora trabajadora del gobierno, adjuntar el documento legal que dictamine la patria potestad y/o
                      guarda y
                      custodia.</h5>
                  </div>
                  <div class="col-sm-6">
                    </i>2. Entregar en original la siguiente documentación:</li>
                    <h5>a) Acta de nacimiento del o la menor.</h5>
                    <h5>b) Cartilla de vacunación del o la menor.</h5>
                    <h5>c) Análisis clínicos indicados en la confirmación de inscripción.</h5>
                    <h5>d) Documentación clínica y diagnóstico de la condición y del tratamiento que recibe, en caso de
                      presentar algún tipo de discapacidad o enfermedad crónica.</h5>
                    <h5>e) Documento legal que dictamine la patria potestad o guarda y custodia.</h5>
                    <h5>f) Seis fotografías tamaño infantil recientes e iguales, del o la menor.</h5>
                    <h5>g) Cuatro fotografías tamaño infantil, recientes e iguales del o la trabajador(a).</h5>
                    <h5>h) Cuatro fotografías tamaño infantil, recientes e iguales, de dos personas mayores de edad
                      autorizadas
                      por el (la) solicitante del servicio para recoger a la o el menor.</h5>
                    </i>3. Llenar el siguiente formulario.</li>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer"></div>
          </div>
        </div>

        <body>
          <div class="fondo">
            <form id="regForm" method="POST" enctype="multipart/form-data">
              @csrf
              <h1 style="color: #054a41;">Preinscripción a los Centros de Atención y Cuidado Infantil</h1>
              {{--  <div class="tab"><br>  --}}
              @foreach ($data as $item=>$value)
              <div class="col-lg-12">
                <label style="color:#00b140; ">Datos de la persona trabajadora</label>
                <div class="row">
                  <div class="col-sm-6">

                    <p>Nombre(s)<input id="nombre_tutor_madres" type="text" placeholder="Nombre del Padre/Madre o Tutor"
                        title="Nombre(s) del Padre/Madre o Tutor" oninput="this.className = ''"
                        name="nombre_tutor_madres" value="{{$value['CH_nombres']}}" readonly></p>

                    <p>Apellido paterno<input id="apellido_paterno_tutor" type="text" placeholder="Apellido paterno"
                        title="Apellido paterno" oninput="this.className = ''" name="apellido_paterno_tutor"
                        value="{{$value['CH_paterno']}}" readonly></p>
                    <p>Apellido materno<input id="apellido_materno_tutor" type="text" placeholder="Apellido materno"
                        title="Apellido materno" oninput="this.className = ''" name="apellido_materno_tutor"
                        value="{{$value['CH_materno']}}" readonly></p>

                    <p>Tipo de nómina<input id="tipo_nomina_1" placeholder="Tipo de nómina" title="Tipo de nómina"
                        oninput="this.className = ''" name="tipo_nomina_1" value="{{$value['TipoNomina']}}" readonly>
                    </p>

                    <p>Número de empleado<input id="num_empleado_1" placeholder="Número de empleado"
                        title="Número de empleado" oninput="this.className = ''" name="num_empleado_1"
                        value="{{$value['NumEmpleado']}}" readonly></p>
                    <p>Número de plaza<input id="num_plaza_1" placeholder="Número de plaza" title="Número de plaza"
                        oninput="this.className = ''" name="num_plaza_1" value="{{$value['NUM_PLAZA']}}" readonly></p>

                    <p>Áreas de adscripción<input id="clave_dependencia_1" type="text"
                        placeholder="Clave de la dependencia" title="Clave de la dependencia"
                        oninput="this.className = ''" name="clave_dependencia_1" value="{{$value['Clave_Dependencia']}}"
                        readonly></p>

                    <p>Nivel salarial<input id="nivel_salarial_1" placeholder="Nivel salarial" title="Nivel salarial"
                        oninput="this.className = ''" name="nivel_salarial_1" value="{{$value['NIVEL_SALARIAL']}}"
                        readonly>
                    </p>

                    <p>Sección sindical<input id="seccion_sindical_1" placeholder="Sección sindical"
                        title="Sección sindical" oninput="this.className = ''" name="seccion_sindical_1"
                        value="{{$value['SECCION_SINDICAL']}}" readonly></p>
                  </div>

                  <div class="col-sm-6">
                    <p>Horario laboral</p>
                    <input type="time" id="horario_laboral_ent" name="horario_laboral_ent">
                    <input type="time" id="horario_laboral_sal" name="horario_laboral_sal">

                    <h5 style=" color:#777777; text-align: center;"><label>Domicilio particular</label></h5>
                    <p>Calle<input id="calle" type="text" placeholder="Calle" title="Calle"
                        oninput="this.className = ''" name="calle"></p>
                    <p>Número<input id="numero_domicilio" placeholder="Número" title="Número"
                        oninput="this.className = ''" name="numero_domicilio"></p>
                    <p>Código postal<input id="codigo_postal" placeholder="Código postal" title="NCódigo postal"
                        oninput="this.className = ''" name="codigo_postal" maxlength="5"></p>

                    <input id="tokenCodigoPostalId" oninput="this.className = ''" name="tokenCodigoPostalId"
                      value="SistemaDeRpueba4as4x4vdlsad" hidden>
                    <p style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;"> Colonia <select
                        style="font-size: 15px;" name="colonia" id="colonia" required></select>
                      <!---<p style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Colonia<input id="colonia" type="text" placeholder="Colonia" title="Colonia" oninput="this.className = ''" name="colonia" readonly></p>-->
                      <p>Alcaldía/Municipio<input id="alcaldia" type="text" placeholder="Alcaldía" title="Alcaldía"
                          oninput="this.className = ''" name="alcaldia" readonly></p>
                      <!--<h4><input style="width: 10%;" type="checkbox" name="cb-terminosservicio" required> Acepto términos y condiciones</h4><br>-->
                  </div>
                </div>
              </div>
              <p style="color: #f5f5f0;">.</p>
              @endforeach
              {{--  </div>  --}}
            </form>
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
            <label style="color:#777777;" for="curp">CURP de la niña o niño:</label>
            <p><input id="curp" type="text" placeholder="CURP" onkeyup="mayus(this);" oninput="this.className = ''"
                name="curp" maxlength="18"
                pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]">
            </p>
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

                  <p>Nombre(s)<input type="text" id="nombre_menor_1" placeholder="Nombre(s) del menor"
                      title="Nombre(s) del menor" oninput="this.className = ''" name="nombre_menor_1" readonly></p>
                  <p>Apellido paterno<input type="text" id="apellido_paterno_1" placeholder="Apellido paterno"
                      title="Apellido paterno" oninput="this.className = ''" name="apellido_paterno_1" readonly></p>
                  <p>Apellido materno
                    <input type="text" id="apellido_materno_1" placeholder="Apellido materno" title="Apellido materno"
                      oninput="this.className = ''" name="apellido_materno_1" readonly></p>
                  <p>CURP<input type="text" id="curp_num" placeholder="CURP" title="CURP" oninput="this.className = ''"
                      name="curp_num"
                      pattern="[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-9,A-Z][0-9]"
                      onkeyup="mayus(this);" readonly></p>

                  <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;" for="birthday">Fecha de
                    Nacimiento de la niña o niño:</h5>
                  <input type="text" id="birthday" placeholder="Fecha de Nacimiento del menor"
                    title="Fecha de Nacimiento del menor" oninput="this.className = ''" name="birthday" readonly>

                  <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Edad de la niña o niño al
                    ingresar al plantel (Año y/o meses)</h5>
                  <input id="Edad_menor" type="text" placeholder="Edad del menor al ingresar al plantel (Año o Meses)"
                    title="Edad del menor al ingresar al plantel (Año o Meses)" oninput="this.className = ''"
                    name="Edad_menor" onkeyup="mayus(this);" readonly>

                  <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;" for="cars">Centro de
                    Atención y
                    Cuidado Infantil deseado:
                    <select style="font-size: 15px;" name="caci" id="caci">
                      <option value="Luz Maria Gomez Pezuela">Luz María Gómez Pezuela</option>
                      <option value="Mtra Eva Moreno Sanchez">Mtra. Eva Moreno Sánchez</option>
                      <option value="Bertha Von Glumer Leyva">Bertha von Glumer Leyva</option>
                      <option value="Carolina Agazzi">Carolina Agazzi</option>
                      <option value="Carmen S">Carmen Serdán</option>
                    </select></h5>

                  <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Acta de nacimiento original
                    por
                    ambos lados de la niña o niño.</h5>
                  <input type="file" id="filename_act" name="filename_act"
                    title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">
                </div>

                <div class="col-sm-6"><br>
                  <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Certificado de nacimiento
                    de la
                    niña o niño.</h5>
                  <input type="file" id="filename_nac" name="filename_nac"
                    title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">
                  <h5 style="font-size: 15px; font-family: Arial, Helvetica; color:#777777;">Cartilla de vacunación al
                    corriente de la niña o niño.</h5>
                  <input type="file" id="filename_vacu" name="filename_vacu"
                    title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">
                  <h5 style="font-family: Arial, Helvetica; color:#777777;">CURP de la niña o niño.</h5>
                  <input type="file" id="filename_com" name="filename_com"
                    title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">

                  <h5 style="font-family: Arial, Helvetica; color:#777777;">Si la niña o niño presenta algún tipo de
                    discapacidad o enfermedad crónica, adjuntar documentación clínica y diagnóstico de la condición y
                    del
                    tratamiento que recibe.</h5>
                  <input type="file" id="filename_disc" name="filename_disc"
                    title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">

                  <h5 style="font-family: Arial, Helvetica; color:#777777;">En caso de que la madre o el padre del o la
                    menor, no sean los solicitantes del servicio, la persona tutora trabajadora del gobierno, adjuntar
                    el
                    documento legal que dictamine la patria potestad y/o guarda y custodia.</h5>
                  <input type="file" id="filename_trab" name="filename_trab"
                    title="El tamaño del archivo no debe exceder 2 Mb" accept="application/msword, application/pdf">

                  <br>
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
              <p>E-mail<input id="email_correo" placeholder="E-mail" title="E-mail" oninput="this.className = ''"
                  name="email_correo" value="{{$value['CH_mail']}}" readonly></p>
              <p>Teléfono a 10 dígitos<input id="telefono_celular" type="tel" placeholder="Teléfono" title="Teléfono"
                  oninput="this.className = ''" name="telefono_celular" maxlength="10" pattern="[0-9]{10}"></p>
              <p>Celular a 10 dígitos<input id="telefono_3" type="tel" placeholder="Celular" title="Celular"
                  oninput="this.className = ''" name="telefono_3" maxlength="10" pattern="[0-9]{10}"></p>
              <h4><input id="terminos" style="width: 10%;" type="checkbox" name="terminos" required><a
                  href="img/PDF/Terminos_cond_caci_agosto20.pdf" target="_blank">Revisar y aceptar términos y
                  condiciones</a></h4>
              <br><br>
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
    icon: 'success',
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