$(function () {

    $(".thumbnails img").click(function () {
       let video = $(this).data("src");
       $("#myvideo").attr("src",video+"&autoplay=1");
    });


});