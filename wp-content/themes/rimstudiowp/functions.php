<?php
    function rimstudio_assets() {
        wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/index.css');
        wp_enqueue_style('projectscss', get_template_directory_uri() . '/assets/css/page_projects.css');

        wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true);
    }
    add_action('wp_enqueue_scripts', 'rimstudio_assets');
    show_admin_bar(false);

    add_theme_support('post-thumbnails');
    add_theme_support('post-thumbnails', array('project'));
?>