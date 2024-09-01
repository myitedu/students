<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test and Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</head>
<body>
<?php
include "database.php";
$obj = new database("myitedu");
$sql = "SELECT * FROM airports WHERE country = 'Uzbekistan';";
$airports = $obj->sql($sql);
$colors = ['red','blue','green','yellow','brown','pink','purple','navy','gold'];

?>
<div class="container">
        <h1>Welcome to Something!</h1>
        <hr>

        <section>
            <?php foreach ($airports as $num=>$airport):
                $color = array_rand($colors);
                ?>
            <div style="background-color: <?=$colors[$color];?>" class="records">
                <div class="row">
                    <div class="col col-2">
                        <div class="number"><?php echo ++$num;?></div>
                    </div>
                    <div class="col col-10">

                        <h4><?=$airport['country'];?></h4>
                        <p><?=$airport['city'];?></p>
                        <p><?=$airport['code'];?></p>
                        <p><?=$colors[$color];?></p>

                    </div>
                </div>
            </div>
            <?php endforeach;?>

        </section>


</div>

<style>
    h1{
        text-align: center;
        color: gold;
    }
    .records{
        border: 1px solid black;
        border-radius: 10px;
        margin-bottom: 20px;
    }
    .number{
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: black;
        color: gold;
        text-align: center;
        margin: 10px;
    }

    body{
        background-color: black;
    }
</style>

</body>
</html>