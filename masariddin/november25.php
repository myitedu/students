<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recipe Cost Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="css/november25.css">
</head>
<body>
<div class="container my-4">
    <!-- Header -->
    <div class="text-center mb-3">
        <h3 class="text-white bg-primary py-2">RECIPE COST CALCULATOR</h3>
    </div>

    <!-- Form Row -->
    <div class="row mb-4">
        <div class="col-md-8">
            <form>
                <div class="row mb-2">
                    <div class="col">
                        <label for="salePrice" class="form-label">Est. Sale Price ($)</label>
                        <input type="number" id="salePrice" class="form-control" value="27.35">
                    </div>
                    <div class="col">
                        <label for="totalCost" class="form-label">Total Cost ($)</label>
                        <input type="number" id="totalCost" class="form-control" value="8.18" readonly>
                    </div>
                    <div class="col">
                        <label for="costMargin" class="form-label">Cost Margin (%)</label>
                        <input type="number" id="costMargin" class="form-control" readonly>
                    </div>
                    <div class="col">
                        <label for="netProfit" class="form-label">Net Profit ($)</label>
                        <input type="number" id="netProfit" class="form-control" readonly>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4 text-center">
            <div id="piechart" style="width: 100%; height: 250px;"></div>
        </div>
    </div>

    <!-- Primary Ingredients -->
    <div class="table-responsive mb-3">
        <h6 class="bg-primary text-white py-2 text-center">PRIMARY INGREDIENTS</h6>
        <table class="table table-bordered">
            <thead>
            <tr class="text-center">
                <th>Product Name</th>
                <th>Qty</th>
                <th>Cost (per unit)</th>
                <th>Total Cost</th>
            </tr>
            </thead>
            <tbody id="primaryIngredients">
            <tr>
                <td><input type="text" class="form-control" value="Salmon"></td>
                <td><input type="number" class="form-control quantity" value="1"></td>
                <td><input type="number" class="form-control unit-cost" value="4.70"></td>
                <td><input type="number" class="form-control total-cost" value="4.70" readonly></td>
            </tr>
            </tbody>
            <tfoot>
            <tr class="text-end">
                <td colspan="3"><strong>Total</strong></td>
                <td><input type="number" id="primaryTotal" class="form-control text-center" value="4.70" readonly></td>
            </tr>
            </tfoot>
        </table>
    </div>

    <!-- Secondary Ingredients -->
    <div class="table-responsive mb-3">
        <h6 class="bg-success text-white py-2 text-center">SECONDARY INGREDIENTS</h6>
        <table class="table table-bordered">
            <thead>
            <tr class="text-center">
                <th>Product Name</th>
                <th>Qty</th>
                <th>Cost (Lb/Pt)</th>
                <th>Total Cost</th>
            </tr>
            </thead>
            <tbody id="secondaryIngredients">
            <tr>
                <td><input type="text" class="form-control" value="Potato"></td>
                <td><input type="number" class="form-control quantity" value="1"></td>
                <td><input type="number" class="form-control unit-cost" value="10.00"></td>
                <td><input type="number" class="form-control total-cost" value="0.63" readonly></td>
            </tr>
            </tbody>
            <tfoot>
            <tr class="text-end">
                <td colspan="3"><strong>Total</strong></td>
                <td><input type="number" id="secondaryTotal" class="form-control text-center" value="1.15" readonly></td>
            </tr>
            </tfoot>
        </table>
    </div>

    <!-- Utilities -->
    <div class="table-responsive">
        <h6 class="bg-danger text-white py-2 text-center">UTILITY AND PREP COST</h6>
        <table class="table table-bordered">
            <thead>
            <tr class="text-center">
                <th>Name</th>
                <th>Total Cost</th>
            </tr>
            </thead>
            <tbody id="utilityCost">
            <tr>
                <td><input type="text" class="form-control" value="Preparation"></td>
                <td><input type="number" class="form-control total-cost" value="2.00"></td>
            </tr>
            </tbody>
            <tfoot>
            <tr class="text-end">
                <td><strong>Total</strong></td>
                <td><input type="number" id="utilityTotal" class="form-control text-center" value="2.33" readonly></td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

<script>
    // Load Google Charts
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        const primaryTotal = parseFloat($('#primaryTotal').val()) || 0;
        const secondaryTotal = parseFloat($('#secondaryTotal').val()) || 0;
        const utilityTotal = parseFloat($('#utilityTotal').val()) || 0;
        const totalCost = primaryTotal + secondaryTotal + utilityTotal;

        // Calculate values
        $('#totalCost').val(totalCost.toFixed(2));
        const salePrice = parseFloat($('#salePrice').val()) || 0;
        const netProfit = salePrice - totalCost;
        $('#netProfit').val(netProfit.toFixed(2));
        const costMargin = (totalCost / salePrice) * 100;
        $('#costMargin').val(costMargin.toFixed(2));

        // Update the pie chart
        const data = google.visualization.arrayToDataTable([
            ['Category', 'Cost'],
            ['Primary Ingredients', primaryTotal],
            ['Secondary Ingredients', secondaryTotal],
            ['Utility Costs', utilityTotal]
        ]);

        const options = {
            title: 'Cost Distribution',
            pieHole: 0.4,
            colors: ['#007bff', '#28a745', '#dc3545']
        };

        const chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }

    // Trigger calculations and chart updates on input changes
    $(document).on('input', '.quantity, .unit-cost, #salePrice', function () {
        $('tbody').each(function () {
            let sectionTotal = 0;
            $(this).find('tr').each(function () {
                const qty = parseFloat($(this).find('.quantity').val()) || 0;
                const cost = parseFloat($(this).find('.unit-cost').val()) || 0;
                const total = qty * cost;
                $(this).find('.total-cost').val(total.toFixed(2));
                sectionTotal += total;
            });
            $(this).closest('table').find('tfoot input').val(sectionTotal.toFixed(2));
        });
        drawChart();
    });

    // Initial calculation
    $(document).ready(function () {
        drawChart();
    });
</script>
</body>
</html>
