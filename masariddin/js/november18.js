$(function () {
   let counter = 0;
   $(".mb-4").click(function () {
      counter++;
      $(this).find("img").css("transform","rotateY(180deg)");

      if (counter%2===0){
         $("body").css("background-color","green");
      }else{
         $("body").css("background-color","red");
      }



   });
});