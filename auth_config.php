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
    
    //-----Initialization -------
    function FGMembersite()
    {
        $this->sitename = 'scout.entint.com';
        $this->rand_key = '0iQx5oBk66oVZep';
    }

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