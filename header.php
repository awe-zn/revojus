<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php bloginfo('name'); ?>
  </title>

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/dist/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/dist/favicon/favicon-16x16.png">

  <?php wp_head(); ?>
</head>

<body>

  <header class="bg-main-darker-1 position-sticky top-0">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand p-0" href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/svg/logo.svg" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-lg-end" id="navbarSupportedContent">
          <?php
          $menu_args = [
            'menu' => 'header',
            'menu_class' => 'header-menu navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-end text-center text-md-start gap-awe-16'
          ];

          wp_nav_menu($menu_args);
          ?>
        </div>
      </div>
    </nav>
  </header>