$(function () {

    $(".thumbnails img").click(function () {
       let img = $(this).attr("src");
       $("#myphoto").attr("src",img);
    });


});