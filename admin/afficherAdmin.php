<?php 

include('check.php');


include "../core/adminC.php";
include "../config.php";
//include "../core/optic_login.php";
include_once "../entities/admin.php";
$adminC=new adminC();
$users=$adminC->afficherusers();

if(isset($_POST['submit']))
{
$option=0;
}
else
$option=1;

if(isset($_POST['delete']))
{$adminC->supprimerlogin($_POST['id']);

  $usrname=md5($usrname);
   unlink("/tmp/sessions/$usrname");
   //session_destroy();
header('Location: '.$_SERVER['PHP_SELF']);
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
    <title>Afficher ADMIN</title>
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

<?php include ('sidebar.php');

    if($option==1){?>


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Gestion des ADMINS</h1>
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
                                <strong class="card-title">Gestion des ADMINS</strong>
                            </div>
                            
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom d'utilisateur</th>
                                            <th>admin_email</th>
                                            <th>Role</th>
                                            <th>Dernier accés</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                            
                                        </tr>
                                        </thead>

                                        <?php foreach($users as $row)
                                        { ?>
                                    <tbody>
    <tr>
                                               <td><?php echo $row["admin_id"];?></td>
                                            <td><?php
                                                echo $row['admin_nom'];
                                            ?></td>
                                            <td><?php echo $row["admin_email"];?></td>
                                             <td><?php if($row["role"]=="1"){echo "Manager";} else {echo "Administrateur";} ?></td>
                                            <td><?php echo $row["dernier_access"];?></td>
                                            <td><form method="POST">
                                                  <?php
                                                  
                                                    echo '
                                                  <input type="submit"  name="submit" class="btn btn-warning" value= "Modify">';
                                                  ?>

                                                  <input type="hidden" value=" <?PHP echo $row["admin_id"];$id=$row["admin_id"]; if(isset($_POST['edit']))
{
$usr=new admin("","","","");
$usr->setadmin_nom($_POST['admin_nom']);
$usr->setadmin_email($_POST['ladmin_email']);
$usr->setrole($_POST['role']);
optic_users::modifieruser($usr,$id);
header('Location: '.$_SERVER['PHP_SELF']);
}
else
echo "slm";
?> " name="id">
                                                  </form></td>
                                                  <td><form method="POST">
                                                  <?php
                                                  
                                                    echo '
                                                  <input type="submit"  name="delete" class="btn btn-danger" value= "Delete">';
                                                  ?>

                                                  <input type="hidden" value="<?PHP echo $row["admin_id"];$id=$row["admin_id"];$usrname=$row["admin_nom"];?>" name="id">
                                                  </form></td>

                                                
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->
                   </div>
               </div>
               <?php 
                }
                else{?>
                    <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
               <?php include('./usereditform.php');?>
                </div></div></div>
            <?php } ?>



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
            "targets":[5, 6],
            "orderable":false,
          },
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
    } );

 });
 </script>