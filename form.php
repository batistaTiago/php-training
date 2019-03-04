<?php

if (isset($_POST['content'])) {
	$userId = $_POST['content'];
	echo "<p>The content received was: " . $userId . ".<p>";
} else {
	echo "<form action=\"form.php\" method=\"post\">
			<input type=\"text\" name=\"content\">
			<button type=\"Submit\">Submit</button>
		</form>";
}
?>

<!--

<form action="form.php" method="post">
	<input type="text" name="content">
	<button type="Submit">Submit</button>
</form>

 <p>The content received was: <?php echo $userId ?>.</p> 

 -->