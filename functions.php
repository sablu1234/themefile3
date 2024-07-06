<?php


if(!function_exists('mythemefucntions')){

    function mythemefucntions(){
        add_theme_support('post-thumbnails');
    }




    function change_featured_image_text( $content ) {
        return $content = str_replace( __( 'Set featured image' ), __( 'hadi tor image change kor' ), $content);
    }
    add_filter( 'admin_post_thumbnail_html', 'change_featured_image_text' );

}


add_action('after_setup_theme','mythemefucntions');

?>