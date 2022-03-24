<?php  session_start();


if(empty($_SESSION))
{
 
    
    header("location: page-login.php");

}

function destroy($usrname)
{

 unset($_SESSION);
}
?>