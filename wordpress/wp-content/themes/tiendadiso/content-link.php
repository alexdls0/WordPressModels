<?php
    if(!has_post_thumbnail()){
        $foto = cogerImagen();
        if($foto == "/images/defaultimage.jpg"){
            $foto = get_template_directory_uri().$foto;
        }
    }else{
        $foto = get_the_post_thumbnail_url();
    }
    $visitor_count = get_post_meta( $post->ID, '_post_views_count', true);
    if( $visitor_count == '' ){ $visitor_count = 0; }
    if( $visitor_count >= 1000 ){
        $visitor_count = round( ($visitor_count/1000), 2 );
        $visitor_count = $visitor_count.'k';
    }
?>
<div class="col-md-12 ftco-animate opacidad">
    <div class="blog-entry">
        <a href="<?php the_permalink(); ?>" class="block-20" style="background-image: url('<?php echo $foto ?>');">
        </a>
        <div class="text d-flex py-4">
        
        <div class="meta mb-3">
            <div><a href="<?php the_permalink(); ?>" class="meta-chat"><span class="icon-calendar mr-1"></span><?php the_time('j M Y'); ?></a></div>
            <div><a href="#" class="meta-chat"><span class="icon-user mr-1"></span><?php the_author_posts_link(); ?></a></div>
            <div><a href="<?php the_permalink(); ?>" class="meta-chat"><span class="icon-chat mr-1"></span><?php comments_number('0 comentarios','1 comentario','% comentarios') ?></a></div>
            <div><a href="<?php the_permalink(); ?>" class="meta-chat"><span class="icon-eye mr-1"></span><?php echo esc_attr($visitor_count); ?></a></div>
        </div>
        <div class="desc pl-3 mt-3">
            <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
        </div>
    </div>
</div>