<?php
function pac_lt_enqueue_assets() {
    wp_enqueue_style(
        'pac-fonts',
        'https://fonts.googleapis.com/css2?display=swap&family=Noto+Sans:wght@400;500;700;900&family=Public+Sans:wght@400;500;700;900',
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
}
add_action( 'wp_enqueue_scripts', 'pac_lt_enqueue_assets' );
add_theme_support( 'title-tag' );
?>
