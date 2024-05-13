const learnMoreBtn = document.getElementById('learn-more-btn');
const additionalText = document.getElementById('additional-text');

learnMoreBtn.addEventListener('click', function() {
  if (additionalText.style.display === 'none') {
    additionalText.style.display = 'block';
  } else {
    additionalText.style.display = 'none';
  }
});
const $loginInputs = document.querySelectorAll(".login-container__input");
const $loginLabels = document.querySelectorAll(".login-container__label");

$loginLabels.forEach(label => {
  label.addEventListener("click", addFocus);
});

$loginInputs.forEach(input => {
  input.addEventListener("focusin", toggleFocusClassName);
  input.addEventListener("focusout", toggleFocusClassName);
});

function addFocus(e) {
  $loginInputs.forEach(input => {
    if (e.target.htmlFor === input.name) {
      input.focus();
    }
  });
}

function toggleFocusClassName(e) {
  if (e.target.value.length === 0) {
    $loginLabels.forEach(label => {
      if (label.htmlFor === e.target.name) {
        label.classList.toggle("login-container__label--onFocus");
      }
    });
  }
}
const $checkboxContainer = document.querySelector(".checkbox-container");
const $checkIcon = document.querySelector(".checkbox-container__check");
const $checkbox = document.querySelector(".checkbox__save-login--hidden");

$checkboxContainer.addEventListener("click", toggleChecked);

function toggleChecked() {
  $checkIcon.classList.toggle("checkbox-container__check--hidden");

  $checkbox.toggleAttribute("checked");
}
