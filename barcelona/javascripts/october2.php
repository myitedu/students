<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/october2.js"></script>
</head>
<body>
<div id="timer">
    <h4>My Timer</h4>
    <div id="hour">00</div>
    <div id="minute">00</div>
    <div id="second">00</div>
    <hr>
     <button id="btn_go">GO</button>
</div>

<style>
    #timer{
        text-align: center;
    }
    #timer div{
        width: 60px;
        height: 60px;
        text-align: center;
        display: inline-block;
        margin: 10px;
        border: 1px solid black;
        line-height: 60px;
    }
</style>
</body>
</html>
