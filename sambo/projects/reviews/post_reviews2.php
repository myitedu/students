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
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Customer Reviews</h1>
    <form method="post" action="" class="mt-4">
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
        </div>
        <div class="mb-3">
            <label for="feedback" class="form-label">Your Feedback</label>
            <textarea class="form-control" id="feedback" name="feedback" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitize user inputs
        $fullName = htmlspecialchars($_POST['fullName'], ENT_QUOTES, 'UTF-8');
        $feedback = htmlspecialchars($_POST['feedback'], ENT_QUOTES, 'UTF-8');

        // Prepare the review format
        $review = "Name: $fullName\nFeedback: $feedback\n---\n";

        // Save the review to the file (prepend or append)
        $filePath = 'files/reviews.txt';
        if (file_exists($filePath)) {
            $existingReviews = file_get_contents($filePath);
            $updatedReviews = $review . $existingReviews; // Prepend
        } else {
            $updatedReviews = $review; // Start new file
        }

        // Write back to the file
        file_put_contents($filePath, $updatedReviews);

        echo "<div class='alert alert-success mt-4'>Thank you for your feedback!</div>";
    }
    ?>
</div>
</body>
</html>
