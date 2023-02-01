const passCheckbox1 = document.querySelector('#visor_pass1');
const passField1 = document.querySelector('#pass1');
const passCheckbox2 = document.querySelector('#visor_pass2');
const passField2 = document.querySelector('#pass2');

passCheckbox1.addEventListener('click', () => {
  hideOrShowPassword1();
});

passCheckbox2.addEventListener('click', () => {
  hideOrShowPassword2();
});

const hideOrShowPassword1 = () => {
  if (passCheckbox1.checked) passField1.type = 'text';
  else passField1.type = 'password';
};

const hideOrShowPassword2 = () => {
  if (passCheckbox2.checked) passField2.type = 'text';
  else passField2.type = 'password';
};
