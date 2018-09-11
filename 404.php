<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Nuptial
 */

get_header(); ?>
<div id="content" class="site-content">   
		<div class="container">

	<div id="primary" class="content-area eleven columns">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can\'t be found.', 'nuptial' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try to search?', 'nuptial' ); ?></p>

					<?php get_search_form(); ?>

					
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
