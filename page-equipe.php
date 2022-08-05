<?php
// Template Name: equipe
?>

<?php get_header(); ?>

<main class="bg-light-1">
  <div class="container px-awe-32 px-lg-0 pt-awe-32">
    <nav style="--bs-breadcrumb-divider: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNiIgaGVpZ2h0PSIxMiIgdmlld0JveD0iMCAwIDYgMTIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik01LjY5NTMxIDAuNTc4MTI1TDEuNDQ1MzEgMTJIMC4xNjQwNjJMNC40MjE4OCAwLjU3ODEyNUg1LjY5NTMxWiIgZmlsbD0iIzE4MEUzOCIvPgo8L3N2Zz4K);" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html" class="breadcrumb-link">Home</a>
        </li>
        <li class="breadcrumb-item text-light-2" aria-current="page">
          <a href="equipe.html" class="breadcrumb-link">
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
        <div class="equipe-card">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/sobre-img.jpg" alt="">
          <div class="p-awe-12 bg-light-2">
            <p class="fz-16 text-main fw-bold text-center mb-0">
              Nome Sobrenome
            </p>
            <p class="text-darker-2 fz-14 fw-regular text-center mb-0">
              Ocupação
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>
<section class="bg-light-1">
  <div class="container-md">
    <div class="divider"></div>
  </div>
  <div class="container pt-awe-80 pb-awe-128 px-awe-32 px-lg-0">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7 d-flex flex-column align-items-center">
        <h3 class="fz-24 fz-md-32 fw-bold text-main border-bottom border-secondary border-4 pb-2 d-inline-block mb-awe-40">
          Deseja entrar na equipe?
        </h3>
        <p class="fz-18 text-darker-1 text-center mb-awe-64">
          Entendemos que iniciar a carreira no direito pode ser complicado e ter algumas barreiras, como o alto valor
          de investimento inicial. Esse foi um dos motivos da criação da Revojus, ajudar advogados a organizarem
          processos de trabalho, gerenciar clientes e gerar conexão com novos potenciais clientes.
        </p>
        <form action="" id="" class="d-none">
          <div id="form-equipe">
            <div class="border border-2 border-main-lighter-2 rounded-2 py-awe-32 px-awe-16 px-md-awe-40 mb-awe-40 form-equipe__fields">
              <p class="fw-bold fz-24 text-main mb-awe-40">
                Informações
              </p>
              <div class="d-flex flex-column gap-awe-24">
                <div>
                  <label for="">Nome</label>
                  [text Nome placeholder "Nome"]
                </div>
                <div>
                  <label for="">Email</label>
                  [email email placeholder "email"]
                </div>
                <div>
                  <label for="">Celular</label>
                  [tel Número placeholder "(99) 9999-9999"]
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center">
              [submit class:awe-button class:primary-button "Enviar"]
            </div>
          </div>
        </form>
        <?php echo do_shortcode('[contact-form-7 id="22" title="Form equipe"]'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>