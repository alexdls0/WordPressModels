<?php
	get_header();
	if(!has_post_thumbnail()){
        $foto = cogerImagen();
        if($foto == "/images/defaultimage.jpg"){
            $foto = get_template_directory_uri().$foto;
        }
    }else{
        $foto = get_the_post_thumbnail_url();
	}	
?>

<body>
    <?php get_template_part('nav')?>
    <section class="hero-wrap hero-wrap-2 pantallacompleta" style="background-image:url('<?php echo $foto ?>');">
    	<div class="overlay"></div>
			<div class="container">
			<div class="row slider-text justify-content-center align-items-center">
			<div class="col-md-10 col-sm-12 text-center ftco-animate">
				<h2 class="mb-3 mt-5 bread"><?php the_title(); ?></h2>
			</div>
			</div>
		</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<div class="row">
			    <?php
					if(have_posts()):
					while(have_posts()):
						the_post();
				?>
				<?php
					if(get_post_format() == "link"){
						echo '<div class="col-md-12 ftco-animate tipoenlace">';
					}else{
						echo '<div class="col-md-12 ftco-animate">';
					}
					global $post;
					$visitor_count = get_post_meta( $post->ID, '_post_views_count', true);
					if( $visitor_count == '' ){ $visitor_count = 0; }
					if( $visitor_count >= 1000 ){
						$visitor_count = round( ($visitor_count/1000), 2 );
						$visitor_count = $visitor_count.'k';
					}
					$fechaNac = get_post_meta($post->ID, 'fechaNacModel', true);
			        $pais = get_post_meta($post->ID, 'paisModel', true);
			        $nombre = get_post_meta($post->ID, 'nombreModel', true);
			        $apellidos = get_post_meta($post->ID, 'apellidosModel', true);
			        $altura = get_post_meta($post->ID, 'alturaModel', true);
			        $medidaPecho = get_post_meta($post->ID, 'pechoModel', true);
			        $medidaCintura = get_post_meta($post->ID, 'cinturaModel', true);
			        $medidaCadera = get_post_meta($post->ID, 'caderaModel', true);
			        $aficiones = get_post_meta($post->ID, 'aficionesModel', true);
			        $curriculum = get_post_meta($post->ID, 'curriculumModel', true);
			        $disponible = get_post_meta($post->ID, 'disponibleModel', true);
			        $d = false;
			        if($disponible == "on"){
			        	$d = true;
			        }
					
				?>
					<div class="row">
						<div class="col-md-12 detalles">
							<?php
								if($d){
							?>
								<h2 class="text-center mt-3 disponible"><?php echo "Disponible"; ?></h2>
							<?php
								}else{
							?>
								<h2 class="text-center mt-5 nodisponible"><?php echo "No disponible"; ?></h2>
							<?php
								}
							?>
							<h3 class="mt-5"><?php echo $nombre . " " . $apellidos; ?></h3>
							<div class="row mt-4">
								<div class="col-md-12 mt-10 d-flex flex-row flex-wrap justify-content-between">
									<div class="d-flex flex-row flex-nowrap ml-3 mr-3">
										<img class="iconillo" src="<?php echo plugins_url("disomodels")?>/imgs/country.svg"/>
										<p class="ml-2"><?php echo $pais; ?></p>
									</div>
									<div class="d-flex flex-row flex-nowrap ml-3 mr-3">
										<img class="iconillo" src="<?php echo plugins_url("disomodels")?>/imgs/calendar.svg"/>
										<p class="ml-2"><?php echo $fechaNac; ?></p>
									</div>
									<div class="d-flex flex-row flex-nowrap ml-3 mr-3">
										<img class="iconillo" src="<?php echo plugins_url("disomodels")?>/imgs/altura.svg"/>
										<p class="ml-2">Altura: <?php echo $altura; ?></p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 mt-10 d-flex flex-row flex-wrap justify-content-between">
									<div class="d-flex flex-row flex-nowrap ml-3 mr-3">
										<img class="iconillo" src="<?php echo plugins_url("disomodels")?>/imgs/bra.svg"/>
										<p class="ml-2">Busto: <?php echo $medidaPecho; ?></p>
									</div>
									<div class="d-flex flex-row flex-nowrap ml-3 mr-3">
										<img class="iconillo" src="<?php echo plugins_url("disomodels")?>/imgs/waist.svg"/>
										<p class="ml-2">Cintura: <?php echo $medidaCintura; ?></p>
									</div>
									<div class="d-flex flex-row flex-nowrap ml-3 mr-3">
										<img class="iconillo" src="<?php echo plugins_url("disomodels")?>/imgs/hip.svg"/>
										<p class="ml-2">Cadera: <?php echo $medidaCadera; ?></p>
									</div>
									
								</div>
							</div>
							<h5 class="mt-4">Aficiones:</h5>
							<p><?php echo $aficiones; ?></p>
							<h5 class="mt-4">A nivel profesional:</h5>
							<p><?php echo $curriculum; ?></p>
						</div>
					</div>
					
		            <div class="text d-flex py-4 mt-5">
						<div class="meta mb-3 darktext">
						  <div><span class="icon-calendar mr-1"></span><?php the_time('j M Y'); ?></div>
						  <div><a href="<?php echo get_author_posts_url( $post->post_author ); ?>" class="darktext"><span class="icon-user mr-1"></span><?php the_author(); ?></a></div>
						  <div><span class="icon-chat"></span> <?php comments_number('0 comentarios','1 comentario','% comentarios') ?></div>
						  <div><span class="icon-eye"></span> <?php echo esc_attr($visitor_count); ?></div>
		                </div>
		              </div>
				</div>
				
				<?php
					endwhile;
					else:
					echo "No hay posts";
					endif;
					wp_reset_postdata();
					comments_template();
					
				?>
				  
		    </div>
		  </div> 
		  <?php get_sidebar(); ?>
        </div>
      </div>
    </section>

<?php
    get_footer();
?>