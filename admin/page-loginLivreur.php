<?php 
session_start();
session_regenerate_id(true);


if($_SESSION['login_livreur']!="")
{

    header("location: afficherLivraison.php");
}


include "../entities/livreur.php";
include "../core/livreurC.php";

if($_POST['seconnecter'])
{
    $test=0;

if(isset($_POST['username']) and isset($_POST['password'])){
$utilisateur1C = new livreurC();
$liste=$utilisateur1C->usermdpexist($_POST['username']);

                        foreach($liste as $row){
                        $mdp=$row['mdp'];
                        echo $mdp;
                        if($mdp==($_POST['password']))
                        {
                            $test=1;
                        }
                        }
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($test == 1) {
         //session_register("myusername");
         $_SESSION['login_livreur'] = $_POST['username'];
         //session_id($current_user);
         //session_save_path("tmp/sessions/");

         //var_dump($_SESSION['login_user']);
         
        

    header('Location: InterfaceLivreur.php');
      }else {
         var_dump($count);
         $error = "Your Login Name or Password is invalid";
         var_dump($error);
         header("location: page-loginLivreur.php");

      }
   }


    
}else{
    echo "vérifieer les champs";
}
//*/
}
?>



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panneau Administration</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                        <img class="align-content" src="images/logo.png" heigth="250" width=250 alt="">
                   
                </div>
                <div class="login-form">
                    <form class="form-horizontal m-t-20" method="post" >
                        <div class="form-group">
                            <label>Nom d'utilisateur</label>
                            <input type="text"  name="username" class="form-control" placeholder="Nom d'utilisateur" >
                        </div>
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input type="password"  name="password" class="form-control" placeholder="************">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox" id="checkbox-signup" > Se souvenir de moi
                            </label>


                                </div>
                                <button type="submit" name="seconnecter" value="seconnecter" class="btn btn-success btn-flat m-b-30 m-t-30">Se connecter</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
