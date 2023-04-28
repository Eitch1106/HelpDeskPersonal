function init() {
  $("#ticket_form").on("submit", function (e) {
    guardaryeditar(e);
  });
}

$(document).ready(function () {
  $("#tick_descrip").summernote({
    height: 250,
    lang: "es-ES",
    callbacks:{
      onImageUpload: function(image){
        console.log("Image detect...");
        myimagetreat(image[0]);
      },
      onPaste: function(e){
        console.log("Text detect...");
      }
    }
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
  if($('#tick_descrip').summernote('isEmpty') || $('#tick_titulo').val == ''){
    swal("Advertencia!", "Campos vacios","warning")
  }else{
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
  
}

init();
