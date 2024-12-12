<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Guestbook!</title>
    <link rel="stylesheet" href="css/guestbook.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script src="js/guestbook.js"></script>
</head>
<body>

<?php
require "database.php";
$obj = new database("myitedu");
$sql = "SELECT * FROM comments order by id desc";
$comments = $obj->sql($sql);
?>

<div class="container">
    <h3 class="title">Welcome to Our Guestbook!</h3>

    <div id="guestbook_form">
        <form action="save_comment.php">
            <table class="table">
                <tr>
                    <td>
                        <textarea name="comment" id="comment" placeholder="Type your comment"></textarea>
                        <br>
                        <button class="btn btn-dark" type="reset">Reset</button>
                        <button class="btn btn-success" type="submit">Post</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div id="comments">
        <?php
        foreach ($comments as $comment){
            echo "<p>{$comment['comment']}</p>";
        }
        ?>
    </div>

</div>

</body>
</html>
