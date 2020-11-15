<?php
/**
 * The base (and only) template
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<?php include 'style.css'; ?>
</style>
<?php wp_head(); ?>
<script src="script.js" type="text/javascript"></script>
</head><body <?php body_class(); ?>><?php wp_body_open(); ?><div id="page">

$blank_description = get_bloginfo( 'description', 'display' );
if ( $blank_description || is_customize_preview() ) :
	?>
	<p class="site-description"><?php echo esc_html( $blank_description ); ?></p>
<?php endif; ?>
</div></div>
<?php the_custom_logo(); ?>

<footer id="colophon" class="site-footer"><div class="site-info">
	<?php esc_html_e( 'Intentionally Blank', 'intentionally-blank' ); ?>
	<?php /* translators: Proudly powered by WordPress */ ?>
	- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'intentionally-blank' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'intentionally-blank' ), 'WordPress' ); ?></a>
</div></footer>
</div><!-- #page -->
<?php wp_footer(); ?></body></html>
