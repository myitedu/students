$(function () {
    $("#number_of_box").keyup(function () {
        let max_number = $(this).val();
        let jonbox = "";
        let myclass = "";
        for(let i = 1; i<=max_number; i++){
            if (i%2===0){
                myclass="even_number";
            }else{
                myclass="odd_number";
            }
            jonbox+="<div class='jonbox "+myclass+"'>"+i+"</div>";
        }
        $("#mybox").html(jonbox);
    });
});
