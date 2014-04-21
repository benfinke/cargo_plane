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


?>

<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<br>
<br>
<title>Cargo Plane</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="css/style.css">
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://github.com/benfinke/cargo_plane">Cargo Plane</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="https://github.com/benfinke/cargo_plane/tags">Download</a></li>
                <li><a href="https://github.com/benfinke/cargo_plane">Source Code</a></li>
                <li><a href="https://github.com/benfinke/cargo_plane/wiki">Documentation</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <h1>Cargo Plane</h1>
    <h2 class="lead">Import net discovery and vulnerability files into Scout!</h2>
    
    <br>
    <blockquote>
        <p>The following files were successfully uploaded and parsed.  They are being indexed by Scout and will be available in the portal shortly.</p>
    </blockquote>
    <p>Files:
	<?php 
	echo $info;

$files = scandir('files/');

foreach($files as $file) {
	if (substr("$file",-7) == ".nessus"){

		if (isXML($file)==TRUE)
		{
			exec(escapeshellcmd("python parser.py -i files/$file --csv nessus_csv/$file.csv"), $results);
			if (!copy("files/$file", "nessus_archive/$file")){
				echo "Error copying the file $file to the Nessus archive directory.";
			}
			else {
				unlink("files/$file");
			}
			$info = "File successfully parsed";
			
		}
		else {
			$info = "There was a problem with the file $file .";

		}
	}
}
	?>
    </p>
      <blockquote>
        <p>Return to the file <a href=/cargo_plane/trunk/index.html>upload page</a>.</p>
    </blockquote>  
</body> 
</html>