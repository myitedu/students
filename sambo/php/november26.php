<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to my Contact Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        header {
            padding: 15px 0;
            border-bottom: 2px solid #ddd;
        }

        .logo img {
            width: 50px;
            height: 50px;
        }

        .search-bar input {
            max-width: 250px;
        }

        .carousel img {
            max-height: 400px;
            object-fit: cover;
        }

        .contact-form {
            margin-top: 40px;
        }

        .form-control {
            border-radius: 5px;
        }

        footer {
            margin-top: 40px;
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
        <h2 class="mb-0">Welcome!</h2>
        <div class="search-bar">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </header>

    <!-- Carousel -->
    <div id="carouselExample" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://online.hbs.edu/Style%20Library/api/resize.aspx?imgpath=/PublishingImages/overhead-view-of-business-strategy-meeting.jpg&w=1200&h=630" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1516483638261-f4dbaf036963" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Contact Form -->
    <div class="contact-form">
        <h3 class="text-center">Contact Form</h3>
        <form id="contactForm">
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone" pattern="\d{10}" required>
                <small class="form-text text-muted">Enter a 10-digit phone number.</small>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        Footer Content
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        // Form validation and submission
        $('#contactForm').on('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            // Check if all inputs are valid
            if (this.checkValidity()) {
                alert('Your message has been sent successfully!');
                $(this).trigger('reset'); // Reset the form
            } else {
                alert('Please fill in all fields correctly before submitting.');
            }
        });
    });
</script>
</body>
</html>
