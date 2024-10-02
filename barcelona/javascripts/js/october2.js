$(function () {
    let s = 0, m = 0;
    var schedule = '';
    $("#btn_go").click(function () {
         schedule = setInterval(setTimer,100);
    });



    function setTimer(){
        let s2 = "", m2 = "";
        s++;
        if (s>=60){
            s=0;
            m++;

            if (m<10){
                m2+="0"+m;
            }else{
                m2 = m;
            }

            $("#minute").text(m2);
        }
        if (s<10){
            s2+="0"+s;
        }else{
            s2 = s;
        }
        $("#second").text(s2);
    }


});