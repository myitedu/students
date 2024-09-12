<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Cursor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Change the cursor for the entire page */
        body {
            cursor: url('img/target.png'), auto;
        }

        /* You can also target specific elements */
        .custom-cursor {
            cursor: url('img/target.png'), auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="custom-cursor">Hover over this text to see the custom cursor!</h1>
    <p>All other elements will use the default browser cursor unless specified.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
