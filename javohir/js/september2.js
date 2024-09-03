$(function () {
   $("#keyword").keyup(function () {
     let keyword = $(this).val();
     if (keyword.length<2){
         return false;
     }
     //Safe zone

    $.post("backend.php",{keyword:keyword},function (response) {
       $("#hints").html(response);
    });


     $(document).on("click","#hints li",function () {
        let country = $(this).text();
        $("#keyword").val(country);
        document.location = "http://myitedu.local/javohir/september2.php?country="+country;
     });



   });
});