function init(){

}

$(document).ready(function(){

});

$(document).on("click","#btnsoporte",function(){
    if($('#rol_id').val()==1){
        $('#lbltitulo').html("Access as support");
        $('#btnsoporte').html("Access as user");
        $('#rol_id').val(2);
        $('#imgtipo').attr("src","public/img/2.png");
    }else{
        $('#lbltitulo').html("Access as user");
        $('#btnsoporte').html("Access as support");
        $('#rol_id').val(1);
        $('#imgtipo').attr("src","public/img/1.png");

    }
    

});

init();