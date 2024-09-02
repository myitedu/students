<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to the World Airports!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/airport.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/airports.js"></script>
</head>
<body>
<?php
require "database.php";
$keyword = $_GET['keyword']??null;
$obj = new database("myitedu");
if (!empty($keyword)){
    $sql = "SELECT * FROM airports WHERE country like '%$keyword%';";
}else{
    $sql = "SELECT * FROM airports limit 100;";
}

$airports = $obj->sql($sql);
?>
<div class="container">
    <h1 class="title">The World Airports</h1>
    <hr>
    <form>
        <p class="search_form_p">
            <label for="keyword">Enter:</label>
            <input value="<?=$keyword;?>" type="text" name="keyword" placeholder="Your keywords">
            <button class="btn btn-danger">GO</button>
        </p>
    </form>
    <p class="airports_total_p">There are <span><?=count($airports);?></span> airports found by that keyword: <span><?=$keyword;?></span></p>
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Country</th>
            <th>Actions</th>
        </tr>

        <?php foreach ($airports as $airport):?>
        <tr>
            <td><?=$airport['id'];?></td>
            <td><?=$airport['name'];?></td>
            <td><?=$airport['city'];?></td>
            <td><?=$airport['country'];?></td>
            <td>
                <button class="btn btn-danger btn_delete">Delete</button>
                <button class="btn btn-success">Details</button>
                <button class="btn btn-info">Update</button>
            </td>
        </tr>
        <?php endforeach;?>


    </table>

</div>
</body>
</html>