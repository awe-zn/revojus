<form action="">
  <div data-step="0" class="row justify-content-center">
    <div
      class="col-12 col-md-10 col-lg-7 form-steps px-awe-16 px-md-awe-40 py-awe-16 d-flex justify-content-center justify-content-sm-between align-items-sm-center gap-awe-16 gap-sm-0">
      <div class="form-step d-flex flex-column align-items-center gap-awe-8">
        <div class="form-step__number active">
          1
        </div>
        <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
          Tipo de pessoa
        </p>
      </div>

      <div class="form-steps__divider"></div>

      <div class="form-step d-flex flex-column align-items-center gap-awe-8">
        <div class="form-step__number">
          2
        </div>
        <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
          Tipo de serviço
        </p>
      </div>

      <div class="form-steps__divider"></div>

      <div class="form-step d-none d-sm-flex flex-column align-items-center gap-awe-8">
        <div class="form-step__number">
          3
        </div>
        <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
          Formulário
        </p>
      </div>

    </div>
    <div class="pt-awe-64">
      <p class="fz-24 fw-bold text-main text-center mb-awe-40">
        Selecione o tipo de pessoa que deseja processar
      </p>
      <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-awe-32 gap-md-awe-64">
        <div class="custom-form-check">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/svg/physical-person.svg" alt="">
          <label class="text-secondary m-0" for="pessoaFisica">
            Pessoa física
          </label>
          <p class="text-center fz-16 text-darker-1 m-0">
            Acompanhamento para uma situação que envolve <span class="fw-bold">outra
              pessoa</span>.
          </p>
          <input onclick="etapa1('fisica')" type="radio" name="tipoDePessoa" id="pessoaFisica">
        </div>
        <div class="custom-form-check">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/svg/company.svg" alt="">
          <label class="text-secondary m-0" for="pessoaJuridica">
            Pessoa jurídica
          </label>
          <p class="text-center fz-16 text-darker-1 m-0">
            Acompanhamento para uma situação que envolve <span class="fw-bold">uma
              empresa</span>.
          </p>
          <input onclick="etapa1('juridica')" type="radio" name="tipoDePessoa" id="pessoaJuridica">
        </div>
      </div>
    </div>
    <div class="visually-hidden">
      <input type="text" name="tipoDePessoa" id="tipoDePessoaContactForm">
    </div>
  </div>
  <div data-step="1" class="row justify-content-center d-none">
    <div
      class="col-12 col-md-10 col-lg-7 form-steps px-awe-16 px-md-awe-40 py-awe-16 d-flex justify-content-center justify-content-sm-between align-items-sm-center gap-awe-16 gap-sm-0">
      <div class="form-step d-flex flex-column align-items-center gap-awe-8">
        <div class="form-step__number">
          1
        </div>
        <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
          Tipo de pessoa
        </p>
      </div>

      <div class="form-steps__divider"></div>

      <div class="form-step d-flex flex-column align-items-center gap-awe-8">
        <div class="form-step__number active">
          2
        </div>
        <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
          Tipo de serviço
        </p>
      </div>

      <div class="form-steps__divider"></div>

      <div class="form-step d-none d-sm-flex flex-column align-items-center gap-awe-8">
        <div class="form-step__number">
          3
        </div>
        <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
          Formulário
        </p>
      </div>

    </div>
    <div data-subStep="fisica" class="col-12 col-lg-10 mt-awe-56 d-none">
      <div class="mb-awe-32 col-12 row justify-content-center">
        <div class="col-12 col-lg-6">
          <h3 class="fz-24 text-center">
            Você está como pessoa <span class="fw-bold">física. Selecione o serviço que deseja</span>
          </h3>
        </div>
      </div>
      <div class="awe-grid-3">

        <?php foreach ($servicos_pessoa_fisica as $servico) { ?>

        <div class="servico-card">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/servicos/<?php echo $servico['img']; ?>"
            alt="">
          <label class="text-secondary m-0 text-center">
            <?php echo $servico['nome']; ?>
          </label>
          <input type="radio" name="tipoDeServico" value="<?php echo $servico['nome']; ?>">
        </div>

        <?php }?>
      </div>
      <div class="pt-awe-64 d-flex justify-content-center gap-awe-32">
        <button class="awe-button secondary-button" onclick="etapa0()">
          Voltar
        </button>
        <button class="awe-button primary-button" onclick="etapa2()" data-button="next" disabled>
          Continuar
        </button>
      </div>
    </div>
    <div data-subStep="juridica" class="col-12 col-lg-10 mt-awe-56 d-none">
      <div class="mb-awe-32 col-12 row justify-content-center">
        <div class="col-12 col-lg-6">
          <h3 class="fz-24 text-center">
            Você está como pessoa <span class="fw-bold">jurídica. Selecione o serviço que deseja</span>
          </h3>
        </div>
      </div>
      <div class="awe-grid-3">
        <?php foreach ($servicos_pessoa_juridica as $servico) { ?>

        <div class="servico-card">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/servicos/<?php echo $servico['img']; ?>"
            alt="">
          <label class="text-secondary m-0 text-center">
            <?php echo $servico['nome']; ?>
          </label>
          <input type="radio" name="tipoDeServico" value="<?php echo $servico['nome']; ?>">
        </div>

        <?php }?>
      </div>
      <div class="pt-awe-64 d-flex justify-content-center gap-awe-32">
        <button class="awe-button secondary-button" onclick="etapa0()">
          Voltar
        </button>
        <button class="awe-button primary-button" onclick="etapa2()" data-button="next" disabled>
          Continuar
        </button>
      </div>
    </div>
    <div class="visually-hidden">
      [text tipoDeServicoText id:tipoDeServicoContactForm]
    </div>
  </div>
  <div data-step="2" class="row justify-content-center d-none">
    <div
      class="col-12 col-md-10 col-lg-7 form-steps px-awe-16 px-md-awe-40 py-awe-16 d-flex justify-content-center justify-content-sm-between align-items-sm-center gap-awe-16 gap-sm-0">
      <div class="form-step d-flex flex-column align-items-center gap-awe-8">
        <div class="form-step__number">
          1
        </div>
        <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
          Tipo de pessoa
        </p>
      </div>

      <div class="form-steps__divider"></div>

      <div class="form-step d-flex flex-column align-items-center gap-awe-8">
        <div class="form-step__number">
          2
        </div>
        <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
          Tipo de serviço
        </p>
      </div>

      <div class="form-steps__divider"></div>

      <div class="form-step d-none d-sm-flex flex-column align-items-center gap-awe-8">
        <div class="form-step__number active">
          3
        </div>
        <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
          Formulário
        </p>
      </div>

    </div>

    <div class="col-12 col-md-10 col-lg-8 mt-awe-56">
      <div class="border border-2 border-main-lighter-2 rounded-2 py-awe-32 px-awe-16 px-md-awe-40 mb-awe-40">
        <p class="fw-bold fz-24 text-main mb-awe-40">
          Informações
        </p>
        <div class="row gap-awe-32 gap-md-0">
          <div class="col-12 col-md-6 d-flex flex-column gap-awe-24">
            <div>
              <label for="nome">Nome</label>
              [text* nome placeholder "Nome"]
            </div>
            <div>
              <label for="email">Email</label>
              [email* email id:email placeholder "email"]
            </div>
            <div>
              <label for="numero">Celular</label>
              [tel* numero id:numero placeholder "Número"]
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label for="mensagem">Descreva a situação</label>
            [textarea* mensagem id:mensagem placeholder "Descreva a situação"]
          </div>
        </div>
      </div>
    </div>

    <div class="pt-awe-64 d-flex justify-content-center gap-awe-32">
      <button class="awe-button secondary-button" onclick="etapa1()">
        Voltar
      </button>
      [submit id:submitButton class:awe-button class:primary-button "Enviar"]
    </div>
  </div>
</form>