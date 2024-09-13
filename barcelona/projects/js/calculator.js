$(function () {
    let num = '', num2='', operator = '', number1='', number2='';


   $(".number").click(function () {
       let number = $(this).text();
       num+=number;
       if (operator==''){
           number1=num;
           $("#display").text(number1);
       }else{
           number=$(this).text();
           number2+=number;
           $("#display").text(number1+operator+number2);
       }
   });

    $(".operator").click(function () {
        if (operator!=''){
            return false;
        }
        operator = $(this).text();

        if (operator=='x'){
            operator='*';
        }

    });

    $(".run").click(function () {
        let result = eval(number1+operator+number2);
        result = result.toFixed(2);
        $("#display").text(result);

    });
    $(".ac").click(function () {
        num = '', num2='', operator = '', number1='', number2='';
        $("#display").text(0);
    });














});