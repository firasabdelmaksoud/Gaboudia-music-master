<?php  session_start();


if(empty($_SESSION))
{
 
    
    header("location: index.php");

}

function destroy($usrname)
{

 unset($_SESSION);
}
?>