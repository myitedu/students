<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Financial Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/november14.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/november14.js"></script>
</head>
<body>
<div class="container">
    <h1 class="mt-4">Address Form</h1>

    <!-- Physical Address Section -->
    <div class="card mb-4">
        <div class="card-header">Physical Address</div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="address1" class="form-label">Street Address</label>
                    <input type="text" class="form-control" id="address1" placeholder="123 Street Name">
                </div>
                <div class="mb-3">
                    <label for="address11" class="form-label">Street 2</label>
                    <input type="text" class="form-control" id="address11" placeholder="Apt. 3">
                </div>
                <div class="mb-3">
                    <label for="zipcode1" class="form-label">Zip/Postal Code</label>
                    <input maxlength="5" type="text" class="form-control" id="zipcode1" placeholder="11235">
                </div>
                <div class="mb-3">
                    <label for="city1" class="form-label">City</label>
                    <input type="text" class="form-control" id="city1" placeholder="City">
                </div>
                <div class="mb-3">
                    <label for="state1" class="form-label">State</label>
                    <input type="text" class="form-control" id="state1" placeholder="State">
                </div>
            </form>
        </div>
    </div>

    <p>
        Is the mailing address same as the physical address? <input class="my_checkbox" type="checkbox" value="1" id="input_is_same">
    </p>

    <!-- Mailing Address Section -->
    <div class="card mb-4">
        <div class="card-header">Mailing Address</div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="address2" class="form-label">Street Address</label>
                    <input type="text" class="form-control" id="address2" placeholder="Street Address">
                </div>
                <div class="mb-3">
                    <label for="address22" class="form-label">Street 2</label>
                    <input type="text" class="form-control" id="address22" placeholder="Street 2, e.g., Suite #">
                </div>
                <div class="mb-3">
                    <label for="zipcode2" class="form-label">Zip/Postal Code</label>
                    <input maxlength="5" type="text" class="form-control" id="zipcode2" placeholder="Zip/Postal">
                </div>
                <div class="mb-3">
                    <label for="city2" class="form-label">City</label>
                    <input placeholder="City" type="text" class="form-control" id="city2">
                </div>
                <div class="mb-3">
                    <label for="state2" class="form-label">State</label>
                    <input placeholder="State" type="text" class="form-control" id="state2">
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>