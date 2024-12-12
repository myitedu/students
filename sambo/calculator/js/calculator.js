$(function () {
    let num = '', number1 = '', number2 =  '', operator = '';
    $(".number").click(function () {
       let n = $(this).text();
       num+=n;
        if (num.length>9){
            return false;
        }

        if (operator==''){
            number1+=n;
        }else{
            number2+=n;
        }
       $(".display").text(number1+operator+number2);
    });
    $(".operator").click(function () {
       operator = $(this).text();
       if (operator == 'X'){
           operator = '*';
       }
    });
    $(".run").click(function () {
        let result = eval(number1+ operator + number2);
        result = result.toFixed();
        $(".display").text(result);
        num = ''; number1=''; number2=''; operator =  '';
    });
    $(".ac").click(function () {
       resetCalculator();
    });
    function resetCalculator() {
        num = ''; number1=''; number2=''; operator =  '';
        $(".display").text('0');
    }
});