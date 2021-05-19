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
                                        </i>1. Cargar la siguiente documentación en versión digital (PDF):</li>
                                        <h5>a) Acta de nacimiento original por ambos lados, del o la menor.</h5>
                                        <h5>b) Certicado de nacimiento del o la menor.</h5>
                                        <h5>c) Cartilla de vacunación al corriente.</h5>
                                        <h5>d) Clave Única de Registro de Población, (CURP) del o la menor.</h5>
                                        <h5>e) Si el menor presenta algún tipo de discapacidad o enfermedad crónica,
                                            adjuntar documentación
                                            clínica
                                            y diagnóstico de la condición y del tratamiento que recibe.</h5>
                                        <h5>f) En caso de que la madre o el padre del o la menor, no sean los
                                            solicitantes del servicio, la
                                            persona
                                            tutora trabajadora del gobierno, adjuntar el documento legal que dictamine
                                            la patria potestad y/o
                                            guarda y
                                            custodia.</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        </i>2. Entregar en original la siguiente documentación:</li>
                                        <h5>a) Acta de nacimiento del o la menor.</h5>
                                        <h5>b) Cartilla de vacunación del o la menor.</h5>
                                        <h5>c) Análisis clínicos indicados en la confirmación de inscripción.</h5>
                                        <h5>d) Documentación clínica y diagnóstico de la condición y del tratamiento que
                                            recibe, en caso de
                                            presentar algún tipo de discapacidad o enfermedad crónica.</h5>
                                        <h5>e) Documento legal que dictamine la patria potestad o guarda y custodia.
                                        </h5>
                                        <h5>f) Seis fotografías tamaño infantil recientes e iguales, del o la menor.
                                        </h5>
                                        <h5>g) Cuatro fotografías tamaño infantil, recientes e iguales del o la
                                            trabajador(a).</h5>
                                        <h5>h) Cuatro fotografías tamaño infantil, recientes e iguales, de dos personas
                                            mayores de edad
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
                                <h1 style="color:#FFF; text-align: center; ">Calendario de reinscripción</h1>
                                <div class="col-sm-12">
                                    <h3 style="color:#FFF; text-align: center;" id="letra_banner">Primera estapa de
                                        reinscripción</h4>
                                        <h3 style="color:#FFF; text-align: center;" id="letra_banner"><u>Del 20 agosto
                                                al 4 de septiembre</u></h4>
                                            <h3 style="color:#FFF; text-align: center;" id="letra_banner">Periodo
                                                extraordinario</h4>
                                                <h3 style="color:#FFF; text-align: center;" id="letra_banner"><u>Del 7
                                                        al 11 de septiembre</u></h4><br>
                                </div>
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
                                        <h5>e) Si el menor presenta algún tipo de discapacidad o enfermedad crónica,
                                            adjuntar documentación clínica
                                            y diagnóstico de la condición y del tratamiento que recibe.</h5>
                                        <h5>f) En caso de que la madre o el padre del o la menor, no sean los
                                            solicitantes del servicio, la persona
                                            tutora trabajadora del gobierno, adjuntar el documento legal que dictamine
                                            la patria potestad y/o guarda y
                                            custodia.</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        </i>2. Entregar en original la siguiente documentación:</li>
                                        <h5>a) Acta de nacimiento del o la menor, excepto quienes ingresan a preescolar
                                            2 y 3.</h5>
                                        <h5>b) Cartilla de vacunación del o la menor.</h5>
                                        <h5>c) Análisis clínicos. Debido a la contingencia sanitaria deberán entregarse
                                            durante los primeros tres
                                            meses, a partir del primer día de servicio.</h5>
                                        <h5>d) Seis fotografías tamaño infantil recientes e iguales, del o la menor.
                                        </h5>
                                        <h5>e) Cuatro fotografías tamaño infantil, recientes e iguales del o la
                                            trabajador(a).</h5>
                                        <h5>f) Cuatro fotografías tamaño infantil, recientes e iguales, de dos personas
                                            mayores de edad autorizadas
                                            por el (la) solicitante del servicio para recoger a la o el menor.</h5>
                                        </i>3. Llenar el siguiente formulario</li>
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