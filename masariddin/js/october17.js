$(function () {

$("#btn-go").click(function () {
    let qty = $("#qty").val();

    if (qty==''){
        alert("Please enter the qty");
        return false;
    }

    let htmlcode = "";
    let cls = 'odd';
    for(let i =1; i<=qty; i++){
        if (i%2===0){
            cls='even';
        }else{
            cls = 'odd';
        }

        if (i%35===0){
            cls = 'jon';
        }

        if (i%28===0){
            cls = 'masariddin';
        }

        htmlcode+="<div class='box "+cls+"'>"+i+"</div>";
    }

    $("#yashik").html(htmlcode);

});


});