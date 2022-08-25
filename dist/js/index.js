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
    window.scroll(
      0,
      window.scrollY + nextButton.getBoundingClientRect().top - 500
    );
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
  const inputsTipoDePessoa = document.querySelectorAll(
    'input[name="tipoDePessoa"]'
  );

  inputsTipoDePessoa.forEach(item => {
    item.checked = false;
  });

  formEtapas.forEach((etapa, index) => {
    index !== 0
      ? etapa.classList.add('d-none')
      : etapa.classList.remove('d-none');
  });

  formEtapasProgresso.forEach((etapaProgresso, index) => {
    index !== 0
      ? etapaProgresso.classList.remove('active')
      : etapaProgresso.classList.add('active');

      index < 0
      ? etapaProgresso.classList.add('done')
      : etapaProgresso.classList.remove('done');
  });

  formSubEtapas[0].classList.add('d-none');
  formSubEtapas[1].classList.add('d-none');

  nextButton.setAttribute('disabled', 'disabled');

  servicos.forEach(servico => {
    servico.checked = false;
  });

  formContainer.scrollIntoView();
};

const etapa1 = pessoa => {
  formEtapas.forEach((etapa, index) => {
    index !== 1
      ? etapa.classList.add('d-none')
      : etapa.classList.remove('d-none');
  });

  formEtapasProgresso.forEach((etapaProgresso, index) => {
    index !== 1
      ? etapaProgresso.classList.remove('active')
      : etapaProgresso.classList.add('active');

    index < 1
      ? etapaProgresso.classList.add('done')
      : etapaProgresso.classList.remove('done');
  });

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
  formEtapas.forEach((etapa, index) => {
    index !== 2
      ? etapa.classList.add('d-none')
      : etapa.classList.remove('d-none');
  });

  formEtapasProgresso.forEach((etapaProgresso, index) => {
    index !== 2
      ? etapaProgresso.classList.remove('active')
      : etapaProgresso.classList.add('active');

    index < 2
      ? etapaProgresso.classList.add('done')
      : etapaProgresso.classList.remove('done');
  });

  formContainer.scrollIntoView();
};

const etapa3 = () => {
  formEtapas.forEach((etapa, index) => {
    index !== 3
      ? etapa.classList.add('d-none')
      : etapa.classList.remove('d-none');
  });

  formEtapasProgresso.forEach((etapaProgresso, index) => {
    index !== 3
      ? etapaProgresso.classList.remove('active')
      : etapaProgresso.classList.add('active');

    index < 3
      ? etapaProgresso.classList.add('done')
      : etapaProgresso.classList.remove('done');
  });

  inputPessoaContactForm.value = formData.pessoa;
  inputServicoContactForm.value = formData.servico;

  const filesContactForm = new DataTransfer();

  files.forEach(file => {
    filesContactForm.items.add(file);
  });

  inputFilesContactForm.files = filesContactForm.files;
};

function etapa0Progress() {
  if (formEtapasProgresso[0].classList.contains('done')) {
    etapa0();
  }
}

function etapa1Progress() {
  if (formEtapasProgresso[1].classList.contains('done')) {
    etapa1(formData.pessoa);
  }
}

function etapa2Progress() {
  if(formEtapasProgresso[2].classList.contains('done')) {
    etapa2();
  }
}

function etapa3Progress() {
  if(formEtapasProgresso[3].classList.contains('done')) {
    etapa3();
  }
}
