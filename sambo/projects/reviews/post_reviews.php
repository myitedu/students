<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Reviews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reviews.css">
    <script defer src="js/reviews.js"></script>
</head>
<body>
<?php
ini_set("display_errors",1);
$full_name = $_POST['full_name']??null;
$message = $_POST['message']??null;
$old_reviews = file_get_contents("files/reviews.txt");
$reviews_record = "$full_name: $message \n $old_reviews \n ";
if (!empty($full_name) && !empty($message)) {
    file_put_contents("files/reviews.txt", $reviews_record);
}
?>
<div class="products">
    <h3>Post Your Review</h3>

    <?php if (empty($full_name) || empty($message)): ?>
    <div class="alert alert-danger">You must enter all the required fields before submit</div>
    <?php endif;?>

    <div class="myform">
        <form method="post">
            <p>
                <label for="full_name">Full Name: </label><br>
                <input type="text" name="full_name" id="full_name" placeholder="Enter your name">
            </p>
            <p>
                <label for="message">Your Message: </label><br>
                <textarea name="message" id="message" placeholder="Your message"></textarea>
            </p>
            <p>
                <button type="reset" class="btn btn-dark">Reset</button>
                <button type="submit" class="btn btn-danger">Submit</button>
            </p>
        </form>
    </div>

</div>
</body>
</html>