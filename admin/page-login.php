<?php  session_start();


if($_SESSION['login_admin']!="")
{

    header("location: afficherLivraison.php");
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
    <title>Panneau administrateur</title>
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
                    <form class="form-horizontal m-t-20" method="post" action="adminlogin.php">
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
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Se connecter</button>

                                <div class="register-link m-t-15 text-center">
                                    <p>Vous n'avez pas un compte ? <a href="page-register.php"> S'inscrire </a></p>
                                </div>
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
