<?PHP
include "../config.php";
class livreurC {
	
function afficherlivreur ($livreur){
		echo "Nom: ".$livreur->getNom()."<br>";
		echo "Prenom: ".$livreur->getPrenom()."<br>";
		echo "Sexe : ".$livreur->getSexe()."<br>";
		echo "Email: ".$livreur->getEmail()."<br>";
		echo "Date de naissonce: ".$livreur->getbday()."<br>";
	}
	
	function ajouterlivreur($livreur){
				$sql="insert into livreur (nom,prenom,sexe,email,tel,datenaiss,etat,cin,user,mdp) values (:nom,:prenom,:sexe,:email,:tel,:datenaiss,:etat,:cin,:user,:mdp)";

		$db = config::getConnexion();
		try{
		
        $req=$db->prepare($sql);
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
        $sexe=$livreur->getSexe();
        $email=$livreur->getEmail();
        $tel=$livreur->getTel();
        $datenaiss=$livreur->getDatnaiss();
		$etat=$livreur->getetat();
        $cin=$livreur->getcin();
		$user=$livreur->getUser();
        $mdp=$livreur->getMdp();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':email',$email);
		$req->bindValue(':tel',$livreur->getTel());
		$req->bindValue(':datenaiss',$datenaiss);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':user',$user);
		$req->bindValue(':mdp',$mdp);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function ajouterlivreurimg($cin,$filename){
		$sql="UPDATE livreur SET imgsrc=:imgsrc WHERE cin=:cin";
		$db = config::getConnexion();
		try{
		
        $req=$db->prepare($sql);
	
		$req->bindValue(':cin',$cin);
		$req->bindValue(':imgsrc',$filename);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function afficherlivreurs(){
		//$sql="SElECT * From livreur u inner join optic_login l on u.etat_id= l.etat_id";
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivreur($id_livreur){
		$sql="DELETE FROM livreur where id_livreur= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id_livreur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivreur($livreur,$id_livreur){
		$sql="UPDATE livreur SET nom=:nom,prenom=:prenom,sexe=:sexe,email=:email,tel=:tel,datenaiss=:datenaiss,etat=:etat,cin=:cin WHERE id_livreur=:id_livreur";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
		$sexe=$livreur->getSexe();
        $email=$livreur->getemail();
		$tel=$livreur->getTel();
        $datenaiss=$livreur->getDatnaiss();
        $etat=$livreur->getetat();
        $cin=$livreur->getcin();

		$datas = array(':id_livreur'=>$id_livreur, ':nom'=>$nom,':prenom'=>$prenom,':sexe'=>$sexe,':email'=>$email,':tel'=>$tel,':datenaiss'=>$datenaiss,':etat'=>$etat,':cin'=>$cin);
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':email',$email);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':datenaiss',$datenaiss);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':cin',$cin);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	
	function recupereruser($id_livreur){
		$sql="SELECT * from livreur where id_livreur=:id_livreur";
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

	function modifierimg($cin,$image){
		$sql="UPDATE livreur SET image=:image WHERE email=(select email from livreur where cin=:cin)";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $req->bindValue(':cin',$cin);
				$req->bindValue(':image',$image);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	


	function etatcinexist($etat){
		$sql="SELECT * from livreur where etat=:etat";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':etat',$etat);
		$req->execute();
		$liste=$req->fetchAll();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function usermdpexist($user){
		$sql="SELECT * from livreur where user=:user";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':user',$user);
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