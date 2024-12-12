<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to my Contact Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php
$keyword = $_GET['keyword']??null;
$lorem = file_get_contents("files/lorem.txt");

if (!empty($keyword)){
    $lorem = str_replace("$keyword","<span class='found'>$keyword</span>",$lorem);
}
?>
<div class="container">
    <h3>Welcome to Loremville, USA!</h3>
    <hr>
    <form method="get">
        <p>
            <label for="keyword">Enter: </label>
            <input value="<?=$keyword;?>" type="text" id="keyword" name="keyword" placeholder="Enter Your Keyword">
            <button type="submit" class="btn btn-success">GO</button>
        </p>
    </form>
    <div class="mytext">
        <?php
        echo "<pre>";
        echo $lorem;
        echo "</pre>";
        ?>
    </div>
</div>

<style>
    h3{
        text-align: center;
        color: darkred;
    }
    form{
        text-align: center;
    }
    .found{
        background-color: yellow;
        padding: 1px;
        color: darkred;
    }
</style>
</body>
</html>
