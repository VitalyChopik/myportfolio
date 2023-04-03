<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head();?>
  <?php if( have_rows('header__script', 'option') ): ?>
    <?php while( have_rows('header__script', 'option') ): the_row(); ?>
        <?php the_sub_field('script'); ?>
    <?php endwhile; ?>
  <?php endif; ?>
</head>

<body>
  <div class="wrapper">
    <main class="page">
      <div data-observ></div>