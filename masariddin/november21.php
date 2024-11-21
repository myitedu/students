<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Movie Night!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/november21.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<div class="container">
    <h1 class="text-center mb-4">Movie Night</h1>
    <div class="row">
        <!-- Thumbnails Section -->
        <div class="col-md-3 left_section">
            <div class="list-group" id="videoThumbnails">
                <a href="#" class="list-group-item list-group-item-action" data-video="https://www.youtube.com/embed/2zjpU97z3YY?autoplay=1">
                    <img src="https://img.youtube.com/vi/2zjpU97z3YY/0.jpg" alt="Thumbnail 1" class="img-thumbnail">
                </a>
                <a href="#" class="list-group-item list-group-item-action" data-video="https://www.youtube.com/embed/204kByp6laY?autoplay=1">
                    <img src="https://img.youtube.com/vi/204kByp6laY/0.jpg" alt="Thumbnail 2" class="img-thumbnail">
                </a>
                <a href="#" class="list-group-item list-group-item-action" data-video="https://www.youtube.com/embed/GVWuWOxTz9s?autoplay=1">
                    <img src="https://img.youtube.com/vi/GVWuWOxTz9s/0.jpg" alt="Thumbnail 3" class="img-thumbnail">
                </a>
                <a href="#" class="list-group-item list-group-item-action" data-video="https://www.youtube.com/embed/VIDEO_ID_4">
                    <img src="https://img.youtube.com/vi/VIDEO_ID_4/0.jpg" alt="Thumbnail 4" class="img-thumbnail">
                </a>
            </div>
        </div>

        <!-- Video Player Section -->
        <div class="col-md-9">
            <div class="ratio ratio-16x9">
                <iframe id="videoPlayer" src="https://www.youtube.com/embed/VIDEO_ID_1" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<script src="js/november21.js"></script>
</body>
</html>
