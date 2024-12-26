<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The world airports directory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</head>
<body>
<?php
$keyword = $_GET['keyword'] ?? null;
$field = $_GET['field'] ?? null;
require "database.php";
$obj = new \Database\Database("myitedu");

if (empty($keyword)) {
    $sql = "SELECT * FROM airports WHERE country = 'Uzbekistan';";
} else {
    $sql = "SELECT * FROM airports WHERE $field like '%$keyword%' order by country asc;";
}
$airports = $obj->sql($sql);
?>
<div class="container">
    <h3 class="title">The World Airports Directory</h3>
    <hr>
    <form>
        <p>
            <label for="keyword">Search: </label>
            <input value="<?= $keyword; ?>" type="text" name="keyword" id="keyword" placeholder="Enter your keyword">
            by:
            <select name="field" id="field">
                <option value="city">City</option>
                <option value="country">Country</option>
                <option value="code">Code</option>
            </select>
            <button class="btn btn-dark">GO</button>
        </p>
    </form>
    <hr>
    <p style="text-align: center">There are <?= count($airports); ?> airports found by that keyword</p>
    <hr>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>City</th>
            <th>Code</th>
            <th>Name</th>
            <th>Country</th>
            <th>Details</th>
        </tr>

        <?php foreach ($airports as $airport): ?>
            <?php
            $details = unserialize($airport['details']);
            ?>

            <?php if ($details['error']['text'] != 'No airport found'): ?>
                <tr>
                    <td><?= $airport['id']; ?></td>
                    <td><?= $airport['city']; ?></td>
                    <td><?= $airport['code']; ?></td>
                    <td><?= $airport['name']; ?></td>
                    <td><?= $airport['country']; ?></td>
                    <td>
                        <?php
                        echo $details['city']. "<br>";
                        echo $details['state']."<br>";
                        echo "<a href='tel:{$details['phone']}'>{$details['phone']}</a> <br>";
                        echo "<a href='{$details['website']}'>{$details['website']}</a> <br>";
                        ?>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>


    </table>

</div>

<style>
    input, select {
        height: 42px;
    }

    body {
        background-color: pink;
        background-image: url("https://images.template.net/94766/pastel-pink-background-yw0ub.jpg");
        background-size: cover;
    }

    .title {
        text-align: center;
        color: #26269b;
    }

    form {
        text-align: center;
    }

    th {
        background-color: black !important;
        color: gold !important;
    }

    tr:nth-child(even) td {
        background-color: #e0edd3 !important;
    }

    tr:hover td {
        background-color: darkred !important;
        color: white !important;
        cursor: pointer;
    }

    table {
        box-shadow: 4px 4px 24px 4px black;
    }
</style>
</body>
</html>