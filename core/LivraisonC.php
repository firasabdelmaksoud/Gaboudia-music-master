<?PHP
include "../config.php";

class LivraisonC {
	
function afficherLivraison ($Livraison){
		echo "nom : ".$Livraison->getNomrecep()."<br>";
		echo "Date: ".$Livraison->getDateliv()."<br>";
		echo "nom livreur : ".$Livraison->getNomlivreur()."<br>";
		echo "Code Postal: ".$Livraison->getCodep()."<br>";
		echo "Prix : ".$Livraison->getPrix()."<br>";

	}
	
	function ajouterLivraison($livraison){
		$sql="INSERT INTO livraison (nomrecep,dateliv,nomlivreur,gouvernorat,adress,codep,prix) VALUES (:nomrecep,SYSDATE(),:nomlivreur,:gouvernorat,:adress,:codep,:prix)";

		$db = config::getConnexion();
		try{
		
        $req=$db->prepare($sql);
        $nomrecep=$livraison->getNomrecep();
        $nomlivreur=$livraison->getNomlivreur();
        $gouvernorat=$livraison->getgouvernorat();
        $adress=$livraison->getAdress();
        $codep=$livraison->getCodep();
        $prix=$livraison->getPrix();


		$req->bindValue(':nomrecep',$nomrecep);
		$req->bindValue(':nomlivreur',$nomlivreur);
		$req->bindValue(':gouvernorat',$gouvernorat);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':codep',$codep);
		$req->bindValue(':prix',$prix);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


	function afficherLivraisons (){
		//$sql="SElECT * From utilisateur u inner join optic_login l on u.user_id= l.user_id";
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


		function afficherProdLivraisons ($idprod){
		//$sql="SElECT * From utilisateur u inner join optic_login l on u.user_id= l.user_id";
		$sql="SELECT * from produit where idprod=:idprod";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':idprod',$idprod);
		$req->execute();
		$liste=$req->fetchAll();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherLivreurs (){
		//$sql="SElECT * From utilisateur u inner join optic_login l on u.user_id= l.user_id";
		$sql="SElECT * From Livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimerLivraison($refliv){
		$sql="DELETE FROM livraison where refliv= :refliv";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':refliv',$refliv);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierLivraison($livraison,$refliv){
		$sql="UPDATE livraison SET nomrecep=:nomrecep,nomlivreur=:nomlivreur,adress=:adress,codep=:codep,prix=:prix WHERE refliv=:refliv";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nomrecep=$livraison->getNomrecep();
        $nomlivreur=$livraison->getNomlivreur();
        $adress=$livraison->getAdress();
        $codep=$livraison->getCodep();
        $prix=$livraison->getPrix();

		$datas = array(':refliv'=>$refliv, ':nomrecep'=>$nomrecep,':nomlivreur'=>$nomlivreur,':adress'=>$adress,':codep'=>$codep,':prix'=>$prix);
		$req->bindValue(':refliv',$refliv);
		$req->bindValue(':nomrecep',$nomrecep);
		$req->bindValue(':nomlivreur',$nomlivreur);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':codep',$codep);
		$req->bindValue(':prix',$prix);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
		function modifierETATlivreur($id_livreur,$etat){
		$sql="UPDATE livreur SET etat=:etat WHERE id_livreur=:id_livreur";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':etat',$etat);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
		function modifierETATlivraison($id_livreur,$etat){
		$sql="UPDATE livraison SET etat=:etat WHERE refliv=:id_livreur";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':etat',$etat);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}

	function recupererlivraison($refliv){
		$sql="SELECT * from livraison where refliv=:refliv";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':refliv',$refliv);
		$req->execute();
		$liste=$req->fetchAll();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function recupererlivraisonSES($refliv){
		$sql="SELECT * from livraison where nomlivreur=:refliv";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':refliv',$refliv);
		$req->execute();
		$liste=$req->fetchAll();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function recupereruser($id_livreur){
		$sql="SELECT * from livreur where user=:id_livreur";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id_livreur',$id_livreur);
		$req->execute();
		$liste=$req->fetchAll();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}



?>