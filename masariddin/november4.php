<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Financial Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/november4.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/november4.js"></script>
</head>
<body>

<div id="receipt">

    <div id="address">
        THE BREAKFAST CLUB <br>
        5000 NORTH ALAMAR AVE <br>
        ATLANTA, GA 58918 <br>
        800-288-WAFFLES
    </div>

    <div style="height: 13px"></div>

    <div id="receipt_date">
        <div class="row">
            <div class="col col-6 date_left">11/04/2024</div>
            <div class="col col-6 date_right">9:41 AM</div>
        </div>
    </div>

    <div style="height: 36px"></div>

    <div id="items">
        <table class="table table-bordered" id="items_table">
            <tr>
                <td>4</td>
                <td>Coffee</td>
                <td>4.22</td>
            </tr>
        </table>
    </div>

    <div style="height: 5px"></div>

    <hr>

    <div id="total">
        <table class="table table-bordered" id="total_table">
            <tr>
                <td>Subtotal</td>
                <td>3.56</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>0.76</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>9.76</td>
            </tr>
        </table>
    </div>

    <div style="height: 135px"></div>

    <div id="you_pay">$100.00</div>



</div>
<div id="form">
    <h4>Add Items</h4>
    <table id="add_items_table" class="table table-bordered">
        <tr>
            <td>Item Name</td>
            <td>Item Price</td>
            <td>QTY</td>
        </tr>
        <tr>
            <td><input type="text" id="item_name"></td>
            <td><input type="text" id="item_price"></td>
            <td><input min="1" max="99" type="number" id="qty"></td>
        </tr>

        <tr>
            <td colspan="2">
                <button>ADD</button>
            </td>
        </tr>
    </table>
</div>

</body>
</html>
