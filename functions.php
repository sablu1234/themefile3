<?php



if(!function_exists('mytheeme')){
    function mytheeme(){
        add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        add_theme_support( 'post-thumbnails');
        add_theme_support( 'responsive-embeds');
        add_theme_support( 'editor-styles');
        add_theme_support( 'html5', array( 'style','script' ) );
        add_theme_support( 'automatic-feed-links');
    }
}





add_action( 'after_setup_theme', 'mytheeme');



?>