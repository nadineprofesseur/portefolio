<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage MonPortefolio
 * @since MonPortefolio 1.0
 */

get_header(); ?>

	<div class="top-bg">
		
    	<img src="img/splash-top.png" class="splash-top" alt>
		<div class="page-title zoomIn animated">blog</div>
	</div>

	<!-- page content -->
	<div class="page-content">
		<div class="grid-row clear">
			<div class="grid-col-row">
				<div class="grid-col grid-col-9">
					<div id="content" role="main">
						<div class="title">
							<span class="main-title">PORTEFOLIO</span>
							<span class="slash-icon">/<i class="fa fa-angle-double-right"></i></span><h5>VOIR MES REALISATIONS</h5>
						</div>							
<?php
		if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) :
				
				the_post();
				
			
				
			//the_excerpt();
			

?>
						<div class="item clear oeuvre">

							<div class="date"><?php the_date();?></div>
							<div class="item-header oeuvre-titre">
								<h3><?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?></h3>
							</div>
							<div class="content oeuvre-description">
								<p><?php the_content(); ?></p>
							</div>
						<?php $champsMeta = get_post_custom(); print_r($custom_fields);?>
						<div class="post-info oeuvre-meta clear">
								<span class="oeuvre-date"><i class="fa fa-calendar"></i><?php echo $champsMeta['date'][0];?></span>
								<span class="oeuvre-auteur"><i class="fa fa-edit"></i><?php echo $champsMeta['auteur'][0];?></span>
								<span class="oeuvre-interoperabilite"><i class="fa fa-comment"></i><?php echo $champsMeta['interoperabilite'][0];?></span>
								<span class="oeuvre-technologie"><i class="fa fa-bookmark"></i><?php echo $champsMeta['technologie'][0];?></span>
								<a class="button" href="blog-single-post.html">/ READ MORE</a>
							</div>
							<!--div class="media-block">
								<div class="video-player">
									<iframe src="https://www.youtube.com/embed/tQ-WuUHNIz8"></iframe>
								</div>
							</div-->
						</div>

<?php
				endwhile;
			// Previous/next post navigation.

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
			?>							
					</div>
				</div>
			</div>
			

			
			
			<?php get_sidebar(); ?>
			
			
			
			
			
		</div>
	</div>
	<!--/ page content -->

<?php
get_sidebar();
get_footer();
