<?php get_header(); ?>

	<div id="portada" class="intro scrollspy">
		<div id="owl-demo4" class="owl-carousel owl-theme">
<?php
			$args = array(
				'post_type'	=> array('slider_portada')
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();	
?>					
			<div class="carouselitem">
				<div class="slidertext">
                	<h1 class="brand-heading"><?php the_title(); ?></h1>
					<p class="intro-text"><?php echo get('bajada'); ?></p>
				</div>
                <?php the_post_thumbnail('full',array( 'class' => 'responsive-img hidden-xs' ) ); ?> 
                <?php the_post_thumbnail('slider_mobile',array( 'class' => 'responsive-img visible-xs' ) ); ?> 
			</div>
<?php 		
        endwhile; 
  } 
?>	
		</div>
	</div><!-- /portada -->

	<div id="productos_servicios" class="scrollspy">
		<div class="section">
		    <div class="container">
				<div class="row">
					<div class="col s12">
					    <h4 class="titulos">Lo que hacemos</h4>
					</div>
				</div>
				
				<div class="row">
					<a class="col s12 m3 hoverable page-scroll" href="#cloud_outsourcing">
						<div class="servicio">
							<i class="material-icons servicio_icono">cloud_circle</i>
							<div class="servicio_content">
								<span class="servicio_titulo">Cloud y Outsourcing</span>
			        			<span class="servicio_info">Externalice sus procesos e infraestructura TI. Operación 24x7 con SLA’s (Service-level Agreement) garantizados en Data Center TIER III</span>
			        		</div>
						</div><!-- /servicio -->
					</a>
		
					<a class="col s12 m3 hoverable page-scroll" href="#control_y_gestionTI">
				        <div class="servicio">
					        <i class="material-icons servicio_icono">show_chart</i>
				        	<div class="servicio_content">
				          		<span class="servicio_titulo">Control y Gestión TI</span>
				          		<span class="servicio_info">Controle y asegure sus procesos TI.  Revise como se alinean y aportan a los objetivos de su negocio. Hágalos parte del crecimiento global de su empresa.</span>
			        			
				        	</div>
				        </div><!-- /servicio -->
					</a>
		
					<a class="col s12 m3 hoverable page-scroll" href="#ingenieria_y_consultoria">
				        <div class="servicio">
					        <i class="material-icons servicio_icono">functions</i>
				        	<div class="servicio_content">
				          	<span class="servicio_titulo">Ingeniería y Consultoría</span>
				          	<span class="servicio_info">Analizamos, diseñamos e implementamos soluciones TI “World Class” de acuerdo a las necesidades reales de su negocio.<br><br></span>
				        					        	</div>
				        </div><!-- /servicio -->
					</a>
						
					<a class="col s12 m3 hoverable page-scroll" href="#soporte">
				        <div class="servicio">
					        <i class="material-icons servicio_icono">assignment_turned_in</i>
				        	<div class="servicio_content">
				          	<span class="servicio_titulo">Soporte</span>
				          	<span class="servicio_info">Nos encargamos  de sus sistemas y apoyamos a su departamento TI cuando lo requiera. Esto nos permite dar continuidad a su negocio.<br><br></span>
				        	
				        	</div>
				        </div><!-- /servicio -->
					</a>
		
				</div><!-- /row -->
					<div class="row">
			    	<div class="col s12 center">
				    <a href="#contacto" target="_self" class="btn_orange z-depth-1 page-scroll">SOLICITAR INFORMACIÓN</a>
				</div><!-- /row -->
		  </div>
				</div>
		</div><!-- /section -->
	</div><!-- /productos_servicios -->

	<div id="beneficios" class="container scrollspy">
    <div class="section">
	    <div class="row">
		    <div class="col s12">
			    <h4 class="titulos">Beneficios</h4>
		    </div>
	    </div>
      <div class="row">
        <div class="col s12 m4">
          <div class="beneficio">
			<div class="col s12 m3">
	          	<i class="material-icons beneficio_icono">people</i>
	        </div>
	        <div class="col m9">
	        	<div class="beneficio_content">
	          	<span class="beneficio_titulo">EXPERIENCIA</span>
	          	<span class="beneficio_info">Equipo humano con más de 10 años de experiencia entregando Soluciones TI y más de 5 años en Servicios de Data Center.</span>
	        	</div>
	        </div>
          </div><!-- /beneficio -->
        </div>

        <div class="col s12 m4">
	        <div class="beneficio">
			<div class="col s12 m3">
		        <i class="material-icons beneficio_icono">cached</i>
	        </div>
	        <div class="col m9">
	        	<div class="beneficio_content">
	          	<span class="beneficio_titulo">Profundidad del servicio</span>
	          	<span class="beneficio_info">Asesoría y consultoría personalizada en análisis, diseño e implementación de proyectos informáticos en 360º.</span>
	        	</div>
	        </div>
	        </div><!-- /beneficio -->
        </div>
        
	      <div class="col s12 m4">
		      <div class="beneficio">
			<div class="col s12 m3">
			      <i class="material-icons beneficio_icono">done_all</i>
	        </div>
	        <div class="col m9">
	        	<div class="beneficio_content">
	          	<span class="beneficio_titulo">Calidad</span>
	          	<span class="beneficio_info">Nos basamos en ITIL (IT Infrastructure Library) y COBIT (Control Objectives for Information and Related Technologies).</span>
	        	</div>
		      </div><!-- /beneficio -->
	        </div>
	      </div>
    </div><!-- /row -->
    
    <div class="row">

      <div class="col s12 m4">
        <div class="beneficio">
			<div class="col s12 m3">
	       	 <i class="material-icons beneficio_icono">cloud</i>
	        </div>
	        <div class="col m9">
	        	<div class="beneficio_content">
	          	<span class="beneficio_titulo">Infraestructura</span>
	          	<span class="beneficio_info">Operamos en Data Center TIER 3 con equipamiento World Class. Esto nos permite entregar continuidad operativa, alta disponibilidad, redundancia y fiabilidad.</span>
	        	</div>
	        </div>
        </div><!-- /beneficio -->
      </div>

      <div class="col s12 m4">
        <div class="beneficio">
			<div class="col s12 m3">
	        	<i class="material-icons beneficio_icono">assessment</i>
	        </div>
	        <div class="col m9">
        	<div class="beneficio_content">
          	<span class="beneficio_titulo">Informe de Gestión</span>
          	<span class="beneficio_info">Detallamos las métricas, índices de consumo,  estadísticas, requerimientos e incidentes, entre otros.</span>
        	</div>
	        </div>
        </div><!-- /beneficio -->
			</div>

      <div class="col s12 m4">
        <div class="beneficio">
			<div class="col s12 m3">
	        <i class="material-icons beneficio_icono">thumb_up</i>
	        </div>
	        <div class="col m9">
        	<div class="beneficio_content">
          	<span class="beneficio_titulo">ALIANZAS ESTRATEGICAS</span>
          	<span class="beneficio_info">Trabajamos con los principales fabricantes de equipamiento informático.</span>
        	</div>
	        </div>
        </div><!-- /beneficio -->
			</div>
    </div><!-- /row -->
    
    
  </div><!-- /section -->
  </div><!-- /beneficios -->

	<div id="cloud_outsourcing" class="scrollspy detalle-servicios">
		<div class="section">
		    <div class="container">
				<div class="row">
					<div class="col s12">
						<h4 class="titulos">Cloud & Outsourcing</h4>
					</div>
				</div>
				<div class="row">
		        	<div class="col s12">
						<div class="servicio">
							<div class="servicio_content">
								<ul>
									<li><strong>El camino hacia la nube acompañado por expertos</strong></li>
								</ul>
								<div class="row">
									<div class="col s2 offset-s1">
										<i class="material-icons servicio_icono">cloud_circle</i>
									</div>
									<div class="col s2">
										<img src="<?php bloginfo('template_url'); ?>/assets/img/aws-logo.png" class="responsive-img">
									</div>
									<div class="col s2">
										<img src="<?php bloginfo('template_url'); ?>/assets/img/Microsoft_Azure_Logo.svg.png" class="responsive-img">
									</div>
									<div class="col s2">
										<img src="<?php bloginfo('template_url'); ?>/assets/img/ocloud.png" class="responsive-img">
									</div>
									<div class="col s2">
										<img src="<?php bloginfo('template_url'); ?>/assets/img/logo_lockup_cloud_platform_icon_vertical.png" class="responsive-img">
									</div>
								</div>
								<ul>
									<li>Colaboración en la nube:</li>
								</ul>
								<div class="row">
									<div class="col s2 offset-s4">
										<img src="<?php bloginfo('template_url'); ?>/assets/img/Gsuite_logo.png" class="responsive-img">
									</div>
									<div class="col s2">
										<img src="<?php bloginfo('template_url'); ?>/assets/img/Office_365_logo.png" class="responsive-img">
									</div>
								</div>
							</div>
						</div><!-- /servicio -->
					</div>
				</div>
			</div>
		</div><!-- /section -->
	</div><!-- /cloud_outsourcing -->

	<div id="control_y_gestionTI" class="scrollspy detalle-servicios">
		<div class="section">
		    <div class="container">
				<div class="row">
					<div class="col s12">
						<h4 class="titulos">Control y Gestión TI</h4>
					</div>
				</div>
				<div class="row">
		        	<div class="col s12">
						<div class="servicio">
							<div class="servicio_content">
								<ul>
									<li>Asesoría de Procesos TI</li>
									<li>Mapa Tecnológico</li>
									<li>Eficiencia de costos y contratos</li>
									<li>Procesos y Procedimientos</li>
									<li>Confección de DRP & BCP</li>
									<li>Confección de RFI & RFP</li>
								</ul>
							</div>
						</div><!-- /servicio -->
					</div>
				</div>
			</div>
		</div><!-- /section -->
	</div><!-- /control_y_gestionTI -->

	<div id="ingenieria_y_consultoria" class="scrollspy detalle-servicios">
		<div class="section">
		    <div class="container">
				<div class="row">
					<div class="col s12">
						<h4 class="titulos">Ingeniería y consultoría</h4>
					</div>
				</div>
				<div class="row">
		        	<div class="col s12">
						<div class="servicio">
							<div class="servicio_content">
								<ul>
									<li>Seguridad Perimetral y Redes</li>
									<li>Bases de Datos</li>
									<li>Sistemas Operativos</li>
									<li>Consolidación y Virtualización</li>
									<li>Healt Check</li>
									<li>Ingeniería de Detalle</li>

								</ul>
							</div>
						</div><!-- /servicio -->
					</div>
				</div>
			</div>
		</div><!-- /section -->
	</div><!-- /ingenieria_y_consultoria -->

	<div id="soporte" class="scrollspy detalle-servicios">
		<div class="section">
		    <div class="container">
				<div class="row">
					<div class="col s12">
						<h4 class="titulos">Soporte & Mesa de Ayuda</h4>
					</div>
				</div>
				<div class="row">
		        	<div class="col s12">
						<div class="servicio">
							<div class="servicio_content">
								<ul>
									<li>Contratos de soporte Proactivo y Reactivo</li>
									<li>Mesas de Ayuda (Local & Remota)</li>
									<li>Asistencia 9x5 o 24x7</li>
									<li>Asistencia por incidente</li>
								</ul>
							</div>
						</div><!-- /servicio -->
					</div>
				</div>
			</div>
		</div><!-- /section -->
	</div><!-- /soporte -->
  
	<div id="asi_trabajamos">
	    <div class="section">
		    <div class="row">
			    <div class="container">
				   <!--
 <div class="col s12 center">
					    <h4 class="sub_titulos">ASÍ TRABAJAMOS</h4>
				    </div>
					
-->
					<div class="col s12 m10 offset-m1">
						<div class="row">
<?php
			$args = array(
				'page_id'	=> 11
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();	
?>	
							<div class="col s12 l6">
							    <h4 class="sub_titulos"><?php the_title(); ?></h4>
							    <div class="textos2">
							    	<?php the_content(); ?>
							    </div>
						    </div>		
<?php 		
        endwhile; 
  } 
?>			    
						    
						    <div class="col s12 m6 center">
								<div id="owl-demo2" class="owl-carousel owl-theme">
									<div class="item">
									    <img src="<? bloginfo('template_url'); ?>/assets/img/asi_trabajamos.png?ver=3" class="responsive-img"/>
									    <h5 class="sub_titulos">Area Comercial</h5>
									</div>
									<div class="item">
									    <img src="<? bloginfo('template_url'); ?>/assets/img/mejora.png?ver=3" class="responsive-img"/>
									    <h5 class="sub_titulos">Area Ingeniería Operaciones</h5>
									</div>
						    	</div>
						    </div>
						</div>
					</div>	
			    </div>
		    </div>
	  </div><!-- /section -->
	  </div><!-- /asi_trabajamos -->

	<div id="clientes" class="container scrollspy">
    <div class="section">
	    <div class="row">
		    <div class="col s12">
			    <h4 class="titulos">Clientes</h4>
		    </div><!-- /col -->
	    </div><!-- /row -->
		    <div class="row">
			    <div id="owl-demo" class="owl-carousel">
<?php
			$args = array(
				'post_type'	=> array('testimonio')
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();	
?>	
				    <div class="banner_clientes container">
					    	<div class="col s6 offset-s3 m2 banner_clientes_foto center">
								<?php the_post_thumbnail('full',array( 'class' => 'responsive-img' ) ); ?> 
							</div>
						    <div class="col s12 m4 datos">
							    <h4 class="cliente_nombre"><?php echo get('cliente_nombre'); ?></h4>
							    <h6 class="cliente_cargo"><?php echo get('cliente_cargo'); ?></h6>
							    <h6 class="cliente_empresa"><?php the_title(); ?></h6>
						    </div>
						    <div class="col s12 m6 experiencia">
							    <?php the_content(); ?>
						    </div>
				    </div>
<?php 		
        endwhile; 
  } 
?>	
				  </div><!-- /owl-demo -->
	      </div><!-- /row -->
	      <div class="row logos-clientes">
		      <div class="col m10 offset-m1">
		      		<div class="row">
<?php
			$args = array(
				'post_type'	=> array('cliente'),
				'posts_per_page' => -1,
				'orderby' => 'title',
				'order' => 'ASC'
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();	
?>	
						<div class="col s4 center-align">
							<?php the_post_thumbnail('full',array( 'class' => 'responsive-img' ) ); ?> 
						</div>
<?php 		
        endwhile; 
  } 
?>	
		      		</div>
		      </div>  
	      </div><!-- /row -->
    </div><!-- /section -->
  </div><!-- /clientes -->

	<div class="parallax-container valign-wrapper">
    <div class="section no-pad">
      <div class="container valign">
        
        <h1 class="titulos_blancos ">Atención personalizada</h1>
        <p class="textos_blancos">Cara a Cara con el cliente.  Acceso directo con los especialistas</p>
        
      </div>
    </div>
    <div class="parallax"><img src="<? bloginfo('template_url'); ?>/assets/img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div><!-- /parallax-container -->
 	
	<div id="alianzas_estrategicas">
    	<div class="section">
	    <div class="container">
	    	<div class="row">
		    <div class="col s12 center">
			    <h4 class="sub_titulos">Alianzas Estratégicas</h4>
		    </div><!-- /col -->
		    <div class="col m10 offset-m1 s12 center white">
			    <?php
			$args = array(
				'post_type'	=> array('alianza'),
				'posts_per_page' => -1,
				'orderby' => 'title',
				'order' => 'ASC'
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();	
?>				
				<div class="col m3">
					<?php the_post_thumbnail('full',array( 'class' => 'responsive-img' ) ); ?> 
				</div>
<?php 		
        endwhile; 
  } 
?>					
			</div><!-- /col -->
	    </div><!-- /row -->
	    </div><!-- /container -->
		</div><!-- /section -->
	</div><!-- /alianzas_extrategicas -->

<?php get_footer(); ?>
