<?php
session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h1>Tutoring & Education Management System</h1>
    <title>Event Calendar For All !</title>
    <link rel="stylesheet" href="css/eventCalender.css">
    <link rel="stylesheet" href="css/background_image9.css">


    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            background-color: #CEFBFF;

        }
        th {
            background-color: #f2f2f2;
        }
        .event {
            font-weight: bold;
            color: #3B3C3C;
        }
        


    </style>
</head>
<body>
    <h2>Event Calendar</h2>

    <?php
    $month = isset($_GET['month']) ? $_GET['month'] : date('n');
    $year = isset($_GET['year']) ? $_GET['year'] : date('Y');

    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

    $daysInMonth = date('t', $firstDayOfMonth);

    $monthName = date('F', $firstDayOfMonth);

    $firstDayOfWeek = date('w', $firstDayOfMonth);

    $prevMonth = date('n', mktime(0, 0, 0, $month - 1, 1, $year));
    $prevYear = date('Y', mktime(0, 0, 0, $month - 1, 1, $year));
    $nextMonth = date('n', mktime(0, 0, 0, $month + 1, 1, $year));
    $nextYear = date('Y', mktime(0, 0, 0, $month + 1, 1, $year));
    ?>
    
    <a href="?month=<?= $prevMonth ?>&year=<?= $prevYear ?>">Previous Month</a>
    <span><?= $monthName ?> <?= $year ?></span>
    <a href="?month=<?= $nextMonth ?>&year=<?= $nextYear ?>">Next Month</a>

    <br><br>

    <table>
        <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
        </tr>
        <tr>
            <?php
            for ($i = 0; $i < $firstDayOfWeek; $i++) {
                echo "<td></td>";
            }

            for ($day = 1; $day <= $daysInMonth; $day++) {
                $events = []; 
                $eventClass = !empty($events[$day]) ? 'event' : '';

                echo "<td class='$eventClass'>$day</td>";
                if (($firstDayOfWeek + $day) % 7 == 0 && $day != $daysInMonth) {
                    echo "</tr><tr>";
                }
            }
            $lastDayOfWeek = date('w', mktime(0, 0, 0, $month, $daysInMonth, $year));
            $remainingCells = 6 - $lastDayOfWeek;
            for ($i = 0; $i < $remainingCells; $i++) {
                echo "<td></td>";
            }
            ?>
        </tr>
    </table>

    <br><button class="button-back" onclick="history.back ()">Back</button>

</body>
</html>
