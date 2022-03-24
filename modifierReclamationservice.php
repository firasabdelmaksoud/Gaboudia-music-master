<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/reclamationservice.php";
include "../core/reclamationserviceC.php";
if (isset($_GET['cin'])){
	$reclamationserviceC=new ReclamationserviceC();
    $result=$reclamationserviceC->recupererReclamationservice($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$nomS=$row['nomS'];
		$prenomS=$row['prenomS'];
		$emailS=$row['emailS'];
		$telephoneS=$row['telephoneS'];
		$typeS=$row['typeS'];
		$categorieS=$row['categorieS'];
        $numeroS=$row['numeroS'];
        $descriptionS=$row['descriptionS'];      


?>
<form method="POST">
<table>
<caption>Modifier reclamationservice</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin?>"></td>
</tr>
<tr>
<td>NomS</td>
<td><input type="text" name="nomS" value="<?PHP echo $nomS ?>"></td>
</tr>
<tr>
<td>PrenomS</td>
<td><input type="text" name="prenomS" value="<?PHP echo $prenomS ?>"></td>
</tr>
<tr>
<td>EmailS</td>
<td><input type="text" name="emailS" value="<?PHP echo $emailS ?>"></td>
</tr>
<tr>
<td>telephoneS</td>
<td><input type="number" name="telephoneS" value="<?PHP echo $telephoneS ?>"></td>
</tr>
<tr>
<td>typeS</td>
<td><input type="text" name="typeS" value="<?PHP echo $typeS ?>"></td>
</tr>
<tr>
<td>categorieS</td>
<td><input type="text" name="categorieS" value="<?PHP echo $categorieS ?>"></td>
</tr>
<tr>
<td>numeroS</td>
<td><input type="text" name="numeroS" value="<?PHP echo $numeroS ?>"></td>
</tr>
<tr>
<td>descriptionS</td>
<td><input type="text" name="descriptionS" value="<?PHP echo $descriptionS ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['cin'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$reclamationservice=new reclamationservice($_POST['cin'],$_POST['nomS'],$_POST['prenomS'],$_POST['emailS'],$_POST['telephoneS'],$_POST['typeS'],$_POST['categorieS'],$_POST['numeroS'],$_POST['descriptionS']);
	$reclamationserviceC->modifierReclamationservice($reclamationservice,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherReclamationservice.php');
}
?>
</body>
</HTMl>