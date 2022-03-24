<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/reclamationproduit.php";
include "../core/reclamationproduitC.php";
if (isset($_GET['id'])){
	$reclamationproduitC=new ReclamationproduitC();
    $result=$reclamationproduitC->recupererReclamationproduit($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nomP=$row['nomP'];
		$prenomP=$row['prenomP'];
		$telephoneP=$row['telephoneP'];
		$typeP=$row['typeP'];
		$categorieP=$row['categorieP'];
        $numeroP=$row['numeroP'];
        $descriptionP=$row['descriptionP'];
        $numerofacture=$row['numerofacture'];
      


?>
<form method="POST">
<table>
<caption>Modifier reclamationproduit</caption>
<tr>
<td>ID</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>NomP</td>
<td><input type="text" name="nomP" value="<?PHP echo $nomP ?>"></td>
</tr>
<tr>
<td>PrenomP</td>
<td><input type="text" name="prenomP" value="<?PHP echo $prenomP ?>"></td>
</tr>
<tr>
<td>telephoneP</td>
<td><input type="number" name="telephoneP" value="<?PHP echo $telephoneP ?>"></td>
</tr>
<tr>
<td>typeP</td>
<td><input type="text" name="typeP" value="<?PHP echo $typeP ?>"></td>
</tr>
<tr>
<td>categorieP</td>
<td><input type="text" name="categorieP" value="<?PHP echo $categorieP ?>"></td>
</tr>
<tr>
<td>numeroP</td>
<td><input type="text" name="numeroP" value="<?PHP echo $numeroP ?>"></td>
</tr>
<tr>
<td>descriptionP</td>
<td><input type="text" name="descriptionP" value="<?PHP echo $descriptionP ?>"></td>
</tr>
<tr>
<td>numerofacture</td>
<td><input type="text" name="numerofacture" value="<?PHP echo $numerofacture ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$reclamationproduit=new reclamationproduit($_POST['id'],$_POST['nomP'],$_POST['prenomP'],$_POST['telephoneP'],$_POST['typeP'],$_POST['categorieP'],$_POST['numeroP'],$_POST['descriptionP'],$_POST['numerofacture']);
	$reclamationproduitC->modifierReclamationproduit($reclamationproduit,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherReclamationproduit.php');
}
?>
</body>
</HTMl>