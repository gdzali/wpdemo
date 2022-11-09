<?php
/**
 * Register hero block
 */
add_action('acf/init', 'hero');
function hero() {

    // check function exists
    if( function_exists('acf_register_block') ) {

        // register a hero block
        acf_register_block(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'render_callback'   => 'hero_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-image',
            'mode'              => 'preview',
            'keywords'          => array( 'hero', 'image' ),
        ));
    }
}

function hero_render_callback( $block, $content = '', $is_preview = false ) {
    get_template_part('core/templates/hero-section');
}
