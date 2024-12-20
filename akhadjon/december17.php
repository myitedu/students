<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Move element left to right and top to bottom</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<div class="container">
    <h3>Move my element</h3>
    <hr>
    <img id="dubai" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz6X0s7ydkQPmeHia4MWhAqLp1QwprsRptxw&s" alt="dubai">
    <hr>

    <div id="buttons">
        <button class="btn btn-info">Top</button>
        <button class="btn btn-info">Bottom</button>
        <button class="btn btn-danger">Left</button>
        <button class="btn btn-danger">Right</button>
    </div>

</div>

<style>
    #buttons{
        width: 50%;
        margin: auto;
        background-color: #cacac3;
    }
    .container{
        text-align: center;
    }

    #dubai{
        width: 300px;
        position: relative;
    }
</style>

<script>

    $(function () {

        let left_pos = 0, top_pos = 0;
       $("button").click(function () {

           let btn = $(this).text();

           if (btn == 'Top'){
               top_pos-=100;
               $("#dubai").css("top",top_pos+"px");
           }else if (btn == 'Bottom'){
               top_pos+=100;
               $("#dubai").css("top",top_pos+"px");
           }else if (btn == 'Left'){
               left_pos-=100;
               $("#dubai").css("left",left_pos+"px");
           }else if (btn == 'Right'){
               left_pos+=100;
               $("#dubai").css("left",left_pos+"px");
           }

       });

    });

</script>

</body>
</html>