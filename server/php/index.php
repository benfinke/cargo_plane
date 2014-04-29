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

require_once("/cargo_plane/auth_config.php");

if($fgmembersite->CheckLogin())
{
    header("Location: /cargo_plane/login.php");
    exit;
}

require('UploadHandler.php');
$upload_handler = new UploadHandler();

?>