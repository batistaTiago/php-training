<?php

$fruit1 = "Orange";

function showFruit() {
	GLOBAL $fruit1;
	$fruit2 = "Apple";
	echo $fruit1;
	echo $fruit2;
}

function calculateArea($width, $height, $format) {
	$result = $width * $height;
	$output = "<$format>$result</$format>";
	return $output;
}

echo calculateArea(5, 10, "h1");


?>