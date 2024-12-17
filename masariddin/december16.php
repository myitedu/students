<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Instagram Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>
<body>
<?php
ini_set("display_errors",1);
$photos = scandir("uploads");
?>
<div class="container">
    <h4 class="title">Welcome to my Mini-Instagram Project</h4>
    <hr>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="your_file">Upload: </label>
        <input name="myfile" type="file" id="your_file">
        <button type="submit" name="upload">Upload</button>
    </form>
    <hr>

    <?php
    foreach ($photos as $photo):
    if ($photo!='.' && $photo!='..'):
    ?>

        <a href="uploads/<?=$photo;?>"><img class="photo" src="uploads/<?=$photo;?>" alt="photo"></a>

    <?php
    endif;
    endforeach;
    ?>

</div>

<style>
    .container{
        text-align: center;
    }
    .title{
        text-shadow: 3px 0px 22px #240505;
    }
    .photo{
        width: 200px;
        height: 300px;
        margin: 10px;
        box-shadow: 4px 4px 24px 4px black;
        border-radius: 13px;
        opacity: 0.7;
    }
    .photo:hover{
        opacity: 1;
    }
</style>
</body>
</html>
