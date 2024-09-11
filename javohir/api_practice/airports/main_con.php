<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api Practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="api_practice.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="d-flex text-center mt-5">
    <div class="container p-5 w-50">
        <h1 class="text-danger fw-bold mb-4">Word of Airports</h1>
        <form class="mb-5">
            <label for="keyword">Enter: </label>
            <input type="text" placeholder="Enter keyword" id="keyword" name="keyword">
            <button type="submit">Go</button>
        </form>
        <div>
            <ul class="list-group" id="suggestion"></ul>
        </div>
    </div>
</body>
</html>