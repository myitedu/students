<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .cart-title {
            font-weight: bold;
            font-size: 24px;
            margin: 20px 0;
            text-align: center;
        }

        .cart-table th, .cart-table td {
            vertical-align: middle;
            text-align: center;
        }

        .promo-section {
            margin-top: 20px;
        }

        .btn-primary, .btn-dark {
            width: 100%;
        }

        .summary-section {
            margin-top: 20px;
        }

        .summary-section .col {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="cart-title">My Shopping Cart</div>
    <table class="table table-bordered cart-table">
        <thead>
        <tr>
            <th>Description</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Remove</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/50" alt="Leggings" class="img-thumbnail me-2">
                    <div>
                        <div>Streamline Leggings</div>
                        <small>Product Code: MLSB</small>
                    </div>
                </div>
            </td>
            <td>S</td>
            <td>
                <button class="btn btn-light btn-sm quantity-decrease">-</button>
                <span class="mx-2 quantity">1</span>
                <button class="btn btn-light btn-sm quantity-increase">+</button>
            </td>
            <td><button class="btn btn-danger btn-sm remove-item">x</button></td>
            <td>£55</td>
        </tr>
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/50" alt="Sports Bra" class="img-thumbnail me-2">
                    <div>
                        <div>Streamline Sports Bra</div>
                        <small>Product Code: MLSB</small>
                    </div>
                </div>
            </td>
            <td>S</td>
            <td>
                <button class="btn btn-light btn-sm quantity-decrease">-</button>
                <span class="mx-2 quantity">1</span>
                <button class="btn btn-light btn-sm quantity-increase">+</button>
            </td>
            <td><button class="btn btn-danger btn-sm remove-item">x</button></td>
            <td>£55</td>
        </tr>
        </tbody>
    </table>

    <div class="row summary-section">
        <div class="col">Discount: £<span id="discount">0.00</span></div>
        <div class="col">Delivery: £<span id="delivery">0.00</span></div>
        <div class="col">Subtotal: £<span id="subtotal">110.00</span></div>
        <div class="col">Total: £<span id="total">110.00</span></div>
    </div>

    <div class="promo-section">
        <input type="text" class="form-control mb-3" id="promo-code" placeholder="Please enter promo code">
        <button class="btn btn-primary" id="apply-promo">Apply Discount</button>
    </div>

    <div class="row mt-3">
        <div class="col"><button class="btn btn-dark">Continue Shopping</button></div>
        <div class="col"><button class="btn btn-primary">Checkout</button></div>
    </div>
</div>

<script>
    $(document).ready(function () {
        const pricePerItem = 55;

        function updateTotals() {
            let subtotal = 0;
            $('.cart-table tbody tr').each(function () {
                const quantity = parseInt($(this).find('.quantity').text());
                subtotal += quantity * pricePerItem;
            });
            $('#subtotal').text(subtotal.toFixed(2));
            $('#total').text(subtotal.toFixed(2));
        }

        $('.quantity-increase').click(function () {
            const quantitySpan = $(this).siblings('.quantity');
            const newQuantity = parseInt(quantitySpan.text()) + 1;
            quantitySpan.text(newQuantity);
            updateTotals();
        });

        $('.quantity-decrease').click(function () {
            const quantitySpan = $(this).siblings('.quantity');
            const currentQuantity = parseInt(quantitySpan.text());
            if (currentQuantity > 1) {
                const newQuantity = currentQuantity - 1;
                quantitySpan.text(newQuantity);
                updateTotals();
            }
        });

        $('.remove-item').click(function () {
            $(this).closest('tr').remove();
            updateTotals();
        });

        $('#apply-promo').click(function () {
            const promoCode = $('#promo-code').val().trim();
            if (promoCode === 'DISCOUNT10') {
                const discount = parseFloat($('#subtotal').text()) * 0.10;
                $('#discount').text(discount.toFixed(2));
                const newTotal = parseFloat($('#subtotal').text()) - discount;
                $('#total').text(newTotal.toFixed(2));
            } else {
                alert('Invalid promo code');
            }
        });

        updateTotals();
    });
</script>
</body>
</html>
