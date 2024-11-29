<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chessboard with Labels</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
            margin: 0;
        }

        .chessboard-container {
            display: grid;
            grid-template-columns: auto 8fr auto;
            grid-template-rows: auto 8fr auto;
        }

        .chessboard {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            grid-template-rows: repeat(8, 1fr);
            width: 400px;
            height: 400px;
            border: 20px solid #8b4513;
        }

        .chessboard div {
            width: 100%;
            height: 100%;
        }

        .chessboard .light {
            background-color: #f0d9b5;
        }

        .chessboard .dark {
            background-color: #b58863;
        }

        .label {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
        }

        .file-label {
            width: 50px;
            height: 20px;
        }

        .rank-label {
            width: 20px;
            height: 50px;
        }

        .file-label-container {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
        }

        .rank-label-container {
            display: grid;
            grid-template-rows: repeat(8, 1fr);
        }
    </style>
</head>
<body>
<div class="chessboard-container">
    <!-- Top labels for files (a-h) -->
    <div></div>
    <div class="file-label-container">
        <div class="label file-label">A</div>
        <div class="label file-label">B</div>
        <div class="label file-label">C</div>
        <div class="label file-label">D</div>
        <div class="label file-label">E</div>
        <div class="label file-label">F</div>
        <div class="label file-label">G</div>
        <div class="label file-label">H</div>
    </div>
    <div></div>

    <!-- Left labels for ranks (1-8) -->
    <div class="rank-label-container">
        <div class="label rank-label">8</div>
        <div class="label rank-label">7</div>
        <div class="label rank-label">6</div>
        <div class="label rank-label">5</div>
        <div class="label rank-label">4</div>
        <div class="label rank-label">3</div>
        <div class="label rank-label">2</div>
        <div class="label rank-label">1</div>
    </div>

    <!-- The chessboard -->
    <div class="chessboard">
        <!-- Rows of squares -->
        <div class="light"></div><div class="dark"></div><div class="light"></div><div class="dark"></div>
        <div class="light"></div><div class="dark"></div><div class="light"></div><div class="dark"></div>

        <div class="dark"></div><div class="light"></div><div class="dark"></div><div class="light"></div>
        <div class="dark"></div><div class="light"></div><div class="dark"></div><div class="light"></div>

        <div class="light"></div><div class="dark"></div><div class="light"></div><div class="dark"></div>
        <div class="light"></div><div class="dark"></div><div class="light"></div><div class="dark"></div>

        <div class="dark"></div><div class="light"></div><div class="dark"></div><div class="light"></div>
        <div class="dark"></div><div class="light"></div><div class="dark"></div><div class="light"></div>

        <div class="light"></div><div class="dark"></div><div class="light"></div><div class="dark"></div>
        <div class="light"></div><div class="dark"></div><div class="light"></div><div class="dark"></div>

        <div class="dark"></div><div class="light"></div><div class="dark"></div><div class="light"></div>
        <div class="dark"></div><div class="light"></div><div class="dark"></div><div class="light"></div>

        <div class="light"></div><div class="dark"></div><div class="light"></div><div class="dark"></div>
        <div class="light"></div><div class="dark"></div><div class="light"></div><div class="dark"></div>

        <div class="dark"></div><div class="light"></div><div class="dark"></div><div class="light"></div>
        <div class="dark"></div><div class="light"></div><div class="dark"></div><div class="light"></div>
    </div>

    <!-- Right labels (empty space for alignment) -->
    <div class="rank-label-container">
        <!-- Empty filler cells for alignment -->
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Bottom labels for files (a-h) -->
    <div></div>
    <div class="file-label-container">
        <div class="label file-label">A</div>
        <div class="label file-label">B</div>
        <div class="label file-label">C</div>
        <div class="label file-label">D</div>
        <div class="label file-label">E</div>
        <div class="label file-label">F</div>
        <div class="label file-label">G</div>
        <div class="label file-label">H</div>
    </div>
    <div></div>
</div>
</body>
</html>
