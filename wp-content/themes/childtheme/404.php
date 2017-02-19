<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
                    <h1 class="page-title"><?php _e( '4040404040404', 'twentysixteen' ); ?></h1>
					<h1 class="page-title"><?php _e( 'Ohhh SHIT THIS PAGE AINT HERE', 'twentysixteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content ugly">
					<p><?php _e( 'Youre beat. Maybe try a search?', 'CHILDS PLAY' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
