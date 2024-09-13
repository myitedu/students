<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date, Formats, Calendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/september11.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php
$country = $_GET['country']??"america/new_york";
$mydate = $_GET['mydate']??null;
ini_set("date.timezone",$country);
?>
<div class="container">
<h1>Welcome to the World Clock!!!</h1>
    <hr>
    <form>
        <p>
            <label for="country">Country: </label>
            <select name="country" id="country">
                <option value="america/new york">New York</option>
                <option value="america/chicago">Chicago</option>
                <option value="asia/tashkent">Tashkent</option>
                <option value="asia/dubai">Dubai</option>
                <option value="asia/tokyo">Tokyo</option>
                <option value="europe/moscow">Moscow</option>
            </select>
            <br>
            <input type="date" name="mydate">
            <button class="btn btn-danger">GO</button>
        </p>
    </form>

    <div id="display">
        <?php
        $jon = null;
        if ($mydate){
            $jon = strtotime($mydate);
        }
        $mytime = $jon??time();
        echo date("F d, Y H:i:s", $mytime);
        echo "<br> ".date("l", $mytime);
        ?>
    </div>
</div>



</body>
</html>
