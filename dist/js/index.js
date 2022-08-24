// variáveis do contact form 7

const inputPessoaContactForm = document.querySelector('#pessoaContactForm');
const inputServicoContactForm = document.querySelector('#servicoContactForm');
const inputFilesContactForm = document.querySelector('#filesContactForm');

// variáveis do formulário

const formContainer = document.querySelector('#form-servicos');
const formEtapas = document.querySelectorAll('[data-step="step"]');
const formSubEtapas = document.querySelectorAll('[data-subStep]');
const formEtapasProgresso = document.querySelectorAll('[data-step="progress"]');
const nextButton = document.querySelector('[data-button="next"]');
const servicos = document.querySelectorAll('input[name="tipoDeServico"]');
const fileList = document.querySelector('#listaDeArquivos');
const fileInput = document.querySelector('#arquivosDoFormulario');
const formData = {
  pessoa: '',
  servico: '',
};
let files = [];
const modalFeedback = document.querySelector('#form-feedback');

servicos.forEach(servico => {
  servico.addEventListener('click', ({ target }) => {
    nextButton.removeAttribute('disabled');
    formData.servico = target.value;
  });
});

const updateFilesView = () => {
  fileList.innerHTML = '';

  files.forEach((file, index) => {
    const fileItemHtml = `
        <div class="arquivo__item">
          <span>
            ${file.name}
          </span>

          <button onclick="removeFile(${index})">&#215;</button>
        </div>
      `;

    fileList.innerHTML += fileItemHtml;
  });

  if (files.length) {
    fileList.classList.remove('d-none');
  } else {
    fileList.classList.add('d-none');
  }
};

const removeFile = index => {
  files.pop(index);

  updateFilesView();
};

fileInput.addEventListener('change', ({ target }) => {
  const arrayFiles = Array.from(target.files);

  arrayFiles.forEach(file => {
    files.push(file);
  });

  const data = new DataTransfer();

  fileInput.files = data.files;

  updateFilesView();
});

// etapas

const etapa0 = () => {
  formEtapas[0].classList.remove('d-none');
  formEtapas[1].classList.add('d-none');

  formEtapasProgresso[0].classList.add('active');
  formEtapasProgresso[1].classList.remove('active');

  formSubEtapas[0].classList.add('d-none');
  formSubEtapas[1].classList.add('d-none');

  nextButton.setAttribute('disabled', 'disabled');

  formContainer.scrollIntoView();
};

const etapa1 = pessoa => {
  formEtapas[0].classList.add('d-none');
  formEtapas[1].classList.remove('d-none');
  formEtapas[2].classList.add('d-none');

  formEtapasProgresso[0].classList.remove('active');
  formEtapasProgresso[1].classList.add('active');
  formEtapasProgresso[2].classList.remove('active');

  if (pessoa) {
    formData.pessoa = pessoa;
  }

  if (pessoa === 'fisica') {
    formSubEtapas[0].classList.remove('d-none');
  } else if (pessoa === 'juridica') {
    formSubEtapas[1].classList.remove('d-none');
  }

  formContainer.scrollIntoView();
};

const etapa2 = () => {
  formEtapas[1].classList.add('d-none');
  formEtapas[2].classList.remove('d-none');
  formEtapas[3].classList.add('d-none');

  formEtapasProgresso[1].classList.remove('active');
  formEtapasProgresso[2].classList.add('active');
  formEtapasProgresso[3].classList.remove('active');
};

const etapa3 = () => {
  formEtapas[2].classList.add('d-none');
  formEtapas[3].classList.remove('d-none');

  formEtapasProgresso[2].classList.remove('active');
  formEtapasProgresso[3].classList.add('active');

  inputPessoaContactForm.value = formData.pessoa;
  inputServicoContactForm.value = formData.servico;

  const filesContactForm = new DataTransfer();

  files.forEach(file => {
    filesContactForm.items.add(file);
  });

  inputFilesContactForm.files = filesContactForm.files;
};

