<?PHP
include "../core/LivraisonC.php";
$livraisonC=new LivraisonC();
if (isset($_POST["refliv"])){
	$livraisonC->supprimerLivraison($_POST["refliv"]);
	header('Location: afficherLivraison.php');
}

?>