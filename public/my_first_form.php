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

		 <h2>Multiple Choice Test</h2>
		 <form method="POST">
		 	<p>What is your favorite junk food?</p> 
		 	<label for="q1a">
		 		<input type="radio" id="q1a" name="Q1" value="Pizza">Pizza</label>
		 	<label for="q1b">
		 		<input type="radio" id="q1b" name="Q1" value="Fried Chicken">Fried Chicken</label>
		 	<label for="q1c">
		 		<input type="radio" id="q1c" name="Q1" value="Donuts">Donuts</label>

		 <p>What are your favorite colors?</p>
			<label for="fc1"><input type="checkbox" id="fc1" name="fc[]" value="Red">Red</label>
			<label for="fc2"><input type="checkbox" id="fc2" name="fc[]" value="Green">Green</label>
			<label for="fc3"><input type="checkbox" id="fc3" name="fc[]" value="Blue">Blue</label>
		<p>
		        <button type="submit" name="submit">Done!</button>
		</p>	

	</body>
</html>