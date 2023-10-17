const name = document.getElementById("name");
const message = document.getElementById("message");

const inputs = document.querySelectorAll("input");

const form = document.getElementById("testimonios");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  inputs.forEach((element) => {
    element.style.borderBottom = "2px solid #b4b3b3";
  });

  if (name.value.length < 4) {
    name.style.borderBottom = "1px solid red";
    swal(
      "Error",
      "Este campo debe contener al menos 4 carácteres, inténtalo nuevamente",
      "error"
    );
  } else if (message.value.length < 10) {
    message.style.borderBottom = "1px solid red";
    swal(
      "Error",
      "Su mensaje debe contener al menos 10 carácteres, inténtalo nuevamente",
      "error"
    );
  } else {
    form.submit();
  }
});

document.getElementById("image").addEventListener("change", function () {
  var fileName = this.value.split("\\").pop();
  document.querySelector(".nombreArchivo").innerText =
    "Archivo seleccionado: " + fileName;
});
