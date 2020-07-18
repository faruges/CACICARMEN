@extends('menu')
@section('title','Bienvenidos Plataforma CACI')
@section('mycontent')





<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
         
    <div class="item active">
     <img src="{{asset('img/11.png')}}" alt="Los Angeles" style="width:100%;">
   </div>
      
   <div class="item">
      <img src="{{asset('img/banner.png')}}"  alt="Chicago" style="width:100%;">
   </div>

   <div class="item">
      <img src="{{asset('img/3.png')}}"  alt="New york" style="width:100%;">
   </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
	</div><br><br>




	<main id="cuerpoweb">
            	<div id="contenedor_principal_tramites">
                	<div id="menu_tramites">
                    		<h2>Nosotros</h2>
                        <ul>
                        	<li class="icon-users"><a id="myBtn" href="#">¿Quiénes somos?</a></li>
                            <li class="icon-paper-plane-1"><a id="myBtn2" href="#">Misión</a></li>
                            <li class="icon-eye-2"><a id="myBtn3" href="#">Visión</a></li>
                            <li class="icon-graduation-cap-1"><a id="myBtn4" href="#">Marco Jurídico</a></li>
                             
                        </ul>
                    </div>
                </div>   
                    <div id="myModal" class="modal">
                      <!-- Modal content -->
                      <div class="modal-content">
                        <div class="modal-header">
                        <img src="http://caci.ochentayocho.net/public/frontend/imagenes/blanco.png" title="CDMX">
                           <h2>¿Quiénes somos?</h2>
							<span class="close">×</span> 
                        </div>

                        <div class="modal-body">
                          <p>Los Centros de Atención y Cuidado Infantil de la Secretaría de Finanzas (CACI-SEFIN), a través de la Subsecretaría de Administración y Capital Humano y la Dirección General de Desarrollo Humano y Profesionalización, tienen como prioridad favorecer el desarrollo integral de las niñas y niños que asisten a dichos Centros, mediante el desarrollo de las competencias a través de situaciones didácticas en un adecuado ambiente educativo y de inclusión.</p>
                          
                         <p class="icono icon-users"></p>
                         <div id="modal_texto_uno">SUBSECRETARÍA DE ADMINISTRACIÓN Y CAPITAL HUMANO.</div>
                            <div id="modal_texto_dos">DIRECCIÓN GENERAL DE DESARROLLO HUMANO Y PROFESIONALIZACIÓN.</div>
                        </div>
						 
                        <div class="modal-footer">
                          <!--<h3><a target="_blank" href="#"><img class="botonpdf2" src="http://caci.ochentayocho.net/public/frontend/imagenes/pdf-icon.png" width="80">Imprimir</a></h3>-->
                        </div>
                      </div>                 
                    </div>
   
                    <!-- The Modal -->
                    <div id="myModal2" class="modal2">
                    
                      <!-- Modal content -->
                      <div class="modal-content2">
                        <div class="modal-header2">
                        	<img src="http://caci.ochentayocho.net/public/frontend/imagenes/blanco.png" title="CDMX">
                          <h2>Misión</h2>
                           <span class="close2">×</span>
                        </div>
                     <div class="modal-body2">
                     
					 <p>Potencializar el aprendizaje mediante un servicio educativo- asistencial de la más alta calidad y vanguardia en un ambiente de tolerancia, respeto, responsabilidad, compromiso e igualdad de oportunidades para las niñas y niños en edad de los 43 días de nacidos y hasta los 5 años 11 meses, hijos de madres y padres trabajadores en servicio activo de la Ciudad de México que coticen al Sindicato Único de Trabajadores de la Ciudad de México; así mismo de conformidad con la CIRCULAR SFCDMX/SSACH/DGDHP/003/2018 desde el 8 de enero del 2018, gozan del servicio los trabajadores de base  sin dígito sindical, nómina 8 y personal de estructura del ámbito central y de los Órganos Políticos Administrativos del Gobierno de la Ciudad de México.</p>
                          
                     <p>Así mismo de conformidad con la CIRCULAR SFCDMX/SSACH/DGDHP/003/2018 desde el 8 de enero del 2018, gozan del servicio los trabajadores de base  sin dígito sindical, nómina 8 y personal de estructura del ámbito central y de los Órganos Políticos Administrativos del Gobierno de la Ciudad de México.</p>
                           
					 <p class="icono icon-paper-plane-1"></p>      
                           <div id="modal_texto_uno">SUBSECRETARÍA DE ADMINISTRACIÓN Y CAPITAL HUMANO.</div>
                            <div id="modal_texto_dos">DIRECCIÓN GENERAL DE DESARROLLO HUMANO Y PROFESIONALIZACIÓN.</div>
                            <p></p>
                        </div>
                        <div class="modal-footer2">
                          <h3><!--<a target="_blank" href="#"><img class="botonpdf2" src="http://caci.ochentayocho.net/public/frontend/imagenes/pdf-icon.png" width="80">Imprimir</a>--></h3>
                        </div>
                      </div>                    
                    </div>

                   <!-- The Modal -->
                    <div id="myModal3" class="modal3">
                      <!-- Modal content -->
                      <div class="modal-content3">
                        <div class="modal-header3">
                        <img src="http://caci.ochentayocho.net/public/frontend/imagenes/blanco.png" title="CDMX">
                          <h2>Visión</h2>
                          <span class="close3">×</span>
                         
                        </div>
                        <div class="modal-body3">
                          <p>Ser un centro de desarrollo integral y de conocimiento, en donde las niñas y los niños de manera lúdica aprendan a ser autosuficientes, respetuosos de sí mismos y de los demás, mediante el desarrollo de habilidades y destrezas para promover en ellos un pensamiento reflexivo que los lleve a disfrutar del aprendizaje, experimentando y buscando soluciones por si mismos acorde a su etapa de desarrollo. </p>
                          
                           <p class="icono icon-eye-2"></p>
                                 
                          <div id="modal_texto_uno">SUBSECRETARÍA DE ADMINISTRACIÓN Y CAPITAL HUMANO.</div>
                            <div id="modal_texto_dos">DIRECCIÓN GENERAL DE DESARROLLO HUMANO Y PROFESIONALIZACIÓN.</div>
                            <p></p>
                        </div>
                        <div class="modal-footer3">
                          <h3><!--<a target="_blank" href="#"><img class="botonpdf2" src="http://caci.ochentayocho.net/public/frontend/imagenes/pdf-icon.png" width="80">Imprimir</a>--></h3>
                        </div>
                      </div> 
                    </div>

                   
                   <!-- The Modal -->
                    <div id="myModal4" class="modal4">
                    
                      <!-- Modal content -->
                      <div class="modal-content4">
                        <div class="modal-header4">
                          <img src="http://caci.ochentayocho.net/public/frontend/imagenes/blanco.png" title="CDMX">
                          <h2>Marco Jurídico</h2>
                          <span class="close4">×</span>
                        </div>
                        <div class="modal-body4">
                        <h3><a target="_blank" href="http://caci.ochentayocho.net/public/frontend/formatos_pdf/marco_juridico.pdf"><img class="botonpdf2" src="http://caci.ochentayocho.net/public/frontend/imagenes/pdf-icon.png" width="80">Imprimir</a></h3>
                         <p class="icono icon-graduation-cap-1"></p>
                        
                        <p><strong>El marco jurídico que rige a los Centros de Atención y Cuidado Infantil para prestar su servicio a los Trabajadores basificados de la Ciudad de México es el que a continuación se enuncia:</strong></p>
                        
                        <p><strong>1.</strong> Constitución Política de los Estados Unidos Mexicanos; artículo 1°, 3°, 4°, Párrafo tercero y Octavo; última reforma publicada DOF., 15 de septiembre de 2017. </p>
                          
                        <p><strong>2.</strong> Constitución Política de la Ciudad de México, articulo1°, inciso 6; 4°, inciso “C”; 6°, inciso “B”; 7°, inciso “A”, “D” y “E”; 8°; 11°, inciso “D” y “G”, Publicada en la Gaceta Oficial de la Ciudad de México el 5 de febrero de 2017. </p>
                           
                        <p><strong>3.</strong> Estatuto de Gobierno del Distrito Federal, artículo 88° (Unidades Administrativas); publicado en el diario Oficial de la Federación el 26 de julio de 1994, última reforma DOF., 27 de junio de 2014, vigente.  </p>
                            
                        <p><strong>4.</strong>Ley de los Derechos de Niñas, Niños y Adolescentes de la Ciudad de México, publicada en la Gaceta Oficial del Distrito Federal el 12 de noviembre de 2015, última reforma 12 de mayo de 2017.  </p>
                             
                        <p><strong>5.</strong> “Ley General de Educación” SEP 1°, 2°, 3° y 10°, fracción I, II, III, IV, 11° Fracción I, II, 40°, 41°, 42°, 49° y 65°, fracción I, II, III, IV, Ley Publicada en el Diario Oficial de la Federación el 13 de julio de 1993, última reforma 22 de marzo de 2017.  </p>
                              
                        <p><strong>6.</strong> Ley Orgánica de la Administración Pública del Distrito Federal; artículo 30°, última reforma 01 de septiembre del 2017.  </p>
                               
                        <p><strong>7.</strong> Ley de Transparencia, Acceso a la Información Pública y Rendición de Cuentas de la Ciudad de México publicada en la Gaceta Oficial de la Ciudad de México el 06 de mayo del 2016, vigente. </p>
                                
                        <p><strong>8.</strong> Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados publicada en el Diario Oficial de la Federación el 26 de enero del 2017.  </p>
                                 
                        <p><strong>9.</strong> Ley de Archivos del Distrito Federal; artículos 1°, 3°, fracción IX; Publicada en la Gaceta Oficial del Distrito Federal el 8 de octubre del 2008, última reforma 28 de noviembre del 2014, vigente. </p>
                                  
                        <p><strong>10.</strong> Ley de Atención Integral para el Desarrollo de las Niñas y en los Niños en Primer Infancia en el Distrito Federal, en sus artículos 1°, 5°, 10° y 11°, publicada el 30 de abril de 2013, vigente.</p>
                           
                        <p class="icono icon-graduation-cap-1"></p>
                        <div id="modal_texto_uno">SUBSECRETARÍA DE ADMINISTRACIÓN Y CAPITAL HUMANO.</div>
                        <div id="modal_texto_dos">DIRECCIÓN GENERAL DE DESARROLLO HUMANO Y PROFESIONALIZACIÓN.</div>
                            
                        </div>
                        <div class="modal-footer4">
                          <h3><a target="_blank" href="http://caci.ochentayocho.net/public/frontend/formatos_pdf/marco_juridico.pdf"><img class="botonpdf2" src="http://caci.ochentayocho.net/public/frontend/imagenes/pdf-icon.png" width="80">Imprimir</a></h3>
                        </div>
                      </div>
                    </div>                       
                 </main>
@endsection

