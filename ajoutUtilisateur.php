<?php
include "../entities/utilisateur.php";
include "../core/UtilisateurC.php";

error_reporting(0)

?>

<HTML>
<head>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
<table>
<caption>Ajouter Produit</caption>
<tr>
<td>nom</td>
<td><input type="text" name="nom"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>tel</td>
<td><input type="number" name="tel"></td>
</tr>
<tr>
<td>date</td>
<td><input type="date" name="datenaiss"></td>
</tr>
<tr>
<tr>
	<td><div class="row">
                                                          <div class="row form-group">
                                            <div class="col col-md-3">
                                            <label class=" form-control-label">Sexe</label></div>
                                                     <div class="col-12 col-md-9">
                                                                          <select name="sexe" class="form-control">
                                                                            <option value="">Selectionner</option>
                                                                            <option value="Homme">Homme</option>
                                                                            <option value="Femme">Femme</option>
                                                                            </select>

                                                     </div>
                                            </div>
                                            <br>
</tr>
<tr>
<td>User</td>
<td><input type="text" name="user"></td>
</tr>
<tr>
<td>Mot de passe</td>
<td><input type="text" name="mdp"></td>
</tr>

<tr>
	<td>IMAGE</td>

	<td><input type="file" name="uploadfile" value=""></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>
</table>
</form>

<?php 
if($_POST['ajouter'])
{
if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['sexe']) and isset($_POST['email']) and isset($_POST['tel']) and isset($_POST['datenaiss']) and isset($_POST['user']) and isset($_POST['mdp'])){
$utilisateur1=new utilisateur($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['email'],$_POST['tel'],$_POST['datenaiss'],$_POST['user'],$_POST['mdp']);

//var_dump($produit1);

$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];

	$folder = "../img/userimg/".$filename ;
	echo $folder;
	move_uploaded_file($tempname, $folder);
//Partie3
$utilisateur1C = new utilisateurC();
$utilisateur1C->ajouterutilisateur($utilisateur1);
$utilisateur1C->ajouterUtilisateurimg($_POST['user'],$folder);

header('Location: afficherUtilisateur.php');
	
}else{
	echo "vérifieer les champs";
}
//*/
}
?>
</body>
</HTMl>