<!DOCTYPE html>
<html>
	<head>
		<title>My First HTML Form!</title>
	</head>
	<body>
		<?php
        var_dump($_GET);
        echo "<br>";
        var_dump($_POST);
        echo "<hr>";
    	?>
	<form method="POST" action="/process-form.php">
	    <p>
	        <label for="username">Username</label>
	        <input id="username" name="username" type="text" placeholder="Enter your username">
	    </p>
	    <p>
	        <label for="password">Password</label>
	        <input id="password" name="password" type="password" placeholder="Enter your password">
	    </p>
	    <p>
	        <button type="submit" name="submit">Login</button>
	    </p>
	</form>

	</body>
</html>