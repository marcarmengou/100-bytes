<?php
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
        </div>
        <hr>
    <?php }
    
    if (get_previous_posts_link() || get_next_posts_link()) { ?>
        <p>
        <?php 
        if (get_previous_posts_link()) {
            previous_posts_link(__('Newer posts', '100-bytes'));
        }
        if (get_previous_posts_link() && get_next_posts_link()) {
            echo ' | ';
        }
        if (get_next_posts_link()) {
            next_posts_link(__('Older posts', '100-bytes'));
        }
        ?>
        </p>
    <?php }
} else { ?>
    <p><?php echo __('No content to display', '100-bytes'); ?></p>
<?php }
get_footer();
?>
