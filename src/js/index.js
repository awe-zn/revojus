const form = document.querySelector('#form-servicos');

const buttons = form.querySelectorAll('button:not(button[type="submit"])');

buttons.forEach((button) => {
  button.addEventListener('click', (e) => {
    e.preventDefault();
  });
});

const steps = form.querySelectorAll('[data-steps]');

const nextStep = (current, next) => {
  setTimeout(() => {
    steps[current].classList.remove('d-flex');
    steps[current].classList.add('d-none');

    steps[next].classList.remove('d-none');
    steps[next].classList.add('d-flex');
  }, 500);
  form.scrollIntoView();
};

const prevStep = (prev, current) => {
  setTimeout(() => {
    steps[prev].classList.remove('d-none');
    steps[prev].classList.add('d-flex');

    steps[current].classList.remove('d-flex');
    steps[current].classList.add('d-none');
  }, 500);
  form.scrollIntoView();
};
