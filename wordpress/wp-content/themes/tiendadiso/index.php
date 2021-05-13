<?php
	get_header();
	$id_destacado;
?>


<body>

	<?php get_template_part('nav')?>

    <section class="hero-wrap hero-wrap-2 pantallacompleta" style="background-image:url('<?php echo get_template_directory_uri();?>/images/bg_1.jpg');">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">
          <div class="col-md-7 col-sm-12 text-center ftco-animate">
          	<h1 class="mb-3 mt-5 bread">Blog</h1>
            <!--p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p-->
          </div>
        </div>
      </div>
    </section>


	<section class="hero-wrap ajustarselectedpost">
		<div class="row maximocien sinmargen">
          <?php
            $args = array(
			  'posts_per_page' => 1,
			  'post_type'	   => array('post'),
			  //Excluir post-formats
			  'tax_query'	   =>array(
				  					array(
										  'taxonomy' => 'post_format',
										  'field' 	 => '',
										  'terms' 	 => array(
														'post-format-gallery',
														'post-format-link',
														'post-format-audio',
														'post-format-video',
														'post-format-quote',
														'post-format-image',
								    					),
										  'operator' => 'NOT IN'
									)
								)
            );
            $custom = new WP_Query($args);
            if($custom->have_posts()):
              while($custom->have_posts()):
				$custom->the_post();
				$id_destacado = $post->ID;
          ?>

		  <div class="col-md-6 ftco-animate sinpadding">
		  	<a href="<?php the_permalink(); ?>" class="block-20 pb-2 pt-2" style="background-image: url('<?php the_post_thumbnail_url() ?>'); background-position: center 10%;"></a>
		  </div>

          <div class="col-md-6 ftco-animate centrardiv">
      		<div class="col-md-12">
	            <div class="blog-entry mb-0">
	              <div class="text py-12">
	                <div class="desc">
	                  <h3 class="heading mt-4"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
					  <p><?php the_excerpt(); ?></p>
	                </div>
	              </div>
	            </div>
				<div class="meta pb-1">
					<div class="darktext"><span class="icon-calendar mr-1"></span><?php the_time('j M Y'); ?></div>
					<div><a href="<?php echo get_author_posts_url( $post->post_author ); ?>" class="darktext"><span class="icon-user mr-1"></span><?php the_author(); ?></a></div>
					<div class="darktext"><span class="icon-chat"></span> 3</div>
				</div>
			</div>
          </div>
          <?php
              endwhile;
            else:
              echo "No hay posts";
            endif;
              wp_reset_postdata();
          ?>
        </div>
	</section>

    <section class="ftco-section conpadding">
      <div class="container">
        <div class="row">
		  <div class="col-md-12">
		    <h1 class="mb-5" style="text-align:center;">Últimas entradas:</h1>
		  </div>
          <div class="col-lg-8 ftco-animate">
          	<div class="row">
			  	<?php
			  		$paged = get_query_var('paged') > 1 ? get_query_var('paged'):1;
					$args = array(
						'posts_per_page' => 4,
						'paged' => $paged,
						'post__not_in' => array($id_destacado),
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
					else:
					echo "No hay posts";
					endif;
					
					$paginacion = array(
						'mid_size' => 1,
						'prev_text' => '&lt;',
						'next_text' => '&gt;',
						'screen_reader_text' => 'Páginas',
					);
				?>
				<div class="w-100 d-flex justify-content-center">
					<div class="row mt-3 mb-5 col-md-12 d-flex justify-content-center">
			            <div class="block-27 paginacionwordpress">
			                <?php the_posts_pagination($paginacion); ?>
			            </div>
			        </div>
				</div>
				<?php
					
					wp_reset_postdata();
				?>

				<!--<div class="col-md-6 ftco-animate">
		            <div class="blog-entry">
		              <a href="blog-single.html" class="block-20" style="background-image: url('<?php //echo get_template_directory_uri();?>/images/image_1.jpg');">
		              </a>
		              <div class="text d-flex py-4">
		                <div class="meta mb-3">
		                  <div><a href="#">Sept. 20, 2018</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <div class="desc pl-3">
			                <h3 class="heading"><a href="#">The Most Attractive Persons of the Hollywood</a></h3>
			              </div>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 ftco-animate">
		            <div class="blog-entry" data-aos-delay="100">
		              <a href="blog-single.html" class="block-20" style="background-image: url('<?php //echo get_template_directory_uri();?>/images/image_2.jpg');">
		              </a>
		              <div class="text d-flex py-4">
		                <div class="meta mb-3">
		                  <div><a href="#">Sept. 20, 2018</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <div class="desc pl-3">
			                <h3 class="heading"><a href="#">The Most Attractive Persons of the Hollywood</a></h3>
			              </div>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 ftco-animate">
		            <div class="blog-entry" data-aos-delay="200">
		              <a href="blog-single.html" class="block-20" style="background-image: url('<?php //echo get_template_directory_uri();?>/images/image_3.jpg');">
		              </a>
		              <div class="text d-flex py-4">
		                <div class="meta mb-3">
		                  <div><a href="#">Sept. 20, 2018</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <div class="desc pl-3">
			                <h3 class="heading"><a href="#">The Most Attractive Persons of the Hollywood</a></h3>
			              </div>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 ftco-animate">
		            <div class="blog-entry">
		              <a href="blog-single.html" class="block-20" style="background-image: url('<?php //echo get_template_directory_uri();?>/images/image_4.jpg');">
		              </a>
		              <div class="text d-flex py-4">
		                <div class="meta mb-3">
		                  <div><a href="#">Sept. 20, 2018</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <div class="desc pl-3">
			                <h3 class="heading"><a href="#">The Most Attractive Persons of the Hollywood</a></h3>
			              </div>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 ftco-animate">
		            <div class="blog-entry" data-aos-delay="100">
		              <a href="blog-single.html" class="block-20" style="background-image: url('<?php //echo get_template_directory_uri();?>/images/image_5.jpg');">
		              </a>
		              <div class="text d-flex py-4">
		                <div class="meta mb-3">
		                  <div><a href="#">Sept. 20, 2018</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <div class="desc pl-3">
			                <h3 class="heading"><a href="#">The Most Attractive Persons of the Hollywood</a></h3>
			              </div>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 ftco-animate">
		            <div class="blog-entry" data-aos-delay="200">
		              <a href="blog-single.html" class="block-20" style="background-image: url('<?php //echo get_template_directory_uri();?>/images/image_6.jpg');">
		              </a>
		              <div class="text d-flex py-4">
		                <div class="meta mb-3">
		                  <div><a href="#">Sept. 20, 2018</a></div>
		                  <div><a href="#">Admin</a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <div class="desc pl-3">
			                <h3 class="heading"><a href="#">The Most Attractive Persons of the Hollywood</a></h3>
			              </div>
		              </div>
		            </div>
				  </div>-->
				  
		        </div>
		        <!--div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div-->
		  </div> 
		  <?php get_sidebar(); ?>

        </div>
      </div>
    </section> <!-- .section -->


<?php
    get_footer();
?>