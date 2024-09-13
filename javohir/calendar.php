<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date, Formats, Calendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/calendar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<?php
$y = $_GET['year'] ?? date('Y');
$m = $_GET['month'] ?? date('m');
$direction = $_GET['d'] ?? null;

$y = (int)$y;
$m = (int)$m;

if ($direction == 'next' && $m < 12) {
    ++$m;
}
if ($direction == 'prev' && $m > 1) {
    --$m;
}

$sy = strtotime("100 years ago");
$start_year = date('Y', $sy);
$years = range($start_year, date('Y'));
$months = range(0, 11);
$mnames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
rsort($years);


// Given a date in string format
$datestring = "$y-$m-01";

// Converting string to date
$date = strtotime($datestring);

// Last date of current month.
$lastdate = strtotime(date("Y-m-t", $date));
$firstdate = strtotime(date("Y-m-d", $date));


// Day of the last date
$last_day = date("d", $lastdate);

$rows = ceil($last_day / 7);
$first_week_number = date("w", $firstdate);

?>

<div id="calendar">
    <h3>My Calendar</h3>
    <p>
        <?php echo $first_week_number; ?>
    </p>

    <div id="calform">
        <select name="month" id="month">
            <?php foreach ($months as $month): ?>
                <?php if ($month == $m - 1): ?>
                    <option selected value="<?= $month; ?>"><?= $mnames[$month]; ?></option>
                <?php else: ?>
                    <option value="<?= $month; ?>"><?= $mnames[$month]; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>

        <select name="year" id="year">
            <?php foreach ($years as $year): ?>
                <?php if ($year == $y): ?>
                    <option selected value="<?= $year; ?>"><?= $year; ?></option>
                <?php else: ?>
                    <option value="<?= $year; ?>"><?= $year; ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <button id="btn_go" class="btn btn-success">GO</button>
    </div>

    <div id="buttons">
        <a class="btn btn-dark" href="calendar.php?year=<?= $y; ?>&month=<?= $m; ?>&d=prev"> << </a>
        <a class="btn btn-dark" href="calendar.php?year=<?= $y; ?>&month=<?= $m; ?>&d=next"> >> </a>
    </div>

    <div class="clearfix"></div>
    <table class="table table-bordered">
        <tr>
            <th>Sunday</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
        </tr>
        <?php
        $day = 1;
        for ($mm = 0; $mm < $rows; $mm++): ?>
            <tr>
                <?php for ($i = 1; $i <= 7; $i++): ?>
                    <?php if ($day <= $last_day): ?>
                        <td><span><?= $day ?></span></td>
                    <?php else: ?>
                        <td></td> 
                    <?php endif; ?>
                    <?php $day++; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        
    </table>
</div>
<script>
    $(function () {
        $("#btn_go").click(function () {
            let year = $("#year").val();
            let month = $("#month").val();
            month = parseInt(month) + 1;
            document.location = "calendar.php?month=" + month + "&year=" + year;
        });
        $("tr:nth-child(2)").prepend('<td></td>')
    });
</script>
</body>
</html>
