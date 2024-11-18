<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .contact-container {
            width: 1000px;
            max-width: 1200px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            display: flex;
            overflow: hidden;
        }
        .form-section {
            padding: 20px;
            flex: 1;
        }
        .info-section {
            background-color: #007bff;
            color: white;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }
        .info-section h3 {
            margin-bottom: 20px;
        }
        .info-section p {
            margin: 0;
            margin-bottom: 10px;
        }
        .form-section input, .form-section textarea {
            margin-bottom: 15px;
        }
        .btn-send {
            background-color: #007bff;
            color: white;
            border: none;
        }
        .btn-send:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="contact-container">
    <div class="form-section">
        <h3 class="text-center">Write Us</h3>
        <form>
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Full Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone" placeholder="tel: XXX XXX XXXX">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Your Message Here...</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Your Message Here..."></textarea>
            </div>
            <button type="submit" class="btn btn-send w-100">Send</button>
        </form>
    </div>
    <div class="info-section">
        <h3>Contact Us</h3>
        <p><strong>Address:</strong> Your Address Here</p>
        <p><strong>Phone:</strong> +1-000-000-000</p>
        <p><strong>Email:</strong> example@xyz.com</p>
        <p><strong>Website:</strong> www.yourcompany.com</p>
    </div>
</div>

</body>
</html>
