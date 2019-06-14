<?php

    session_start();

    if ( isset($_SESSION['banner-clientes'])) {
         
        $num = $_SESSION['banner-clientes'];
        $num = $num+1;
        if ($num > 2) { $num = 1; }
        $_SESSION['banner-clientes'] = $num;
    } else {
         $_SESSION['banner-clientes'] = 1;
         $num = 1;
    }

     if ( isset($_SESSION['slide'])) {
         
        $slide = $_SESSION['slide'];
        $slide = $slide +1;
        if ($slide > 2) { $slide = 1; }
        $_SESSION['slide'] = $slide;
    } else {
         $_SESSION['slide'] = 1;
         $slide = 1;
    }
    
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta charset="UTF-8">

<meta name="keywords" content="mobizen, Movilidad, mobile apps, aplicaciones moviles, señal celular, mejorar señal celular, aumentar señal celular, ahorros en celulares, iPad in Business, iPad en negocios, administracion de celulares, telefonia movil, 3G, cobertura celular, iOS, Android, mobility, movilidad, control del gasto, iPad, tablet, telefonia celular, telefonia movil corporativa.">
<meta name="description" content="Mobizen es una compañía que ofrece solucionesrelacionadas con la gestión de la movilidad corporativa “mobility management”, que permiten a nuestros clientes mejorar sus procesos de negocio, conseguir ahorros y generar nuevos clientes.">


<title>Mobizen</title>

<!-- CSS JS -->
<?php include_once "includes/css-js.php";  ?>

<!-- Google Analytics -->
<?php include_once "includes/ga.php";  ?>

</head>

<body>
<?php include_once "includes/tagbody.php";  ?>

<div id="container" class="container-home">

	<header>
    	<?php include_once "includes/header.php"; ?>
    </header>

    <section id="slider-home">

        <div id="slider">
            <div id="wpSlides" class="wpSlides">
                <div class="slide" id="slide1">
                    <hgroup>
                        <h2>Implemente una Administración Unificada de sus Dispositivos Móviles</h2>
                        <p>Distribuimos las soluciones líderes del mercado para administrar y controlar sus dispositivos empresariales.</p>
                        <a href="unified-endpoint-management.php?utm_source=internal&utm_medium=slide&utm_campaign=Site&utm_term=MEE" class="btnGo">go</a>
                    </hgroup>
                    <!-- <img src="img/slide-home-1.jpg"> -->
                </div>  <!-- slide 1 -->

                <div class="slide" id="slide2">
                    <hgroup>
                        <h2>Administre el Presupuesto y Controle el Uso de la Telefonía Corporativa</h2>
                        <p>Optimice los recursos contratados y reduzca la facturación mensual en su empresa.</p>
                        <a href="telecom-management.php?utm_source=internal&utm_medium=slide&utm_campaign=Site&utm_term=ETM" class="btnGo">go</a>
                    </hgroup>
                    <!-- <img src="img/slide-home-2.jpg"> -->
                </div> <!-- slide 2 -->

                <div class="slide" id="slide3">
                    <hgroup>
                        
                        <h2>El Control de su Flota a un Nivel Superior</h2>
                        <p>Fleet Management integral y sencillo para su empresa</p>
                        <a href="fleet-management.php?utm_source=internal&utm_medium=slide&utm_campaign=Site&utm_term=CSI" class="btnGo">go</a>
                    </hgroup>
                    <!-- <img src="img/slide-home-3.jpg"> -->
                </div> <!-- slide 3 -->

            </div>

            <div class="nav">
                <a id="s-emm" href="unified-endpoint-management.php?utm_source=internal&utm_medium=secondary-nav&utm_campaign=Site&utm_term=MEE" class="active">Unified Endpoint Management</a>
                <a id="s-csi" href="telecom-management.php?utm_source=internal&utm_medium=secondary-nav&utm_campaign=Site&utm_term=CSI">Telecom Management</a>
                <a id="s-etm" href="fleet-management.php?utm_source=internal&utm_medium=secondary-nav&utm_campaign=Site&utm_term=ETM">Fleet Management</a>
            </div>

             
            <div id="anterior_slide" class="event-track" data-categoria="SlideShow Flecha" data-label="Anterior" data-action="Click">Anterior</div>
            <div id="siguiente_slide" class="event-track" data-categoria="SlideShow Flecha" data-label="Siguiente" data-action="Click">Siguiente</div>
            
        </div>

    </section>

    <section id="slider-home-movil">

        <div id="slider-movil">
            <div id="wpSlides-movil" class="wpSlides-movil">
                <div class="slide" id="slide1">
                    <hgroup>
                        <h2>IMPLEMENTE UNA ADMINISTRACIÓN UNIFICADA DE SUS DISPOSITIVOS EMPRESARIALES</h2>
                        <p>Distribuimos las soluciones líderes del mercado para administrar y controlar sus dispositivos empresariales.</p>
                        <a href="unified-endpoint-management.php" class="btnGo">go</a>
                        
                    </hgroup>

                    <a class="solucion" href="unified-endpoint-management.php" class="active">Unified Endpoint Management</a>
               
                </div>  <!-- slide 1 -->

                <div class="slide" id="slide2">
                    <hgroup>
                        <h2>Administre el Presupuesto y Controle el Uso de la Telefonía Corporativa</h2>
                        <p>Soluciones que permiten administrar el presupuesto y controlar el uso de la telefonía corporativa.</p>
                        <a href="bluezen.php?utm_source=internal&utm_medium=slide&utm_campaign=Site&utm_term=ETM" class="btnGo">go</a>
                    </hgroup>
             
                    <a  class="solucion" href="bluezen.php">Telecom Management</a>
                </div> <!-- slide 2 -->

                <div class="slide" id="slide3">
                    <hgroup>
                        <h2>Administra tu flota de forma sencilla</h2>
                        <p>Fleet Management integral y sencillo para su empresa</p>
                        <a href="verifica-empresas.php?utm_source=internal&utm_medium=slide&utm_campaign=Site&utm_term=CSI" class="btnGo">go</a>
                    </hgroup>

                    <a class="solucion" href="verifica-empresas.php">Fleet Management</a>
                  
                </div> <!-- slide 3 -->
            </div>
           <div class="clear"></div>
             <div id="anterior_slide_movil">Anterior</div>
            <div id="siguiente_slide_movil">Siguiente</div>
        </div>
        <div class="clear"></div>
    </section>
    <div class="clear"></div>

    <!-- Destacados -->
    <section>            
           
    	<div class="wpDestacados">

        	<div class="dest-2 ">
                <div class="slideApp">
                	<ul class="slides">
                        <li class="li_1 oculto">
                            <hgroup class="ws1 con-video">
                                <a href="workspace-one.php" class="superior">
                                    <h3><span>VMWare Workspace ONE / AIRWATCH</span></h3>
                                    <p>Solución para Administrar el Espacio de Trabajo Digital</p>
                                    <a href="#video_airwatch" id="video_mdm" class="fancybox superior">Ver video</a>
                                </a>
                                <a href="workspace-one.php" class="overall"></a>
                            </hgroup>
                        </li> <!-- Fin Verifica --> 

                        <li class="li_2 oculto">
                            <hgroup class="mpe mobile-iron con-video">
                                <a href="mobile-iron.php" id="koolspan" class="fancybox superior">
                                    <h3><span>MobileIron</span></h3>
                                    <p>Solución para la Administración Unificada de Dispositivos Empresariales</p>
                                </a>
                                <a href="mobile-iron.php" id="koolspan" class="overall fancybox"></a>
                                 <a href="#video_mobileiron" id="video_mdm" class="fancybox superior">Ver video</a>
                            </hgroup>
                        </li> <!-- Fin Koolspan --> 

                        
                    </ul>
                </div>
            </div>

            <div class="dest-2">
            	<div class="slideSol">
                	<ul class="slides">
                        <li class="li_1 oculto">
                            <hgroup class="h-mem">
                            <a href="bluezen.php" class="superior">
                                <h3><span>BLUEZEN</span></h3>
                                <p>Administre y Controle el Gasto de la Telefonía Corporativa</p>
                            </a>
                            <a href="bluezen.php" class="overall"></a>
                            </hgroup>
                           
                        </li>  <!-- Fin MEM -->  

                        <li class="li_2 oculto">
                            <hgroup class="mpe h-mim con-video">
                              <a href="bluezen.php"  class="superior">
                                <h3><span>BLUEZEN</span></h3>
                                <p>Administre y Controle el Gasto de la Telefonía Corporativa</p>
                              </a>
                              <a href="bluezen.php" class="overall"></a>
                            </hgroup>
                        </li> <!-- Fin Koolspan --> 

                        
                	</ul>
                </div>
            </div>

           
            <div class="dest-2">
                <div class="slideApp">
                    <ul class="slides">
                        <li class="li_1">
                            <hgroup class="air verifica-empresas">

                            <a href="verifica-empresas.php" class="superior">
                                <h3><span>Verifica Empresas</span></h3>
                                <p>Solución Integral para la Administración de Flotas Vehiculares</p>
                            </a>

                            <a href="verifica-empresas.php" class="overall"></a>
                            </hgroup>
                        </li> <!-- Fin MDM -->  
                    </ul>
                </div>
            </div>  

            
        </div>
    </section>
    <!-- destacados -->


    <div class="clear"></div>

    <article id="testimonios">
            <div id="slides">
                <div>
                   <h4>¿Por qué Mobizen?</h4>
                   <!-- <p>Nuestro foco de negocio es la <a href="#" title="<strong style='font-weight:bold;'>Enterprise Mobility</strong> es el conjunto de personas, procesos y tecnologías focalizadas en administrar el creciente arreglo de dispositivos móviles, redes inalámbricas y servicios relacionados para habilitar el uso del computo móvil en un contexto de negocios. "
                    id="me-def">Movilidad Empresarial (Enterprise Mobility)</a>. El desarrollo de una estrategia de movilidad requiere establecer objetivos específicos, definir procesos de negocios e implementar la tecnología de movilidad adecuada para lograr el éxito.</p>  -->
                    <p>Más de 10 años de experiencia implementando soluciones para una gestión eficiente de los activos empresariales (telefonía, computo, móviles, vehículos, etc.).</p>
                   <small><strong>Adrián Jamiolkowski</strong><br /> Director General</small>
                </div>
                <div>
                   <h4>¿POR QUÉ LA ADMINISTRACIÓN UNIFICADA (UEM) IMPORTA?</h4>
                   <p>Desarrollar una estrategia de Administración Unificada de Dispositivos, que genere
impacto positivo en el negocio es el desafío actual de las áreas de TI. Contribuimos a
ese objetivo con solcuiones que permiten administrar, controlar y optimizar el uso de
los dispositivos empresariales (laptops, tablets, móviles, PCs).”</p>
					<small><strong>Roberto García</strong><br /> Unified Endpoint Management PM</small>
                </div>
                <div>
                   <h4>Nuestra propuesta</h4>
                   <p>Integramos soluciones propias (Bluezen, Verifica Empresas), de terceros (VMware Workspace ONE, MobileIron) y capacidad de
desarrollo propia, que sumadas a la experiencia en diversos proyectos de gestión de activos empresariales nos permite ajustar
nuestra oferta a la necesidad específica de cada cliente.</p>
                   <small><strong>Jorge Huerta</strong><br /> Fleet Management PM</small>
                </div> 
                <div>
                   <h4>Nuestros resultados</h4>
                   <p>Desarrollamos la suite de administración y control del gasto tanto para la telefónía fija como para la telefonía móvil (Bluezen) más completa del mercado, combinando funcionalidades únicas e innovadoras.</p>
                   <small><strong>Erick Pazos</strong><br /> Telecom Management PM</small>
                </div>  
            </div>

            <div id="pager"> 
                <ul>
                    <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                    <li><a href="#"> </a></li>
                </ul>
            </div>
    </article>
    

    <footer>
        <?php include_once "includes/prefooter.php";  ?>
        <?php include_once "includes/footer.php";  ?>
    </footer>
    <script type="text/javascript">
        var slide = <?php echo  $slide; ?>

        $(document).ready(function() { 
            $('.wpDestacados .li_'+slide).removeClass("oculto");

            $('.event-track').click(function(e){
                var categoria = $(this).data('categoria');
                var label = $(this).data('label');
                var action = $(this).data('action');
                enviarEvento(categoria,label,action);
            });

            function enviarEvento(category,label,action) {
                ga('send', {
                  hitType: 'event',
                  eventCategory: category,
                  eventAction: action,
                  eventLabel: label
                });
            }   // enviarEvento

        }); // end onReady

    </script>
</div><!-- fin container -->

<!-- 
<div id="video_koolspan" style="display:none;">
    <video controls="controls"   >
        <source src="video/koolspan_mobizen_hd.mp4" type="video/mp4" />
        <source src="video/koolspan_mobizen.webm" type="video/webm" />
        <source src="video/koolspan_mobizen.ogv" type="video/ogg" />
    </video>
</div>

<div id="video_airwatch" style="display:none;">
    <video controls="controls">
        <source src="video/AirWatch_1280.mp4" type="video/mp4" />
        <source src="video/AirWatch_1280.webm" type="video/webm" />
        <source src="video/AirWatch_1280.ogv" type="video/ogg" />
    </video>
</div>
 -->
    <div id="video_airwatch" class="video-proveedor" style="display:none;">
        <iframe src='//players.brightcove.net/1534342432001/Byh3doRJx_default/index.html?videoId=5970135126001' class="iframe-video" allowfullscreen frameborder=0></iframe>
    </div>

    <div id="video_mobileiron" class="video-proveedor"   style="display:none;">
        <iframe id="vidyard_iframe_vu4nypTYtixGbjzCgg_Nzg" class="iframe-video vidyard_iframe" src="//play.vidyard.com/vu4nypTYtixGbjzCgg_Nzg?disable_analytics=0&amp;v=3.1.1&amp;vyemail=&amp;type=inline&amp;referring_url=https%253A%252F%252Fmail.google.com%252Fmail%252Fu%252F2%252F&amp;" title="Video" aria-label="Video" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="" allow="autoplay" style="opacity: 1; background-color: transparent; position: absolute; right: 0px; top: 0px;"></iframe>
    </div>

</body>
</html>
