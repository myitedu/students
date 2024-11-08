$(function () {


    $("#btn-compare").click(function () {

       let input1 = $("#input1").val();
       let input2 = $("#input2").val();

       if (input1 == input2){
          $("body").css("background-color","green");
       }else{
           $("body").css("background-color","red");
       }


    });






});