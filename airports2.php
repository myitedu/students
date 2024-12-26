<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The World Airports Directory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #fce4ec;
            font-family: Arial, sans-serif;
        }
        .table th {
            background-color: black;
            color: yellow;
        }
        .table tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        .table tr:nth-child(odd) {
            background-color: #d5f5d3;
        }
        .header {
            text-align: center;
            color: #4a148c;
            margin: 20px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="header">The World Airports Directory</h1>
    <form method="GET" class="row mb-4">
        <div class="col-md-6">
            <input type="text" name="search" class="form-control" placeholder="Search..." value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
        </div>
        <div class="col-md-3">
            <select name="filter" class="form-select">
                <option value="city" <?= ($_GET['filter'] ?? '') === 'city' ? 'selected' : '' ?>>City</option>
                <option value="country" <?= ($_GET['filter'] ?? '') === 'country' ? 'selected' : '' ?>>Country</option>
                <option value="name" <?= ($_GET['filter'] ?? '') === 'name' ? 'selected' : '' ?>>Name</option>
            </select>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-dark w-100">GO</button>
        </div>
    </form>

    <?php
    // Database connection
    $host = '127.0.0.1';
    $username = 'root';
    $password = '';
    $database = 'myitedu';

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Default query
    $query = "SELECT id, city, code, name, country, details FROM airports";
    $conditions = [];

    // If a search term is provided
    if (!empty($_GET['search']) && !empty($_GET['filter'])) {
        $search = $conn->real_escape_string($_GET['search']);
        $filter = $conn->real_escape_string($_GET['filter']);
        $conditions[] = "$filter LIKE '%$search%'";
    }

    if (!empty($conditions)) {
        $query .= " WHERE " . implode(' AND ', $conditions);
    }

    // Execute query
    $result = $conn->query($query);
    $numRows = $result->num_rows;

    if ($numRows > 0) {
        echo "<p class='text-center'>There are <b>$numRows airports</b> found by that keyword.</p>";
        echo "<table class='table table-bordered text-center'>";
        echo "<thead><tr>
                <th>ID</th>
                <th>City</th>
                <th>Code</th>
                <th>Name</th>
                <th>Country</th>
                <th>Details</th>
              </tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['code']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['country']}</td>
                    <td>{$row['details']}</td>
                  </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p class='text-center'>No results found.</p>";
    }

    $conn->close();
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
