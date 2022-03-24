<?php 

include('check.php');


include "../core/optic_admin.php";
include "../config.php";
//include "../core/optic_login.php";
include_once "../entities/admin.php";
$optic_admin=new optic_admin();
$users=$optic_admin->afficherusers();

if(isset($_POST['submit']))
{
$option=0;
}
else
$option=1;

if(isset($_POST['delete']))
{$optic_admin->supprimerlogin($_POST['id']);

  $usrname=md5($usrname);
   unlink("/tmp/sessions/$usrname");
   //session_destroy();
header('Location: '.$_SERVER['PHP_SELF']);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Clients Balti Optique">
        <meta name="author" content="Balti Optique">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Clients</title>

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Multi Item Selection examples -->
        <link href="assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                   <?php include("logo.php"); ?>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">

                        <!-- Page title -->
                        <ul class="nav navbar-nav list-inline navbar-left">
                            <li class="list-inline-item">
                                <button class="button-menu-mobile open-left">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="page-title">Clients</h4>
                            </li>
                        </ul>

                        <nav class="navbar-custom">

                            <ul class="list-unstyled topbar-right-menu float-right mb-0">

                                <li>
                                    <!-- Notification -->
                                    <div class="notification-box">
                                        <ul class="list-inline mb-0">
                                            <li>
                                                <a href="javascript:void(0);" class="right-bar-toggle">
                                                    <i class="mdi mdi-bell-outline noti-icon"></i>
                                                </a>
                                                <div class="noti-dot">
                                                    <span class="dot"></span>
                                                    <span class="pulse"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Notification bar -->
                                </li>

                                <li class="hide-phone">
                                    <form class="app-search">
                                        <input type="text" placeholder="Search..."
                                               class="form-control">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>

                            </ul>
                        </nav>
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php include "sidebar.php"; ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <?php if($option==1){?>
                 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatable_length"></div></div><div class="col-sm-12 col-md-6"><div id="datatable_filter" class="dataTables_filter"></div></div></div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title">Table d'utilisateurs</h4>
                                    <p class="text-muted font-14 m-b-30">
                                       <code></code>.
                                    </p>

                                    <table id="datatable" class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom d'utilisateur</th>
                                            <th>Email</th>
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
                                                echo $row['username'];
                                            ?></td>
                                            <td><?php echo $row["email"];?></td>
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
$usr->setusername($_POST['username']);
$usr->setemail($_POST['lemail']);
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

                                                  <input type="hidden" value="<?PHP echo $row["admin_id"];$id=$row["admin_id"];$usrname=$row["username"];?>" name="id">
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
              

                        
                <footer class="footer text-right">
                    © 2019 BALTI OPTIQUE. ALL RIGHTS RESERVED. POWERED BY <a href="https://www.olympians.ovh/">OLYMPIANS </a>
                </footer>


            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Notifications</h4>
                <div class="notification-list nicescroll">
                    <ul class="list-group list-no-border user-list">
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">Michael Zenaty</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-info">
                                    <i class="mdi mdi-account"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Signup</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">5 hours ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-pink">
                                    <i class="mdi mdi-comment"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">New Message received</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="avatar">
                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <div class="user-desc">
                                    <span class="name">James Anderson</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">2 days ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item active">
                            <a href="#" class="user-list-item">
                                <div class="icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                                <div class="user-desc">
                                    <span class="name">Settings</span>
                                    <span class="desc">There are new settings available</span>
                                    <span class="time">1 day ago</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>

        <!-- Key Tables -->
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Selection table -->
        <script src="assets/plugins/datatables/dataTables.select.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        
        
        <script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js'></script>
        <script type="text/javascript" src="./js/validator.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            });

        </script>

    </body>
</html>