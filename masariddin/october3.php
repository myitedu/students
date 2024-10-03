<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Javascript World!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/october3.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/october3.js"></script>
</head>
<body>
<div id="lorem">
    <h1>Welcome to Loremville, USA!!!</h1>
    <hr>
    <div id="seach_form">
        <label for="keyword">Enter: </label>
        <input type="text" id="keyword" placeholder="Your Keyword">
        <button id="btn_go" class="btn btn-danger">GO</button>
    </div>
    <p id="show_total_found" style="text-align: center">
        There are <span class="found_label" id="total_found">0</span> records found by that keyword <span class="found_label" id="keyword_found">keyword</span>
    </p>
    <hr>
    <div id="text"></div>
</div>
</body>
</html>
