@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<style>
    html {
        font-size: 80%;

    }

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
</style>

<h1 style="text-align: center; color: #00b140;">
    Requisitos
</h1>

<div class="content">
    <div class="accordion">
        <div class="accordion__item open-accordion">
            <div class="accordion__header">Preinscripción</div>
            <div class="accordion__body">
                <div class="alert">
                    <!-- <a href="#" class="close_btn"><i class="fa fa-2x fa-times"></i></a>-->
                    <div class="modal-content">
                        <div class="modal-body">
                            <div style="background-color:#054a41;" class="modal-body">
                                <h1 style="color:#FFF; text-align:center;">Proceso de Preinscripción</h1><br>

                                <h4 style="color:#FFF; text-align:left;">* Madres, padres o quien ejerza la patria
                                    potestad y/o guarda y
                                    custodia del o la menor, que sean trabajadoras(es) del Gobierno de la Ciudad de
                                    México, con base,
                                    sindicalizadas(os) y que coticen al SUTGCDMX.</h4><br>

                                <h4 style="color: #FFF; text-align:left;">* Personal de estructura, nómina 8, base sin
                                    dígito sindical y
                                    trabajadores del ámbito central y de las alcaldías del Gobierno de la Ciudad de
                                    México, podrán gozar
                                    de los
                                    beneficios que ofrece el CACI-SAF, considerando sólo hasta un 30% de su capacidad
                                    instalada, como se
                                    establece
                                    en los Lineamientos Generales para la Operación de los Centros de Atención y Cuidado
                                    Infantil de la
                                    Secretaría
                                    de Finanzas de la Ciudad de México y de sus Alcadías.</h4><br>

                                <h4 style="color: #FFF; text-align:left;">* El personal de estructura aportará una cuota
                                    quincenal de
                                    recuperación que será retenida vía nómina.</h4>
                            </div>

                            <div class="col-lg-12" style="margin-top: 2%;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2 style="color: #054a41;" id="title_list_ip">REQUISITOS:</h2>
                                        </i>1. Enviar la siguiente documentación en versión digital (PDF):</li>
                                        <h5>a) Acta de nacimiento original, por ambos lados, de la niña o el niño.</h5>
                                        <h5>b) Certificado de nacimiento, por ambos lados, de la niña o el niño.</h5>
                                        <h5>c) Cartilla de vacunación, solo las páginas de datos identificativos,
                                            esquema de vacunación y
                                            estado nutricional.</h5>
                                        <h5>d) Clave Única de Registro de Población (CURP), de la niña o el niño.</h5>
                                        <h5>e) Último comprobante del trabajador o trabajadora.</h5>
                                        <h5>f) Si el niño o la niña presenta algún tipo de discapacidad y/o enfermedad
                                            crónica,
                                            anexar documentación médica con diagnóstico y tratamiento. .</h5>
                                        <h5>g) En caso de que el trabajador o trabajadora no sea el padre o madre
                                            biológico, deberá adjuntar
                                            el documento legal que dictamine la patria potestad y/o guarda y custodia de
                                            la niña o el niño.</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        </i>2. Presentar en original para cotejo la siguiente documentación:</li>
                                        <h5> a) Acta de nacimiento de la niña o el niño.</h5>
                                        <h5>b) Cartilla de vacunación completa de la niña o el niño.</h5>
                                        <h5>c) Documentación médica con diagnóstico y tratamiento.</h5>
                                        <h5> d) Documento legal que dictamine la patria potestad o guarda y custodia de
                                            la niña o el niño.</h5>
                                        </i>3. Entregar en original la siguiente documentación:</li>
                                        <h5>a) Análisis clínicos indicados en la confirmación de inscripción.</h5>
                                        <h5>b) Seis fotografías tamaño infantil, recientes e iguales, de la niña o el
                                            niño.</h5>
                                        <h5>c) Cuatro fotografías tamaño infantil, recientes, del trabajador o
                                            trabajadora.</h5>
                                        <h5>d) Cuatro fotografías tamaño infantil, recientes e iguales, de dos personas
                                            mayores de edad
                                            autorizadas por el o la solicitante del servicio para entregar y/o recoger a
                                            la niña o niño.</h5>
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
                            <div style="background-color: #054a41;" class="col-sm-12">
                                <h1 style="color:#FFF; text-align: center; ">Calendario de reinscripción
                                    ciclo escolar 2021-2022</h1>
                                <div class="col-sm-12">
                                    <h3 style="color:#FFF; text-align: center;" id="letra_banner"><u>Del 19 al 30 de julio</u></h4>
                                        <h3 style="color:#FFF; text-align: center;" id="letra_banner">Periodo
                                            extraordinario</h4>
                                            <h3 style="color:#FFF; text-align: center;" id="letra_banner"><u>Del 02 al 06 de agosto</u></h4><br>
                                </div>
                            </div>

                            <div class="col-lg-12" style="margin-top: 2%;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2 style="color: #054a41;" id="title_list_ip">Enviar la siguiente documentación actualizada en versión digital (PDF):</h2>
                                        <h5>a) Cartilla de vacunación, solo las páginas de datos identificativos, esquema de vacunación y estado nutricional. </h5>
                                        <h5>b) Si el menor presenta algún tipo de discapacidad y/o enfermedad crónica, adjuntar documentación médica con diagnóstico y tratamiento.</h5>
                                        <h5>c) Último comprobante de pago del trabajador o trabajadora.</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <h2 style="color: #054a41;" id="title_list_ip">Cuando se reanuden las actividades de manera presencial deberá presentar en original: </h2>
                                        <h5>a) Análisis clínicos de la niña o el niño, indicados en el correo de confirmación de reinscripción que se le enviará.</h5>
                                        <h5>b) Seis fotografías tamaño infantil, recientes e iguales, de la niña o el niño.</h5>
                                        <h5>c) Cuatro fotografías tamaño infantil, recientes, del trabajador o trabajadora.</h5>
                                        <h5>d) Cuatro fotografías tamaño infantil, recientes e iguales, de dos personas mayores de edad
                                             autorizadas por el o la solicitante del servicio para entregar y/o recoger a la niña o niño.</h5>
                                        <h5>e) Cartilla de vacunación actualizada de la niña o niño, solo para cotejar.</h5>
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