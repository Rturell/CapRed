<?php

$context = Timber::context();


$slide = get_field('slide');

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
$context['slide'] = $slide;
$context['posts'] = Timber::get_posts(array('post_type' => 'post', 'numberposts' => 4));
Timber::render( array( 'front-page.twig', 'page.twig' ), $context );


