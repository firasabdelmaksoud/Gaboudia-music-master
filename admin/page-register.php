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
    <title>S'inscrire</title>
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
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" heigth="250" width=250 alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form class="form-horizontal m-t-20" method="post" action="ajoutadmin.php">
                        <div class="form-group">
                            <label>Nom d'tilisateur</label>
                            <input type="text" class="form-control" placeholder="Nom d'utilisateur"  name="admin_nom" >
                        </div>
                            <div class="form-group">
                                <label>Address Email</label>
                                <input type="email" name="admin_email" class="form-control" placeholder="Email">
                        </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input type="password" name="admin_mdp" class="form-control" placeholder="**********">
                        </div>
                                    <div class="checkbox">
                                        <label>
                                <input type="checkbox" id="checkbox-signup" > J'accept Nos termes et conditions
                            </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">S'inscrire</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p> Vous avez d??ja un compte ? <a href="page-login.php"> Se connecter </a></p>
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
