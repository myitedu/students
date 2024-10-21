$(function () {

    $("#btn_copy").click(function () {
       let text1 = $("#input1").val();
       $("#input2").val(text1);
       $("input").css("background-color","yellow");
    });

    $("#btn_clear").click(function () {
        $("#input1").val('');
        $("#input2").val('');
        $("input").css("background-color","white");
    });

});


