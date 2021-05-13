<?php
    require_once('header.php');
    $busqueda = $_GET['s'];
    $total = $wp_the_query->post_count;
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
                    <li><a href="<?php echo get_page_link(get_page_by_title('Todos los posts')->ID);?>" class="tag-cloud-link">Todos</a></li>
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
		                <?php the_posts_pagination($paginacion); ?>
		            </div>
		        </div>
			</div>
          </div>
          <?php
              wp_reset_postdata();
          ?>
          <?php get_sidebar("search"); ?>
        </div>
      </div>
    </section>

<?php
    get_footer();
?>