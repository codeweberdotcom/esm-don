<?php
/*
 * This is the child theme for Codeweber theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action('wp_enqueue_scripts', 'esm_don_enqueue_styles');
function esm_don_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
/*
 * Your code goes below
 */

add_filter('sanitize_taxonomy_name', function ($urldecode, $taxonomy) {
    $urldecode = mb_substr($urldecode, 0, 26, 'utf-8');
    return $urldecode;
}, 10, 2);
