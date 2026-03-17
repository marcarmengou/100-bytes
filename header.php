<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( is_front_page() || is_home() ) : ?>
  <h1>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
    </a>
  </h1>
<?php else : ?>
  <p>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
    </a>
  </p>
<?php endif; ?>
