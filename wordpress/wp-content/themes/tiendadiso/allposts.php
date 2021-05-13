<?php
    /*
        Template Name: Allposts
    */
?>
<?php
    require_once('header.php');
    $args = array(
	  'post_type' => array('post','models_hiring'),
    );
    $custom = new WP_Query($args);
    $busqueda = $_GET['s'];
    $total = $custom->post_count;
    if($total == 0){
        $label = "No hay ningún post";
    }else{
        if($total == 1){
            $label = "Se ha encontrado 1 post";
        }else{
            $label = "Se han encontrado ".$total." posts";
        }
    }
?>
<body>
<?php get_template_part('nav')?>
    <section class="hero-wrap hero-wrap-2 seccionarchive" style="background-image:url('<?php echo get_template_directory_uri();?>/images/busqueda.jpg');background-position: center center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center tituloarchive">
          <div class="text-center ftco-animate">
          	<h1 class="bread mt-5"><?php echo $label ?></h1>
            <div class="miformulariosearch bordeado">
                <?php get_search_form(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="mt-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
              <div class="searchcategoriescontainer">
                  <ul class="tagcloud tag-cloud-link searchcategories">
        			  <?php
        					wp_list_categories(array(
        					    'title_li' => '',
        					    'number'=> 5,
        					    ));
        			  ?>
                    <li><a href="<?php echo get_page_link(get_page_by_title('All posts')->ID);?>" class="tag-cloud-link">Todos</a></li>
                  </ul>
              </div>
            </div>
        </div>
      </div>
    </section>

    <section class="mt-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <?php
                if($_GET['s'] == ''){
                    echo "<h3 class='text-center'>Resultados: </h3>";
                }else{
                    echo "<h3 class='text-center'>Resultados para: $busqueda </h3>";
                }
            ?>
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
                        global $wp_query;
                        $original_query = $wp_query;
                        $query_args = array(
                            'post_type' => array( 'post','models_hiring'),
                            'posts_per_page' => 4,
                            'paged' => $pageSearch
                        );
                        $custom = new WP_Query( $query_args );
                        $wp_query = $custom;
                        
                        
                        if($custom->have_posts()):
                            while($custom->have_posts()):
                                $custom->the_post();
                                echo "<tr>";
                                get_template_part('content','list');  
                                echo "</tr>";      
                            endwhile;
                        endif;
                    ?>
                    <?php
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
                            $wp_query = $original_query
		                ?>
		            </div>
		        </div>
			</div>
          </div>
          <?php get_sidebar("search"); ?>
        </div>
      </div>
    </section>

<?php
    get_footer();
?>