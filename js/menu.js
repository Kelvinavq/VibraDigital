if (document.querySelector(".btn-menu")) {
  const button = document.querySelector(".btn-menu");
  button.addEventListener("click", () => {
    document.querySelector("nav").classList.toggle("active");
  });
}

if (document.querySelector(".cerrar")) {
  const cerrar = document.querySelector(".cerrar");
  cerrar.addEventListener("click", () => {
    document.querySelector("nav").classList.remove("active");
  });
}

const li = document.querySelectorAll(".li");

li.forEach((element) => {
  element.addEventListener("click", () => {
    document.querySelectorAll(".li").forEach(item => item.classList.remove("active"));
    document.querySelector("nav").classList.remove("active");
    element.classList.add("active")
  });
});

$location = window.location.hash;

switch ($location) {
  case "#inicio":
    document.querySelector(".menu-inicio").classList.add("active");
    break;
  case "#ventajas":
    document.querySelector(".menu-ventajas").classList.add("active");
    break;
  case "#procesos":
    document.querySelector(".menu-procesos").classList.add("active");
    break;
  case "#portafolio":
    document.querySelector(".menu-portafolio").classList.add("active");
    break;

  default:
    document.querySelector(".menu-inicio").classList.add("active");
    break;
}
