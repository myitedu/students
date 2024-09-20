<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="css/september18.css">
    <script  src="js/september18b.js"></script>
</head>
<body>
<div style="display: none" class="container">
    <label for="start">Start: </label>
    <input type="number" id="start_number" min="1" max="10000">
    <label for="start">End: </label>
    <input type="number" id="end_number" min="1" max="10000">
    <button id="btn_go" class="btn btn-danger">GO</button>
    <div class="row">
        <div id="left_col" class="col"></div>
        <div id="right_col" class="col"></div>
    </div>

    <p>
        <img id="just_image" src="https://imageio.forbes.com/specials-images/imageserve/65f2d5c080790f47bcfa620f/FC-Barcelona-has-announced-further-transfer-developments-/960x0.jpg?format=jpg&width=960" alt="photo">
    </p>
</div>
</body>
</html>