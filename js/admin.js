// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};

$location = window.location.pathname;
console.log($location);
switch ($location) {
  case "/VibraDigital/admin/admin.php":
    document.querySelector(".dashboard").classList.add("active");
    break;

  case "/VibraDigital/admin/testimonios.php":
    document.querySelector(".testimonios").classList.add("active");
    break;

  case "/VibraDigital/admin/portafolio.php":
    document.querySelector(".portafolio").classList.add("active");
    break;

  default:
    break;
}


function toggleModal(){
  document.body.classList.toggle("open");
}
