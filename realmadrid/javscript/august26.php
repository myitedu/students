<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/august26.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/august26.js"></script>
</head>
<body>
<div class="container">
    <h1>Welcome to JQuery Library!</h1>
    <hr>
    Please enter your command: <input type="text" id="input_command">
    <br>
    <br>
    <div id="box">MY BOX</div>
    <hr>
    <button id="btn_hide" class="btn btn-danger">HIDE BOX</button>
    <button id="btn_show" class="btn btn-success">SHOW BOX</button>
    <button id="btn_toggle" class="btn btn-info">TOGGLE BOX</button>
    <button id="btn_delete_box_text" class="btn btn-dark">DELETE BOX TEXT</button>
    <hr>
    <input type="color" id="input_color">
    <button id="btn_color" class="btn btn-dark">CHANGE BOX COLOR</button>
    <hr>
    Type Box Text: <input type="text" id="input_typing_text">
    <hr>
    <button id="btn_move_box_left"> << MOVE BOX LEFT</button>
    <button id="btn_move_box_right">MOVE BOX RIGHT>> </button>
</div>
</body>
</html>
