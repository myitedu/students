$(function (){
    $("#submit").click(function () {
        let email = $("#email").val();
        let message = $("#message").val();
        if (email.length < 5 || message.length < 3) {
            alert("Please enter a valid email and message");
            return false;
        }





    })

})