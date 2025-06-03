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
?>
