$(function () {

    //button caller
    $("#btn_go").click(function () {
       let start = $("#start_number").val(); //a user provides this input
       let end = $("#end_number").val(); //a user provides this input
       generate_numbers(start,end);
    });

    //image caller
    $("#just_image").click(function () {
        generate_numbers(1,33);
    });


    function generate_numbers(start, end){
        let box_html_even = '';
        let box_html_odd = '';
        for(let i=start; i<=end; i++){
            if (i%2===0){
                box_html_even+="<div class='box'>"+i+"</div>";
            }else{
                box_html_odd+="<div class='box'>"+i+"</div>";
            }
        }
        $("#left_col").html(box_html_even);
        $("#right_col").html(box_html_odd);
    }



});