<?php
    // Template Name: Main

    // Template Post Type: post, pages

    get_header();
?>

<div class="projectsGallery">

<?php

    $my_posts = get_posts( array(
        'numberposts' => -1,
        'category_name'    => 'projects',
        'orderby'     => 'date',
        'order'       => 'ASC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  =>'',
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

    global $post;

    foreach( $my_posts as $post ){
        setup_postdata( $post );

        ?>

            <a class="projectsCard" href="<?php echo get_permalink();?>">
                <div class="projectsText"><?php the_field('title');?></div>
                <img class="projectsImage" src="<?php the_field('main_image');?>">
            </a>

        <?php
    }
    wp_reset_postdata(); // сброс

?>

    </div>

<?php

    get_footer();

?>
