<?php 

$context = Timber::context();

$cats = get_categories();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
$context['categories'] = $cats;
$context['posts'] = Timber::get_posts(array('post_type' => 'post'));
Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'page.twig' ), $context );