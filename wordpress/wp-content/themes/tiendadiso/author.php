<?php 
    get_header();
    $curauth = (get_query_var('author_name')) ? get_user_by('slug',
    get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>
<body>

    <?php get_template_part('nav')?>
    <?php
        if(get_the_author_meta('userpic', $curauth->ID) == ""){
            $directorio = get_template_directory_uri();
            $imagen = $directorio."/images/defaultuserprofile.jpg";
        }else{
            $imagen = get_the_author_meta('userpic', $curauth->ID);
        }
    ?>
    <section class="hero-wrap hero-wrap-2 seccionarchive" style="background-image:url('<?php echo $imagen;?>');background-position: center center;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center tituloarchive">
          <div class="text-center ftco-animate">
              <h1 class="bread mt-5"><?php the_author_nickname($curauth->ID)?></h1>
              <h4 class="bread textolowsize"><?php echo strtoupper(get_author_role($curauth->ID)) ?></h4>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<div class="row">
                <div class="col-md-4 mb-5">
                    <?php 
                        $correo = get_the_author_email($curauth->ID);
                        if(has_gravatar($correo)){
                            echo "<img class='rounded-circle' src=";
                            echo "'".get_avatar_url($curauth->ID)."'";
                            echo "' alt='Ooops! Image not found' height='100%' width='100%'/>";
                        }else{
                            echo "<img class='rounded-circle' src=";
                            echo "'".get_template_directory_uri()."/images/defaultavatar.png'";
                            echo "' alt='Ooops! Image not found' height='100%' width='100%'/>";
                        };
                    ?>
                </div>
                <div class="col-md-8 mb-5">
                    <?php the_author_description($curauth->ID)?>
                </div>
                
                <div class="col-md-12 mb-5 enlinea">
                    <div class="col-md-4">
                        <a href="https://www.facebook.com/" target="blank" class="enlace"><span class="icon-facebook mr-1">
                            <?php 
                                echo get_the_author_meta('facebook', $curauth->ID);
                            ?>
                            </span>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="https://www.twitter.com/" target="blank" class="enlace"><span class="icon-twitter mr-1">
                            <?php 
                                echo get_the_author_meta('twitter', $curauth->ID);
                            ?>
                            </span>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="https://www.linkedin.com/" target="blank" class="enlace"><span class="icon-linkedin mr-1">
                            <?php 
                                echo get_the_author_meta('linkedin', $curauth->ID);
                            ?>
                            </span>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <!-- Blue -->
                    <div class="progress mb-4">
                    
                        <div class="progress-bar pastel1" style="width:<?php 
                        if(get_the_author_meta('skill1v', $curauth->ID) >= 100){
                            echo 100;
                        }else{
                            echo get_the_author_meta('skill1v', $curauth->ID); 
                        }
                        ?>%"></div>
                        <small class="justify-content-center d-flex position-absolute w-100"><?php echo get_the_author_meta('skill1', $curauth->ID); ?></small>
                    </div>

                    <!-- Green -->
                    <div class="progress mb-4">
                        <div class="progress-bar pastel2" style="width:<?php 
                        if(get_the_author_meta('skill2v', $curauth->ID) >= 100){
                            echo 100;
                        }else{
                            echo get_the_author_meta('skill2v', $curauth->ID); 
                        }
                        ?>%"></div>
                        <small class="justify-content-center d-flex position-absolute w-100"><?php echo get_the_author_meta('skill2', $curauth->ID); ?></small>
                    </div>

                    <!-- Turquoise -->
                    <div class="progress mb-4">
                        <div class="progress-bar pastel3" style="width:<?php 
                        if(get_the_author_meta('skill3v', $curauth->ID) >= 100){
                            echo 100;
                        }else{
                            echo get_the_author_meta('skill3v', $curauth->ID); 
                        }
                        ?>%"></div>
                        <small class="justify-content-center d-flex position-absolute w-100"><?php echo get_the_author_meta('skill3', $curauth->ID); ?></small>
                    </div>

                    <!-- Orange -->
                    <div class="progress mb-4">
                        <div class="progress-bar pastel4" style="width:<?php 
                        if(get_the_author_meta('skill4v', $curauth->ID) >= 100){
                            echo 100;
                        }else{
                            echo get_the_author_meta('skill4v', $curauth->ID); 
                        }
                        ?>%"></div>
                        <small class="justify-content-center d-flex position-absolute w-100"><?php echo get_the_author_meta('skill4', $curauth->ID); ?></small>
                    </div>
                </div>


                <h1 class="mb-5" style="text-align:center;">Últimas entradas de 
                    <?php 
                        the_author_meta('first_name', $curauth->ID);
                        echo " ";
                        the_author_meta('last_name', $curauth->ID);
                    ?>:
                </h1>
			  	<?php
					$args = array(
						'posts_per_page' => 4,
                        'author' => $curauth->ID,
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
					wp_reset_postdata();
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