const imagePortrait = document.getElementById("imagePortrait");
const imageLandscape = document.getElementById("imageLandscape");
const nameProject = document.getElementById("name");
const link = document.getElementById("link");
const description = document.getElementById("description");

const inputs = document.querySelectorAll("input");

const form = document.getElementById("portafolio");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  inputs.forEach((element) => {
    element.style.border = "none";
  });

  if (imagePortrait.value == "") {
    swal("Error", "La imagen es obligatoria", "error");
  } else if (imageLandscape.value == "") {
    swal("Error", "La imagen es obligatoria", "error");
  } else if (nameProject.value == "") {
    nameProject.style.border = "1px solid red";
    swal("Error", "No puedes dejar el nombre vacío", "error");
  } else if (link.value == "") {
    link.style.border = "1px solid red";
    swal("Error", "No puedes dejar el link vacío", "error");
  } else if (description.value == "") {
    description.style.border = "1px solid red";
    swal("Error", "No puedes dejar la descripción", "error");
  } else {
    form.submit();
  }
});


// previsualizar imagen imagePortrait
const btnImgimagePortrait = document.getElementById("imagePortrait");
const imgPortrait = document.getElementById("prevPortrait");

btnImgimagePortrait.addEventListener("change", () => {
  const archivo = btnImgimagePortrait.files;
  if (!archivo || !archivo.length) {
    imgPortrait.src = "";
    return;
  }
  const primerArchivo = archivo[0];
  const objectURL = URL.createObjectURL(primerArchivo);
  imgPortrait.src = objectURL;
});

// previsualizar imagen imageLandscape
const btnImgimageLandscape = document.getElementById("imageLandscape");
const imgLandscape = document.getElementById("prevLandscape");

btnImgimageLandscape.addEventListener("change", () => {
  const archivo = btnImgimageLandscape.files;
  if (!archivo || !archivo.length) {
    imgLandscape.src = "";
    return;
  }
  const primerArchivo = archivo[0];
  const objectURL = URL.createObjectURL(primerArchivo);
  imgLandscape.src = objectURL;
});