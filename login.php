<?php

require_once("./auth_config.php");

if(isset($_POST['submitted']))
{
    if($fgmembersite->Login())
    {
        header("Location: /cargo_plane/nessus.html");
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
<title>Cargo Plane</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="css/style.css">
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="js/jquery.blueimp-gallery.min.js">
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
 	<h2 class="lead">Please login to continue with your Scout credentials:</h2>

	<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
	<fieldset >
	<legend>Login</legend>
	<input type='hidden' name='submitted' id='submitted' value='1'/>

	<label for='username' >UserName:</label>
	<input type='text' name='username' id='username'  maxlength="50" />

	<label for='password' >Password:</label>
	<input type='password' name='password' id='password' maxlength="50" />

	<input type='submit' name='Submit' value='Submit' />

	</fieldset>
	</form>
</div>

<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
</body> 
</html>
