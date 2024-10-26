<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>

    function arrayOfMultiples (num, length) {

        let jon =  [];
        for(let i = 1; i<=length; i++){
            jon.push(num*i);
        }
        console.log(jon);
    }

    arrayOfMultiples(7, 5);// ➞ [7, 14, 21, 28, 35]

    arrayOfMultiples(12, 10);// ➞ [12, 24, 36, 48, 60, 72, 84, 96, 108, 120]

    arrayOfMultiples(17, 6);// ➞ [17, 34, 51, 68, 85, 102]

</script>
</body>
</html>