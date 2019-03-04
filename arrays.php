<?php

require 'resources/employees.php';

echo "<h1>Métodos para aquisição de dados de um array</h1>";
echo "<h2>Método manual</h2>";

echo "First name: " . $employee1[0];
echo "<br>";
echo "Last name: " . $employee1[1];
echo "<br>";
echo "Age: " . $employee1[2];
echo "<br>";
echo "Salary: " . $employee1[3];
echo "<br>";

echo "<h2>Método em laço</h2>";
$employeeCount = count($employees);
$parameterCount = count($employees[0]);

for ($x = 0; $x < $employeeCount; $x++) {
	$currentEmployee = $employees[$x];
	echo "<h3>Informações do funcionário " . ($x + 1) . "</h3>";
	for ($y = 0; $y < $parameterCount; $y++) {
		echo $currentEmployee[$y] . "<br>";
	}
	echo "<br>";
}

?>