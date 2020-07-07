<?php 

function gt_setup() {

    // adding css
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=PT+Sans');
    wp_enqueue_style('font_awesome', '//kit.fontawesome.com/51ea1f35e7.js');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
    // adding js
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

// adding theme support
function gt_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
        array('comment-list', 'comment-form')
    );
}

add_action('after_setup_theme', 'gt_init');

// adding project post type
function gt_custom_post_type() {
    register_post_type('project', 
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'projects',
                'singular_name' => 'Project',
                'add_new_item' => 'Add a new project',
                'edit_item' => 'Edit project'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
            );
}

add_action('init', 'gt_custom_post_type');