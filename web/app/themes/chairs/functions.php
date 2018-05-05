<?php
$includes = array(
    'helpers',
    //ACF
    'acf/our-team',
    // 'acf/about-us',
    'acf/card-with-images',
    'acf/footer-call-to-action',
    'acf/generic-page-headers',
    'acf/homepage-card',
    'acf/homepage-header-cta',
    'acf/testimonial-carousel',
    'acf/the-program-sub-footer-content',
    'acf/the-program-header',
    'acf/the-program-card',
    'acf/how-it-work',
    'acf/contact-us-sub-footer',
    'acf/blogs-social-links'
);

add_theme_support( 'post-thumbnails' );

foreach($includes as $include) {
    // require_once get_template_directory() . '/src/' . $include . '.php';
}

function my_acf_init() {

}

add_action('acf/init', 'my_acf_init');

function ch_get_partial($path, $vars = array())
{
    if($vars) {
        foreach($vars as $key => $var) {
            set_query_var($key, $var);
        }
    }

    get_template_part($path);
}

function get_all_posts() {
   $args      = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
  );
  $posts = get_posts( $args );

  return $posts;

}


function get_category_posts() {
  $segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
  $numSegments = count($segments); 
  $currentSegment = $segments[$numSegments - 1];

  $arg      = array(
    'category_name' => $currentSegment,
  );

  $query = new WP_Query( $arg );
  
  return $query;
 
}

function get_active_segment() {
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    // print_r($uri_segments);
    return $uri_segments[1];
}

