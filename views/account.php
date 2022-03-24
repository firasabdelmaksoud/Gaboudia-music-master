<?php
ob_start();
session_start();
session_regenerate_id(true);

include "../entities/utilisateur.php";
include "../core/UtilisateurC.php";



$utilisateur1C = new utilisateurC();
$liste=$utilisateur1C->recupereruser($_SESSION['login_user']);

                        foreach($liste as $row){
                        $nom=$row['nom'];
                        $prenom=$row['prenom'];
                        $sexe=$row['sexe'];
                        $email=$row['email'];
                        $tel=$row['tel'];
                        $datenaiss=$row['datenaiss'];
                        $imgsrc=$row['imgsrc'];

                        }
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
    <title>Mon Compte</title>

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
            <h2>Mon Compte</h2>
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
                                    <input type="text" name="nom" class="form-control"  placeholder=" <?PHP echo $nom ?> " disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="prenom" class="form-control"  placeholder=" <?PHP echo $prenom ?> " disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="sexe" class="form-control"  placeholder=" <?PHP echo $sexe ?> " disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control"  placeholder=" <?PHP echo $email ?> " disabled>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="tel" class="form-control"  placeholder=" <?PHP echo $tel ?> " disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="datenaiss" class="form-control" placeholder=" <?PHP echo $datenaiss ?> " disabled>
                                </div>
                                <div><tr>
                                    <td>Photo</td>
                                  </tr>
                                </div>
                                <div>
                                  <tr>
                                    <td><img src="<?php echo $row['imgsrc']; ?>" heigth="250" width=250></td>
                                </tr>
                              </div>  
                                <br>
                                 
                                  
                            </form>
                        </div>
                    </div>
                </div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
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

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js'></script>

        <script src="js/validatorUser.js"></script>

</body>

</html>