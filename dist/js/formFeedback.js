// form feedback

let formEquipeFeedback;
if (document.querySelector('#form-equipe-feedback')) {
  formEquipeFeedback = new bootstrap.Modal('#form-equipe-feedback', {
    keyboard: false,
  });
}

let formServicosFeedback;
if (document.querySelector('#form-servicos-feedback')) {
  formServicosFeedback = new bootstrap.Modal('#form-servicos-feedback', {
    keyboard: false,
  });
}

let formContatoFeedback;
if (document.querySelector('#form-contato-feedback')) {
  formContatoFeedback = new bootstrap.Modal('#form-contato-feedback', {
    keyboard: false,
  });
}

document.addEventListener(
  'wpcf7mailsent',
  function (event) {
    // id referente ao id do formulário do plugin wp contact form
    const id = event.detail.contactFormId;

    // alterar cada id de acordo com o id atual
    if (id === 22) {
      formServicosFeedback.show();
    } else if (id === 21) {
      formContatoFeedback.show();
    } else if (id === 23) {
      formEquipeFeedback.show();
    }
  },
  false
);
