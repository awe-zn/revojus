<?php
// Template Name: equipe
?>

<?php get_header(); ?>

<main class="bg-light-1">
  <div class="container px-awe-32 px-lg-0 pt-awe-32">
    <nav style="--bs-breadcrumb-divider: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNiIgaGVpZ2h0PSIxMiIgdmlld0JveD0iMCAwIDYgMTIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik01LjY5NTMxIDAuNTc4MTI1TDEuNDQ1MzEgMTJIMC4xNjQwNjJMNC40MjE4OCAwLjU3ODEyNUg1LjY5NTMxWiIgZmlsbD0iIzE4MEUzOCIvPgo8L3N2Zz4K);" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo home_url(); ?>" class="breadcrumb-link">Home</a>
        </li>
        <li class="breadcrumb-item text-light-2" aria-current="page">
          <a href="<?php echo home_url('/equipe'); ?>" class="breadcrumb-link">
            Equipe
          </a>
        </li>
      </ol>
    </nav>
  </div>
  <div class="container px-awe-32 px-lg-0 pt-awe-24 pb-awe-128">
    <div class="row gap-awe-64">
      <div class="col-12">
        <h1 class="d-inline-block border-bottom border-4 border-secondary text-main fw-bold fz-24 fz-md-32 fz-lg-40 pb-2">
          Equipe
        </h1>
      </div>
      <div class="col-12 awe-grid-1">
        <?php
        $equipe = get_field_cmb2('membros_da_equipe');

        if (isset($equipe)) {
          foreach ($equipe as $key => $membro_da_equipe) { ?>
            <div class="equipe-card">
              <div class="equipe-card__img">
                <img src="<?php echo $membro_da_equipe['foto']; ?>" alt="">
              </div>
              <div class="equipe-card__dados p-awe-8 p-lg-awe-16 bg-light-2">
                <p class="fz-16 fz-md-18 text-main fw-bold text-center mb-0">
                  <?php echo $membro_da_equipe['nome']; ?>
                </p>
                <p class="text-darker-2 fz-14 fz-md-16 fw-regular text-center mb-0">
                  <?php echo $membro_da_equipe['ocupacao']; ?>
                </p>
              </div>
            </div>
        <?php }
        } ?>
      </div>
    </div>
  </div>
  </div>
</main>
<section class="bg-light-1" id="cadastre-se">
  <div class="container-md">
    <div class="divider"></div>
  </div>
  <div class="container pt-awe-80 pb-awe-128 px-awe-32 px-lg-0">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7 d-flex flex-column align-items-center">
        <h3 class="fz-24 fz-md-32 fw-bold text-main border-bottom border-secondary border-4 pb-2 d-inline-block mb-awe-40">
          Deseja entrar na equipe?
        </h3>
        <p class="fz-18 text-darker-1 text-center mb-awe-40">
          <?php the_field('chamada_para_a_equipe'); ?>
        </p>
        <a href="<?php echo home_url('/captura'); ?>" class="btn btn-secondary rounded-1 px-awe-24 py-awe-12 fw-bold fz-16 text-light-2">
          Conhecer mais da Revojus
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>