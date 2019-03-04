<?php

$dayOfWeek = date('l');
$dayOfMonth = date('d');
$dayOfMonthOrdinary = date('dS');
$month = date('M');
$year = date('Y');
$hours = date('H');
$minutes = date('i');
$seconds = date('s');


echo "<p>Today is $dayOfWeek,</p>";
if (($dayOfWeek == "Sunday") || ($dayOfWeek == "Saturday")) {
	echo "<p>Have the day off!</p>";
} else {
	echo "<p>You should work today...</p>";
}

?>