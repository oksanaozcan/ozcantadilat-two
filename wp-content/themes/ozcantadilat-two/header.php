<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
</head>
<body <?php body_class(); ?>>
  <div class="bg-dark bg-gradient bg-opacity-50">
    <header>

      <?php get_template_part('parts/top-bar'); ?>       
      <?php get_template_part('parts/menu-area'); ?>
           
    </header>