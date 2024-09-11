<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/august26.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <?php 
    ini_set("display errors", 1);
    $model = "MacBook Pro";
    $color = "silver";
    $year = 2020;
    
    ?>

    <div class="container">
        <h1 class="text-center m-5">August 26</h1>
        <table class="table table-striped table-bordered">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Model</th>
                <th scope="col">Color</th>
                <th scope="col">Year</th>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td> <?= $model ?> </td>
                <td> <?= $color ?> </td>
                <td> <?= $year?> </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    
</body>
</html>