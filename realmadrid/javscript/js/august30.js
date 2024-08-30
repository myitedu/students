$(function () {
   $("#widget").click(function () {
     $("#panel").toggle();
   });


   $("#input_company_name").keyup(function () {
      let name = $(this).val();
      $("#display_company_name").text(name);
   });
    $("#input_full_name").keyup(function () {
        let name = $(this).val();
        $("#display_full_name").text(name);
    });

    $("#input_address").keyup(function () {
        let name = $(this).val();
        $("#display_address").text(name);
    });
});