<?php
include "../config.php";
include "../core/adminC.php";
   

session_start();
session_regenerate_id(true);
   $uname=$_POST["username"];
   $optic = new adminC();
   $res=$optic->recupereruser($uname);
   //var_dump($res);
   
   
   if($res!="")
   {

        $succ=$optic->checkpass($uname,$_POST['password']);
         if($succ==true)
            $count=1;
         else
            $count=0;

   }
   

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_admin'] = $uname;
         //session_id($current_user);
         //session_save_path("tmp/sessions/");

         //var_dump($_SESSION['login_user']);
         
        

         header("location: afficherLivraison.php");
      }else {
         var_dump($count);
         $error = "Your Login Name or Password is invalid";
         var_dump($error);
         header("location: page-login.php");

      }
   }
?>