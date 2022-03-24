<?php
ob_start();

include "../entities/Livraison.php";
include "../core/LivraisonC.php";

error_reporting(0);
        $Livraison1C=new LivraisonC();
        $listePrix=$Livraison1C->afficherProdLivraisons('5');
        foreach($listePrix as $row){
                        $prix=$row['prix'];
                        }


if($_POST['livrer'])
{

if(isset($_POST['nomrecep']) and isset($_POST['nomlivreur']) and isset($_POST['adress']) and isset($_POST['codep'])){
$livraison1=new Livraison($_POST['nomrecep'],$_POST['nomlivreur'],$_POST['adress'],$_POST['codep'],$prix);
    var_dump($livraison1);



//Partie3
$liv = new LivraisonC();
$liv->ajouterLivraison($livraison1);

header('Location: index.html');
    
}else{
    var_dump($produit1);

    echo "vérifieer les champs";
}
//*/
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
    <title>Livraison</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

<p class="mb-30"> Livraison </p>

                    <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                             <form method="POST" id="form-horizontal" class="form-horizontal" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="nomrecep" class="form-control"  placeholder=" Nom recepteur ">
                                </div>
                                    <div class="col-md-10">
                                    <select name="nomlivreur" class="form-control">
                                        <option value="">Selectionner une Livreur</option>
                                                                <?php
                                                                $LivraisonC=new LivraisonC();
                                                                $listeLivreur=$LivraisonC->afficherLivreurs();
                                                                  foreach($listeLivreur as $row){
                                                                        echo '<option value="'.$row['nom'].' '.$row['prenom'].'">'.$row['nom'].' '.$row['prenom'].'</option>';
                                                                  }
                                                                    ?>
                                                            </select>
                                                        </div>
                                <div class="form-group">
                                    <input type="text" name="adress" class="form-control"  placeholder="Adress">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="codep" class="form-control"  placeholder="Code POSTAL">
                                </div>
                                <div class="form-group">
        
                                    <input type="text" name="prix" id="prix" class="form-control" value="<?PHP echo $prix ?>" disabled="" >
                                    
                                </div>

                                <br>
                                 
                                <button class="btn musica-btn mt-30" type="submit" name="livrer" value="livrer">Passer la livraison</button>
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

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js'></script>

        <script src="js/validatorLiv.js"></script>

</body>

</html>