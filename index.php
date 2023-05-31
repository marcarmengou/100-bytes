<?php
get_header();
if (have_posts()) :
   while (have_posts()) : the_post(); ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <p><?php the_excerpt(); ?></p>
      </div>
      <hr>
<?php
   endwhile;
   echo '<p>';
   previous_posts_link(__('Newer posts', '100-bytes'));
   echo ' | ';
   next_posts_link(__('Older posts', '100-bytes'));
   echo '</p>';
else :
   echo '<p>' . __('No content to display', '100-bytes') . '</p>';
endif;
get_footer();
?>
