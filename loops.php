<?php



/*
$count = 1;

while ($count < 10) {
	echo $count . "<br>";
	$count++;
}
*/

$width = 20;
$height = 10;

$i = 0;
$j = 0;

for ($i = 0; $i < $height; $i++) {
	for ($j = 0; $j < $width; $j++) {
		echo "*";	
	}
	echo "<br>";
}

?>