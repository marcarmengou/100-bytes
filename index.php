<?php
get_header(); ?>
<main>
<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </article>
        <hr>
    <?php endwhile;

    if ( get_previous_posts_link() || get_next_posts_link() ) : ?>
        <nav aria-label="<?php echo esc_attr__( 'Posts navigation', '100-bytes' ); ?>">
            <?php
            if ( get_previous_posts_link() ) { 
                echo get_previous_posts_link( esc_html__( 'Newer posts', '100-bytes' ) ); 
            }
            if ( get_previous_posts_link() && get_next_posts_link() ) { 
                echo '<span aria-hidden="true"> | </span>'; 
            }
            if ( get_next_posts_link() ) { 
                echo get_next_posts_link( esc_html__( 'Older posts', '100-bytes' ) ); 
            }
            ?>
        </nav>
    <?php endif;

else : ?>
    <p><?php esc_html_e( 'No content to display', '100-bytes' ); ?></p>
<?php endif; ?>
</main>
<?php get_footer(); ?>
