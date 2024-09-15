$(function () {
   let left = 0;
    function move_goat(direction){
        if (direction=='left'){
            left-=50;
            $("#goat").css("transform",'scaleX(-1)')
        }else{
            left+=50;
            $("#goat").css("transform",'scaleX(1)')
        }

        $("#goat").css("left",left+"px");
    }

    $("#btn_left").click(function () {
        move_goat('left');
    });


    $("#btn_right").click(function () {
        move_goat('right');
    });
});