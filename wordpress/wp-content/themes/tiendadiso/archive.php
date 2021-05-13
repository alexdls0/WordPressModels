<?php
    require_once('header.php');
    $total = $wp_the_query->post_count;
    $label = "";

    if(have_posts()){
        if(is_category()){
            $label = 'Archivos para la categoría: '.single_cat_title('',false);
        }elseif(is_tag()){
            $label = 'Archivos para el tag: '.single_tag_title('',false);
        }elseif(is_day()){
            $label = 'Archivos para el día: '.get_the_date();
        }elseif(is_month()){
            $label = 'Archivos para el mes: '.get_the_date('F Y');
        }elseif(is_year()){
            $label = 'Archivos para el año: '.get_the_date('Y');
        }elseif(is_author()){
            the_post();
            $label = 'Archivos para el autor: '.'<a href="'.get_author_posts_url(get_the_author_meta("ID")).'">'.get_the_author().'</a>';
        }else{
            $label = 'Archivos: ';
        }
    }
?>

<body>
    <?php get_template_part('nav')?>
    <section class="hero-wrap hero-wrap-2 seccionarchive" style="background-image:url('<?php echo get_template_directory_uri();?>/images/pasarela.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center tituloarchive">
          <div class="text-center ftco-animate">
            <h1 class="bread mt-5"><?php echo $label ?></h1></div>
          </div>
      </div>
    </section>

    <!--section class="hero-wrap d-flex js-fullheight">
      <div class="overlay"></div>
      <div class="forth js-fullheight d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri();?>/images/bg_1.jpg');">
        <div class="text text-center">
          <h1><?php echo $label ?></h1>
        </div>
      </div>
      <div class="third about-img js-fullheight" style="background-image: url('<?php echo get_template_directory_uri();?>/images/bg_2.jpg');">
      </div>
    </section-->

    <section class="mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <div class="divtabla">
                <table class="tablaresultados">
                    <tr>
                        <th>#</th>
                        <th>Publicado</th>
                        <th>Autor</th>
                        <th>Título</th>
                    </tr>
                    <?php
                        $number = 0;
                        $pageSearch = get_query_var('paged') > 1 ? get_query_var('paged'):1;
                        if(have_posts()):
                            while(have_posts()):
                                echo "<tr>";
                                the_post();
                                get_template_part('content','list');  
                                echo "</tr>";      
                            endwhile;
                        endif;
                        $paginacion = array(
    						'mid_size' => 1,
    						'prev_text' => '&lt;',
    						'next_text' => '&gt;',
    						'screen_reader_text' => 'Páginas',
    					);
                        
                    ?>
                </table>    
            </div>
            <div class="w-100 d-flex justify-content-center mt-5">
				<div class="row mt-3 mb-5 col-md-12 d-flex justify-content-center">
		            <div class="block-27 paginacionwordpress">
		                <?php 
		                    the_posts_pagination($paginacion);
		                    wp_reset_postdata();
		                ?>
		                
		            </div>
		        </div>
			</div>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </section>
<?php
    get_footer();
?>