const formSection = document.querySelector('#section-form-servicos');
const formContainer = document.querySelector('#form-servicos');

const form = formContainer.querySelector('form');
const inputSubmit = form.querySelector('input[type="submit"]');
const formButtons = form.querySelectorAll('button');
const nextButton = form.querySelectorAll('[data-button="next"]');

const formEtapa0 = form.querySelector('[data-step="0"]');
const tipoDePessoaContactForm = form.querySelector('#tipoDePessoaContactForm');

const formEtapa1 = form.querySelector('[data-step="1"]');
const tipoDeServicoContactForm = form.querySelector(
  '#tipoDeServicoContactForm'
);
const servicos = formEtapa1.querySelectorAll('input[name="tipoDeServico"]');
const formSubEtapaPessoaFisica = formEtapa1.querySelector(
  '[data-subStep="fisica"]'
);
const formSubEtapaPessoaJuridica = formEtapa1.querySelector(
  '[data-subStep="juridica"]'
);

const formEtapa2 = form.querySelector('[data-step="2"]');

const final = formContainer.querySelector('#form-servicos-final');

formButtons.forEach((button) => {
  button.addEventListener('click', (e) => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
    });
  });
});

servicos.forEach((servico) => {
  servico.addEventListener('click', (e) => {
    nextButton.forEach((button) => {
      button.removeAttribute('disabled');
    });
  });
});

function etapa0() {
  formEtapa0.classList.remove('d-none');
  formEtapa1.classList.add('d-none');
  
  formSubEtapaPessoaFisica.classList.add('d-none');
  formSubEtapaPessoaJuridica.classList.add('d-none');
  servicos.forEach((servico) => {
    if (servico.checked) servico.checked = false;
  });

  nextButton.forEach((button) => {
    button.setAttribute('disabled', 'disabled');
  });

  formSection.scrollIntoView();
}

function etapa1(tipoDePessoa) {
  formEtapa0.classList.add('d-none');
  formEtapa1.classList.remove('d-none');
  formEtapa2.classList.add('d-none');

  if (tipoDePessoa === 'fisica') {
    formSubEtapaPessoaFisica.classList.remove('d-none');
  }

  if (tipoDePessoa === 'juridica') {
    formSubEtapaPessoaJuridica.classList.remove('d-none');
  }

  tipoDePessoaContactForm.value = tipoDePessoa;

  formSection.scrollIntoView();
}

function etapa2() {
  formEtapa1.classList.add('d-none');
  formEtapa2.classList.remove('d-none');

  servicos.forEach((servico) => {
    if (servico.checked) {
      tipoDeServicoContactForm.value = servico.value;
    }
  });
  formSection.scrollIntoView();
}

function finalizacao() {
  setTimeout(() => {
    form.classList.add('d-none');
    final.classList.remove('d-none');

    formSection.scrollIntoView();
  }, 1000);
}

inputSubmit.addEventListener('click', (e) => {
  finalizacao();
});