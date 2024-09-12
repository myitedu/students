$(function () {

    let cloud1_left = 0;
    let cloud2_left = 0;
    function move_clouds(){
        let leftpos = $(".cloud1").position().left;
        let leftpos2 = $(".cloud2").position().left;

        cloud1_left+=100;
        cloud2_left-=100;

        if (leftpos>=1300){
            cloud1_left = 0;
        }
        if (leftpos2>=-100){
            cloud2_left = 1000;
        }
        $(".cloud1").css("left",cloud1_left+"px");
        $(".cloud2").css("left",cloud2_left+"px");
    }

    let bird_left = 0;
    function move_birds(){
        let height = Math.floor(Math.random() * 300) + 1;
        let leftpos = $(".duck1").position().left;
        bird_left-=10;

        if (leftpos<=-100){
            bird_left=800;
        }

        $(".duck1").css("left",bird_left+"px");
        $(".duck1").css("top",height+"px");
    }


    let scheduler1 = setInterval(move_clouds,5000);
    let scheduler2 = setInterval(move_birds,100);


        $('body').on('click', function() {
            var audio = document.getElementById('duck_sound');
            audio.play().catch(function(error) {
                console.log('Playback failed due to:', error);
            });

            var audio = document.getElementById('gunshot');
            audio.play().catch(function(error) {
                console.log('Playback failed due to:', error);
            });
        });


});