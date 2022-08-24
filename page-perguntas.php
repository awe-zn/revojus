<?php
// Template Name: perguntas
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
          <a href="<?php echo home_url('/perguntas-frequentes'); ?>" class="breadcrumb-link">
            Perguntas frequentes
          </a>
        </li>
      </ol>
    </nav>
  </div>
  <div class="container pt-awe-24 pb-awe-128">
    <div class="row gap-awe-96 justify-content-center">
      <div class="col-12 d-flex justify-content-center">
        <h1 class="d-inline-block border-bottom border-4 border-secondary text-main fw-bold fz-24 fz-md-32 fz-lg-40 pb-2">
          Perguntas frequentes
        </h1>
      </div>
      <div class="col-12 col-lg-10">
        <div class="accordion" id="perguntasFrequentes">
          <?php
          $perguntas_frequentes = get_field_cmb2('perguntas_frequentes');

          if (isset($perguntas_frequentes)) {
            foreach ($perguntas_frequentes as $key => $pergunta_frequente) { ?>
              <div class="accordion-item border border-1 border-main-lighter-2 rounded-2 mb-awe-24">
                <h2 class="accordion-header" id="heading<?php echo $key; ?>">
                  <button class="accordion-button rounded-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse<?php echo $key; ?>">
                    <span class="fw-bold fz-16 text-main-lighter-1">
                      <?php echo $pergunta_frequente['pergunta']; ?>
                    </span>
                  </button>
                </h2>
                <div id="collapse<?php echo $key; ?>" class="accordion-collapse collapse <?php echo $key !== 0 ? '' : 'show'; ?>" aria-labelledby="heading<?php echo $key; ?>" data-bs-parent="#perguntasFrequentes">
                  <div class="accordion-body fz-16 text-darker-1">
                    <?php echo nl2br(esc_html($pergunta_frequente['resposta'])); ?>
                  </div>
                </div>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </div>
</main>

<section class="bg-light-1">
  <div class="container-md">
    <div class="divider"></div>
  </div>
  <div class="container px-awe-32 px-lg-0 pt-awe-80 pb-awe-128">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-7 d-flex flex-column align-items-center">
        <h3 class="d-inline-block border-bottom border-4 border-secondary text-main fw-bold fz-24 fz-md-32 pb-2 mb-awe-40">
          Ainda possui dúvidas?
        </h3>
        <p class="text-darker-1 fz-16 text-center">
          Sua dúvida não estava nessa lista? Nossa equipe está pronta para ajudar, preencha o formulário de contato da página inicial detalhando a sua dúvida, e nós entraremos em contato com você!
        </p>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>