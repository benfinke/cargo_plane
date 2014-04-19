<?php
/*
 * jQuery File Upload Plugin PHP Example 5.14
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

error_reporting(E_ALL | E_STRICT);

function isXML( $file ) {                
    libxml_use_internal_errors(true); 
    $doc = new DOMDocument('1.0', 'utf-8'); 
    $doc->loadXML(file_get_contents($file)); 

    $errors = libxml_get_errors(); 
    if (empty($errors)) 
    { 
        return true; 
    } 
	else {
		return false;
	}
}

$files = scandir('files/');

foreach($files as $file) {
	if (isXML($file)==TRUE)
	{
		system("parser.py -i $file --csv nessus_csv/$file.csv");
		move_uploaded_file($file, nessus_archive/$file);
	}
	else {
		echo "There was a problem with the $file file.";
	}
}

?>