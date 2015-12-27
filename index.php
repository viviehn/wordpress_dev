<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main index-main" role="main">
		<div id="fullpage">
			<div class="section">
				<?php if ( have_posts() ) : ?>
					<?php
					$count = 0;
					while ( have_posts() ) : the_post();
						if ($count <= 5) { 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(320,240), false, '' );
								?><div class="slide">
						               <img src="<?php echo $src[0]; ?>" width="100%" margin-top="0">
						        </div><?php
								$count++;
							} 
						} else {
							break;
						}
					endwhile;

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'content', 'none' );
				endif;
				?>
		   	</div>
    	</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
