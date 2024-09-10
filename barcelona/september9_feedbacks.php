<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers Feedbacks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/september9.css">
</head>
<body>
<?php
require "database.php";
$obj = new database("myitedu");
$sql = "SELECT * FROM feedbacks order by id desc;";
$feedbacks = $obj->sql($sql);
?>

<div class="container">
        <h4 class="feedbacks_title">Customers Feedbacks</h4>

    <hr>
    <nav style="text-align: center">
        <a href="september9.php">Form</a> |
        <a href="september9_feedbacks.php">Feedbacks</a>
    </nav>
    <hr>



        <table id="feedbacks" class="table table-bordered">

            <tr>
                <th>ID:</th>
                <th>First Name:</th>
                <th>Last Name:</th>
                <th>Email:</th>
                <th>Phone:</th>
                <th>Gender:</th>
                <th>DOB:</th>
            </tr>

            <?php foreach ($feedbacks as $feedback):?>
            <tr>
                <td><?=$feedback['id'];?></td>
                <td><?=$feedback['first_name'];?></td>
                <td><?=$feedback['last_name'];?></td>
                <td><?=$feedback['email'];?></td>
                <td><?=$feedback['phone'];?></td>
                <td><?=$feedback['gender'];?></td>
                <td><?=$feedback['dob'];?></td>
            </tr>
            <?php endforeach;?>

        </table>
</div>

</body>
</html>
