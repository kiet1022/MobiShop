<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StrapPress
 */

get_header(); ?>

    <div class="container">
        <div class="row">
            <div id="primary" class="content-area col-md-8 order-md-2">
                <main id="main" class="site-main p-2 bg-white" role="main">
				<h1 id="category-name"><?php single_cat_title(); ?></h1>
                <?php
                $term = get_queried_object();
                $args = array(
                    'tax_query' => array(
                        array (
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => $term->slug,
                        )
                    ),
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'page' => $page,
                    'update_post_term_cache' => false,
                    'update_post_meta_cache' => false,
                    'cache_results'          => false,
                    'posts_per_page' => 6
                );
                $wp_query = new WP_Query( $args );
                if ( $wp_query->have_posts() ) :

                    while ( $wp_query->have_posts() ) : $wp_query->the_post();

                        get_template_part( 'template-parts/content', get_post_format() );

                    endwhile;

                    // wpbs_pagination();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>

                </main><!-- #main -->
            </div><!-- #primary -->
    <?php
        // get_sidebar('left');
        get_sidebar('right');
    ?>
<?php
get_footer();
