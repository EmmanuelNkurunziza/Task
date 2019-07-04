<?php
    session_start();
    unset($_SESSION['user_data']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<style type="text/css">
		body{
			display: flex;
			align-items: center;
			justify-content: center;
			position: fixed;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
		}
	</style>
</head>
<body>

	<fieldset style="width: 154px;">
		<form action="login_conn.php" method="POST">
			<label>Username</label><br>
			<input type="text" name="username"><br><br>
			<label>Password</label><br>
			<input type="password" name="password"><br><br>
			<button type="submit">Login</button>
			<button type="submit"><a href="subscribe.php">Sign up</a></button>
		</form>
	</fieldset>

</body>
</html>