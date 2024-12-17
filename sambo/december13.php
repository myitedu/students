<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Guestbook!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
</head>
<body>

<div class="container">
    <h4>Welcome to NYC!</h4>

    Resize: <input id="jon" type="range" min="-1000" max="1000">
    <hr>
    <img id="photo" class="photo" src="https://assets3.thrillist.com/v1/image/1880714/1200x630/flatten;crop_down;webp=auto;jpeg_quality=70" alt="photo">
</div>

<style>
    input{
        width: 400px;
    }
    .photo{
        width: 500px;
        position: relative;
    }
    .container{
        text-align: center;
    }
</style>

<script>
    $(function () {
       $("#jon").change(function () {
          let w = $(this).val();
          $("#photo").css("left",w+"px");
       });
    });
</script>
</body>
</html>
