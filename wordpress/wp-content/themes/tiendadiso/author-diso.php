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
                <div>
                    <h1 class="bread mt-5"><?php the_author_nickname($curauth->ID)?></h1>
                    <h4 class="bread textolowsize"><?php echo strtoupper(get_author_role($curauth->ID)) ?></h4>
                </div>
            </div>
            <div class="col-md-12 mb-5 enlinea">
                <a href="https://www.facebook.com/<?php echo get_the_author_meta('facebook', $curauth->ID); ?>" target="blank" class="enlaceadmin"><span class="icon-facebook mr-1 circle-icon">
                    </span>
                </a>

                <a href="https://www.twitter.com/<?php echo get_the_author_meta('twitter', $curauth->ID); ?>" target="blank" class="enlaceadmin"><span class="icon-twitter mr-1 circle-icon">
                    </span>
                </a>

                <a href="https://www.linkedin.com/in/<?php echo get_the_author_meta('linkedin', $curauth->ID); ?>" target="blank" class="enlaceadmin"><span class="icon-linkedin mr-1 circle-icon">
                    </span>
                </a>
            </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ftco-animate">
          	<div class="row">
                <div class="col-md-12 mb-5 text-center">
                    <?php 
                        $correo = get_the_author_email($curauth->ID);
                        if(has_gravatar($correo)){
                            echo "<img class='rounded-circle' src=";
                            echo "'".get_avatar_url($curauth->ID)."'";
                            echo "' alt='Ooops! Image not found' height='250px'/>";
                        }else{
                            echo "<img class='rounded-circle' src=";
                            echo "'".get_template_directory_uri()."/images/defaultavatar.png'";
                            echo "' alt='Ooops! Imagen no encontrada' height='250px'/>";
                        };
                    ?>
                </div>
                <div class="col-md-2 mb-5"></div>
                <div class="col-md-8 mb-5">
                    <?php the_author_description($curauth->ID)?>
                </div>
                <div class="col-md-2 mb-5"></div>
                
                <div class="col-md-12 gauge">
                    <ul>
                        <li class="circle-gauge"><a style="--gauge-value:<?php echo get_the_author_meta('skill1v', $curauth->ID); ?>
                        ;"></a><span>
                            <?php 
                                echo get_the_author_meta('skill1', $curauth->ID);
                            ?>
                        </span></li>
                        <li class="circle-gauge"><a style="--gauge-value:<?php echo get_the_author_meta('skill2v', $curauth->ID); ?>
                        ;"></a><span>
                            <?php 
                                echo get_the_author_meta('skill2', $curauth->ID);
                            ?>
                        </span></li>
                        <li class="circle-gauge"><a style="--gauge-value:<?php echo get_the_author_meta('skill3v', $curauth->ID); ?>
                        ;"></a><span>
                            <?php 
                                echo get_the_author_meta('skill3', $curauth->ID);
                            ?>
                        </span></li>
                        <li class="circle-gauge"><a style="--gauge-value:<?php echo get_the_author_meta('skill4v', $curauth->ID); ?>
                        ;"></a><span>
                            <?php 
                                echo get_the_author_meta('skill4', $curauth->ID);
                            ?>
                        </span></li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <h1 class="mb-5" style="text-align:center;">Últimas entradas de 
                        <?php 
                            the_author_meta('first_name', $curauth->ID);
                            echo " ";
                            the_author_meta('last_name', $curauth->ID);
                        ?>:
                    </h1>
				</div>       
                
			  	<?php
					$args = array(
						'posts_per_page' => 3,
                        'author' => $curauth->ID,
					);
					$custom = new WP_Query($args);
					if($custom->have_posts()):
					while($custom->have_posts()):
						$custom->the_post();
				?>		
				<div class="col-md-4 ftco-animate">
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
        </div>
      </div>
      <?php get_sidebar("admin"); ?>
    </section>

    <?php
        get_footer();
    ?>