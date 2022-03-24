<?php
ob_start();
include('check.php');

include "../entities/utilisateur.php";
include "../core/UtilisateurC.php";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Se connecter</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
        <?php include 'Header.php'; ?>


    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
        <div class="bradcumbContent">
            <h2>Se Connecter</h2>
        </div>
    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area mt-30 section-padding-100-0">
        <div class="container">

            <div class="row">

                    <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                             <form method="POST" id="form-horizontal" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="user" class="form-control"  placeholder=" User">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="mdp" class="form-control"  placeholder=" Mot de passe">
                                </div>

                                <br>
                                 
                                <button class="btn musica-btn mt-30" type="submit" name="seconnecter" value="seconnecter">Se Connecter</button>
                                <button class="btn musica-btn mt-30" type="submit"><a href="index.php">annuler</a></button>
                                <br>
                                <div>
                                <button class="btn musica-btn mt-30" type="submit"><a href="ajouterutilisateur.php">S'inscrire</a></button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    <!-- ##### Preloader ##### -->
    
            <div class="row">

                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        
                    
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>


                  	
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Google Maps ##### -->
   

    <!-- ##### CTA Area Start ##### -->
   

              

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

<?php 
session_start();
session_regenerate_id(true);

if($_POST['seconnecter'])
{
    $test=0;

if(isset($_POST['user']) and isset($_POST['mdp'])){
$utilisateur1C = new utilisateurC();
$liste=$utilisateur1C->usermdpexist($_POST['user']);

                        foreach($liste as $row){
                        $mdp=$row['mdp'];
                        echo $mdp;
                        if($mdp==($_POST['mdp']))
                        {
                            $test=1;
                        }
                        }
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($test == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $_POST['user'];
         //session_id($current_user);
         //session_save_path("tmp/sessions/");

         //var_dump($_SESSION['login_user']);
         
        

    header('Location: index.php');
      }else {
         var_dump($count);
         $error = "Your Login Name or Password is invalid";
         var_dump($error);
         header("location: seconnecter.php");

      }
   }


    
}else{
    echo "vérifieer les champs";
}
//*/
}
?>


</body>

</html>