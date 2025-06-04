<?php
function pac_lt_enqueue_assets() {
    wp_enqueue_style(
        'pac-fonts',
        'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:wght@400;500;600;700&family=Open+Sans:wght@400&display=swap',
        [],
        null
    );
    wp_enqueue_script(
        'pac-tailwind',
        'https://cdn.tailwindcss.com?plugins=forms,container-queries',
        [],
        null,
        false
    );

    wp_enqueue_script(
        'pac-rotate',
        get_template_directory_uri() . '/mouse-rotate.js',
        [],
        null,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'pac_lt_enqueue_assets' );
add_theme_support( 'title-tag' );

function pac_lt_create_landing_page() {
    $slug = 'lightning-talk-landing';
    if ( ! get_page_by_path( $slug ) ) {
        $content = file_get_contents( get_template_directory() . '/landing-page-template.html' );
        $content = str_replace( '{{template_url}}', get_template_directory_uri(), $content );
        wp_insert_post([
            'post_title'   => 'Lightning Talk Landing',
            'post_name'    => $slug,
            'post_content' => $content,
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ]);
    }
}
add_action( 'after_switch_theme', 'pac_lt_create_landing_page' );
?>
