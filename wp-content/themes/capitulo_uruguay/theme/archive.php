<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.2
 */

$templates = array( 'archive.twig', 'index.twig' );

$context = Timber::context();

$context['categories'] = get_categories();

$context['title'] = 'Archive';
if ( is_day() ) {
	$context['title'] = 'Archive: ' . get_the_date( 'D M Y' );
} elseif ( is_month() ) {
	$context['title'] = 'Archive: ' . get_the_date( 'M Y' );
} elseif ( is_year() ) {
	$context['title'] = 'Archive: ' . get_the_date( 'Y' );
} elseif ( is_tag() ) {
	$context['title'] = single_tag_title( '', false );
} elseif ( is_category() ) {
	$context['title'] = single_cat_title( '', false );
	$templates = 'page-novedades.twig';

	// Busca una página con el name=novedades
	$args = array(
		'name'        => 'novedades',
		'post_type'   => 'page',
		'post_status' => 'publish',
		'numberposts' => 1
	);
	// ejecuta el query con get_posts => Devuelve una lista de posts.
	// por eso abajo agarramos $post_novedades[0]
	$post_novedades = get_posts($args);

	// si hay resultados...
	if( $post_novedades ) {
		// pido el thumb
		$thumbnail = get_the_post_thumbnail_url( $post_novedades[0] );
		// agrego al context.
		$context['thumbnail_novedades'] = $thumbnail;
	}

} elseif ( is_post_type_archive() ) {
	$context['title'] = post_type_archive_title( '', false );
	array_unshift( $templates, 'archive-' . get_post_type() . '.twig' );
}

$context['posts'] = new Timber\PostQuery();

Timber::render( $templates, $context );
