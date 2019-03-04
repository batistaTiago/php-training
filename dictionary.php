<?php

require 'resources/employees-dictionary.php';

echo "<h1>Métodos para aquisição de dados de um array-associativo (dicionario)</h1>";

echo "<h2>Método manual</h2>";

foreach ($employee1 as $key => $value) {
	echo $key . ": " . "$value" . "<br>";
}
echo "<h2>Método loop</h2>";

$employeeCount = count($employees);

for ($x = 0; $x < $employeeCount; $x++) {
	echo "<h4>Adquirindo informações sobre o funcionário " . ($x + 1) . "</h4>";
	foreach ($employees[$x] as $key => $value) {
		echo $key . ": " . "$value" . "<br>";
	}
	echo "<br>";
}


?>