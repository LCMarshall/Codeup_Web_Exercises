<?php

define('FILENAME', 'data/address_list.csv');

$address_book = [];

function write_file($filename, $array) {
    if (is_writable($filename)) {        
        $handle = fopen($filename, 'w');
        foreach ($array as $fields) {
        	fputcsv($handle, $fields);
        }
        fclose($handle);        
    }   
}

function read_file($filename) {
    $handle = fopen($filename, 'r');
    $address_book = [];

    while (!feof($handle)) {
    	$row = fgetcsv($handle);
    	if(is_array($row)) {
    		$address_book[] = $row;
    	}
    }
    fclose($handle); 
    return $address_book;
} 
$address_book = read_file(FILENAME);

if (isset($_GET['id'])) {
	unset($address_book[$_GET['id']]);
	write_file(FILENAME, $address_book);
}   

$new_address = [];

// Error check

if (!empty($_POST['full_name']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip'])) {

    $new_address['full_name'] = $_POST['full_name'];
    $new_address['address'] = $_POST['address'];
    $new_address['city'] = $_POST['city'];
    $new_address['state'] = $_POST['state'];
    $new_address['zip'] = $_POST['zip'];
    $new_address['phone'] = $_POST['phone'];

    array_push($address_book, $new_address);
    write_file(FILENAME, $address_book);
    // echo "we are here";

} else {
    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            echo "<h1>" . ucfirst($key) .  " is empty.</h1>";
        }
    }
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>ADDRESS BOOK</title>
	</head>
	<body>
		<h2>Address Book</h2>
	<table>		
		<tr>
            <th>Full Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Phone</th>
        </tr>
            <? foreach ($address_book as $key => $fields) : ?>
            <tr>
                <? foreach ($fields as $value): ?>
                    <td><?= htmlspecialchars(strip_tags($value)); ?></td>
                <? endforeach; ?>
                <td><a href = "?id=<?=$key;?>">Delete Contact</a></td>
            </tr>
            <?endforeach;?>	
</table>
		<p>Please enter information in all fields. Please click submit when you have completed entering your items.</p>
		<form method="POST">
		    <p>
		    	<label for="full_name">Full Name:</label>
		    	<input type="text" id="full_name" name="full_name" placeholder="full_name">
		    </p>
		    <p>
		    	<label for="address">Address:</label>
		    	<input type="text" id="address" name="address" placeholder="address">
		    </p>
		    <p>
		    	<label for="city">City:</label>
		    	<input type="text" id="city" name="city" placeholder="city">
		    </p>
		    <p>
		    	<label for="state">State:</label>
		    	<input type="text" id="state" name="state" placeholder="state">
		    </p>
		    <p>
		    	<label for="zip">ZIP Code:</label>
		    	<input type="zip" id="zip" name="zip" placeholder="zip">
		    </p>
		    <p>
		    	<label for="phone">Phone Number:</label>
		    	<input type="phone" id="phone" name="phone" placeholder="phone">
		    </p>
		    <p>
			    <button type="submit">Submit</button>
			</p>
		</form>
		<h1>Upload File</h1>

	<form method="POST" enctype="multipart/form-data">
	    <p>
	        <label for="file1">File to upload: </label>
	        <input type="file" id="file1" name="file1">
	    </p>
	    <p>
	        <input type="submit" value="Upload">
	    </p>
	</form>	
	</body>
</html>