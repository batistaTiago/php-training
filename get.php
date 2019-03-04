<?php

if (isset($_GET['userId'])) {
	$userId = $_GET['userId'];
	echo "The user id received was: $userId";
} else {
	echo "User ID was not set."
}

?>