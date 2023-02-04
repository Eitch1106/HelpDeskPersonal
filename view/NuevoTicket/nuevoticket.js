function init() {
  $("#ticket_form").on("submit", function (e) {
    guardaryeditar(e);
  });
}

$(document).ready(function () {
  $("#tick_descrip").summernote({
    height: 250,
  });
  //Llenado de comboBox de las categorias orfecidas desde la DB
  $.post("../../controller/categoria.php?op=comboCat", function (data, status) {
    $("#cat_id").html(data);
  });
  //Llenado de comboBox del staff de amma desde la DB
  $.post("../../controller/staff.php?op=comboStaf", function (data, status) {
    $("#staf_id").html(data);
  });
});

function guardaryeditar(e) {
  e.preventDefault();
  var formData = new FormData($("#ticket_form")[0]);
  $.ajax({
    url: "../../controller/ticket.php?op=insert",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (datos) {
      $('#tick_titulo').val('');
      $('#tick_descrip').summernote('reset');
      swal("Correcto!", "Ticket registrado correctamente", "success");
    }
  });
}

init();
