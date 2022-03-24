<?php  session_start();


if(empty($_SESSION))
{
 
    
    header("location: page-loginLivreur.php");

}

function destroy($usrname)
{

 unset($_SESSION);
}
?>