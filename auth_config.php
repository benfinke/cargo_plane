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

}
?>