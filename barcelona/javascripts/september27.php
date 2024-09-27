<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/september27.css">
    <script defer  src="js/september27.js"></script>
</head>
<body>
<div id="quiz">

<h3>Match the capital city with correct country</h3>
    <table class="table table-bordered">
        <tr>
            <td>China</td>
            <td>
                <div data-city="Beijing" class="droppable">Drag Answer here</div>
                <i class="check_mark" style="display:none;">&#10003;</i>
                <i class="cross_mark" style="display:none;">&#x274C;</i>
            </td>
            <td>
                <div data-city="London" class="draggable">London</div>
            </td>
        </tr>
        <tr>
            <td>United Kingdom</td>
            <td>
                <div data-city="London" class="droppable">Drag Answer here</div>
                <i class="check_mark" style="display:none;">&#10003;</i>
                <i class="cross_mark" style="display:none;">&#x274C;</i>
            </td>
            <td>
                <div data-city="Canberra" class="draggable">Canberra</div>
            </td>
        </tr>
        <tr>
            <td>Australia</td>
            <td>
                <div data-city="Canberra" class="droppable">Drag Answer here</div>
                <i class="check_mark" style="display:none;">&#10003;</i>
                <i class="cross_mark" style="display:none;">&#x274C;</i>
            </td>
            <td>
                <div data-city="Beijing" class="draggable">Beijing</div>
            </td>
        </tr>
    </table>

</div>

</body>
</html>