<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MinoSim
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-loop'); ?>>
    <div class="row">
        <div class="col-md-4">
        <?php
            the_title( '<h2 class="entry-title d-mobile-news"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" title="' . get_the_title() . '">', '</a></h2>' );

            ?>
            <a href="<?=esc_url( get_permalink() ) ?>" rel="bookmark" title="<?=get_the_title()?>">
                <?php the_post_thumbnail('full', array('class' => 'rounded w-100 h-auto')); ?>
            </a>
        </div>
        <div class="col-md-8">
            <?php
            the_title( '<h2 class="entry-title d-wide-screen-news"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" title="' . get_the_title() . '">', '</a></h2>' );

            ?>
            <?php the_excerpt(); ?>
        </div>
    </div>
</article><!-- #post-## -->
