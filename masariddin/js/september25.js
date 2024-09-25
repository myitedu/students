$(function () {

    //Step 1: Click event on the button
    //Step 2: read the input inside of button function

    $("#btn_go").click(function () {
       let email = $("#keyword").val();
       let age = $("#age").val();

       //Find @ in the email
        let sobachka = email.search("@");

        if (sobachka<0){
            $(".alert-danger").html("<span class='wrong_email'>"+email+"</span>is in a wrong format").fadeIn("slow");
            $(".alert-success").hide();
        }else{
            $(".alert-danger").hide();
            $(".alert-success").html("<span class='correct_email'>"+email+"</span>is in a correct format").fadeIn("slow");
        }


        if (age<18){
            $(".alert-danger").html("Sorry, you must be 18 years or older to use our app").fadeIn("slow");
            $(".alert-success").hide();
        }

    });


});