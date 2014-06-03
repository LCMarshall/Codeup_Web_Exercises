<?php

function palindrome($word){
// $word = '';
$reverse = strrev($word); 

	if ($word != $reverse) {
		return "This word is not a palindrome";
	} else {
		return "This is a palindrome";
	}
}	
palindrome('test');	
?>