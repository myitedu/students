<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Credit Card Payments Form</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/november8.css">
</head>
<body>

<div id="credit_payment_form">
    <h5>Credit Card</h5>
    <img class="cards" src="img/credit_cards.png" alt="cc">
    <input maxlength="16" class="credit_card_number" type="text" name="credit_card_number">
    <h5>Credit Number</h5>

    <select name="cc_month" id="cc_month">
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
    </select>

    <select name="cc_year" id="cc_year">
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
    </select>
    <input maxlength="4" class="credit_card_security_code" type="number" name="credit_card_security_code">

    <h5>Expiration Date</h5>
    <input maxlength="8" class="credit_card_expiration_date" type="text" name="credit_card_expiration_date">

    <h5>Cardholder Name:</h5>

</div>


</body>
</html>