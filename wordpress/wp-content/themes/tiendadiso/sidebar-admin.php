
    <div class="row sinmargen">
        <div class="col-md-3 ftco-animate">
            <div class="sidebar-box ftco-animate darklist  centrado">
                <h3>Páginas</h3>
                <ul class="categories">
                <?php
					$arraypaginas = get_pages();
					foreach($arraypaginas as $pagina){
						if(!in_array($pagina->post_title, array('Home','Blog','Modelos','Galería','Archivos','Contacto','Privado'))){
							$a_excluir[] = $pagina->ID;
						}
					}
					$excluir = implode(',',$a_excluir);
					$args = array(
						'title_li' => '',
						'exclude' => ''.$excluir,
						
					);
					wp_list_pages($args);
			  	?>
                </ul>
            </div>
        </div>
        <div class="col-md-3 ftco-animate">
            <div class="sidebar-box ftco-animate darklist centrado">
                <h3>Autores</h3>
                <ul class="categories darklist">
                <?php
                    wp_list_authors('optioncount=0&hide_empty=0');
                ?>
                </ul>
            </div>
        </div>
        <div class="col-md-3 ftco-animate">
            <div class="sidebar-box ftco-animate  centrado">
                <h3>Categorías</h3>
                <ul class="tagcloud tag-cloud-link">
                <?php
                    wp_list_categories('title_li');
                ?>
                </ul>
            </div>
        </div>
        <div class="col-md-3 ftco-animate">
            <div class="sidebar-box ftco-animate">
                <h3 class="text-center mb-5">Últimos artículos</h3>
                    <?php
                        $args = array(
                            'posts_per_page' => 3,
                        );
                        $custom = new WP_Query($args);
                        if($custom->have_posts()):
                        while($custom->have_posts()):
                            $custom->the_post();

                        if(!has_post_thumbnail()){
                            $foto = cogerImagen();
                            if($foto == "/images/defaultimage.jpg"){
                                $foto = get_template_directory_uri().$foto;
                            }
                        }else{
                            $foto = get_the_post_thumbnail_url();
                        }
                    ?>
                    <div class="block-21 mb-4 d-flex">
                        <a href="<?php the_permalink(); ?>" class="blog-img mr-4" style="background-image: url('<?php echo $foto ?>'"></a>
                        <div class="text">
                            <h3 class="heading titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="meta mb-3">
                                <div>
                                    <a class="resaltarenlace" href="<?php echo get_author_posts_url( $post->post_author ); ?>"><span class="icon-user"></span> <?php the_author(); ?></a>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    <?php
                        endwhile;
                        else:
                        echo '';
                        endif;
                        wp_reset_postdata();
                    ?>	
            </div>
        </div>
    </div>
