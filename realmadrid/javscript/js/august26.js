$(function () {
    let pos = 0;

    $("#btn_hide").click(function () {
        $("#box").fadeOut("slow");
    });
    $("#btn_show").click(function () {
        $("#box").fadeIn("slow");
    });
    $("#btn_toggle").click(function () {
        $("#box").toggle();
    });
    $("#btn_color").click(function () {
        let color = $("#input_color").val();
        $("#box").css("background-color",color);
    });
    $("#input_typing_text").keyup(function () {
        let letter = $(this).val();
        $("#box").text(letter);
    });
    $("#btn_delete_box_text").click(function () {
        $("#box").text("");
    });
    $("#btn_move_box_left").click(function () {
        pos-=100;
        $("#box").css("left",pos+"px");
    });
    $("#btn_move_box_right").click(function () {
        pos+=100;
        $("#box").css("left",pos+"px");
    });

    $("#input_command").keyup(function () {
        let command = $(this).val();

        if (command == 'change box color'){
            let color = prompt("Enter the color for your box: ");
            $("#box").css("background-color",color);
        }

        if (command == 'hide box'){
            $("#box").hide();
        }

        if (command == 'show box'){
            $("#box").show();
        }

        if (command == 'change body color'){
            let color = prompt("Enter the color for your body: ");
            $("body").css("background-color",color);
        }


    });
});