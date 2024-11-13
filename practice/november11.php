<!doctype html>
<html>
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>


<div class="container">
    <h3>Enter the number of boxes to create</h3>
    <input type="number" id="boxCount" placeholder="Type a number">
    <button id="btn_generate_boxes">GO</button>
    <hr>
    <div id="boxes"></div>
</div>

<style>
    .container {
        text-align: center;
    }
    #boxes {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
    }
    .box {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
        border-radius: 50%;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#btn_generate_boxes').on('click', function() {
            const boxCount = parseInt($('#boxCount').val());
            const $boxesContainer = $('#boxes');
            $boxesContainer.empty();  // Clear any existing boxes

            if (boxCount > 0) {
                for (let i = 1; i <= boxCount; i++) {
                    const box = $('<div class="box"></div>').text(i);
                    $boxesContainer.append(box);
                }
            } else {
                alert("Please enter a valid positive number.");
            }
        });
    });
</script>



</body>
</html>