<?php

$dayOfWeek = date('l');
$dayOfMonth = date('d');
$dayOfMonthOrdinary = date('dS');
$month = date('M');
$year = date('Y');
$hours = date('H');
$minutes = date('i');
$seconds = date('s');

echo "<p>The date today is $dayOfWeek, $dayOfMonthOrdinary $month $year. This time next year it will be $dayOfMonthOrdinary $month " . ($year + 1) . ".</p>";
echo "<p>\"That's some double-quoted text\"</p>";

echo "<p>\"The time now is $hours:$minutes. In two hours' time it will be " . ($hours + 2) . ":" . $minutes . "\", said the timekeeper.</p>";

?>