<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Processed</title>
</head>
<body>
	<?php
		$firstName = $_POST["fName"];
		$lastName = $_POST["lName"];

		echo "<h3>Thank you for filling out the scholarship form, $firstName $lastName.</h3>";
	?>

</body>
</html>