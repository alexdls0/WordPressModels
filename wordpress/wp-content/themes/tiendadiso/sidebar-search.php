<div class="col-lg-4 sidebar ftco-animate">
		  
		  <!--div class="sidebar-box">
				<form action="#" class="search-form">
				<div class="form-group">
					<span class="icon icon-search"></span>
					<input type="text" class="form-control" placeholder="Type a keyword and hit enter">
				</div>
				</form>
			</div-->

			<div class="sidebar-box ftco-animate centrado sinmargen">
				<h3>Nube de Tags</h3>
				<?php 
					if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widget Area')):
				?>
				<h6>Lo sentimos, no existe un widget en este tema para visualizar una nube de tags.</h6>
				<?php
					endif;
				?>
			</div>

			<div class="sidebar-box ftco-animate centrado">
				<h3>Posts por fecha</h3>
				<div class="totheleft">
					<?php
						wp_get_archives();
					?>
				</div>
			</div>

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

			<div class="sidebar-box ftco-animate darklist centrado">
				<h3>Autores</h3>
				<ul class="categories darklist">
				<?php
					wp_list_authors('optioncount=0&hide_empty=0');
				?>
				</ul>
			</div>

            <div class="sidebar-box ftco-animate  centrado">
              <h3>Categorías</h3>
              <ul class="tagcloud tag-cloud-link">
			  <?php
					wp_list_categories('title_li');
			  ?>
                <!--a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a-->
              </ul>
            </div>

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

			<div class="sidebar-box subs-wrap">
				<h3>Suscríbete para más información</h3>
				<p>Si deseas estar al día sobre moda y te gusta leer nuestros blogs suscríbete</p>
              <form action="<?php echo get_page_link(get_page_by_title('Contacto')->ID);?>" method="get" class="subscribe-form">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" name="emailcontacto">
                  <input type="submit" value="Suscribirse" class="mt-2 btn btn-white submit">
                </div>
              </form>
            </div>
          </div>