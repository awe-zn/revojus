const formContainer = document.querySelector('#form-servicos');

const formData = {
  pessoa: '',
  servico: '',
};

const inputPessoaContactForm = document.querySelector('#pessoaContactForm');
const inputServicoContactForm = document.querySelector('#servicoContactForm');

formContainer
  .querySelector('form')
  .classList.add('row', 'justify-content-center');

// Buttons

const navButtons = formContainer.querySelectorAll('button');

navButtons.forEach(navButton => {
  navButton.addEventListener('click', e => {
    e.preventDefault();
  });
});

const nextButton = formContainer.querySelector('button[data-button="next"]');

// Etapas

const formEtapas = formContainer.querySelectorAll('[data-step]');

const etapa0 = () => {
  formEtapas[0].classList.remove('d-none');
  formEtapas[1].classList.add('d-none');

  formSubEtapas.forEach(subEtapa => {
    subEtapa.classList.add('d-none');
  });

  servicos.forEach(servico => {
    servico.checked = false;
  });

  nextButton.setAttribute('disabled', 'disabled');

  formContainer.scrollIntoView();
};

// SubEtapas

const formSubEtapas = formContainer.querySelectorAll('[data-subStep]');

// Serviços

const servicos = formContainer.querySelectorAll('input[name="tipoDeServico"]');

servicos.forEach(servico => {
  servico.addEventListener('click', ({ target }) => {
    formData.servico = target.value;
    nextButton.removeAttribute('disabled');
  });
});

const etapa1 = pessoa => {
  formEtapas[0].classList.add('d-none');
  formEtapas[2].classList.add('d-none');
  formEtapas[1].classList.remove('d-none');

  if (pessoa) {
    formData.pessoa = pessoa;
  }

  formSubEtapas.forEach(subEtapa => {
    if (subEtapa.dataset.substep === pessoa) {
      subEtapa.classList.remove('d-none');
    }
  });

  formContainer.scrollIntoView();
};

const etapa2 = () => {
  formEtapas[1].classList.add('d-none');
  formEtapas[2].classList.remove('d-none');

  inputPessoaContactForm.value = formData.pessoa;
  inputServicoContactForm.value = formData.servico;

  formContainer.scrollIntoView();
};
