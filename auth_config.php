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

}
?>