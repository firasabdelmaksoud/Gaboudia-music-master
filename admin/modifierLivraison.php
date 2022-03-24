<?PHP
include('check.php');

ob_start();
include "../entities/Livraison.php";
include "../core/LivraisonC.php";


        if (isset($_GET['refliv'])){
    $livraisonC1=new LivraisonC();
    $result=$livraisonC1->recupererlivraison($_GET['refliv']);
    foreach($result as $row){
        $nomrecep=$row['nomrecep'];
        $dateliv=$row['dateliv'];
        $nomlivreur=$row['nomlivreur'];
        $adress=$row['adress'];
        $codep=$row['codep'];
        $prix=$row['prix'];

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
    <title>Modifier Livraison</title>
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
                        <h1>Modifier Livraison</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">



<!--HOUNIIIIIIIIIIIII -->
        <form method="POST" enctype="multipart/form-data">

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Modifier</strong><small> Livraison</small>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group"><label class=" form-control-label">Nom Recepteur</label>
                                    <input type="text" name="nomrecep" placeholder="nom" class="form-control" value="<?PHP echo $nomrecep ?>"></div>
                                <div class="form-group">
                                <div class="form-group"><label class=" form-control-label">DATE DE CREATION LIVRAISON</label>
                                    <input type="text" name="dateliv" id="dateliv"  class="form-control" disabled="" value="<?PHP echo $dateliv ?>">
                                </div>
                                    <label class=" form-control-label">Nom Livreur</label>
                                    <input type="text" name="nomlivreur" placeholder="Nom Livreur" class="form-control" value="<?PHP echo $nomlivreur ?>">
                                </div>
                                <div class="form-group"><label class=" form-control-label">ADRESS</label>
                                    <input type="text" name="adress" id="adress" placeholder="Votre Adress" class="form-control" value="<?PHP echo $adress ?>">
                                </div>
                                <div class="form-group"><label class=" form-control-label">CODE POSTAL</label>
                                    <input type="text" name="codep" id="codep" placeholder="2011" class="form-control" value="<?PHP echo $codep ?>">
                                </div>
                                <div class="form-group"><label class=" form-control-label">PRIX</label>
                                    <input type="text" name="prix" id="prix" placeholder="25$" class="form-control" value="<?PHP echo $prix ?>">
                                </div>

                                                        <div class="card-footer">
                                                        <button type="submit" class="btn btn-success btn-sm" name="modifier" value="modifier">Modifier</button>

                                                        <button type="submit" class="btn btn-danger btn-sm" name="Annuler" value="Annuler">Annuler</button>
                                                    </div>
                                                    <td><input type="hidden" name="refliv" value="<?PHP echo $_GET['refliv'];?>"></td>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
<?PHP
    }
}
if (isset($_POST['modifier'])){

    $Livraison1=new Livraison($_POST['nomrecep'],$_POST['nomlivreur'],$_POST['adress'],$_POST['codep'],$_POST['prix']);
    
    $livraisonC1->modifierLivraison($Livraison1,$_POST['refliv']);

    header('Location: afficherLivraison.php');

}
if (isset($_POST['Annuler'])){
    header('Location: afficherLivraison.php');

}

?>

<!--HOUNIIIIIIIIIIIII -->
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
</body>
</html>