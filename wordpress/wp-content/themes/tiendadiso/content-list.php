<?php
    global $number;
    global $pageSearch;
    
    $number++;
    if(isset($pageSearch)){
        $total = $number+(4*($pageSearch-1));    
    }else{
        $total = $number;
    }
    
    
    echo "<td class='darklist'>".$total."</td>";
?>
    <td class="darklist"> <?php the_time('j M Y'); ?></td>
    <td class="enlaceoscuroresaltado"> <?php the_author_posts_link(); ?></td>
    <td> <a class="darklist resaltarenlace" href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </td>