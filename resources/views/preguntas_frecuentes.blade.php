@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')

<style>

html {
    font-size: 80%;

}

.content {
    margin: 20px auto;
    max-width:1000px;
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
Preguntas frecuentes
</h1>

<div class="content">
    <div class="accordion">
        <div class="accordion__item open-accordion">
        <div class="accordion__header">1. ¿Qué es un CACI-SAF?</div>
        <div class="accordion__body">
          <p>Los Centros de Atención y Cuidado Infantil de la Secretaría de Administración y Finanzas que administra la Dirección General de Administración de Personal, a través de la Dirección de Desarrollo de la Competencia Laboral, Igualdad Sustantiva y Derechos Humanos brinda un servicio educativo y asistencial a los hijos e hijas de las personas servidoras públicas, en activo del gobierno de la Ciudad de México. </p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">2. ¿Quiénes reciben el servicio?</div>
        <div class="accordion__body">
          <p>El servicio se brinda a niños y niñas en edades desde los 45 días hasta los 5 años 11 meses, favoreciendo su sano desarrollo integral en un ambiente armónico, igualitario e inclusivo, para potenciar sus capacidades y habilidades, a través de los programas establecidos por la Secretaría de Educación Pública, SEP, y actividades lúdicas y recreativas apegadas a su nivel de desarrollo, edad y contexto socio- cultural. El horario de atención es de lunes a viernes de 8:10 a 15:00 horas.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">3. ¿Cómo se organizan los grupos?</div>
        <div class="accordion__body">
          <label>Cronológicamente:</label>
          <p>Lactante: de 43 días de nacido a 1 año 6 meses.</p>
          <p>Maternal: de 1 año 7 meses a 2 años 11 meses.</p>
          <p>Preescolar 2: de 4 años a 4 años 11 meses.</p>
          <p>Preescolar 3: de 5 años a 5 años 11 meses.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">4. ¿Qué procede si no hay lugar en el CACI SAF solicitado?</div>
        <div class="accordion__body">
          <p>Se presentarán otras opciones de CACI-SAF en donde haya lugar. En el caso de no interesar el cambio la solicitud queda en lista de espera.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">5. ¿El servicio del CACI -SAF tiene algún costo?</div>
        <div class="accordion__body">
          <p>Para las y los trabajadores de base que cotizan al Sindicato Único de Trabajadores del Gobierno de la Ciudad de México, SUTGCDMX nómina 8 y base sin dígito sindical no representa ningún costo.</p>
          <p>Para personal de estructura desde el nivel de Enlace hasta el nivel de Secretario, aportará una cuota quincenal de recuperación por concepto de alimentos que l será retenido mediante concepto nominal.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">6. ¿Qué material se solicita al ingresar al CACI-SAF?</div>
        <div class="accordion__body">
          <p>Se solicita material didáctico al inicio de cada ciclo escolar y dos veces al año material de higiene y aseo. En el caso de que el ingreso se realice iniciado el ciclo escolar solamente se pide la parte proporcional.</p>
          <p>En el caso de los niños y niñas que asisten a los grupos de lactantes y maternal, se les pide llevar una pañalera que contenga:</p>
          <p>Cuatro (4) pañales</p>
          <p>Maternal: de 1 año 7 meses a 2 años 11 meses.</p>
          <p>Dos baberos.</p>
          <p>Biberones (cantidad de acuerdo a la edad y el consumo)</p>
          <p>Vaso entrenador (de acuerdo a la edad)</p>
          <p>Una cobija de bebé</p>
          <p> Todo deberá estar perfectamente etiquetado con el nombre completo del niño (a).</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">7. ¿Cuál es el perfil profesional del personal que labora en los CACI-SAF?</div>
        <div class="accordion__body">
          <p>Responsable del CACI con perfil profesional en pedagogía, psicología o afín, quien coordina a un equipo multidisciplinario integrado por las siguientes disciplinas: Pedagogía, Servicio Médico, Trabajo Social, Psicología, Nutrición y; al personal docente compuesto por licenciadas en educación preescolar, técnicas puericultistas y asistentes educativas, profesorado en el idioma de inglés, educación física y lenguaje de señas mexicano, (sólo en algunos CACI). </p>
          <p>El servicio está apoyado por el personal técnico operativo en la cocina, servicios generales, intendencia y personal de seguridad. </p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">8. ¿Qué programas educativos se ofrecen en los CACI-SAF?</div>
        <div class="accordion__body">
          <p>El Programa de Educación Inicial del nacimiento a los 36 meses y el Programa de Educación Preescolar de los 3 a los 5/11 años de edad, establecidos por la Secretaría de Educación Pública, SEP.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">9. ¿Quién supervisa el servicio de los CACI SAF?</div>
        <div class="accordion__body">
          <p>La Dirección de Desarrollo de la Competencia Laboral, Igualdad Sustantiva y Derechos Humanos a través de la Coordinación Académica y de Evaluación Educativa, desarrolla una constante vigilancia, asesoría, supervisión y evaluación a los cinco CACI-SAF, para garantizar la oportuna estimulación temprana para los lactantes y el diseño y desarrollo de actividades lúdicas y escolares que propicien el aprendizaje de toda la población infantil, en un clima de armonía, seguridad e igualdad y en plena observancia de sus derechos humanos.</p>
          <p>La Secretaría de Educación Pública, a través de las zonas sectoriales y la visita periódica de una supervisora designada para tal fin.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">10. ¿Tiene servicio de comedor el CACI-SAF?</div>
        <div class="accordion__body">
          <p>Sí, se realizan dos servicios el desayuno y la comida. Se vigila la dieta de la población infantil atendiendo las indicaciones del equipo técnico de nutrición, en estricto apego a las normas establecidas por la Secretaría de Salud y de acuerdo a los requerimientos nutricionales necesarios para el desarrollo de la población infantil.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">11. ¿Qué pasa en el caso de presentarse una emergencia dentro del CACI-SAF?</div>
        <div class="accordion__body">
          <p>En el caso de algún siniestro como temblor, incendio u otro, el personal está organizado en brigadas de Protección Civil para atender la situación, trasladando a la población infantil a las zonas de seguridad identificadas al interior y al exterior del plantel.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">12. ¿Cuáles son los procedimientos que se siguen en el caso de que mi hijo o hija, presente alguna enfermedad o accidente?</div>
        <div class="accordion__body">
          <p>Si el malestar inicia en casa no deberá asistir al CACI. En el caso de presentarse el malestar en las instalaciones se avisa al servicio médico quien revisa e informa sobre la situación a las personas tutoras.</p>
           <p>Solamente en caso de una emergencia se trasladará al afectado (a) a la Unidad Médica más cercana, informando al mismo tiempo a los adultos responsables. Tanto la población infantil como el personal docente cuenta con el privilegio del seguro médico de Va Seguro, Fideicomiso del gobierno de la CDMX.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">13. ¿Qué pasa si no estoy en condiciones de recoger a mi hijo (a) a la hora de salida? </div>
        <div class="accordion__body">
          <p>Por seguridad y de acuerdo con la normatividad establecida por la Secretaría de Educación Pública, SEP no se podrá entregar a la niña o niño a personas que no estén registradas como autorizadas en el centro, personal del CACI quedaría en custodia hasta saber de los familiares.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">14. Me faltan documentos originales ¿Puedo hacer el trámite?</div>
        <div class="accordion__body">
          <p>Se tendría que justificar con documento oficial la falta del mismo. Todos los documentos son necesarios para realizar el ingreso.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">15. ¿Cuál es el procedimiento para cambiar de CACI-SAF?</div>
        <div class="accordion__body">
          <p>Deberá enviar su solicitud explicando brevemente los motivos, anotar los datos del niño (a) y el CACI que solicita al siguiente correo: caciadministracion@finanzas.cdmx.gob.mx</p>
        </div>
      </div>
           <div class="accordion__item">
        <div class="accordion__header">16. Cuándo los trabajadores del gobierno de la CDMX se incorporen a sus labores de manera presencial ¿habrá servicio en los CACI-SAF?</div>
        <div class="accordion__body">
          <p>El servicio de los CACI se reanudará hasta que la Secretaría de Salud y la Secretaría de Educación Pública indiquen que el semáforo epidemiológico de la CDMX está en verde.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">17. Si el semáforo epidemiológico de la CDMX está en verde y decido no llevar a mi hijo(a) ¿Perdería su lugar?</div>
        <div class="accordion__body">
          <p>La Secretaría de Educación Pública indica que es indispensable que se cumpla con el 80% de asistencia durante el ciclo escolar.</p>
        </div>
      </div>
        <div class="accordion__item">
        <div class="accordion__header">18. ¿Cuáles son las medias sanitarias que implementarán para el regreso a la nueva normalidad?</div>
        <div class="accordion__body">
          <p>Los protocolos de las medidas sanitarias para el regreso a la Nueva Normalidad se realizarán atendiendo   lo establecido por la Secretaría de Salud, la Secretaría de Educación Pública y el Gobierno de la Ciudad de México.</p>
        </div>
      </div>
        <div class="accordion__item">
			  <div class="accordion__header">19. ¿Qué procede en el caso de que se presente un caso sospechoso o confirmado de COVID-19 entre la población infantil o el personal que labora en el CACI-SAF?</div>
			  <div class="accordion__body">
				<p>Las actividades en el centro se suspenderán 14 días naturales como se establece en el documento Guía de Organización para el Regreso Seguro a las Escuelas ante COVID-19.</p>
			</div>
		  </div>
		    <div class="accordion__item">
			  <div class="accordion__header">20. ¿Los datos personales de la población infantil y de las personas tutoras están protegidos?</div>
			  <div class="accordion__body">
				<p>Si, en el Sistema de Datos Personales denominado “Expedientes únicos de las niñas y los niños de los CACI-SAF”, en apego a la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados de la Ciudad de México.</p>
			</div>
			</div>
		    <div class="accordion__item">
			  <div class="accordion__header">21. ¿Qué puedo hacer si no se ha generado mi registro?</div>
			  <div class="accordion__body">
				<p>Comunícate al teléfono 55 5588 4155 Ext. 5831 donde con gusto atenderemos tus dudas sobre tu registro</p>
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

 
