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
  p,li{
    font-family: 'source sans pro', sans-serif;
  }
  .accordion__header{
    font-family: 'source sans pro', sans-serif;
  }
</style>

<h1 style="text-align: center; color: #235B4E;">
  Preguntas frecuentes
</h1>

<div class="content" style="margin-bottom: 30rem;">
  <div class="accordion">
    <div class="accordion__item open-accordion">
      <div class="accordion__header">1. ¿Qué hago si no hay lugar en el CACI-SAF solicitado?</div>
      <div class="accordion__body">
        <p>a) Se presentarán otras opciones de CACI-SAF en donde haya lugar.</p>
        <p>b) En caso de no interesar las otras opciones, la solicitud queda en lista de espera.</p>
      </div>
    </div>
    <div class="accordion__item">
      <div class="accordion__header">2. ¿Qué material se solicita al ingresar al CACI-SAF?</div>
      <div class="accordion__body">
              <p>&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8226; Al inicio del ciclo escolar: material didáctico.</span></p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8226; Dos veces al año: material de higiene y aseo.</span></p>
            
              <p>* En caso de que el ingreso se realice iniciado el ciclo escolar, se solicitará la parte proporcional del
                material.</p>
    
              <p>* Para los grupos de lactantes se pide una pañalera con:</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8226; Dos mudas completas de ropa.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8226; Cuatro (4) pañales.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8226; Biberones (cantidad de acuerdo a la edad y el consumo).</p>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8226; Una cobija de bebé.</p>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8226; Dos (2) baberos.</p>
    
              <p>* Para Maternal (1 año 7 meses a 2 años 11 meses):</p>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8226;Dos mudas completas de ropa.</p>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8226;Cuatro (4) pañales.</p>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8226;Dos (2) baberos.</p>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8226;Vaso entrenador (de acuerdo a la edad).</p>
                  <p>&nbsp;&nbsp;&nbsp;&nbsp;<span>&#8226;Una cobija de bebé.</p>
                  
            <p>Todo deberá estar perfectamente etiquetado con el nombre completo del niño o la niña.</p>
    
            <p>Nota: El personal de cada plantel le indicará la manera como debe ser organizada la pañalera, de acuerdo a
              las medidas de seguridad e higiene.</p>
      </div>
    </div>
    
    <div class="accordion__item">
      <div class="accordion__header">3. ¿Quién labora en los CACI-SAF?</div>
      <div class="accordion__body">
        <p>El o la responsable del CACI tiene un perfil profesional en pedagogía, psicología o afín. Coordina un equipo
          multidisciplinario integrado por profesionistas de : pedagogía, servicios médicos, trabajo social, psicología,
          nutrición y personal docente con licenciatura en educación preescolar, técnicas puericultistas y asistentes
          educativas; profesorado en el idioma inglés, educación física y lenguaje de señas mexicano (sólo en algunos
          CACI). </p>
        <p>Además, contamos con apoyo técnico-operativo en la cocina, servicios generales, intendencia y personal de
          seguridad. </p>
      </div>
    </div>
    
    <div class="accordion__item">
      <div class="accordion__header">4. ¿Qué programas educativos se ofrecen?</div>
      <div class="accordion__body">
        <p>a) Programa de Educación Inicial del nacimiento a los 3 años.</p>
        <p>b) Programa de Educación Preescolar de los 3 a los 5 años 11 meses de edad.</p>
        <p>Ambos establecidos por la Secretaría de Educación Pública.</p>
      </div>
    </div>
    
    <div class="accordion__item">
      <div class="accordion__header">5. ¿Quién supervisa el servicio de los CACI-SAF?</div>
      <div class="accordion__body">
        <p>La Dirección Ejecutiva de Desarrollo de Personal y Derechos Humanos, a través de la Subdirección de
          Teletrabajo y Servicios Educativos, quienes desarrollan una constante vigilancia, asesoría, supervisión y
          evaluación de los 5 CACI-SAF, para garantizar la oportuna estimulación temprana para los lactantes, así como
          el diseño y desarrollo de actividades lúdicas y escolares que propicien el aprendizaje de toda la población
          infantil, en un clima de armonía, seguridad e igualdad y en plena observancia de sus derechos humanos. </p>

        <p>También, supervisa el servicio la SEP, a través de las zonas sectoriales y la visita de una supervisora
          designada para tal fin.</p>
      </div>
    </div>
    <div class="accordion__item">
      <div class="accordion__header">6. ¿Tiene servicio de comedor el CACI-SAF?</div>
      <div class="accordion__body">
        <p>Sí, se realizan dos servicios, el desayuno y la comida. </p>
        <p>Se vigila la dieta de la población infantil atendiendo las indicaciones del equipo técnico de nutrición, en
          estricto apego a las normas establecidas por la Secretaría de Salud y de acuerdo con los requerimientos
          nutricionales necesarios para el desarrollo de la población infantil.</p>
        <p>Nota: Actualmente, existe una logística organizada por cada plantel, para evitar aglomeración en el servicio
          de comedor.</p>
      </div>
    </div>
    <div class="accordion__item">
      <div class="accordion__header">7. ¿Se cuenta con protocolos de Protección Civil?</div>
      <div class="accordion__body">
        <p>Si, en el caso de algún siniestro como temblor, incendio u otro, el personal está organizado en brigadas de
          Protección Civil para atender la situación, trasladando a la población infantil a las zonas de seguridad
          identificadas al interior y al exterior del plantel.</p>
      </div>
    </div>
    <div class="accordion__item">
      <div class="accordion__header">8. ¿Cuáles son los procedimientos que se siguen en caso de que mi hijo o hija,
        presente alguna enfermedad o accidente?</div>
      <div class="accordion__body">
        <p>Si el malestar inicia en casa no deberá asistir al CACI. </p>
        <p>En el caso de presentarse el malestar en las instalaciones, se avisa al servicio médico quien revisa e
          informa sobre la situación a las personas tutoras.</p>
        <p>Solamente en caso de una emergencia se trasladará al afectado (a) a la Unidad Médica más cercana, informando
          al mismo tiempo a los adultos responsables. Tanto la población infantil como el personal docente cuenta con el
          privilegio del seguro médico de Va Seguro, Fideicomiso del gobierno de la CDMX.</p>
      </div>
    </div>
    <div class="accordion__item">
      <div class="accordion__header">9. ¿Qué pasa si no estoy en condiciones de recoger a mi hijo(a) a la hora de
        salida?</div>
      <div class="accordion__body">
        <p>Por seguridad y de acuerdo con la normatividad establecida por la Secretaría de Educación Pública, SEP no se
          podrá entregar a la niña o niño a personas que no estén registradas como autorizadas en el centro, por lo que
          el niño o la niña quedaría en custodia del personal del CACI hasta saber de la persona tutora o personas
          autorizadas.</p>
      </div>
    </div>
    <div class="accordion__item">
      <div class="accordion__header">10. Me faltan documentos originales ¿Puedo hacer el trámite?</div>
      <div class="accordion__body">
        <p>Se tendría que justificar con documento oficial la falta del mismo. Todos los documentos son necesarios para
          realizar el ingreso.</p>
      </div>
    </div>
    <div class="accordion__item">
      <div class="accordion__header">11. ¿Cuál es el procedimiento para hacer un cambio de plantel CACI-SAF?</div>
      <div class="accordion__body">
        <p>Enviar un correo electrónico a la dirección caciadministracion@finanzas.cdmx.gob.mx, explicando brevemente
          los motivos, anotar los datos del niño (a) y el CACI que solicita.</p>
      </div>
    </div>
    <div class="accordion__item">
      <div class="accordion__header">12. Si el semáforo epidemiológico de la CDMX está en verde y decido no llevar a mi
        hijo(a) ¿Perdería su lugar?</div>
      <div class="accordion__body">
        <p>La Secretaría de Educación Pública indica que es indispensable que se cumpla con el 80% de asistencia durante
          el ciclo escolar.</p>
      </div>
    </div>
    <div class="accordion__item">
      <div class="accordion__header">13. ¿Cuáles son las medidas sanitarias que implementarán para el regreso a las
        labores?</div>
      <div class="accordion__body">
        <p>Los protocolos de las medidas sanitarias para el regreso se realizarán atendiendo lo establecido por la
          Secretaría de Salud, la Secretaría de Educación Pública y el Gobierno de la Ciudad de México.</p>
      </div>
    </div>
    <div class="accordion__item">
      <div class="accordion__header">14. ¿Los datos personales de la población infantil y de las personas tutoras están
        protegidos?</div>
      <div class="accordion__body">
        <p>Si, en los Sistemas de Datos Personales denominados: </p>

        <p>“Sistema de Trámites y Procedimientos Administrativos de los Centros de Atención y Cuidado Infantil
          (CACI-SAF)”.</p>
        <p>“Tratamiento y Resguardo de los Datos Personales de las Niñas y los Niños inscritos en los CACI-SAF”, en
          apego a la Ley de Protección de Datos Personales en Posesión de Sujetos Obligados de la Ciudad de México.</p>
      </div>
    </div>
    <div class="accordion__item">
      <div class="accordion__header">15. ¿Qué puedo hacer si no se genera mi registro?</div>
      <div class="accordion__body">
        <p>Comunícate al teléfono 5551342500 Ext. 5869 donde con gusto atenderemos tus dudas sobre tu registro, o manda
          un correo al CACI correspondiente:</p>

        <p>CACI 2 Luz María Gómez Pezuela caciluzmariagomez@finanzas.cdmx.gob.mx</p>
        <p>CACI 4 Mtra. Eva Moreno Sánchez cacievamoreno@finanzas.cdmx.gob.mx</p>
        <p>CACI 6 Bertha Von Glümer Leyva caciberthavonglumer@finanzas.cdmx.gob.mx</p>
        <p>CACI 7 Carolina Agazzi cacicarolinaagazzi@finanzas.cdmx.gob.mx</p>
        <p>CACI 8 Carmen Serdán cacicarmenserdan@finanzas.cdmx.gob.mx</p>
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