<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The World Airports Directory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <style>
        .table th {
            background-color: #000;
            color: #FFD700;
            text-align: center;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #6c757d;
            color: #fff;
        }
        tr:nth-child(odd) td{
            background-color: #beb9b9;
        }
        tr:hover td{
            background-color: #6b6b98 !important;
            cursor: pointer;
        }
        form{
            text-align: center;
        }
        input, select{
            width: 200px;
            height: 40px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center text-primary mb-4">The World Airports Directory</h1>
    <form method="GET" action="" class="d-flex mb-3">
        <input type="text" name="query" class="form-control me-2" placeholder="Enter keyword">
        <select name="search_by" class="form-select me-2">
            <option value="city" <?= isset($_GET['search_by']) && $_GET['search_by'] === 'city' ? 'selected' : '' ?>>City</option>
            <option value="country" <?= isset($_GET['search_by']) && $_GET['search_by'] === 'country' ? 'selected' : '' ?>>Country</option>
        </select>
        <button type="submit" class="btn btn-danger">GO</button>
    </form>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>City</th>
            <th>Country</th>
            <th>Code</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Database connection
        $host = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "myitedu";

        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = $_GET['query'] ?? '';
        $searchBy = $_GET['search_by'] ?? 'city';

        $sql = "SELECT id, city, country, code FROM airports WHERE $searchBy LIKE ?";
        $stmt = $conn->prepare($sql);
        $searchTerm = "%$query%";
        $stmt->bind_param('s', $searchTerm);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['city']}</td>
                        <td>{$row['country']}</td>
                        <td>{$row['code']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4' class='text-center'>No results found</td></tr>";
        }

        $stmt->close();
        $conn->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
