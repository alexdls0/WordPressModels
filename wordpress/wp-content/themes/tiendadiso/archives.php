<?php
    /*
        Template Name:Archivos
    */
  	get_header();
  	/*$curauth = (get_query_var('author_name')) ? get_user_by('slug',
    get_query_var('author_name')) : get_userdata(get_query_var('author'));*/
?>


<body>

	<?php get_template_part('nav')?>
    <section class="hero-wrap hero-wrap-2 seccionarchives"></section>
    <div class="p-3 mb-5">
        <div class="grid">
            <div class="grid-item mb-3">
                <h5>Tags</h5>
                <ul class="list-unstyled">
                    <?php
                        list_tags();
                    ?>
                </ul>
            </div>
            <div class="grid-item mb-3">
                <h5 class="ml-3">Posts más vistos</h5>
                <div class="mb-5">
                    <?php
                    $args = array(
                      'posts_per_page' => 3,
                      'post_type' => array('post','models_hiring'),
                      'meta_key' => '_post_views_count',
                      'orderby' => 'meta_value_num',
                    );
                    $custom = new WP_Query($args);
                    if($custom->have_posts()):
                      while($custom->have_posts()):
                        $custom->the_post();
                        echo '<div class="d-flex align-items-center">';
                        echo '<ul class="mb-3 list-unstyled">';
                        echo '<li><a href="'.get_permalink($post->ID).'"> '.$post->post_title.'</a><i class="icon-eye"></i>'.get_post_meta($post->ID,'_post_views_count')[0].'<hr "></li>';
                        echo '</ul>';
                        echo '</div>';
                      endwhile;
                    endif;
                      wp_reset_postdata();
                  ?>
                </div>
            </div>
            <div class="grid-item mb-3">
                <h5>Categorias</h5>
                <div class="mb-5">
                    <?php
						$categories = get_categories( array(
						    'orderby' => 'name',
						    'order'   => 'ASC'
						) );
						echo '<ul class="list-unstyled">';
						foreach($categories as $category) {
							echo '<li><i class="icon-folder"></i><a class="ml-3 mr-3" href="'. esc_url( get_category_link( $category->term_id ) ) .'">' . $category->name . '</a></li>';
						}
						echo '</ul>';
					?>
                </div>
            </div>
           
            <div class="grid-item mb-3">
                <div class="d-flex justify-content-around align-items-center anchopequenio3">
                    <i class="icon-calendar"></i>
                    <h5>Archivos diarios</h5>
                </div>
                <div class="mb-5">
                    <ul class="list-unstyled w-100 ulcolocado">
                         <?php 
                            $args = array (
                                'type' => 'daily',
                                'show_post_count' => 1,
                                'echo' => false,
                            );
                            $dailypost = wp_get_archives( $args );
                            $dailypost = preg_replace( '~(&nbsp;)(\(\d++\))~', '$1<span class="text-right"> &#62 $2</span>', $dailypost );
                            $dailypost = preg_replace('/[\(\)]/', '', $dailypost); 
                            echo $dailypost;
                        ?>
                        </ul>
                </div>
            </div>
            
            <div class="grid-item mb-3">
                <div class="d-flex justify-content-around align-items-center anchopequenio2">
                    <i class="icon-calendar"></i>
                    <h5>Archivos mensuales</h5>
                </div>
                <div class="mb-5">
                    <ul class="list-unstyled w-100 ulcolocado">
                         <?php 
                            $args = array (
                                'type' => 'monthly',
                                'show_post_count' => 1,
                                'echo' => false,
                            );
                            $dailypost = wp_get_archives( $args );
                            $dailypost = preg_replace( '~(&nbsp;)(\(\d++\))~', '$1<span class=""> &#62 $2</span>', $dailypost );
                            $dailypost = preg_replace('/[\(\)]/', '', $dailypost); 
                            echo $dailypost;
                        ?>
                        </ul>
                </div>
            </div>
            <div class="grid-item mb-3">
                <div class="d-flex justify-content-around align-items-center anchopequenio">
                    <i class="icon-calendar"></i>
                    <h5>Archivos anuales</h5>
                </div>
                <div class="mb-5">
                    <ul class="list-unstyled ulcolocado">
                         <?php 
                            $args = array (
                                'type' => 'yearly',
                                'show_post_count' => 1,
                                'echo' => false,
                            );
                            $dailypost = wp_get_archives( $args );
                            $dailypost = preg_replace( '~(&nbsp;)(\(\d++\))~', ' $1 <span>&#62 $2</span>', $dailypost );
                            $dailypost = preg_replace('/[\(\)]/', '', $dailypost);
                            echo $dailypost;
                        ?>
                    </ul>
                </div>
            </div>
            <div class="grid-item mb-3">
                <h5 class="text-center">Autores y Nº posts</h5>
                <?php
                    //Colección de objetos autor
                    $authors = get_users(array( 
                        'fields' => array( 'display_name', 'ID' ) ,
                        'orderby' =>'post_count',
                        'order' => 'DESC',
                        )); 
                    foreach($authors as $auth) {
                ?>
                
                <div>
                    <div class="d-flex justify-content-beetwen align-items-center">
                        <i class="icon-child mr-2 "></i>
                        <h6 class="text-left w-100 d-flex justify-content-beetwen align-items-center"><a class="w-100"href="
                        <?php echo get_author_posts_url($auth->ID); ?>"><?php echo $auth->display_name;?></a>
                        <?php echo count_user_posts_by_type($auth->ID,array('post','models_hiring'));?></h6>
                    </div>
                </div>
                <?php
                        
                    }
                ?>
            </div>
            <div class="grid-item mb-3">
                <h5 class="text-center">Autores y Nº custom posts</h5>
                <?php
                    //Colección de objetos autor
                    $authors = get_users(array( 
                        'fields' => array( 'display_name', 'ID' ),
                        'orderby' => 'post_count',
                        'order' => 'DESC',
                    )); 
                    foreach($authors as $auth) {
                ?>
                
                <div>
                    <div class="d-flex justify-content-beetwen align-items-center">
                        <i class="icon-child mr-2 "></i>
                        <h6 class="text-left w-100 d-flex justify-content-beetwen align-items-center"><a class="w-100"href="
                        <?php echo get_author_posts_url($auth->ID); ?>"><?php echo $auth->display_name;?></a>
                        <?php echo count_user_posts_by_type($auth->ID,array('models_hiring'));?></h6>
                    </div>
                </div>
                <?php
                        
                    }
                ?>
            </div>
            <div class="grid-item mb-3">
                <h5 class="ml-3">Posts más comentados</h5>
                <div class="mb-5">
                    <?php
                    $args = array(
                      'posts_per_page' => 3,
                      'post_type' => array('post','models_hiring'),
                      'orderby' => 'comment_count',
                    );
                    $custom = new WP_Query($args);
                    if($custom->have_posts()):
                      while($custom->have_posts()):
                        $custom->the_post();
                        echo '<div class="d-flex align-items-center">';
                        echo '<ul class="list-unstyled">';
                        echo '<li><a href="'.get_permalink($post->ID).'"> '.$post->post_title.'</a><i class="icon-comment"></i>'
                        .get_comments_number($post->ID).'<hr "></li>';
                        echo '</ul>';
                        echo '</div>';
                      endwhile;
                    endif;
                      wp_reset_postdata();
                  ?>
                </div>
            </div>
            <?php
                // colección de objetos autor
                $authors = get_users(array( 'fields' => array( 'display_name', 'ID' ) )); 
                foreach($authors as $auth) {
                    $args = array (  
                        'post_type'=>array('post','models_hiring'),
                        'author'        =>  $auth->ID,
                        'orderby'       =>  'post_date',
                        'order'         =>  'DESC',
                    );
                   
                   $post_by_author = get_posts( $args );
            ?>
                <div class="grid-item mb-3">
                    <h4 class="text-center"><i class="icon-person"></i><?php echo $auth->display_name;?></h4>
                    <?php
                       if(count($post_by_author) != 0){
                    ?>
                    <p class="">
                    <?php
                       echo '<ul class="mb-3 list-unstyled">';
                           foreach ( $post_by_author as $post) {
                               echo '<li><a href="'.get_permalink($post->ID).'"> '.$post->post_title.'</a></li><hr ">';
                           }
                           echo '</ul>';
                       }else{
                           echo '<p class="text-center mt-3 mb-5"> Ningún posts publicado </p>';
                       }
                       wp_reset_postdata();
                    ?> 
                    </p>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
    
  
  
  
  
<?php
    get_footer();
?>
