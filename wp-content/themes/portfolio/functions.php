<?php 
add_action('wp_enqueue_script','portfolio_enqueue_styles');
function portfolio_enqueue_styles()({
    wp_enpueue_style('parent-style', get_template_directory_uri().'/style.css')
}

function portfolio_enqueue_styles() {
    $parent_style ='parent style';
    wp_enqueue_style($parent_style, get_template_directory_uri().'style.css')
        wp_enqueue_style('child-style',
                        get_stylesheet_dictory_uri().'/style.css',
                        array($parent_style)
                        );
    add_action('wp_enqueue_script','awesome_enque_style');
}
