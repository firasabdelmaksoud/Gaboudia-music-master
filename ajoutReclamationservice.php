<?PHP
include "../entities/reclamationservice.php";
include "../core/ReclamationserviceC.php";

if (isset($_POST['cin']) and isset($_POST['nomS']) and isset($_POST['prenomS']) and isset($_POST['emailS'])and isset($_POST['telephoneS']) and isset($_POST['typeS'])and isset($_POST['categorieS'])and isset($_POST['numeroS'])and isset($_POST['descriptionS'])){
$reclamationservice1=new reclamationservice($_POST['cin'],$_POST['nomS'],$_POST['prenomS'],$_POST['emailS'],$_POST['telephoneS'],$_POST['typeS'],$_POST['categorieS'],$_POST['numeroS'],$_POST['descriptionS']);
//Partie2
/*
var_dump($Reclamationservice1);
}
*/
//Partie3
$reclamationservice1C=new ReclamationserviceC();
$reclamationservice1C->ajouterReclamationservice($reclamationservice1);
header('Location: afficherReclamationservice.php');
	
}else{
	echo "vérifier les champs :)";
}
//*/

?>