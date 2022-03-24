<?PHP
include "../entities/reclamationproduit.php";
include "../core/ReclamationproduitC.php";

if (isset($_POST['id']) and isset($_POST['nomP']) and isset($_POST['prenomP']) and isset($_POST['telephoneP']) and isset($_POST['typeP'])and isset($_POST['categorieP'])and isset($_POST['numeroP'])and isset($_POST['descriptionP'])and isset($_POST['numerofacture'])){
$reclamationproduit1=new reclamationproduit($_POST['id'],$_POST['nomP'],$_POST['prenomP'],$_POST['telephoneP'],$_POST['typeP'],$_POST['categorieP'],$_POST['numeroP'],$_POST['descriptionP'],$_POST['numerofacture']);
//Partie2
/*
var_dump($Reclamationproduit1);
}
*/
//Partie3
$reclamationproduit1C=new ReclamationproduitC();
$reclamationproduit1C->ajouterReclamationproduit($reclamationproduit1);
header('Location: afficherReclamationproduit.php');
	
}else{
	echo "vérifier les champs :)";
}
//*/

?>