<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Martin Luther Jr Day! - Jan 20, 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<div id="mybox">
    <h5>My Favorite Cities</h5>
    <hr>
    <div class="city_photos">
        <img class="city" src="https://www.travelguide.net/media/new-york.jpeg" alt="city">
        <img class="city" src="https://images.squarespace-cdn.com/content/v1/64cac6e7f41ccf1650ccc43b/1691537255531-J7BYDU9TJG1C1X1JPDQ9/Dubai-Skyline.jpg" alt="city">
        <img class="city" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSBG4fqHAJ9KPddzmJfx5Ue2zso0ZsvRU6JA&s" alt="city">
    </div>

    <img class="display_city" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSBG4fqHAJ9KPddzmJfx5Ue2zso0ZsvRU6JA&s" alt="city">

</div>


<style>

    body{
        background-color: black;
    }

    .display_city{
        width: 400px;
        height: 300px;
        box-shadow: 4px 4px 24px 4px black;
    }

    h5{
        padding-top: 20px;
    }

    .city{
        width: 120px;
        height: 120px;
        border-radius: 12px;
        display: inline-block;
        margin: 10px;
        cursor: pointer;
        box-shadow: 4px 4px 24px 4px black;
    }


    .city_photos{
        padding: 20px;
    }

    #mybox{
        width: 800px;
        height: 600px;
        border: 1px solid black;
        margin: 80px auto;
        text-align: center;
        background-color: white;
        border-radius: 13px;
    }
</style>

<script>
    $(function () {
        $(".city").click(function () {
           let src = $(this).attr("src");
           $(".display_city").attr("src",src);
        });
    });
</script>
</body>
</html>