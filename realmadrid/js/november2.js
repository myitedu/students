$(function () {

    $("#mybtn").click(function () {
       let email = $("#email").val();
       let password = $("#password").val();


       if (email === '' || password === ''){
           alert("Either your email or password is empty!");
           return false;
       }

       document.location = "https://instagram.com/myitedu";

    });



});