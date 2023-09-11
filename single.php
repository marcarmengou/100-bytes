<?php
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
            <?php wp_link_pages(); ?>
        </div>
    <?php }
}
get_footer();
?>
