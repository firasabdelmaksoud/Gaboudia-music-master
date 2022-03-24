<?PHP


include('checkLivreur.php');

include "../core/LivraisonC.php";
$livraison1C=new LivraisonC();
$lv=new LivraisonC();


$liste=$lv->recupereruser($_SESSION['login_livreur']);

                        foreach($liste as $row){
                        $id=$row['id_livreur'];
                        $nom=$row['nom'];
                        $prenom=$row['prenom'];
                        $sexe=$row['sexe'];
                        $email=$row['email'];
                        $tel=$row['tel'];
                        $datenaiss=$row['datenaiss'];
                        $imgsrc=$row['imgsrc'];

                        }
//var_dump($listeEmployes->fetchAll());
$listelivraison=$livraison1C->recupererlivraisonSES($id);

if($_POST['Livre'])
{
    $livraison1C->modifierETATlivreur($id,"Disponible");
    $livraison1C->modifierETATlivraison($_POST["reflivv"],"Livrée");

}


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
    <title>Livreur</title>
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

<?php include ('sidebarLivreur.php');?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Gestion des Livraisons</h1>
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
                                <strong class="card-title">Gestion des Livraisons</strong>
                            </div>
                            
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <td>Reference Livraison</td>
                                        <td>Nom Recepteur</td>
                                        <td>Date de livraison</td>
                                        <td>Gouvernorat</td>
                                        <td>adress</td>
                                        <td>CODE POSTAL</td>
                                        <td>Prix</td>
                                        <td>ETAT</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?PHP
foreach($listelivraison as $row){
    ?>
    <tr>
    <td><?PHP echo $row['refliv']; ?></td>
    <td><?PHP echo $row['nomrecep']; ?></td>
    <td><?PHP echo $row['dateliv']; ?></td>
    <td><?PHP echo $row['gouvernorat']; ?></td>
    <td><?PHP echo $row['adress']; ?></td>
    <td><?PHP echo $row['codep']; ?></td>
    <td><?PHP echo $row['prix']; ?></td>
    <td><?PHP echo $row['etat']; ?></td>
    <td><form method="POST">
    <input type="submit" name="Livre" value="Livré">
    <input type="hidden" name="reflivv" value="<?PHP echo $row['refliv']; ?>">
    </form>
    </td>
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
            "targets":[6, 8],
            "orderable":false,
          },
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    } );

 });
 </script>