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
    <link rel="stylesheet" href="css/august23.css">
</head>
<body>
<?php
$keyword = $_GET['keyword']??null;
$file = file_get_contents("files/lorem.txt");
if (!empty($keyword)){
    $file = str_replace($keyword,"<span class='keyword'>$keyword</span>",$file);
}

?>
<div class="container">
<h1 class="title">Welcome to Loremville!</h1>

    <div class="search_form">
        <form>
            <label for="keyword">Enter: </label>
            <input value="<?=$keyword;?>" type="text" placeholder="Your keyword" name="keyword">
            <button class="btn btn-success">GO</button>
        </form>
    </div>

    <div class="content">
        <?php echo $file;?>
    </div>
</div>
</body>
</html>


