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
                        $kilo=0;
                        $nvprix=0;
                        $gouv="";
                        switch ($_POST['gouvernorat']) {
                                                                    case 'Le prix de la livraison pour Ariana est 10 dinars':
                                                                       $kilo=5;
                                                                       $gouv="Ariana";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Ben Arous est 10 dinars':
                                                                       $kilo=20;
                                                                       $gouv="Ben Arous";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Bizerte est 20 dinars':
                                                                       $kilo=70;
                                                                       $gouv="Bizerte";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Béja est 30 dinars':
                                                                       $kilo=115;
                                                                       $gouv="Béja";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Gabés est 45 dinars':
                                                                       $kilo=420;
                                                                       $gouv="Gabés";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Gafsa est 40 dinars':
                                                                       $kilo=370;
                                                                       $gouv="Gafsa";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Jendouba est 30 dinars':
                                                                       $kilo=155;
                                                                       $gouv="Jendouba";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Kairouan est 30 dinars':
                                                                       $kilo=170;
                                                                       $gouv="Kairouan";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Kasserine est 45 dinars':
                                                                       $kilo=300;
                                                                       $gouv="Kasserine";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Kébili est 50 dinars':
                                                                       $kilo=500;
                                                                       $gouv="Kébili";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Le Kef est 30 dinars':
                                                                       $kilo=170;
                                                                       $gouv="Le Kef";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Mahdia est 35 dinars':
                                                                       $kilo=220;
                                                                       $gouv="Mahdia";
                                                                        break;
                                                                    case 'Le prix de la livraison pour La Manouba est 10 dinars':
                                                                       $kilo=10;
                                                                       $gouv="La Manouba";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Médenine est 50 dinars':
                                                                       $kilo=500;
                                                                       $gouv="Médenine";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Monastir est 30 dinars':
                                                                       $kilo=180;
                                                                       $gouv="Monastir";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Nabeul est 20 dinars':
                                                                       $kilo=80;
                                                                       $gouv="Nabeul";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Sfax est 40 dinars':
                                                                       $kilo=380;
                                                                       $gouv="Sfax";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Sidi Bouzid est 45 dinars':
                                                                       $kilo=270;
                                                                       $gouv="Sidi Bouzid";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Siliana est 30 dinars':
                                                                       $kilo=130;
                                                                       $gouv="Siliana";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Sousse est 30 dinars':
                                                                       $kilo=160;
                                                                       $gouv="Sousse";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Tataouine est 50 dinars':
                                                                       $kilo=550;
                                                                       $gouv="Tataouine";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Tozeur est 45 dinars':
                                                                       $kilo=490;
                                                                       $gouv="Tozeur";
                                                                        break;
                                                                    case 'Le prix de la livraison pour Tunis est 10 dinars':
                                                                       $kilo=5;
                                                                       $gouv="Tunis";
                                                                        break;
                                                                    case "Le prix de la livraison pour Zaghouan est 20 dinars":
                                                                       $kilo=65;
                                                                       $gouv="Zaghouan";
                                                                        break;

                                                                    case '':
                                                                        $kilo=0;
                                                                        break;
                                                                }
                                                                if($kilo<500)
                                                                {
                                                                    if($kilo<400)
                                                                {
                                                                    if($kilo<300)
                                                                {
                                                                    if($kilo<200)
                                                                {
                                                                    if($kilo<100)
                                                                {
                                                                    if($kilo<50)
                                                                {
                                                                        if($kilo==0)
                                                                {
                                                                        $nvprix = $prix;
                                                                }
                                                                else
                                                                {
                                                                    $nvprix = 0;
                                                                        $nvprix = $prix+10;
                                                                }
                                                                }
                                                                else
                                                                {
                                                                    $nvprix = 0;
                                                                        $nvprix = $prix+20;
                                                                }
                                                                }
                                                                else
                                                                {
                                                                    $nvprix = 0;
                                                                        $nvprix = $prix+30;
                                                                }
                                                                }
                                                                else
                                                                {
                                                                    $nvprix = 0;
                                                                        $nvprix = $prix+35;
                                                                }
                                                                }
                                                                else
                                                                {
                                                                    $nvprix = 0;
                                                                        $nvprix = $prix+40;
                                                                }
                                                                }
                                                                else
                                                                {
                                                                    $nvprix = 0;
                                                                        $nvprix = $prix+45;
                                                                }
                                                                }
                                                                else
                                                                {
                                                                    $nvprix = 0;
                                                                        $nvprix = $prix+50;
                                                                }

if($_POST['livrer'])
{
$prix=$nvprix;



if(isset($_POST['nomrecep']) and isset($_POST['nomlivreur']) and isset($_POST['adress']) and isset($_POST['codep'])){
$livraison1=new Livraison($_POST['nomrecep'],$_POST['nomlivreur'],$gouv,$_POST['adress'],$_POST['codep'],$nvprix);
    var_dump($livraison1);



//Partie3
$liv = new LivraisonC();
$liv->ajouterLivraison($livraison1);
$liv->modifierETATlivreur($_POST['nomlivreur'],"Occupé");
header('Location: index.php');
    
}else{

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
        <?php include 'Header.php'; ?>


    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay2" style="background-image: url(img/bg-img/breadcumb4.jpg);">
        <div class="bradcumbContent">
            <h2>Passer une livraison</h2>
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
                                <input type="text" name="nomrecep" class="form-control"  placeholder=" <?PHP echo $_SESSION['login_user'] ?> " value=" <?PHP echo $_SESSION['login_user'] ?> "  >  
                                   </div>
                                    <div class="col-md-10">
                                    <select name="nomlivreur" class="form-control">
                                        <option value="">Selectionner une Livreur</option>
                                                                <?php
                                                                $LivraisonC=new LivraisonC();
                                                                $listeLivreur=$LivraisonC->afficherLivreurs();
                                                                  foreach($listeLivreur as $row){
                                                                    if($row['etat']=="Disponible"){
                                                     echo '<option value="'.$row['id_livreur'].'" >'.$row['nom'].' '.$row['prenom'].'</option>';
                                                                    }
                                                                  }
                                                                    ?>
                                                            </select>
                                                        </div>
                                                        <div>
                                                        <select name="gouvernorat" id="gouvernorat" class="form-control" required="" onchange="post()" >
                                                                   <option value="">Selectionner un gouvernorat</option>
                                                                   <option value="Le prix de la livraison pour Ariana est 10 dinars">Ariana </option>
                                                                   <option value="Le prix de la livraison pour Ben Arous est 10 dinars">Ben Arous</option>
                                                                   <option value="Le prix de la livraison pour Bizerte est 20 dinars">Bizerte</option>
                                                                   <option value="Le prix de la livraison pour Béja est 30 dinars">Béja</option>
                                                                   <option value="Le prix de la livraison pour Gabés est 45 dinars">Gabés</option>
                                                                   <option value="Le prix de la livraison pour Gafsa est 40 dinars">Gafsa</option>
                                                                   <option value="Le prix de la livraison pour Jendouba est 30 dinars">Jendouba</option>
                                                                   <option value="Le prix de la livraison pour Kairouan est 30 dinars">Kairouan</option>
                                                                   <option value="Le prix de la livraison pour Kasserine est 45 dinars">Kasserine</option>
                                                                   <option value="Le prix de la livraison pour Kébili est 50 dinars">Kébili</option>
                                                                   <option value="Le prix de la livraison pour Le Kef est 30 dinars">Le Kef</option>
                                                                   <option value="Le prix de la livraison pour Mahdia est 35 dinars">Mahdia</option>
                                                                   <option value="Le prix de la livraison pour La Manouba est 10 dinars">La Manouba</option>
                                                                   <option value="Le prix de la livraison pour Médenine est 50 dinars">Médenine</option>
                                                                   <option value="Le prix de la livraison pour Monastir est 30 dinars">Monastir</option>
                                                                   <option value="Le prix de la livraison pour Nabeul est 20 dinars">Nabeul</option>
                                                                   <option value="Le prix de la livraison pour Sfax est 40 dinars">Sfax</option>
                                                                   <option value="Le prix de la livraison pour Sidi Bouzid est 45 dinars">Sidi Bouzid</option>
                                                                   <option value="Le prix de la livraison pour Siliana est 30 dinars">Siliana</option>
                                                                   <option value="Le prix de la livraison pour Sousse est 30 dinars">Sousse</option>
                                                                   <option value="Le prix de la livraison pour Tataouine est 50 dinars">Tataouine</option>
                                                                   <option value="Le prix de la livraison pour Tozeur est 45 dinars">Tozeur</option>
                                                                   <option value="Le prix de la livraison pour Tunis est 10 dinars">Tunis</option>
                                                                   <option value="Le prix de la livraison pour Zaghouan est 20 dinars">Zaghouan</option>
                                                            </select>
                                                                        

                                                        </div>
                                <div class="form-group">
                                    <input type="text" name="adress" class="form-control"  placeholder="Adress">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="codep" class="form-control"  placeholder="Code POSTAL">
                                </div>
                                <div class="form-group">
        
                                    <input type="text" name="prix" id="prix" class="form-control" value="<?PHP echo $nvprix ?>" disabled="" >
                                    
                                </div>

                                <br>
                                 
                                <button class="btn musica-btn mt-30" type="submit" name="livrer" value="livrer">Passer la livraison</button>
                                <button class="btn musica-btn mt-30" type="submit"><a href="index.php">annuler</a></button>

                                  
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

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js'></script>

        <script src="js/validatorLiv.js"></script>

<script>
    function post(){
        var nn = $('#gouvernorat').val();
alert(nn);
    }
</script>


</body>

</html>