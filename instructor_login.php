<!DOCTYPE html>
<html>
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
	<title>instructor login</title>
	<style>
		body{
			font-family: 'Nanum Myeongjo', serif;
		}
	</style>
</head>
<body>
	<form method="post" action="instructor_login_process.php">
		<label for="instructor_id">instructor id</label>
		<input type="text" name="id" id="instructor_id"/>
		<br>
		<label for="password">password</label>
		<input type="password" name="password" id="password">
		<br>
		<input type="submit"/>
	</form>
</body>
</html>