<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">
  <title>contact</title>
</head>

<body>
<h1 class="width">
    <svg class="logo-white">
      <use xlink:href="#icon-logo"></use>
    </svg>
  </h1>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
  

<?php get_template_part('templates/svg'); ?>
</body>
</html>
