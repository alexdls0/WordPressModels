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
				<h1 class="mb-3 mt-5 bread"><?php the_title(); ?></h1>
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
					
				?>
                    <p><?php the_content(); ?></p>
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
				?>
					<div class="row w-100">
			          <?php
			            $args = array(
			              'post__not_in' => array($post->ID),
			              'category__in' => wp_get_post_categories( $post->ID ),
			              'posts_per_page' => 2,
			              'post_type' => array('post','models_hiring'),
			            );
			            $custom = new WP_Query($args);
			            if($custom->have_posts()):
			              while($custom->have_posts()):
			                $custom->the_post();
			          ?>
			          <div class="col-md-6 ftco-animate">
			            <?php get_template_part('content',get_post_format()); ?>
			          </div>
			          <?php
			              endwhile;
			            endif;
			              wp_reset_postdata();
			          ?>
			        </div>
				<?php
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