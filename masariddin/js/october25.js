$( function() {
    $( "#animal" ).draggable();
    $( "#cage" ).droppable({
        drop: function( event, ui ) {
            alert("NOOOOOO, NO CAGE");
        }
    });
    $( "#banana" ).droppable({
        drop: function( event, ui ) {
            alert("YESSSS BANANA PLEASEEEE");
        }
    });
    let left = 0;

    function animal_run(direction){
        $("#animal").css("left",left+"px");
        if (direction=='right') {
            $("#animal").css("transform", "scaleX(1)");

            if (left>=1000){
                left = -600;
            }

            left += 100;
        }else{
           $("#animal").css("transform", "scaleX(-1)");
            left -= 100;
        }

        console.log($("#animal").position());
    }
    let schedule = setInterval(() => animal_run("right"), 100);

    $("#btn_right").click(function () {
       animal_run('right');
    });
    $("#btn_left").click(function () {
        animal_run('left');
    });

    $("#btn_stop").click(function () {
        clearInterval(schedule);
    });

    $("#btn_continue").click(function () {
        schedule = setInterval(() => animal_run("right"), 100);
    });
} );

