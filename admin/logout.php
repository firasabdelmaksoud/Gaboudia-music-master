<?php 
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
//unset($_SESSION["login_admin"]);
unset($_SESSION);
session_destroy();
header("location: page-login.php");
/*session deleted. if you try using this you've got an error*/
?>