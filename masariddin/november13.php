<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Financial Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/november13.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/november13.js"></script>
</head>
<body>

<div class="container">

    <h3>The best cars in the world!</h3>
    <hr>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price</th>
            <th>Photo</th>
        </tr>
    </table>

    <table id="cars_table" class="table table-bordered">
    </table>

    <table class="table table-bordered">
        <tr>
            <td>9</td>
            <td><input placeholder="Enter the car make" type="text" id="make_input"></td>
            <td><input placeholder="Enter the car model" type="text" id="model_input"></td>
            <td><input placeholder="Enter the car price" type="text" id="price_input"></td>
            <td>

                <input placeholder="Enter the car photo URL" type="url" id="photo_input">
            </td>
        </tr>
        <tr>
            <td style="text-align: center" colspan="5">
                <button class="btn btn-info" id="btn_insert">Insert</button>
            </td>
        </tr>
    </table>


</div>

</body>
</html>
