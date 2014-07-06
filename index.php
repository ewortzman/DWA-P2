<!DOCTYPE html>
<html>
<head>
	<title>xkcd Password Generator</title>
	<link rel="stylesheet" type="text/css" href="css/default.css">

	<?php require "logic.php" ?>

</head>
<body>
	<form action="." method="POST">
		<input type="text" id="password" value="<?php pw_gen(); ?>" /> <br>
		<input type="submit" value="Generate" />
	</form>
</body>
</html>