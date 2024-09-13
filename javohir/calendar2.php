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
ini_set("display_errors",1);
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
rsort($years);
$datestring = "$y-$m-01";
$date = strtotime($datestring);
$lastdate = strtotime(date("Y-m-t", $date));
$firstdate = strtotime(date("Y-m-d", $date));
$last_day = date("d", $lastdate);
$rows = ceil($last_day / 7);
$first_week_number = date("w", $firstdate);
$month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$events = [
    1 => [
            "<ul>",
            "<li>Event 1a</li>",
            "<li>Event 1b</li>",
            "<li>Event 1c</li>",
            "</ul>"
    ],
    21 =>["<ul>",
    "<li>Event 21a</li>",
    "<li>Event 21b</li>",
    "<li>Event 21c</li>",
    "</ul>"
    ]
];
$lang = $_GET['lang']??'en';
$week_names_list = [
    'en' => ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
    'ru' => ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
    'uz' => ['Yakshanba', 'Dushanba', 'Seshanba', 'Chorshanba', 'Payshanba', 'Juma', 'Shanba'],
    'es' => ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
];
$week_names = $week_names_list[$lang];
$current_year = date('Y');
$current_month = date('m');
$current_day = date('d');
?>



<div id="calendar">
    <h3>My Calendar</h3>
    <div id="calform">
        <select name="month" id="month">
            <?php foreach ($months as $month): ?>
                <?php if ($month == $m - 1): ?>
                    <option selected value="<?= $month; ?>"><?= $month_names[$month]; ?></option>
                <?php else: ?>
                    <option value="<?= $month; ?>"><?= $month_names[$month]; ?></option>
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
        <a class="btn btn-dark" href="calendar2.php?year=<?= $y; ?>&month=<?= $m; ?>&d=prev"> << </a>
        <a class="btn btn-dark" href="calendar2.php?year=<?= $y; ?>&month=<?= $m; ?>&d=next"> >> </a>
    </div>

    <div class="clearfix"></div>

    <table class="table table-bordered">

        <?php

        foreach ($week_names as $week_name) {
            echo "<th>$week_name</th>";
        }


        $day = 0;//Counter for calculating days
        $last = $last_day;//The last day of the  month
        $today = $first_week_number; //Sunday (Week number)

        for ($row = 0; $row < 5; $row++) {
            echo "<tr>";
            for ($col = 0; $col <= 6; $col++) {
                if ($row == 0 && $col < $today) {
                    echo "<td>&nbsp</td>";
                } else {
                    if ($day >= $last) {
                        break;
                    }
                    $day++;
                    $today_class = ($y==$current_year && $m==$current_month && $day==$current_day)?'today_class':null;
                    if (isset($events[$day])){
                        $listed_events = implode(' ',$events[$day]);
                    }else{
                        $listed_events = null;
                    }

                    if (!$listed_events){
                        echo "<td class='cal_day_class $today_class'>$day</td>";
                    }else{
                        echo "<td class='cal_day_class $today_class'>$day 
                    <i class=\"material-icons\" 
                                data-bs-html=\"true\"
                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                data-bs-custom-class=\"custom-tooltip\"
                                data-bs-title=\"$listed_events.\" Custom tooltip>event</i>
                    </td>";
                    }




                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</div>


<div class="container">
    <button type="button" class="btn btn-secondary"
            data-bs-html="true"
            data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-custom-class="custom-tooltip"
            data-bs-title="This top tooltip is themed via CSS variables.">
        Custom tooltip
    </button>
</div>

<hr>


<script>

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


    $(function () {
        $("#btn_go").click(function () {
            let year = $("#year").val();
            let month = $("#month").val();
            month = parseInt(month) + 1;
            document.location = "calendar2.php?month=" + month + "&year=" + year;
        });
    });
</script>
</body>
</html>
