@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<style>
    .content {
        margin: 20px auto;
        max-width: 1000px;
    }

    .accordion__item {
        border-radius: 15px;
    }

    .accordion__item:not(:last-child) {
        margin-bottom: 5px;
        background-color: #EFEFEF;
    }

    .accordion__header {
        padding: 15px;
        padding-right: 10px;
        font-weight: 600;
        font-size: 1.20rem;
        color: #646464;
        position: relative;
        cursor: pointer;
    }

    .accordion__body {
        padding: 0 40px 20px 20px;
        font-weight: 3000;
        font-size: 1.0rem;
        color: #000;
        line-height: 1.5;
        display: none;
    }

    h5 {
        margin: 0.5rem;
        padding: 0;
        font-family: 'source sans pro', sans-serif;
    }

    h1,
    h4,
    i {
        font-family: 'source sans pro', sans-serif;;
    }

    .btn-registro:hover {
        text-decoration: underline;
    }

    .title-preinscripcion {
        color: #FFF;
        text-align: center;
    }
    .title-reinscripcion {
        color: #FFF;
        text-align: center;
    }
    .contenedor-button-registro{
        margin-top: 2rem; margin-left:15rem;
    }
    .format-button-regis{
        background-color: #235B4E;
        padding:1rem 5rem;
    }
    @media screen and (max-width: 500px) {
        .title-preinscripcion {
            color: #FFF;
            text-align: left;
            font-size: 1.6rem;
        }
        .title-reinscripcion {
            color: #FFF;
            text-align: center;
            font-size: 1.6rem;
        }
        .contenedor-button-registro{
            margin-top: 2rem; margin-left:0.8rem;
        }
        .format-button-regis{
            background-color: #235B4E;
            padding:1rem 2.5rem;
        }
    }
</style>

<h1 style="text-align: center; color: #235B4E;">
    Requisitos
</h1>

<div class="content">
    <div class="accordion">
        <div class="accordion__item open-accordion">
            <div class="accordion__header">Preinscripción</div>
            <div class="accordion__body" style="margin-bottom: 10rem;">
                <div class="alert">
                    <!-- <a href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>-->
                    <div class="modal-content">
                        <div class="modal-body">
                            <div style="background-color:#235b52;" class="modal-body">
                                <h1 class="title-preinscripcion">Proceso de Preinscripción</h1><br>

                                <h4 style="color:#FFF; text-align:left;">Madres, padres o quien ejerza la patria
                                    potestad y/o guarda y custodia de la niña o niño y que sean trabajadoras(es) del
                                    Gobierno de la Ciudad de México, con base, sindicalizadas(os), que coticen al
                                    SUTGCDMX.</h4><br>

                                <h4 style="color: #FFF; text-align:left;">Personal de estructura, nómina 8, base sin
                                    dígito sindical y trabajadores del ámbito central y de las alcaldías del Gobierno de
                                    la Ciudad de México.</h4>
                            </div>

                            <div class="col-lg-12" style="margin-top: 2%;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2 style="color: #235b52;" id="title_list_ip">REQUISITOS:</h2>
                                        <h5 style="color: #235b52;"><strong>1. Enviar la siguiente documentación en formato PDF de la niña o el niño:</strong></h5>
                                        <h5>a) Acta de nacimiento original por ambos lados.</h5>
                                        <h5>b) Certificado de nacimiento por ambos lados.</h5>
                                        <h5>c) Cartilla de vacunación, sólo las páginas de datos identificativos,
                                            esquema de vacunación y estado nutricional.</h5>
                                        <h5>d) Clave Única de Registro de Población (CURP).</h5>
                                        <h5>e) Si la niña o el niño presenta algún tipo de discapacidad y/o enfermedad
                                            crónica, anexar documentación médica con diagnóstico y tratamiento.</h5>
                                        <h5>f) En caso de que el trabajador o trabajadora no sea el padre o madre
                                            biológico, deberá adjuntar el documento legal que dictamine la patria
                                            potestad y/o guarda y custodia de la o el menor.</h5>
                                        <h5 style="margin-top: 1.5rem;">Una vez enviada la documentación y concluido su
                                            registro en el Sistema Digital, recibirá un correo notificando la
                                            confirmación de su trámite.</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 style="color: #235b52;"><strong>2. Presentar en el CACI, cuando se le solicite a través de correo electrónico, la documentación original de la niña o niño, para cotejo:</strong></h5>
                                        <h5>a) Acta de nacimiento.</h5>
                                        <h5>b) Cartilla de vacunación completa.</h5>
                                        <h5>c) Documentación médica con diagnóstico y tratamiento.</h5>
                                        <h5>d) Documento legal que dictamine la patria potestad o guarda y custodia del
                                            niño o niña.</h5>
                                        <h5 style="color: #235b52;"><strong>3. Entregar en el CACI,cuando se le solicite a través de correo electrónico, la siguiente documentación en original:</strong></h5>
                                        <h5>a) Análisis clínicos indicados en la confirmación de inscripción.</h5>
                                        <h5>b) Cuatro fotografías tamaño infantil, de la niña o niño, recientes e
                                            iguales.</h5>
                                        <h5>c) Dos fotografías tamaño infantil, de la persona tutora, recientes e
                                            iguales.</h5>
                                        <h5>d) Dos fotografías tamaño infantil, recientes e iguales, de dos personas
                                            mayores de edad, autorizadas por el o la solicitante del servicio.</h5>
                                        <h5>e) Solicitud de preinscripción</h5>
                                        <h5>f) Carta de autorización y compromiso</h5>
                                        <h5>g) Credencial</h5>
                                        <h5>h) Gafete</h5>
                                        <h5>Nota: Los nuevos ingresos pueden registrarse en cualquier momento del ciclo
                                            escolar.</h5>
                                        <h5><a href="../public/doc/Documentacion_Complementaria_para_Registro.zip" download><strong>Descargue, llene, firme los siguientes formatos. Envíelos, en versión PDF, al correo electrónico caciadministracion@finanzas.cdmx.gob.mx</strong></a></h5>
                                    </div>
                                </div>
                                <div class="row contenedor-button-registro">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <a class="btn btn-lg format-button-regis" href="{{url('preinscripcion_validar_rfc')}}"><span
                                                class="btn-registro"
                                                style="font-size: 1.2rem; color:#fff; font-family: 'source sans pro', sans-serif;">Registro</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion__item">
            <div class="accordion__header">Reinscripción</div>
            <div class="accordion__body">
                <div class="alert">
                    <!--<a  href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>-->
                    <div class="modal-content">
                        <div class="modal-body">
                            <div style="background-color: #054a41; padding: 1.5rem 0.5rem;" class="col-sm-12">
                                <h1 class="title-reinscripcion">Calendario de reinscripción
                                    ciclo escolar 2022-2023</h1>
                                <div class="col-sm-12">
                                    <h3 class="title-reinscripcion" id="letra_banner"><u>Del 4 al 8 de julio
                                            2022</u></h4>
                                </div>
                            </div>

                            <div class="col-lg-12" style="margin-top: 2%;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 style="color: #235b52;"><strong>1. Enviar la siguiente documentación actualizada en
                                            formato PDF:</strong>
                                        <h5>a) Cartilla de vacunación, sólo las páginas de datos identificativos,
                                            esquema de vacunación y estado nutricional.</h5>
                                        <h5>b) Si la o el menor presenta algún tipo de discapacidad y/o enfermedad
                                            crónica, adjuntar documentación médica con diagnóstico y tratamiento.</h5>
                                        <h5 style="1.5rem;">Una vez enviada la documentación y concluido su registro en
                                            el Sistema Digital, recibirá un correo notificando la confirmación de su
                                            trámite.</h5>
                                        <h5 style="color: #235b52;"><strong>2. Presentar en el CACI, cuando se le solicite a través de correo
                                            electrónico, la documentación original de la niña o niño, para cotejo:</strong>>
                                        <h5>a) Cartilla de vacunación completa.</h5>
                                        <h5>b) Documentación médica con diagnóstico y tratamiento.</h5>
                                        <h5>c) Documento legal que dictamine la patria potestad o guarda y custodia del
                                            niño o niña.</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 style="color: #235b52;"><strong>3. Entregar en el CACI, cuando se le solicite a través de correo electrónico,
                                            la siguiente documentación en original:</strong>
                                        <h5>a) Análisis clínicos indicados en la confirmación de inscripción.</h5>
                                        <h5>b) Cuatro fotografías tamaño infantil, de la niña o niño, recientes e
                                            iguales.</h5>
                                        <h5>c) Dos fotografías tamaño infantil, de la persona tutora, recientes e
                                            iguales.</h5>
                                        <h5>d) Dos fotografías tamaño infantil, recientes e iguales, de dos personas
                                            mayores de edad, autorizadas por el o la solicitante del servicio.</h5>
                                        <h5>f) Solicitud de preinscripción</h5>
                                        <h5>g) Carta de autorización y compromiso</h5>
                                        <h5>h) Credencial</h5>
                                        <h5>i) Gafete</h5>
                                         <h5><a href="../public/doc/Documentacion_Complementaria_para_Registro.zip" download>Descargue, llene, firme los siguientes formatos. Envíelos, en versión PDF, al correo electrónico de su CACI.</a></h5>
                                    </div>
                                </div>
                                <div class="row contenedor-button-registro">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <a class="btn btn-lg format-button-regis" href="{{url('reinscripcion')}}"><span
                                                class="btn-registro"
                                                style="font-size: 1.2rem; color:#fff; font-family: 'source sans pro', sans-serif;">Registro</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion__item">
        </div>
    </div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
    $('.accordion__header').click(function() {
        
        $(".accordion__body").not($(this).next()).slideUp(400);
        $(this).next().slideToggle(400);
        
        $(".accordion__item").not($(this).closest(".accordion__item")).removeClass("open-accordion");
        $(this).closest(".accordion__item").toggleClass("open-accordion");
    });
});
</script>

@endsection