<?php
// Template Name: sobre
?>

<?php get_header() ?>

<body>

  <style>
    .main-sobre {
      background: linear-gradient(90deg, #ba352f 50.51%, #5d144c 50.52%);
    }

    .main-sobre .background-image {
      background: url(<?php echo get_template_directory_uri(); ?>/dist/img/img-main-sobre.jpg) no-repeat center;
      background-size: cover;
    }
  </style>
  <main class="main-sobre">
    <div class="background-image">
      <div class="container pt-awe-32">
        <nav style="--bs-breadcrumb-divider: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNiIgaGVpZ2h0PSIxMiIgdmlld0JveD0iMCAwIDYgMTIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik01LjY5NTMxIDAuNTc4MTI1TDEuNDQ1MzEgMTJIMC4xNjQwNjJMNC40MjE4OCAwLjU3ODEyNUg1LjY5NTMxWiIgZmlsbD0iI0Y5RkFGQyIvPgo8L3N2Zz4K);" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo home_url(); ?>" class="breadcrumb-link-light">Home</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">
              <a href="<?php echo home_url('/sobre'); ?>" class="breadcrumb-link-light">Sobre nós</a>
            </li>
          </ol>
        </nav>
      </div>
      <div class="container px-awe-32 px-lg-0 pt-awe-40 pb-awe-80">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 d-flex flex-column align-items-center">
            <h1 class="text-light-2 fw-bold fz-24 fz-sm-32 fz-md-40 d-inline-block border-bottom border-4 border-main pb-2 mb-awe-40">
              Conheça a revojus
            </h1>
            <div class="text-light-2 pe-lg-5 fz-16 text-center">
              <?php the_field('texto_sobre'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center d-lg-none">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/img-main-sobre-sm.png" class="img-fluid" alt="">
      </div>
    </div>

  </main>

  <section class="bg-darker-1 border-bottom border-2 border-secondary">
    <div class="container px-awe-32 px-lg-0 py-awe-56">
      <div class="row gap-awe-48 gap-lg-0">
        <div class="col-12 col-lg-4">
          <h4 class="fz-24 fw-bold text-secondary-lighter-1">
            Missão
          </h4>
          <div class="text-light-2">
            <?php the_field('missao'); ?>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <h4 class="fz-24 fw-bold text-secondary-lighter-1">
            Visão
          </h4>
          <div class="text-light-2">
            <?php the_field('visao'); ?>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <h4 class="fz-24 fw-bold text-secondary-lighter-1">
            Valores
          </h4>

          <div class="text-light-2">
            <?php the_field('valores'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

<?php get_footer() ?>