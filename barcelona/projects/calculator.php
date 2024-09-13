<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A basic calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/calculator.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/calculator.js"></script>
</head>
<body>
<div class="container">

    <div id="calculator">
        <div id="display">0</div>
        <div id="inputs">
            <table class="table table-bordered">
                <tr>
                    <td class="ac">AC</td>
                    <td>+/-</td>
                    <td>%</td>
                    <td class="operator">/</td>
                </tr>
                <tr>
                    <td class="number">7</td>
                    <td class="number">8</td>
                    <td class="number">9</td>
                    <td class="operator">x</td>
                </tr>
                <tr>
                    <td class="number">4</td>
                    <td class="number">5</td>
                    <td class="number">6</td>
                    <td class="operator">-</td>
                </tr>
                <tr>
                    <td class="number">1</td>
                    <td class="number">2</td>
                    <td class="number">3</td>
                    <td class="operator">+</td>
                </tr>
                <tr>
                    <td colspan="2" class="number">0</td>
                    <td>.</td>
                    <td class="run">=</td>
                </tr>
            </table>
        </div>
    </div>

</div>
</body>
</html>