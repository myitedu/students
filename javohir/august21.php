<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to our first class!!!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/august21.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/august21.js"></script>
</head>
<body>
<?php
$keyword = $_GET['keyword']??null;
$column = $_GET['column']??'country';
require "database.php";
$obj = new database();

if ($keyword){
    if ($column=='any'){
        $sql = "SELECT * FROM airports WHERE city like '%$keyword%' or country like '%$keyword%' order by country asc;";
    }else{
        $sql = "SELECT * FROM airports WHERE $column like '%$keyword%' order by country asc;";
    }

}else{
    $sql = "SELECT * FROM airports limit 10;";
}


$airports = $obj->sql($sql);
?>
<div class="container">
        <h1>Welcome to the World Airports</h1>
        <hr>

    <div class="search_form">
        <form>
            <label for="keyword">Enter: </label>
            <input value="<?=$keyword;?>" type="text" placeholder="Enter your keyword" name="keyword">
            <select name="column" id="column">
                <option value="any">Any</option>
                <option value="city">City</option>
                <option value="country">Country</option>
            </select>
            <button class="btn btn-danger" type="submit">GO</button>
        </form>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>City</th>
            <th>Country</th>
            <th>Code</th>
        </tr>

    <?php foreach ($airports as $airport):?>
        <tr>
            <td><?=$airport['id'];?></td>
            <td><?=$airport['city'];?></td>
            <td><?=$airport['country'];?></td>
            <td><?=$airport['code'];?></td>
        </tr>
    <?php endforeach;?>


    </table>
</div>

</body>
</html>