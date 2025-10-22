<p>
<?php
$theme_link  = '<a href="' . esc_url( 'https://wordpress.org/themes/100-bytes/' ) . '">100 Bytes Theme</a>';
$author_link = '<a href="' . esc_url( 'https://www.marcarmengou.com' ) . '">Marc Armengou</a>';

echo wp_kses(
    sprintf(
         /* translators: 1: theme link, 2: author link */
        __( '%1$s by %2$s', '100-bytes' ),
        $theme_link,
        $author_link
    ),
    array( 'a' => array( 'href' => array() ) )
);
?>
</p>
<?php wp_footer(); ?>
</body>
</html>