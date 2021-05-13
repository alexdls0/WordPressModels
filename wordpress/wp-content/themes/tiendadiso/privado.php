<?php
    /*
        Template Name:Privado
    */
	get_header();
?>
<body>
    <?php get_template_part('nav')?> 
    <section class="hero-wrap hero-wrap-2 seccionarchive" style="background-image:url('<?php echo get_template_directory_uri();?>/images/privado.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center tituloarchive">
          <div class="text-center ftco-animate">
            <h1 class="bread mt-5">Zona Privada</h1></div>
          </div>
      </div>
    </section>
    <section class="mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate w-100 d-flex justify-content-center">
            <div class="divtablaprivado mt-3 mb-5">
                <?php
                    if(is_user_logged_in()){
                        //Si está logueado cogemos el rol del usuario, mostramos contenido específico, un botón de logout, y un site admin para ir al backend
                        $curauth = wp_get_current_user();
                        $rol = get_author_role($curauth->ID);
                        if($rol == "administrator"){
                          $rol = "administrador";
                        }
                        if($rol == "author"){
                          $rol = "autor";
                        }
                        if($rol == "contributor"){
                          $rol = "contribuyente";
                        }
                        if($rol == "subscriber"){
                          $rol = "suscriptor";
                        }
                        echo "<h2 class='text-center'>Bienvenido ".$rol." ".$curauth->first_name.' '.$curauth->last_name."</h2>";
                        echo the_author_nickname($curauth->ID);

                ?>
                
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
                <div class="row mt-3 mb-3 text-center">
                  <div class="col-md-12">
                    <h4>Mis 4 últimos posts</h4>
                  </div>
                </div>
                <div class="row">
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
                
                <?php
                        
                        echo "<h6>".wp_register("","")."</h6>";
                        echo '<h6><a href="'.wp_logout_url(get_page_link(get_page_by_title('Privado')->ID)).'">Cerrar sesión</a></h6>';
                    }else{
                        //Sino visualizo el formulario de login y un enlace al registro
                        echo "<h4 class='mb-3'>Iniciar sesión</h4>";
                        wp_login_form();
                        wp_register("","");
                    }
                ?>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
    get_footer();
?>