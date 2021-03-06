<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Aphelion_Lite
 */

get_header();
?>
	<div class="col-md-12">
		<main id="primary" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Virhe 404', 'aphelion-lite' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Valitettavasti emme löytäneet hakemaasi, ole hyvä ja kokeile hakua:', 'aphelion-lite' ); ?></p>

						<?php
						get_search_form();
						?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div>
<?php
get_footer();
