<?PHP
include('check.php');

ob_start();

include "../entities/livreur.php";
include "../core/livreurC.php";

error_reporting(0)

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
    <title>Ajouter Livreur</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

<?php include ('sidebar.php');?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Ajouter livreur</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">



<!--ICI -->
        <form method="POST" id="form-horizontal" class="form-horizontal" enctype="multipart/form-data">

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Ajouter</strong><small> livreur</small>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group"><label class=" form-control-label">Nom</label>
                                    <input type="text" name="nom" placeholder="nom" class="form-control" ></div>
                                <div class="form-group">
                                    <label class=" form-control-label">Prenom</label>
                                    <input type="text" name="prenom" placeholder="Prenom" class="form-control">
                                </div>
                                            <div class="row form-group">
                                            <div class="col col-md-3">
                                            <label class=" form-control-label">Sexe</label></div>
                                                     <div class="col-12 col-md-9">
                                                                          <select name="sexe" class="form-control">
                                                                            <option value="">Selectionner</option>
                                                                            <option value="Homme">Homme</option>
                                                                            <option value="Femme">Femme</option>
                                                                            </select>

                                                     </div>
                                            </div>                               
                                <div class="form-group"><label class=" form-control-label">Email</label>
                                    <input type="text" name="email" placeholder="email" class="form-control" >
                                </div>
                                <div class="form-group"><label class=" form-control-label">Telephone</label>
                                    <input type="number" name="tel"  placeholder="+216 .." class="form-control" >
                                </div>
                                <div class="form-group"><label class=" form-control-label">Date de naissance</label>
                                    <input type="date" name="datenaiss" class="form-control">
                                </div>
                                            <div class="row form-group">
                                            <div class="col col-md-3">
                                            <label class=" form-control-label">Etat</label></div>
                                                     <div class="col-12 col-md-9">
                                                                          <select name="etat" class="form-control">
                                                                            <option value="">Selectionner</option>
                                                                            <option value="Disponible">Disponible</option>
                                                                            <option value="Occupé">Occupé</option>
                                                                            </select>

                                                     </div>
                                            </div>
                                <div class="form-group"><label class=" form-control-label">Cin</label>
                                    <input type="number" name="cin" class="form-control" >
                                </div>
                                <div class="form-group"><label class=" form-control-label">User</label>
                                    <input type="text" name="user" placeholder="user" class="form-control">
                                </div>
                                <div class="form-group"><label class=" form-control-label">Mot de pass</label>
                                    <input type="text" name="mdp" placeholder="**********" class="form-control">
                                </div>

                                                    <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                                                                    <div class="col-12 col-md-9"><input type="file" id="uploadfile" name="uploadfile" class="form-control-file"></div>
                                                                </div>
                                                        <div class="card-footer">
                                                        <button type="submit" class="btn btn-success btn-sm" name="ajouter" value="ajouter">Ajouter</button>

                                                        <button type="submit" class="btn btn-danger btn-sm" name="Annuler" value="Annuler">Annuler</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
<?PHP

if(isset($_POST['ajouter']))
{


if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['sexe']) and isset($_POST['email']) and isset($_POST['tel']) and isset($_POST['datenaiss']) and isset($_POST['etat']) and isset($_POST['cin']) and isset($_POST['user']) and isset($_POST['mdp'])){
$livreur1=new livreur($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['email'],$_POST['tel'],$_POST['datenaiss'],$_POST['etat'],$_POST['cin'],$_POST['user'],$_POST['mdp']);

//Partie3
$livreur1C = new livreurC();
$livreur1C->ajouterlivreur($livreur1);
//var_dump($produit1);

$filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];

    $folder = "../img/userimg/".$filename ;
    if($filename!="")
    {
    move_uploaded_file($tempname, $folder);
    $livreur1C->ajouterlivreurimg($_POST['cin'],$folder);
    }



header('Location: afficherLivreur.php');
    
}else{
    echo "vérifieer les champs";
}
//*/
}

if (isset($_POST['Annuler'])){
    header('Location: afficherLivreur.php');

}


?>

<!--ICI -->
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>


        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js'></script>

        <script src="js/validatorLiv.js"></script>

</body>
</html>