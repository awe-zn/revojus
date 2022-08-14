<div class="col-12 col-md-10 col-lg-8">
  <div class="border border-2 border-main-lighter-2 rounded-2 py-awe-32 px-awe-16 px-md-awe-40 mb-awe-40">
    <p class="fw-bold fz-24 text-main mb-awe-40">
      Informações
    </p>
    <div class="row gap-awe-32 gap-md-0">
      <div class="col-12 col-md-6 d-flex flex-column gap-awe-24">
        <div class="visually-hidden">
          [text* pessoa id:pessoaContactForm]
          [text* servico id:servicoContactForm]
        </div>
        <div>
          <label for="nome">Nome</label>
          [text* nome id:nome placeholder "Nome"]
        </div>
        <div>
          <label for="email">Email</label>
          [email* email id:email placeholder "Email"]
        </div>
        <div>
          <label for="celular">Celular</label>
          [tel* celular id:celular placeholder "Número"]
        </div>
      </div>
      <div class="col-12 col-md-6">
        <label for="mensagem">Descreva a situação</label>
        [textarea* mensagem id:mensagem placeholder "Descreva a situação"]
      </div>
    </div>
  </div>
</div>

<div class="pt-awe-32 d-flex justify-content-center gap-awe-32">
  <button class="awe-button secondary-button" onclick="etapa1()" data-button="formNav">
    Voltar
  </button>
  [submit id:submitButton class:awe-button class:primary-button "Enviar"]
</div>