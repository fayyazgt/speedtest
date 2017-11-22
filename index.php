<?php

require('../wp-blog-header.php');

/**
 * Template Name: shaty
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();

wp_head();

echo get_post_field('post_content', $post_id);
?>

<?php get_footer(); ?>