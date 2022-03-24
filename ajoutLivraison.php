<?php
ob_start();

include "../entities/utilisateur.php";
include "../core/UtilisateurC.php";

error_reporting(0)

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
    <title>conection</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
                            <p class="mb-30"> Creer un compte </p>

                    <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                             <form method="POST" enctype="multipart/form-data">
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
    
            <div class="row">

                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        
                    
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>

                        <!-- Contact Social Info -->
                        <div class="contact-social-info mt-50">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="img/core-img/placeholder.png" alt="">
                            </div>
                            <h6>Gaboudia Music</h6>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="img/core-img/message.png" alt="">
                            </div>
                            <h6>+216 52272411</h6>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon">
                                <img src="img/core-img/smartphone.png" alt="">
                            </div>
                            <h6>gaboudia.music@gmail.com</h6>
                        </div>
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



header('Location: index.html');
    
}else{
    echo "vérifieer les champs";
}
//*/
}
?>
</body>

</html>