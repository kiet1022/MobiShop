<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MinoSim
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta border-bottom pb-1 mb-2">
				<?php minosim_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'minosim' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'minosim' ),
				'after'  => '</div>',
			) );
		?>
		<hr>
		<h1 class="entry-title">Bài viết cùng chuyên mục</h1>
		<?php
			$related = new WP_Query(
				array(
					'category__in'   => wp_get_post_categories( $post->ID ),
					'posts_per_page' => 3,
					'post__not_in'   => array( $post->ID )
				)
			);
			
			if( $related->have_posts() ) { 
				while( $related->have_posts() ) { 
					$related->the_post(); 
					get_template_part( 'template-parts/content', get_post_format() );
				}
				wp_reset_postdata();
			}
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php minosim_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
