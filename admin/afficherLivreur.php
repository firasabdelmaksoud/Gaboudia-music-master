<?PHP
include('check.php');

include "../core/livreurC.php";
$livreur1C=new livreurC();
$listelivreur=$livreur1C->afficherlivreurs();

//var_dump($listeEmployes->fetchAll());
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
    <title>Afficher Livreur</title>
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
        <script  src="https://code.jquery.com/jquery-3.4.0.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.0/css/lightbox.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.0/js/lightbox.js"></script>

</head>

<body>

<?php include ('sidebar.php');?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Gestion des livreurs</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Gestion des livreurs</strong>
                            

                                <form method="POST" action="ajouterlivreur.php">
     <input type="submit" name="Ajouter" value="Ajouter">
    </form>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <td>ID</td>
                                        <td>Nom</td>
                                        <td>Prenom</td>
                                        <td>Sexe</td>
                                        <td>Email</td>
                                        <td>Telephone</td>
                                        <td>Date de naissance</td>
                                        <td>Etat</td>
                                        <td>CIN</td>
                                        <td>User</td>
                                        <td>Mot de passe</td>
                                        <td>Image</td>
                                        <td>supprimer</td>
                                        <td>modifier</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?PHP
foreach($listelivreur as $row){
    ?>
    <tr>
    <td><?PHP echo $row['id_livreur']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['prenom']; ?></td>
    <td><?PHP echo $row['sexe']; ?></td>
    <td><?PHP echo $row['email']; ?></td>
    <td><?PHP echo $row['tel']; ?></td>
    <td><?PHP echo $row['datenaiss']; ?></td>
    <td><?PHP echo $row['etat']; ?></td>
    <td><?PHP echo $row['cin']; ?></td>
    <td><?PHP echo $row['user']; ?></td>
    <td><?PHP echo $row['mdp']; ?></td>
    <td><a href="<?php echo $row['imgsrc']; ?>" data-lightbox="image-2" data-title="<?php echo $row['nom_produit']; ?>"><img  src="<?php echo $row['imgsrc']; ?>" alt="image-1" /></a>
    <td><form method="POST" action="supprimerLivreur.php">
    <input type="submit" name="supprimer" value="supprimer">
    <input type="hidden" value="<?PHP echo $row['id_livreur']; ?>" name="id_livreur">
    </form>
    </td>
    <td><a href="modifierlivreur.php?id_livreur=<?PHP echo $row['id_livreur']; ?>">
    Modifier</a></td>
    </tr>
    <?PHP
}
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
           <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
         <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
         <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
         <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
         <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
         <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
         <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
         <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap.min.css" />


</body>

</html>

<script>
  $(document).ready(function(){
      var table =  $('#bootstrap-data-table-export').DataTable( {
        scrollCollapse: false,
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
          'print',
          'pdf',
          'colvis',
          'copy'
        ],
          "order":[],
        "columnDefs":[
          {
            "targets":[9, 10],
            "orderable":false,
          },
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    } );

 });
 </script>