<?PHP
include "../core/reclamationserviceC.php";
$reclamationserviceC=new ReclamationserviceC();
if (isset($_POST["cin"])){
	$reclamationserviceC->supprimerReclamationservice($_POST["cin"]);
	header('Location: afficherReclamationservice.php');
}

?>