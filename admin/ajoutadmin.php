<?PHP
include('check.php');

include "../config.php";
include "../entities/admin.php";
include "../core/adminC.php";

if ( isset($_POST['admin_email']) and isset($_POST['admin_nom']) and isset($_POST['admin_mdp']) ){
$admin=new admin($_POST['admin_nom'],$_POST['admin_email'],$_POST['admin_mdp'],"1");


//Partie3
$adminnew = new adminC();
$adminnew->ajouterlogin($admin);
echo "salut";
}
else
{

	echo "worng";
}
header("Location: page-login.php");
exit;
?>