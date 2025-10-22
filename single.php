<?php
get_header(); ?>
<main>
<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php
            wp_link_pages( array(
                'before' => '<nav aria-label="' . esc_attr__( 'Page', '100-bytes' ) . '">',
                'after'  => '</nav>',
            ) );
            ?>
        </article>
    <?php endwhile;
endif; ?>
</main>
<?php get_footer(); ?>
