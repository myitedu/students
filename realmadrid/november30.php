<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Favorite Youtube Video Collections</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }

        .title {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .subtitle {
            text-align: center;
            font-size: 16px;
            margin-bottom: 30px;
            color: #555;
        }

        .video-thumbnail {
            border: 1px solid #ccc;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.3s ease;
            overflow: hidden;
        }

        .video-thumbnail img {
            width: 100%;
            height: auto;
        }

        .video-thumbnail:hover {
            transform: scale(1.05);
        }

        .row {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="title">Abdurakhmon's Favorite Youtube Video Collection</div>
    <div class="subtitle">Please click on each video to play in the popup window</div>
    <!-- Row 1 -->
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=3JZ_D3ELwOQ">
                <img src="https://img.youtube.com/vi/3JZ_D3ELwOQ/hqdefault.jpg" alt="Video 1">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=2Vv-BfVoq4g">
                <img src="https://img.youtube.com/vi/2Vv-BfVoq4g/hqdefault.jpg" alt="Video 2">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=fRh_vgS2dFE">
                <img src="https://img.youtube.com/vi/fRh_vgS2dFE/hqdefault.jpg" alt="Video 3">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=o1tj2zJ2Wvg">
                <img src="https://img.youtube.com/vi/o1tj2zJ2Wvg/hqdefault.jpg" alt="Video 4">
            </div>
        </div>
    </div>
    <!-- Row 2 -->
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=kJQP7kiw5Fk">
                <img src="https://img.youtube.com/vi/kJQP7kiw5Fk/hqdefault.jpg" alt="Video 5">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=RgKAFK5djSk">
                <img src="https://img.youtube.com/vi/RgKAFK5djSk/hqdefault.jpg" alt="Video 6">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=60ItHLz5WEA">
                <img src="https://img.youtube.com/vi/60ItHLz5WEA/hqdefault.jpg" alt="Video 7">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=UqyT8IEBkvY">
                <img src="https://img.youtube.com/vi/UqyT8IEBkvY/hqdefault.jpg" alt="Video 8">
            </div>
        </div>
    </div>
    <!-- Row 3 -->
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=09R8_2nJtjg">
                <img src="https://img.youtube.com/vi/09R8_2nJtjg/hqdefault.jpg" alt="Video 9">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=LP7S2lJWzNc">
                <img src="https://img.youtube.com/vi/LP7S2lJWzNc/hqdefault.jpg" alt="Video 10">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=NUsoVlDFqZg">
                <img src="https://img.youtube.com/vi/NUsoVlDFqZg/hqdefault.jpg" alt="Video 11">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=LsoLEjrDogU">
                <img src="https://img.youtube.com/vi/LsoLEjrDogU/hqdefault.jpg" alt="Video 12">
            </div>
        </div>
    </div>
    <!-- Row 4 -->
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=JGwWNGJdvx8">
                <img src="https://img.youtube.com/vi/JGwWNGJdvx8/hqdefault.jpg" alt="Video 13">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=VbfpW0pbvaU">
                <img src="https://img.youtube.com/vi/VbfpW0pbvaU/hqdefault.jpg" alt="Video 14">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=J4bEnqfd8bA">
                <img src="https://img.youtube.com/vi/J4bEnqfd8bA/hqdefault.jpg" alt="Video 15">
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="video-thumbnail" data-url="https://www.youtube.com/watch?v=w5Fgp-KihIA">
                <img src="https://img.youtube.com/vi/w5Fgp-KihIA/hqdefault.jpg" alt="Video 16">
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.video-thumbnail').on('click', function () {
            const videoUrl = $(this).data('url');
            window.open(videoUrl, '_blank', 'width=800,height=450');
        });
    });
</script>
</body>
</html>
