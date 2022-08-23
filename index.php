<?php get_header(); ?>

<main id="hero-index">
  <div class="background-image">
    <div class="container pt-awe-40 pt-xxl-awe-80 pb-awe-80 pb-xxl-awe-128">
      <div class="row">
        <div class="col-12 col-lg-6 px-awe-24 px-lg-0">
          <h1 class="fw-bold fz-24 fz-md-48 text-main mb-awe-40">
            Somos a <span class="text-secondary">Revojus</span>, <br>
            uma plataforma que liga as pessoas com a
            <span class="border-bottom border-4 border-secondary pb-1">justiça</span>
          </h1>
          <p class="text-main mb-awe-40 pe-lg-5 fz-16 fz-lg-16">
            Somos um escritório digital, com advogados especializados em diversas
            áreas, para levar à você a melhor experiência em resoluções jurídicas.
          </p>
          <a href="#servicos" class="awe-button primary-button fz-14 fz-lg-16">
            <span class="d-none d-sm-inline-block">
              Quero resolver o meu caso
            </span>
            <span class="d-sm-none">
              Solicitar serviço
            </span>
          </a>
        </div>
      </div>
    </div>
    <div class="d-sm-none">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/img/hero-index-sm.jpg" class="img-fluid w-100" alt="">
    </div>
  </div>
</main>

<section id="sobre" class="bg-light-1">
  <div class="container px-awe-24 px-lg-0 pt-awe-64 py-md-awe-128">
    <div class="row">
      <div class="col-12 col-md-6">
        <h2 class="text-main fz-24 fz-md-40 fw-bold d-inline-block border-bottom border-4 border-secondary">
          Sobre nós
        </h2>
        <p class="text-darker-1 fz-14 fz-md-18 mt-awe-32 mb-awe-40 my-lg-awe-48">
          Somos uma plataforma que combina inovação com justiça,
          a fim de gerar uma revolução no mundo da advocacia,
          reduzindo a burocracia sem perder a segurança e tranquilidade que excelentes profissionais podem proporcionar.
        </p>
        <a href="<?php echo home_url('/sobre'); ?>" class="awe-button secondary-button fz-14 fz-md-16">
          Saiba mais
        </a>
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-end">
        <div class="img-sobre mt-awe-80 mt-md-0">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/dist/img/sobre-img.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="porque-revojus">
  <div class="container px-awe-24 px-lg-0 pt-awe-64 pb-awe-80 pt-lg-awe-80 pb-lg-awe-128">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7 text-center mb-awe-80 mb-lg-awe-96">
        <h2 class="text-main fz-24 fz-md-40 fw-bold d-inline-block border-bottom border-4 border-secondary mb-awe-32 mb-md-awe-48">
          Por que a revojus?
        </h2>
        <p class="text-darker-1 fz-14 fz-md-18 text-start text-sm-center">
          Queremos fazer parte da <span class="fw-bold text-secondary">Revolução Jurídica</span>, em um mundo conectado,
          que irá aproximar a justiça e as pessoas,
          bem como diminuir as burocracias e proporcionar acessibilidade de uma forma tranquila e segura.
        </p>
      </div>
      <div class="col-12">
        <div class="owl-carousel owl-theme">
          <div class="item d-flex flex-column gap-awe-32">
            <div class="revojus-card">
              <h5>Acessibilidade</h5>
              <p>
                Desenvolvemos a Revojus para ser de fácil entendimento para todos,
                sem palavras difíceis e linguagem técnica,
                para que você entenda a nossa mensagem.
              </p>
            </div>
            <div class="revojus-card">
              <h5>Quebrando barreiras</h5>
              <p>
                Uma das nossas metas é diminuir a burocracia para resolução de problemas jurídicos,
                unificando o acesso à justiça de forma digital.
              </p>
            </div>
          </div>
          <div class="item d-flex flex-column gap-awe-32">
            <div class="revojus-card">
              <h5>24 horas</h5>
              <p>
                Você pode solicitar o acompanhamento de um advogado especialista na área que a sua demanda necessita,
                em qualquer hora do dia e lugar no mundo.
              </p>
            </div>
            <div class="revojus-card">
              <h5>Acompanhamento do processo</h5>
              <p>
                Aqui você poderá conferir como está o seu processo em um canal de confiança e onde tudo está organizado desde o começo da sua demanda.
              </p>
            </div>
          </div>
          <div class="item d-flex flex-column gap-awe-32">
            <div class="revojus-card">
              <h5>Experiência do usuário</h5>
              <p>
                Pensando em você, a plataforma foi construída e testada várias vezes,
                para garantir a melhor experiência,
                com tranquilidade,
                segurança e em poucos minutos.
              </p>
            </div>
            <div class="revojus-card">
              <h5>Diversidade de áreas</h5>
              <p>
                Você precisa resolver uma situação da área trabalhista e não conhece nenhum advogado de confiança?
                Aqui temos especialistas em várias áreas do direito,
                sempre dispostos a te ajudar!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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

<section id="servicos">
  <div class="container px-awe-24 px-lg-0" id="form-servicos">
    <div class="divider"></div>
    <div class="row justify-content-center py-awe-64 pt-md-awe-80 pb-md-awe-128">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="text-center">
          <h2 class="text-main fz-24 fz-md-40 fw-bold d-inline-block border-bottom border-4 border-secondary mb-awe-32 mb-md-awe-48">
            Solicite o seu serviço!
          </h2>
        </div>
        <p class="text-darker-1 fz-14 fz-md-18 text-start text-sm-center">
          Vamos à sua situação,
          siga os passos e descreva com detalhes o ocorrido para que possamos te direcionar para o advogado especialista adequado ao seu caso.
        </p>
      </div>
      <div class="col-12 col-md-10 col-lg-8 pt-awe-64 pb-awe-48 pb-lg-awe-64 form-hidden form-steps-container">
        <div class="form-steps">
          <div class="form-step">
            <div data-step="progress" class="form-step__number active">
              1
            </div>
            <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
              <span class="d-none d-lg-block text-nowrap">
                Tipo de pessoa
              </span>
              <span class="d-lg-none">
                Pessoa
              </span>
            </p>
          </div>

          <div class="form-steps__divider"></div>

          <div class="form-step">
            <div data-step="progress" class="form-step__number">
              2
            </div>
            <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
              <span class="d-none d-lg-block text-nowrap">
                Tipo de serviço
              </span>
              <span class="d-lg-none">
                Serviço
              </span>
            </p>
          </div>

          <div class="form-steps__divider"></div>

          <div class="form-step">
            <div data-step="progress" class="form-step__number">
              3
            </div>
            <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
              Documentos
            </p>
          </div>

          <div class="form-steps__divider"></div>

          <div class="form-step">
            <div data-step="progress" class="form-step__number">
              4
            </div>
            <p class="fw-bold text-secondary fz-14 fz-md-16 m-0">
              Formulário
            </p>
          </div>

        </div>
      </div>
      <div class="col-12 form-hidden">
        <div data-step="step">
          <p class="text-main fz-16 fz-md-24 fw-bold mb-32 text-center">
            Selecione o tipo de pessoa que deseja processar
          </p>
          <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-awe-32 gap-md-awe-64 pt-awe-32 pt-md-awe-40">
            <div class="custom-form-check">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/svg/physical-person.svg" alt="">
              <label class="text-secondary fz-14 fz-md-16 m-0" for="pessoaFisica">
                Pessoa física
              </label>
              <p class="text-center fz-14 fz-md-16 text-darker-1 m-0">
                Acompanhamento para uma situação que envolve <span class="fw-bold">outra pessoa</span>.
              </p>
              <input onclick="etapa1('fisica')" type="radio" name="tipoDePessoa" id="pessoaFisica">
            </div>
            <div class="custom-form-check">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/svg/company.svg" alt="">
              <label class="text-secondary fz-14 fz-md-16 m-0" for="pessoaJuridica">
                Pessoa jurídica
              </label>
              <p class="text-center fz-14 fz-md-16 text-darker-1 m-0">
                Acompanhamento para uma situação que envolve <span class="fw-bold">uma empresa</span>.
              </p>
              <input onclick="etapa1('juridica')" type="radio" name="tipoDePessoa" id="pessoaJuridica">
            </div>
          </div>
        </div>
        <div data-step="step" class="d-none">
          <div data-subStep="fisica" class="row justify-content-center d-none">
            <div class="mb-awe-32 col-12">
              <h3 class="text-main fz-16 fz-md-24 text-center">
                Você está como pessoa <span class="fw-bold">física. <br> Selecione o serviço que deseja</span>
              </h3>
            </div>
            <div class="servicos-grid-container col-12 col-lg-9 col-xl-10">
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
            </div>
          </div>
          <div data-subStep="juridica" class="row justify-content-center d-none">
            <div class="mb-awe-32 col-12">
              <h3 class="text-main fz-16 fz-md-24 text-center">
                Você está como pessoa <span class="fw-bold">jurídica. <br> Selecione o serviço que deseja</span>
              </h3>
            </div>
            <div class="servicos-grid-container col-12 col-lg-9 col-xl-10">
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
            </div>
          </div>
          <div class="pt-awe-48 d-flex justify-content-center gap-awe-32">
            <button class="fz-14 fz-md-16 awe-button secondary-button" onclick="etapa0()">
              Voltar
            </button>
            <button class="fz-14 fz-md-16 awe-button primary-button" onclick="etapa2()" data-button="next" disabled>
              Continuar
            </button>
          </div>
        </div>
        <div data-step="step" class="d-none">
          <div class="form-documentos-container rounded-2 py-sm-awe-32 px-sm-awe-40">
            <div class="mb-awe-40">
              <h3 class="fz-24 fw-bold text-main d-none d-md-block">
                Documentos e arquivos - <span class="fz-16 fw-regular text-darker-1">Envie arquivos que julgar importante</span>
              </h3>
              <h3 class="fw-bold fz-16 text-main d-md-none">
                Envie arquivos que julgar inportante
              </h3>
            </div>
            <div class="mb-awe-8">
              <p class="fw-bold text-main fz-14 fz-sm-16">
                Upload - <span class="fw-regular">opcional</span>
              </p>
            </div>
            <div class="d-flex flex-column-reverse flex-md-row gap-awe-16">
              <div id="listaDeArquivos" class="d-none"></div>
              <!-- input "falso" customizado -->
              <label for="arquivosDoFormulario" id="labelArquivosdDoFormulario">
                <div class="fz-16 text-darker-2 text-center">
                  <!-- <p class="fw-regular">Arraste os arquivos até aqui</p>
                  <span class="fw-regular">ou</span> -->
                  <p class="fw-bold">Selecione os arquivos</p>
                </div>
              </label>
            </div>
          </div>
          <!-- input real escondido -->
          <div class="d-none">
            <input type="file" name="arquivosDoFormulario" id="arquivosDoFormulario" multiple>
          </div>
          <div class="pt-awe-48 d-flex justify-content-center gap-awe-32">
            <button class="fz-14 fz-md-16 awe-button secondary-button" onclick="etapa1()">
              Voltar
            </button>
            <button class="fz-14 fz-md-16 awe-button primary-button" onclick="etapa3()">
              Continuar
            </button>
          </div>
        </div>
        <div data-step="step" class="row justify-content-center d-none">
          <div class="col-12 col-lg-10 col-xl-8">
            <?php echo do_shortcode('[contact-form-7 id="5" title="Formulário de serviços"]'); ?>
          </div>
        </div>
      </div>
      <div id="form-servicos-final" class="d-none pt-awe-64">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="border border-2 border-main p-awe-24">
              <div class="d-flex justify-content-center mb-awe-32">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/svg/form-success.svg">
              </div>
              <p class="fz-24 text-main fw-bold mb-awe-16 text-center">
                Sua solicitação foi enviada com <span class="text-secondary">sucesso</span>!
              </p>
              <p class="text-main fz-16 text-center">
                Em breve um dos nossos especialistas irá retornar a sua solicitação. Obrigado!
              </p>
            </div>
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
        <a href="<?php echo home_url('/equipe'); ?>" class="awe-button primary-button">
          Cadastre-se!
        </a>
      </div>
    </div>
  </div>
</section>

<section class="bg-light-1" id="contato">
  <div class="container px-awe-32 px-lg-0 py-awe-128">
    <div class="row">
      <div class="col-12 col-lg-5 mb-awe-64 mb-lg-0">
        <h2 class="text-main fw-bold border-bottom border-4 border-secondary pb-1 d-inline-block mb-awe-40">
          Contato
        </h2>
        <p class="fz-16 text-darker-1 mb-md-awe-40 mb-lg-awe-96">
          Você tem alguma dúvida ou gostaria de conversar melhor sobre algum outro assunto? Entre em contato conosco!
        </p>
        <div class="d-flex flex-column gap-awe-32">
          <a href="mailto:atendimento@revojus.com.br" class="text-decoration-none fw-bold fz-16 text-secondary">
            <span class="me-2">
              <img src="<?php echo get_template_directory_uri(); ?>/dist/img/svg/mail.svg" alt="">
            </span>
            atendimento@revojus.com.br
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
        <?php echo do_shortcode('[contact-form-7 id="21" title="Formulário de contato"]'); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>