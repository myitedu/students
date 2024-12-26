<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</head>
<body>
<?php
$age = $_GET['age'] ?? null;
$msg = $_GET['msg'] ?? null;
$status = $_GET['status'] ?? null;
?>
<div class="container">
    <h3>Age Calculator</h3>
    <hr>

    <?php if ($status == 'yes'): ?>
        <div class="alert alert-success"><?= $msg; ?></div>
    <?php endif; ?>

    <?php if ($status == 'no'): ?>
        <div class="alert alert-danger"><?= $msg; ?></div>
    <?php endif; ?>

    <hr>
    <form action="backend.php" method="get">
        <p>
            <label for="age">Enter:</label>
            <input value="<?= $age; ?>" type="text" name="age" placeholder="Your Age">
            <button class="btn btn-danger">Verify</button>
        </p>
    </form>
</div>

</body>
</html>