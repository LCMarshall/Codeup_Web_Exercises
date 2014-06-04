<?php

class AddressDataStore {

    public $filename = '';

    public function __construct($filename) {
    	$this->filename = $filename;
    }

    public function read_address_book() {
	// Code to read file $this->filename
        $handle = fopen($this->filename, 'r');
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
 	// Code to write $addresses_array to file $this->filename
      
    public function write_address_book($addresses_array) {
        if (is_writable($this->filename)) {        
		    $handle = fopen($this->filename, 'w');
		    foreach ($addresses_array as $fields) {
		    	fputcsv($handle, $fields);
        }
        fclose($handle);        
    }   
}  
}
