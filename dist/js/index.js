const formContainer = document.querySelector('#form-servicos');
const formHidden = document.querySelectorAll('.form-hidden');
const formFinal = document.querySelector('#form-servicos-final');
const formData = {
  pessoa: '',
  servico: '',
};

const inputPessoaContactForm = document.querySelector('#pessoaContactForm');
const inputServicoContactForm = document.querySelector('#servicoContactForm');
const inputFilesContactForm = document.querySelector('#filesContactForm');

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

// form step progress

const stepProgress = formContainer.querySelectorAll('[data-step="progress"]');

// Etapas

const formEtapas = formContainer.querySelectorAll('[data-step="step"]');

const etapa0 = () => {
  formEtapas[0].classList.remove('d-none');
  formEtapas[1].classList.add('d-none');
  stepProgress[0].classList.add('active');
  stepProgress[1].classList.remove('active');

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

  stepProgress[0].classList.remove('active');
  stepProgress[1].classList.add('active');
  stepProgress[2].classList.remove('active');

  if (pessoa) {
    formData.pessoa = pessoa;
  }

  formSubEtapas.forEach(subEtapa => {
    if (subEtapa.dataset.substep === pessoa) {
      subEtapa.classList.remove('d-none');
    }
  });

  servicos.forEach(servico => {
    servico.checked = false;
  });

  nextButton.setAttribute('disabled', 'disabled');

  formContainer.scrollIntoView();
};

const formFiles = document.querySelector('#arquivosDoFormulario');
const formFilesContainer = document.querySelector('#listaDeArquivos');
let arrayFiles = [];

formFiles.addEventListener('change', e => {
  formFilesContainer.classList.remove('d-none');
  arrayFiles = Array.from(e.target.files);

  arrayFiles.forEach(file => {
    const fileItemHTML = `
      <div class="arquivo__item">
        ${file.name}
      </div>      
    `;

    formFilesContainer.innerHTML += fileItemHTML;
  });

  if (!arrayFiles) {
    formFilesContainer.classList.add('d-none');
  }
});

const etapa2 = () => {
  formEtapas[1].classList.add('d-none');
  formEtapas[3].classList.add('d-none');
  formEtapas[2].classList.remove('d-none');

  stepProgress[1].classList.remove('active');
  stepProgress[2].classList.add('active');
  stepProgress[3].classList.remove('active');

  if (arrayFiles) {
    arrayFiles.forEach(file => {
      const fileItemHTML = `
        <div class="arquivo__item">
          ${file.name}
        </div>      
      `;
    });
  }
};

const etapa3 = () => {
  formEtapas[2].classList.add('d-none');
  formEtapas[3].classList.remove('d-none');

  stepProgress[2].classList.remove('active');
  stepProgress[3].classList.add('active');

  inputPessoaContactForm.value = formData.pessoa;
  inputServicoContactForm.value = formData.servico;
  inputFilesContactForm.files = formFiles.files;

  formContainer.scrollIntoView();
};

document.addEventListener(
  'wpcf7mailsent',
  function (event) {
    formHidden.forEach(item => {
      item.classList.add('d-none');
    });
    formFinal.classList.remove('d-none');
  },
  false
);
