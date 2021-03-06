<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Business_Page
 */

get_header(); ?>
			<?php 
	$layout_class ='col-8';
		$sidebar_layout = business_page_get_option('layout_options'); 
		if( is_active_sidebar('sidebar-1') && 'no-sidebar' !==  $sidebar_layout){
			$layout_class = 'custom-col-8';
		}
		else{
			$layout_class = 'custom-col-12';
		}		
	?>

	<section id="primary" class="content-area <?php echo esc_attr($layout_class);?>">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'business-page' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			$pagination_option = business_page_get_option( 'pagination_option' );
			if( 'default' == $pagination_option){
				the_posts_navigation();	
			} else{
	            the_posts_pagination( array(
	                'mid_size' => 5,
	                'prev_text' => esc_html__( 'PREV', 'business-page' ),
	                'next_text' => esc_html__( 'NEXT', 'business-page' ),
	            ) );
			}

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
