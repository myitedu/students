<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body, .container{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            flex-direction: column;
            height: 50vh !important;
            overflow: auto;
        }

        ul {
            width: 250px;
            display: flex;
            flex-direction: column;
            list-style: none;
        }

        li {
            border: 1px solid black;
            padding: 10px;
            width: 100%;;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">
    <?php

        ini_set("display errors", 1);

        $keyword = $_GET["keyword"] ?? null;
        strip_tags($keyword);

        $conn = mysqli_connect("127.0.0.1","root","","myitedu", "3307");
        $result = $conn->query("SELECT Distinct * FROM airports Where Country like '$keyword%';");
        
        
    ?>

    <div class="container border">
        <h1>World of Airports</h1>
        <form class="mt-5">
            <label for="keyword">Enter: </label>
            <input type="text" name="keyword" id="keyword" placeholder="Enter Keyword...">
            <button type="submit">Go</button>
            <ul>
                <?php 
                    
                        while ($airport = $result->fetch_assoc()){
                            echo "<li><a href='#'>" .$airport['country']. "</a></li>";
                        }
                
                ?>
            </ul>
        </form>
    </div>
    
</body>
</html>
