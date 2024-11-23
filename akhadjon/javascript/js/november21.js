$(function () {



    $("button").click(function () {
        let dob = $("input").val();

        let age = 2024 - dob;

        $("h1").text("You are "+age+" years old!");


    });





});
