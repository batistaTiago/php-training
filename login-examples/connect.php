<?php

$connectionInfo = array("server" => "localhost", 
						"user" => "root", 
						"pass" => "", 
						"name" => "movies");

$dataBase = new mysqli($connectionInfo['server'], 
					   $connectionInfo['user'], 
					   $connectionInfo['pass'], 
					   $connectionInfo['name']);


if ($dataBase->connect_errno > 0) {
	echo "An error ocurred!<br>Error code: $dataBase->connect_errno<br>Error description: $dataBase->connect_error;";
	exit;
}

?>