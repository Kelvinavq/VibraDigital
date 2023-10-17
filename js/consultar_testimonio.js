const titulo = document.querySelector(".titleModal");
const texto = document.querySelector(".textModal");
const inputId = document.querySelector("#id");

function consultarTestimonio() {
  $(document).on("click", ".li-testimonio", function (e) {
    var id = $(this).attr("data-id");

    $.ajax({
      url: "../backend/consultar_testimonio.php",
      type: "post",
      dataType: "json",
      data: { id: id },
      success: function (data) { 
        titulo.innerHTML = data[0].name
        texto.innerHTML = data[0].testimonial
        inputId.value = data[0].id

      },
      error: function (error) {
        console.log(error);
        alert(error);
      },
    });
  });
}

consultarTestimonio();
