const correo = document.getElementById("email");
const password = document.getElementById("pwd");
const inputs = document.querySelectorAll("input");

const form = document.getElementById("login");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  inputs.forEach((element) => {
    element.style.border = "none";
  });

  var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (regexEmail.test(correo.value) != true) {

    correo.style.border = "1px solid red";
    swal("Error", "El correo debe contener el formato correcto", "error");

  } else if (password.value.length < 8) {
    password.style.border = "1px solid red";
    swal("Error", "La contraseña debe contener al menos 8 carácteres.", "error");
  } else {
    form.submit();
  }
});
