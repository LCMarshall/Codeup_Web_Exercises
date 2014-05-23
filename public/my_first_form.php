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
				Would you like to save a copy to your sent folder?
				<label for="confirmation_email">
					<input type="checkbox" id="confirmation_email" name="confirmation_email" value="yes" checked>
				</label>	
			<p>
		        <button type="submit" name="submit">Send</button>
		    </p>
		 </form>

		 <h2>Multiple Choice Test</h2>
		 <form method="POST">
		 	<label for="shoes">What are your favorite shoes? </label>
			<select id="shoes" name="shoes[]" multiple>
			    <option value="Running">Running</option>
			    <option value="Flats">Flats</option>
			    <option value="Heels">Heels</option>
			</select><br>

		 	<p>What are your favorite colors?</p>

			<label for="fc1"><input type="checkbox" id="fc1" name="fc[]" value="Red">Red</label>
			<label for="fc2"><input type="checkbox" id="fc2" name="fc[]" value="Green">Green</label>
			<label for="fc3"><input type="checkbox" id="fc3" name="fc[]" value="Blue">Blue</label><br>

			<label for="hello_kitty">Do you like Hello Kitty?</label>
			<select id="hello_kitty" name="hello_kitty">
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select>
			<p>
			        <button type="submit" name="submit">Done!</button>
			</p>	
		</form>
	</body>
</html>