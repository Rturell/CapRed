<?php 

$context = Timber::context();

$documentos = get_field('documentos');

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
$context['documentos'] = $documentos;
Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'page.twig' ), $context );