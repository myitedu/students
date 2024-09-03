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
    <link rel="stylesheet" href="css/september2.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/september2.js"></script>
</head>
<body>
<?php
ini_set("display_errors", 1);
$films = [];
$keyword = $_GET['keyword'] ?? null;
if (!empty($keyword)) {
    include "api.php";
    $movies = fetchApi($keyword);
    if ($movies->Response!='False'){
        $films = $movies->Search;
    }
}
echo count($films);
?>
<div class="box">
    <form>
        <label for="keyword">Search: </label>
        <input name="keyword" value="<?= $keyword; ?>" autocomplete="off" type="text" id="keyword">
        <button class="btn btn-danger">GO</button>
    </form>
   <?php if(count($films)>0):?>
       <hr>
       <div id="results">
           <?php foreach ($films as $film): ?>
               <div class="row movie">
                   <div class="col col-3">
                       <img class="poster_img"
                            src="<?=$film->Poster; ?>"
                            alt="img">
                   </div>
                   <div class="col col-9">
                       <h4 class="movie_title"><?=$film->Title; ?></h4>
                       <ul class="movie_details">
                           <li>Year:<?=$film->Year; ?></li>
                           <li>imdbID:<?=$film->imdbID; ?></li>
                           <li>Type:<?=$film->Title; ?></li>
                       </ul>
                   </div>
               </div>
           <?php endforeach; ?>


       </div>
    <?php endif;?>
</div>
</body>
</html>