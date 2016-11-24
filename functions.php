<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function someskin_widgets_init() {

    register_sidebar( array(
        'name'          => 'the widgets',
        'id'            => 'sidebar_widgets',
        'description'   => 'de widgets voor de sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => 'bottom widgets',
        'id'            => 'footer_widgets',
        'description'   => 'de widgets voor de footer',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'someskin_widgets_init' );
?>