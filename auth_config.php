<?php



class FGMembersite
{
    var $admin_email;
    var $from_address;
    
    var $username;
    var $pwd;
    var $database;
    var $tablename;
    var $connection;
    var $rand_key;
    
    var $error_message;


function CheckLogin()
{
     session_start();

     $sessionvar = $this->GetLoginSessionVar();
     
     if(empty($_SESSION[$sessionvar]))
     {
        return false;
     }
     return true;
}

function GetLoginSessionVar()
{
    $retvar = md5($this->rand_key);
    $retvar = 'usr_'.substr($retvar,0,10);
    return $retvar;
}

function Login()
{
    if(empty($_POST['username']))
    {
        $this->HandleError("UserName is empty!");
        return false;
    }
    
    if(empty($_POST['password']))
    {
        $this->HandleError("Password is empty!");
        return false;
    }
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if(!$this->CheckLoginInSplunk($username,$password))
    {
        return false;
    }
    
    session_start();
    
    $_SESSION[$this->GetLoginSessionVar()] = $username;
    
    return true;
}


function CheckLoginInSplunk($username,$password)
{
// Import Splunk.php
require_once 'Splunk.php';

// Create an instance of Splunk_Service to connect to a Splunk server
$service = new Splunk_Service(array(
    'host' => 'localhost',
    'port' => '8089',
    'username' => "$username",
    'password' => "$password",
));

// Log into the Splunk service
$service->login();
$token = NULL;

$token = $service.getToken();
 
 
    if($token == NULL)
    {
        $this->HandleError("Splunk login failed!");
        return false;
    }          
    
    return true;
}

    function HandleError($err)
    {
        $this->error_message .= $err."\r\n";
    }

}

$fgmembersite = new FGMembersite();

?>