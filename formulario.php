<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário - PHP</title>
</head>
<body>

	<form action="foo.php" method="post">
		
		Nome: <input type="text" name="username" required /> <br><br>
		Email: <input type="email" name="email" /> <br><br>

		<input type="submit" name="submit" value="Me aperte!!!"/>

		<br>

		<input type="search" name="search" id="search">

		<br>

		<input type="tel" name="tel" id="tel">

	</form>

</body>
</html>