<?php get_header(); ?>

<style>
  main.hero {
    background: linear-gradient(90deg, #e0d3e0 50%, #f0f5fe 50%);

  }

  main.hero .background-image {
    background: url(<?php echo get_template_directory_uri();
                    ?>/dist/img/background-hero.jpg) no-repeat center;
    background-size: cover;
  }
</style>

<main class="hero">
  <div class="background-image">
    <div class="container px-awe-32 px-lg-0 pt-awe-80 pb-awe-128">
      <div class="row">
        <div class="col-12 col-md-8 col-lg-6">
          <h1 class="fw-bold fz-32 fz-md-48 text-main mb-awe-40">
            Somos a <span class="text-secondary">Revojus</span>, <br>
            uma plataforma que liga as pessoas com a <span class="border-bottom border-4 border-secondary pb-1">justiça</span>
          </h1>
          <p class="text-main mb-awe-40 pe-lg-5 fz-18">
            Somos um escritório digital, com advogados especializados em <br class="d-none d-lg-block">
            diversas
            áreas,
            para levar à você a melhor experiência em <br class="d-none d-lg-block"> resoluções jurídicas.
          </p>
          <a href="#form-servico" class="awe-button primary-button">
            Quero resolver o meu caso
          </a>
        </div>
      </div>
    </div>
  </div>

</main>

<section id="sobre" class="bg-light-1">
  <div class="container px-awe-32 px-lg-0 py-awe-128">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-5 mb-awe-40 mb-md-0">
        <h2 class="text-main mb-awe-40 fz-40 fw-bold">
          <span class="border-bottom border-4 border-secondary pb-1">
            Sobre nós
          </span>
        </h2>
        <p class="fz-18 text-darker-1 mb-awe-40">
          Somos uma plataforma que combina inovação com justiça, a fim de gerar uma revolução no mundo da
          advocacia,
          reduzindo a burocracia sem perder a segurança e tranquilidade que excelentes profissionais podem
          proporcionar.
        </p>
        <a href="" class="awe-button secondary-button">
          Saiba mais
        </a>
      </div>

      <style>
        section#sobre .img-style-1::before {
          background: url(<?php echo get_template_directory_uri();
                          ?>/dist/img/svg/img-detail.svg);
        }
      </style>
      <div class="col-12 col-md-6 offset-lg-2 col-lg-5">
        <div class="img-style-1">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/img/sobre-img.jpg" class="img-fluid w-100" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-light-1">
  <div class="container px-awe-32 px-lg-0 py-awe-80">
    <div class="row justify-content-center">
      <div class="col-12 mb-awe-40">
        <h2 class="text-center fw-bold fz-32 fz-md-40 text-main">
          Por que a Revojus?
        </h2>
      </div>
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 mb-awe-80">
        <p class="fz-16 text-darker-1 text-center">
          Queremos fazer parte da <span class="text-secondary fw-bold">Revolução Jurídica</span>, em um mundo
          conectado,
          que irá aproximar a justiça e as pessoas, bem
          como diminuir as burocracias e proporcionar acessibilidade de uma forma tranquila e segura.
        </p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-6 col-lg-4 mb-awe-80">
        <span class="text-uppercase fw-bold text-secondary text-center d-block mb-awe-12">
          Acessibilidade
        </span>
        <p class="text-darker-1 fz-16 text-center">
          Desenvolvemos a Revojus para ser de fácil entendimento para todos, sem palavras difíceis e linguagem
          técnica, para que você entenda a nossa mensagem.
        </p>
      </div>
      <div class="col-12 col-sm-10 col-md-6 col-lg-4 mb-awe-80">
        <span class="text-uppercase fw-bold text-secondary text-center d-block mb-awe-12">
          24 Horas
        </span>
        <p class="text-darker-1 fz-16 text-center">
          Você pode solicitar o acompanhamento de um advogado especialista na área que a sua demanda
          necessita, em
          qualquer hora do dia e lugar no mundo.
        </p>
      </div>
      <div class="col-12 col-sm-10 col-md-6 col-lg-4 mb-awe-80">
        <span class="text-uppercase fw-bold text-secondary text-center d-block mb-awe-12">
          Experiência do usuário
        </span>
        <p class="text-darker-1 fz-16 text-center">
          Pensando em você, a plataforma foi construída e testada várias vezes, para garantir a melhor
          experiência,
          com tranquilidade, segurança e em poucos minutos.
        </p>
      </div>
      <div class="col-12 col-sm-10 col-md-6 col-lg-4 mb-awe-80">
        <span class="text-uppercase fw-bold text-secondary text-center d-block mb-awe-12">
          Quebrando barreiras
        </span>
        <p class="text-darker-1 fz-16 text-center">
          Uma das nossas metas é diminuir a burocracia para resolução de problemas jurídicos, unificando o
          acesso à
          justiça de forma digital.
        </p>
      </div>
      <div class="col-12 col-sm-10 col-md-6 col-lg-4 mb-awe-80">
        <span class="text-uppercase fw-bold text-secondary text-center d-block mb-awe-12">
          Acompanhamento do processo
        </span>
        <p class="text-darker-1 fz-16 text-center">
          Aqui você poderá conferir como está o seu processo em um canal de confiança e onde tudo está
          organizado
          desde o começo da sua demanda.
        </p>
      </div>
      <div class="col-12 col-sm-10 col-md-6 col-lg-4 mb-awe-80">
        <span class="text-uppercase fw-bold text-secondary text-center d-block mb-awe-12">
          Diversidade de áreas
        </span>
        <p class="text-darker-1 fz-16 text-center">
          Você precisa resolver uma situação da área trabalhista e não conhece nenhum advogado de confiança?
          Aqui
          temos especialistas em várias áreas do direito, sempre dispostos a te ajudar!
        </p>
      </div>
    </div>
  </div>
</section>

<section class="bg-light-1" id="section-form-servicos">
  <div class="container-md">
    <div class="divider"></div>
  </div>
  <div class="container px-awe-32 px-lg-0 pt-awe-80 pb-awe-128">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-10 col-md-8 col-lg-6 d-flex flex-column align-items-center mb-awe-64">
        <h2 class="fz-24 fz-md-32 fz-lg-40 fw-bold text-main border-bottom border-4 border-secondary pb-2 d-inline-block mb-awe-40">
          Solicite o seu serviço!
        </h2>
        <p class="fz-18 text-darker-1 text-center">
          Vamos à sua situação, siga os passos e descreva com detalhes o ocorrido para que possamos te direcionar para
          o advogado especialista adequado ao seu caso.
        </p>
      </div>
      <div class="col-12">
        <div class="col-12">
          <div id="form-servicos">

            <?php
            $servicos_pessoa_fisica = [
              [
                'nome' => 'Aéreo',
                'img' => 'aereo.svg',
              ],
              [
                'nome' => 'Jogos',
                'img' => 'jogos.svg',
              ],
              [
                'nome' => 'Redes Sociais',
                'img' => 'redes-sociais.svg',
              ],
              [
                'nome' => 'Entregas',
                'img' => 'entregas.svg',
              ],
              [
                'nome' => 'Delivery',
                'img' => 'delivery.svg',
              ],
              [
                'nome' => 'Rodoviário',
                'img' => 'rodoviario.svg',
              ],
              [
                'nome' => 'Saúde',
                'img' => 'saude.svg',
              ],
              [
                'nome' => 'Financeiro',
                'img' => 'financeiro.svg',
              ],
              [
                'nome' => 'Hospedagem',
                'img' => 'hospedagem.svg',
              ],
              [
                'nome' => 'Imobiliário',
                'img' => 'imobiliario.svg',
              ],
              [
                'nome' => 'Elétrico',
                'img' => 'eletrico.svg',
              ],
              [
                'nome' => 'Trânsito',
                'img' => 'transito.svg',
              ],
              [
                'nome' => 'Telefonia',
                'img' => 'telefonia.svg',
              ],
              [
                'nome' => 'Educação',
                'img' => 'educacao.svg',
              ],
              [
                'nome' => 'Trabalhista',
                'img' => 'trabalhista.svg',
              ],
              [
                'nome' => 'Crimes Cibernéticos',
                'img' => 'crimes-ciberneticos.svg',
              ],
              [
                'nome' => 'Previdenciário',
                'img' => 'previdenciario.svg',
              ],
              [
                'nome' => 'Família e Sucessões',
                'img' => 'familia-e-sucessoes.svg',
              ],
              [
                'nome' => 'Penal',
                'img' => 'penal.svg',
              ],
              [
                'nome' => 'Desportivo',
                'img' => 'desportivo.svg',
              ],
            ];

            $servicos_pessoa_juridica = [
              [
                'nome' => 'Tributário',
                'img' => 'tributario.svg',
              ],
              [
                'nome' => 'Recuperação de crédito',
                'img' => 'recuperacao-de-credito.svg',
              ],
              [
                'nome' => 'Empresarial',
                'img' => 'empresarial.svg',
              ],
              [
                'nome' => 'Agronegócio',
                'img' => 'agronegocio.svg',
              ],
              [
                'nome' => 'Ambiental',
                'img' => 'ambiental.svg',
              ],
              [
                'nome' => 'Desportivo',
                'img' => 'desportivo.svg',
              ],
              [
                'nome' => 'Licitação e contrato',
                'img' => 'licitacao-e-contrato.svg',
              ],
              [
                'nome' => 'LGPD',
                'img' => 'lgpd.svg',
              ],
              [
                'nome' => 'Marcas e patentes',
                'img' => 'marcas-e-patentes.svg',
              ],
              [
                'nome' => 'Direito internacional',
                'img' => 'direito-internacional.svg',
              ],
            ];
            ?>

            <form action="">
              <div data-step="0" class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7 form-steps px-awe-16 px-md-awe-40 py-awe-16 d-flex justify-content-center justify-content-sm-between align-items-sm-center gap-awe-16 gap-sm-0">
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
                      <input onclick="etapa1('fisica')" type="radio" name="tipoDePessoa" id="pessoaFisica" value="física">
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
                      <input onclick="etapa1('juridica')" type="radio" name="tipoDePessoa" id="pessoaJuridica" value="jurídica">
                    </div>
                  </div>
                </div>
                <div class="visually-hidden">
                  <input type="text" name="tipoDePessoa" id="tipoDePessoaContactForm">
                </div>
              </div>
              <div data-step="1" class="row justify-content-center d-none">
                <div class="col-12 col-md-10 col-lg-7 form-steps px-awe-16 px-md-awe-40 py-awe-16 d-flex justify-content-center justify-content-sm-between align-items-sm-center gap-awe-16 gap-sm-0">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/servicos/<?php echo $servico['img']; ?>" alt="">
                        <label class="text-secondary m-0 text-center">
                          <?php echo $servico['nome']; ?>
                        </label>
                        <input type="radio" name="tipoDeServico" value="<?php echo $servico['nome']; ?>">
                      </div>

                    <?php } ?>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/servicos/<?php echo $servico['img']; ?>" alt="">
                        <label class="text-secondary m-0 text-center">
                          <?php echo $servico['nome']; ?>
                        </label>
                        <input type="radio" name="tipoDeServico" value="<?php echo $servico['nome']; ?>">
                      </div>

                    <?php } ?>
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
              </div>
              <div data-step="2" class="row justify-content-center d-none">
                <div class="col-12 col-md-10 col-lg-7 form-steps px-awe-16 px-md-awe-40 py-awe-16 d-flex justify-content-center justify-content-sm-between align-items-sm-center gap-awe-16 gap-sm-0">
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
                          <input type="text" name="nome" placeholder="Nome" id="nomeInputFalso" require>
                        </div>
                        <div>
                          <label for="email">Email</label>
                          <input type="email" id="emailInputFalso" placeholder="email" require>
                        </div>
                        <div>
                          <label for="numero">Celular</label>
                          <input type="tel" name="numero" placeholder="Número" id="numeroInputFalso" require>
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <label for="mensagem">Descreva a situação</label>
                        <textarea name="mensagem" id="mensagemInputFalso" placeholder="Descreva a situação" cols="30" rows="10" require></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="pt-awe-64 d-flex justify-content-center gap-awe-32">
                  <button class="awe-button secondary-button" onclick="etapa1()">
                    Voltar
                  </button>
                  <input type="submit" value="Enviar" class="awe-button primary-button" id="submitButton">
                </div>
              </div>
            </form>

            <div class="visually-hidden">
              <?php echo do_shortcode('[contact-form-7 id="21" title="Form serviços"]'); ?>
            </div>

            <!-- <form action="">
              <div class="" id="formContactForm7">
                <input type="text" id="tipoDePessoaContactForm">
                <input type="text" id="tipoDeServicoContactForm">
                <input type="text" id="nomeContactForm">
                <input type="email" id="emailContactForm">
                <input type="tel" id="telefoneContactForm">
                <textarea name="" id="mensagemContactForm"></textarea>
                <input type="submit" id="submitContactForm">
              </div>
            </form> -->
            <!-- <div id="form-servicos-final" class="d-none">
              <div class="row justify-content-center">
                <div class="col-6">
                  <div class="border border-2 border-main p-awe-24">
                    <div class="d-flex justify-content-center mb-awe-32">
                      <img src="/dist/img/svg/form-success.svg">
                    </div>
                    <p class="fz-24 text-main fw-bold mb-awe-16 text-center">
                      Sua solicitação foi enviada com <span class="text-secondary">sucesso</span>!
                    </p>
                    <p class="text-main fz-16 text-center">
                      Em breve um dos nossos especialistas irá retornar a sua solicitação.
                      Obrigado!
                    </p>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="chamado-equipe">
  <div class="container px-awe-32 px-lg-0 pt-lg-awe-32">
    <div class="row">
      <div class="col-5 d-none d-lg-flex align-items-end">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/equipe.png" class="img-fluid" alt="">
      </div>
      <div class="col-12 col-md-8 col-lg-7 col-xl-5 mb-awe-64">
        <h3 class="text-light-4 fw-bold fz-32 mt-awe-40 mb-awe-24">
          Interessado em ser da equipe?
        </h3>
        <p class="text-light-1 mb-awe-40 fz-16">
          Se você é advogado, e precisa de auxílio em gerenciamento de demandas, conexão com potenciais
          clientes e a
          possibilidade de atender pessoas de todo o país, a Revojus é para você!
        </p>
        <a href="" class="awe-button primary-button">
          Cadastre-se!
        </a>
      </div>
    </div>
  </div>
</section>

<section class="bg-light-1">
  <div class="container px-awe-32 px-lg-0 py-awe-128">
    <div class="row">
      <div class="col-12 col-lg-5 mb-awe-64 mb-lg-0">
        <h2 class="text-main fw-bold border-bottom border-4 border-secondary pb-1 d-inline-block mb-awe-40">
          Contato
        </h2>
        <p class="fz-16 text-darker-1 mb-md-awe-40 mb-lg-awe-96">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada dui mi, non tincidunt
          est
          vestibulum sit amet.
        </p>
        <div class="d-flex flex-column gap-awe-32">
          <a href="mailto:contata@revojus.com.br" class="text-decoration-none fw-bold fz-16 text-secondary">
            <span class="me-2">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/svg/mail.svg" alt="">
            </span>
            contata@revojus.com.br
          </a>
          <a href="tel:+558498229875" class="text-decoration-none fw-bold fz-16 text-secondary">
            <span class="me-2">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/svg/phone.svg" alt="">
            </span>
            (84) 9822-9875
          </a>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-5 offset-lg-1">
        <?php echo do_shortcode('[contact-form-7 id="18" title="Form contato"]'); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>