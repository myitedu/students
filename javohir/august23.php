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
    <link rel="stylesheet" href="css/august23.css">
</head>
<body>
<?php
$status = $_GET['status'] ?? null;
$status = strip_tags($status);

$msg = $_GET['msg'] ?? null;
$msg = strip_tags($msg);
?>
<div class="container">
    <h3>Contact form</h3>
    <hr>
    <form action="august23_backend.php" method="post">


        <?php if ($msg):
            $class = "success";
            if($status == 'fail'){
                $status = 'danger';
            }
            ?>
            <div class="alert alert-<?=$status;?>"><?= $msg; ?></div>
        <?php endif; ?>


        <table class="table table-bordered">
            <tr>
                <th>First Name:</th>
                <td><input required placeholder="Your First Name" type="text" name="first_name"></td>
            </tr>

            <tr>
                <th>Last Name:</th>
                <td><input required placeholder="Your Last Name" type="text" name="last_name"></td>
            </tr>

            <tr>
                <th>Email:</th>
                <td><input required placeholder="Your Email" type="text" name="email"></td>
            </tr>

            <tr>
                <th>Message:</th>
                <td>
                    <textarea name="message" id="message" cols="40" rows="5" placeholder="Your message"></textarea>
                </td>
            </tr>

            <tr>
                <td style="text-align: center" colspan="2">
                    <button type="reset" class="btn btn-dark">Reset</button>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </td>
            </tr>


        </table>
    </form>
</div>
</body>
</html>







