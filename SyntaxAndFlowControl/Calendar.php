<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .wrapper {
            width: 715px;
            padding: 0;
        }

        h1 {
            text-align: center;
            font-size: 3em;
            padding: 0;
            margin: 0
        }

        .year {
            font-size: 1.5em;

        }

        .month {
            display: inline-block;
            height: 200px;
            margin-right: 10px;
        }

        .top {
            border-bottom: 2px solid gray;
            text-align: center;
            font-family: Georgia;
        }

        .days {
            text-align: right;
            font-family: Georgia;
        }

        .sunday {
            color: red;
            font-weight: bolder;
            border-bottom: 2px solid gray;
        }
    </style>
</head>
<body>

<form>
    Input YEAR:
    <input type="text" name="year">
</form>

<?php
$year = 0;
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}

$html = '';
$html .= "<div class='wrapper'><h1>" . $year . "</h1><hr>";
for ($i = 1; $i <= 12; $i++) {
    if ($i % 4 != 0) {
        $html .= "<div class='month'>" . calendar($year, $i) . "</div>";
    } else {
        $html .= "<div class='month'>" . calendar($year, $i) . "</div><br />";
    }
}

$html .= "</div>";

echo $html;

function calendar($year, $month, $day_offset = 1)
{
    $days = array("Не", "По", "Вт", "Ср", "Чт", "Пе", "Сб");
    $months = array("Януари", "Февруари", "Март", "Април", "Май", "Юни", "Юли", "Август", "Септември",
        "Октомври", "Ноември", "Декември");

    $day_offset = $day_offset % 7;
    $start_day = gmmktime(0, 0, 0, $month, 1, $year);
    $start_day_number = date("w", $start_day);
    $days_in_month = date("t", $start_day);
    $month_html = '';

    $month_html .= "<table style='margin: 0'><tr><td colspan = \"7\" class='top'>" . $months[$month - 1] . "</td></tr><tr>";

    for ($i = 0; $i < 7; $i++) {
        if (($i + $day_offset) % 7 == 0){
            $month_html .= "<td class='sunday'>" . $days[($i + $day_offset) % 7] . "</td>";
        } else {
            $month_html .= "<td class='top'>" . $days[($i + $day_offset) % 7] . "</td>";
        }

    }
    $month_html .= "</tr>";

    $blank_days = $start_day_number - $day_offset;
    if ($blank_days < 0) {
        $blank_days = 7 - abs($blank_days);
    }
    for ($i = 0; $i < $blank_days; $i++) {
        $month_html .= "<td></td>";
    }
    for ($i = 1; $i <= $days_in_month; $i++) {
        if (($i + $blank_days - 1) % 7 == 0) {
            $month_html .= "</tr><tr>";
        }
        $month_html .= "<td class='days'>" . ' ' . $i . ' ' . "</td>";
    }

    $month_html .= "</tr></table>";
    return ($month_html);
}

?>

</body>
</html>