<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <?php wp_head(); ?>
  <script>var directoryUri = '<?php echo get_template_directory_uri(); ?>';</script>
  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">

  <header>
    <?php wp_nav_menu( ['theme_location'  => 'menu-1',] );?>
  </header>