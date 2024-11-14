<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<div class="container my-5">
    <h1 class="text-center">Contact Form</h1>
    <hr>

    <!-- Physical Address Section -->
    <div class="mb-4">
        <label for="physicalAddress" class="form-label fw-bold text-primary">Physical Address</label>
        <input type="text" class="form-control mb-3" id="physicalAddress" placeholder="Your address">
    </div>

    <!-- Checkbox for Mailing Address Same as Physical Address -->
    <div class="mb-4">
        <label class="form-check-label" for="sameAddressCheckbox">
            Is the mailing address the same as the physical address?
        </label>
        <input type="checkbox" class="form-check-input" id="sameAddressCheckbox">
    </div>

    <!-- Mailing Address Section -->
    <div class="mb-4">
        <label for="mailingAddress" class="form-label fw-bold text-primary">Mailing Address</label>
        <input type="text" class="form-control mb-3" id="mailingAddress" placeholder="Your address">
    </div>

    <hr>
</div>

<script src="js/november14.js"></script>
<script>
    $(document).ready(function() {
        $('#sameAddressCheckbox').on('change', function() {
            if ($(this).is(':checked')) {
                // Copy Physical Address to Mailing Address
                $('#mailingAddress').val($('#physicalAddress').val()).prop('readonly', true);
            } else {
                // Clear Mailing Address and make it editable again
                $('#mailingAddress').val('').prop('readonly', false);
            }
        });
    });
</script>

<style>
    /* General form styling */
    body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
    }

    h1 {
        color: #333;
        margin-top: 20px;
        font-size: 2rem;
        font-weight: bold;
    }

    hr {
        border: 1px solid #333;
        margin: 20px 0;
    }

    .form-label {
        font-size: 1.2rem;
    }

    .form-check-label {
        font-size: 1rem;
        color: #666;
        margin-right: 10px;
    }

    .form-control {
        border: 2px solid #007bff;
        border-radius: 8px;
        font-size: 1.1rem;
    }

    .form-control:focus {
        border-color: #0056b3;
        box-shadow: 0 0 5px rgba(0, 91, 187, 0.5);
    }

</style>

</body>
</html>
