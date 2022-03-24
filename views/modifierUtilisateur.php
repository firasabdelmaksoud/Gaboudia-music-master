<HTML>
<head>
</head>
<body>

<?PHP
include "../entities/utilisateur.php";
include "../core/UtilisateurC.php";


		if (isset($_GET['id_utilisateur'])){
	$utilisateurC1=new UtilisateurC();
    $result=$utilisateurC1->recupereruser($_GET['id_utilisateur']);
	foreach($result as $row){
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$sexe=$row['sexe'];
		$email=$row['email'];
		$tel=$row['tel'];
		$datenaiss=$row['datenaiss'];
		$user=$row['user'];
		$mdp=$row['mdp'];
		$imgsrc=$row['imgsrc'];
?>
<form method="POST" enctype="multipart/form-data">
<table>
<caption>Modifier Utilisateur</caption>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>tel</td>
<td><input type="number" name="tel" value="<?PHP echo $tel ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="date" name="datenaiss" value="<?PHP echo $datenaiss ?>"></td>
</tr>
<tr>
<tr>
	<td><div class="row">
              <div class="col-sm-12">
                <div class="item-select">
                  <!-- Categorie -->
                  <p>Sexe</p>
                  <select name="sexe">
                    <option value="<?PHP echo $sexe ?>">Selectionner</option>
					<option value="Homme">Homme</option>
					<option value="Femme">Femme</option>
					</select>
                </div>
              </div>
</tr>
<tr>
<td>Mot de passe</td>
<td><input type="text" name="mdp" value="<?PHP echo $mdp ?>"></td>
</tr>
<tr>
	<td>IMAGE</td>
	<br>
	<td><input type="file" name="uploadfile" id="uploadfile"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_utilisateur" value="<?PHP echo $_GET['id_utilisateur'];?>"></td>
</tr>

</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){

	$utilisateur1=new Utilisateur($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['email'],$_POST['tel'],$_POST['datenaiss'],$user,$_POST['mdp']);
	
	$utilisateurC1->modifieruser($utilisateur1,$_POST['id_utilisateur']);

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "../img/userimg/".$filename ;

	echo $filename;

	move_uploaded_file($tempname, $folder);

	$utilisateurC1->ajouterUtilisateurimg($user,$folder);

	header('Location: afficherUtilisateur.php');

}
?>
</body>
</HTMl>
