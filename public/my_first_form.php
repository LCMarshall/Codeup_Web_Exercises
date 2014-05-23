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
    <h2>User Login</h2>	
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
	<h2>Compose an Email</h2>
	<form method="POST">
		<p>
			<label for="to">To:</label>
			<input id="to" name="TO" type="text" placeholder="TO:"
		</p>
		<p>
			<label for="from">From:</label>
			<input id="from" name="From" type="text" placeholder="From:"
		</p>
		<p>
			<label for="subject">Subject:</label>
			<input id="subject" name="Subject" type="text" placeholder="Subject:"
		</p>
		<p>
			<label for "email_body">eMail body</label>
			<textarea id="email_body" name"email_body" rows="8" cols="40">Type eMail Here</textarea>
		</p>
		<p>
	        <button type="submit" name="submit">Send</button>
	    </p>	

	</body>
</html>