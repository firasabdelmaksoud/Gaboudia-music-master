<?php
include('check.php');

ob_start();

session_start();
session_regenerate_id(true);

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
    <title>S'inscrire</title>

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
            <h2>Creer un compte</h2>
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
                                    <input type="text" name="nom" class="form-control"  placeholder=" Nom">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="prenom" class="form-control"  placeholder="Prenom">
                                </div>
                                            <div class="row form-group">
                                            <div class="col col-md-9">
                                            <label class=" form-control-label">Sexe</label></div>
                                                     <div class="col-12 col-md-9">
                                                                          <select name="sexe" class="form-control">
                                                                            <option value="">Selectionner</option>
                                                                            <option value="Homme">Homme</option>
                                                                            <option value="Femme">Femme</option>
                                                                            </select>

                                                     </div>
                                            </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control"  placeholder=" Email">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="tel" class="form-control"  placeholder=" Telephone">
                                </div>
                                <div class="form-group">
                                    <input type="date" name="datenaiss" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <input type="text" name="user" class="form-control"  placeholder="Nom d'utilsateur">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="mdp" class="form-control"  placeholder="Mot de passe">
                                </div>
                                <tr>
                                    <td>IMAGE</td>

                                    <td><input type="file" name="uploadfile" value=""></td>
                                </tr>
                                <br>
                                 
                                <button class="btn musica-btn mt-30" type="submit" name="ajouter" value="ajouter">creer un compte</button>
                                <button class="btn musica-btn mt-30" type="submit"><a href="index.html">annuler</a></button>

                                  
                            </form>
                        </div>
                    </div>
                </div>
    <!-- ##### Preloader ##### -->
    
                        <!-- ##### CTA Area Start ##### -->
    <!-- ##### CTA Area End ##### -->
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

<?php 
if($_POST['ajouter'])
{
if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['sexe']) and isset($_POST['email']) and isset($_POST['tel']) and isset($_POST['datenaiss']) and isset($_POST['user']) and isset($_POST['mdp'])){
$utilisateur1=new utilisateur($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['email'],$_POST['tel'],$_POST['datenaiss'],$_POST['user'],$_POST['mdp']);

//Partie3
$utilisateur1C = new utilisateurC();
$utilisateur1C->ajouterutilisateur($utilisateur1);
//var_dump($produit1);

$filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];

    $folder = "../img/userimg/".$filename ;
    if($filename!="")
    {
    move_uploaded_file($tempname, $folder);
    $utilisateur1C->ajouterUtilisateurimg($_POST['user'],$folder);
    }



header('Location: index.php');
    
}else{
    echo "vérifieer les champs";
}
//*/
}
?>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js'></script>

        <script src="js/validatorUser.js"></script>

</body>

</html>