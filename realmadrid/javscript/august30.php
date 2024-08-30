<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/august30.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/august30.js"></script>
</head>
<body>
<div id="panel">
    <label for="input_company_name">Company Name:</label>
    <input id="input_company_name" type="text" placeholder="Company Name">

    <label for="input_full_name">Full Name:</label>
    <input id="input_full_name" type="text" placeholder="Full Name">

    <label for="input_address">Address:</label>
    <input id="input_address" type="text" placeholder="Address">
</div>
<img id="widget" src="https://cdn-icons-png.flaticon.com/512/4709/4709000.png" alt="widget">

<div id="business_card">
    <div class="row">
        <div class="col col-4">
            <div class="left_banner">
                <img class="logo" src="https://www.bartonmalow.com/wp-content/uploads/2020/03/company-linear-logo-tagline-full-color-rgb-900x511.png" alt="logo">
            </div>
        </div>
        <div class="col col-6">
            <div id="display_company_name">Company Name</div>
            <table class="table business_card_table">
                <tr>
                    <td id="display_full_name">Full Name</td>
                </tr>
                <tr>
                    <td id="display_address">Company Address</td>
                </tr>
                <tr>
                    <td>City, State Country</td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                </tr>
                <tr>
                    <td>Email Address</td>
                </tr>
                <tr>
                    <td>Website</td>
                </tr>
            </table>
        </div>
        <div class="col col-2">
            <div class="right_bg">
                <div style="height: 130px"></div>
                <i class="material-icons">home</i>
                <i class="material-icons">phone_in_talk</i>
                <i class="material-icons">email</i>
                <i class="material-icons">vpn_lock</i>
            </div>
        </div>
    </div>
</div>
</body>
</html>
