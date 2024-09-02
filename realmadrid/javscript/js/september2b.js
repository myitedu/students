$(function () {

    let pos = 0;
    $("#btn_left").click(function () {
        pos-=100;
        $("#rabbit").css("left",pos+"px");
        $("#rabbit").css("transform","scaleX(-1)");
    });

    $("#btn_right").click(function () {
        pos+=100;
        $("#rabbit").css("left",pos+"px");
        $("#rabbit").css("transform","scaleX(1)");
    });

});
