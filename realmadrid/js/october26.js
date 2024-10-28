$(function () {

    $(".smallphotos").click(function () {
       let img = $(this).attr("src");
       $("#main_photo").attr("src", img);
    });

});