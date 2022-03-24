<!DOCTYPE html>
<?PHP
include "../core/reclamationserviceC.php";
$reclamationservice1C=new ReclamationserviceC(); 
$listeReclamationservices=$reclamationservice1C->afficherReclamationservices();

//var_dump($listeEmployes->fetchAll());
?>
<html lang="en">
<head>
	<title>Table V05</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../Table/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Table/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Table/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Table/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Table/css/util.css">
	<link rel="stylesheet" type="text/css" href="../Table/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1">
					<div class="table100-firstcol">
						<table>
							<thead>
								
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
					
					<div class="wrap-table100-nextcols js-pscroll">
						<div class="table100-nextcols">
							<table>
								<thead>
									<tr class="row100 head">
										<th class="cell100 column2">Cin</th>
										<th class="cell100 column3">NomS</th>
										<th class="cell100 column4">PrenomS</th>
										<th class="cell100 column4">EmailS</th>
										<th class="cell100 column5">TelephoneS</th>
										<th class="cell100 column6">TypeS</th>
										<th class="cell100 column7">CategorieS</th>
										<th class="cell100 column8">NumeroS</th>
										<th class="cell100 column8">DescriptionS</th>
									
									</tr>
								</thead>
								<tbody>
									<?PHP
                                 foreach($listeReclamationservices as $row){
	                                 ?>
									<tr class="row100 body">
										<td class="cell100 column2"><?PHP echo $row['cin']; ?></td>
										<td class="cell100 column3"><?PHP echo $row['nomS']; ?></td>
										<td class="cell100 column4"><?PHP echo $row['prenomS']; ?></td>
										<td class="cell100 column4"><?PHP echo $row['emailS']; ?></td>
										<td class="cell100 column5"><?PHP echo $row['telephoneS']; ?></td>
										<td class="cell100 column6"><?PHP echo $row['typeS']; ?></td>
										<td class="cell100 column7"><?PHP echo $row['categorieS']; ?></td>
										<td class="cell100 column8"><?PHP echo $row['numeroS']; ?>
										<td class="cell100 column8"><?PHP echo $row['descriptionS']; ?>
											
										</td>
									</tr>






								
									<td><form method="POST" action="supprimerReclamationservice.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierReclamationservice.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})

			$(this).on('ps-x-reach-start', function(){
				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
			});

			$(this).on('ps-scroll-x', function(){
				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
			});

		});

		
		
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>