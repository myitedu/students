<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The timezone difference calculator (New York - Tashkent)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .row {
            margin-top: 20px;
        }

        .time-box {
            border: 1px solid #333;
            border-radius: 5px;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            background-color: #f0f8ff;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="title">The Time Difference Calculator</div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h4>New York Time</h4>
            <div id="new-york-time" class="time-box"></div>
        </div>
        <div class="col-md-6">
            <h4>Tashkent (UZ) Time</h4>
            <div id="tashkent-time" class="time-box"></div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        function updateTime() {
            // Get the current time for New York (GMT-5)
            const newYorkTime = new Date().toLocaleString("en-US", { timeZone: "America/New_York" });
            const newYorkFormatted = new Date(newYorkTime).toLocaleTimeString();

            // Get the current time for Tashkent (GMT+5)
            const tashkentTime = new Date().toLocaleString("en-US", { timeZone: "Asia/Tashkent" });
            const tashkentFormatted = new Date(tashkentTime).toLocaleTimeString();

            // Update the time in the UI
            $("#new-york-time").text(newYorkFormatted);
            $("#tashkent-time").text(tashkentFormatted);
        }

        // Update the time every second
        setInterval(updateTime, 1000);

        // Initial call
        updateTime();
    });
</script>
</body>
</html>
