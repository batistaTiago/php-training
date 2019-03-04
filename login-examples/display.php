<?php

include 'connect.php';

if (isset($_POST['username'])) {
	$userName = $_POST['username'];
}

if (isset($_POST['password'])) {
	// $password = $dataBase->real_scape_string($_POST['password']); uma das formas de evitar sql injection
	$password = $_POST['password'];
}

/*
$sqlQuery = "SELECT * FROM `test_db` 
			WHERE `name` = '$userName' && `password` = '$password' 
			ORDER BY `name`";
$result = $dataBase->query($sqlQuery);
*/

?>

<p><b>Results</b></p>

<table border="1" cellpadding="5" cellspacing="0">
	<tr style="text-align: left;">
		<th style="width: 100px;">Movie ID</th>
		<th style="width: 150px;">Movie Title</th>
		<th style="width: 150px;">Movie Description</th>
	</tr>

	<?php

		$stmt = $dataBase->prepare("SELECT * FROM `movies` 
			WHERE `name` = '?' && `password` = '?' 
			ORDER BY `name`");
		$stmt->bind_param('ss', $userName, $password);
		$stmt->bind_result($movie_id, $title, $description);
		$stmt->execute();

		while ($stmt->fetch()) {
			?>
			<tr>
				<td><?php echo $movie_id; ?></td>
				<td><?php echo $title; ?></td>
				<td><?php echo $description; ?></td>
			</tr>
			<?php 
		}
	?>
</table>

<?php 

	$stmt->close();

?>