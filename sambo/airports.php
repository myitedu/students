<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The World Airports Directory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/airports.css">
    <script defer src="js/airports.js"></script>
</head>
<body>
<?php
$keyword = $_GET['keyword']??null;
$fields = $_GET['fields']??null;

require "database.php";
$obj = new database("myitedu");
if (empty($keyword)){
    $sql = "SELECT * FROM airports limit 100;";
}else{
    $sql = "SELECT * FROM airports WHERE $fields like '%$keyword%' order by $fields;";
}
$airports = $obj->sql($sql);
?>

<div class="container">
    <h2>The World Airports Directory</h2>
    <hr>
    <form>

        <p>
            <label for="keyword">Enter: </label>
            <input value="<?=$keyword;?>" name="keyword" type="text" id="keyword" placeholder="Enter your keyword">
            <select name="fields" id="fields">
                <option value="city">City</option>
                <option value="country">Country</option>
                <option value="code">Code</option>
            </select>
            <button type="submit" class="btn btn-danger">GO</button>
        </p>

    </form>
    <hr>

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