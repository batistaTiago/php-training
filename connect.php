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
} else {
	echo "Successfully connected to the server<br>";
}

$sqlQuery = "SELECT * FROM movies ORDER BY title";
$queryResult = $dataBase->query($sqlQuery);

while ($row = $queryResult->fetch_object()) {
	$id = $row->movie_id;
	$title = htmlentities($row->title, ENT_QUOTES, "UTF-8");
	$description = htmlentities($row->description, ENT_QUOTES, "UTF-8");;
	echo "<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<th>Movie Id</th>
			<th>Movie Title</th>
			<th>Movie Description</th>
		</tr>
		<tr>
			<td>Id 1</td>
			<td>Title 1</td>
			<td>Description 1</td>
		</tr>
	</table>";
}

?>