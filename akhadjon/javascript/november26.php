<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/november26.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        header {
            padding: 20px 0;
            border-bottom: 2px solid #ddd;
        }

        .logo img {
            width: 50px;
            height: 50px;
        }

        .welcome {
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
        }

        .search input {
            max-width: 200px;
        }

        /* Slider Section */
        .slider-section {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px 0;
        }

        .slider {
            position: relative;
            width: 600px;
            height: 300px;
            overflow: hidden;
            background-color: #e9ecef;
            border: 2px solid #007bff;
            border-radius: 10px;
        }

        .slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .slider-btn {
            background-color: #007bff;
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            border: none;
        }

        /* Left Section Boxes */
        .box {
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 20px;
            text-align: center;
            font-size: 1rem;
        }

        .box img {
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
        }

        /* Center Section */
        .center-photo img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        footer {
            margin-top: 30px;
            padding: 20px 0;
            background-color: #007bff;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- Header -->
    <header class="d-flex justify-content-between align-items-center">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg" alt="Logo">
        </div>
        <div class="welcome">Welcome!</div>
        <div class="search">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </header>

    <!-- Slider Section -->
    <div class="slider-section">
        <button class="slider-btn" id="prevSlide">&lt;</button>
        <div class="slider">
            <div class="slide active">
                <img src="https://images.unsplash.com/photo-1593642634367-d91a135587b5" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1516483638261-f4dbaf036963" alt="Slide 3">
            </div>
        </div>
        <button class="slider-btn" id="nextSlide">&gt;</button>
    </div>

    <!-- Main Content -->
    <div class="row mt-4">
        <!-- Left Section -->
        <div class="col-md-3">
            <div class="box">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/Wikipedia-logo-v2.png" alt="Box 1">
                Box 1
            </div>
            <div class="box">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/React.svg/1200px-React.svg.png" alt="Box 2">
                Box 2
            </div>
            <div class="box">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Google_Chrome_icon_%282011%29.png/600px-Google_Chrome_icon_%282011%29.png" alt="Box 3">
                Box 3
            </div>
        </div>

        <!-- Center Section -->
        <div class="col-md-6 center-photo text-center">
            <img src="https://images.pexels.com/photos/1122413/pexels-photo-1122413.jpeg" alt="Main Photo">

        </div>

        <!-- Right Section -->
        <div class="col-md-3">
            <p class="text mb-3">Text 1</p>
            <p class="text mb-3">Text 2</p>
            <p class="text mb-3">Text 3</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        Footer Content
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function () {
        let currentSlide = 1;
        const totalSlides = $('.slide').length;

        function showSlide(slide) {
            $('.slide').hide();
            $('.slide').eq(slide - 1).fadeIn();
        }

        $('#prevSlide').click(function () {
            currentSlide = currentSlide === 1 ? totalSlides : currentSlide - 1;
            showSlide(currentSlide);
        });

        $('#nextSlide').click(function () {
            currentSlide = currentSlide === totalSlides ? 1 : currentSlide + 1;
            showSlide(currentSlide);
        });

        // Initialize slider
        showSlide(currentSlide);
    });
</script>
</body>
</html>
