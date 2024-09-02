$(function () {

$(".btn_delete").click(function () {
   let ask = confirm("Are you sure you want to delete this airport?: ");
   if (ask){
       alert("Deleted!");
   }else{
       alert("Oh good, deleting cancelled!");
   }
});



});