<?PHP
include "../config.php";
class utilisateurC {
	
function afficherutilisateur ($utilisateur){
		echo "Nom: ".$utilisateur->getNom()."<br>";
		echo "Prenom: ".$utilisateur->getPrenom()."<br>";
		echo "Sexe : ".$utilisateur->getSexe()."<br>";
		echo "Email: ".$utilisateur->getEmail()."<br>";
		echo "Date de naissonce: ".$utilisateur->getbday()."<br>";
	}
	
	function ajouterutilisateur($utilisateur){
				$sql="insert into utilisateur (nom,prenom,sexe,email,tel,datenaiss,user,mdp) values (:nom,:prenom,:sexe,:email,:tel,:datenaiss,:user,:mdp)";

		$db = config::getConnexion();
		try{
		
        $req=$db->prepare($sql);
        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
        $sexe=$utilisateur->getSexe();
        $email=$utilisateur->getEmail();
        $tel=$utilisateur->getTel();
        $datenaiss=$utilisateur->getDatnaiss();
		$user=$utilisateur->getUser();
        $mdp=$utilisateur->getMdp();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':email',$email);
		$req->bindValue(':tel',$utilisateur->getTel());
		$req->bindValue(':datenaiss',$datenaiss);
		$req->bindValue(':user',$user);
		$req->bindValue(':mdp',$mdp);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function ajouterUtilisateurimg($user,$filename){
		$sql="UPDATE utilisateur SET imgsrc=:imgsrc WHERE user=:user";
		$db = config::getConnexion();
		try{
		
        $req=$db->prepare($sql);
	
		$req->bindValue(':user',$user);
		$req->bindValue(':imgsrc',$filename);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function afficherutilisateurs(){
		//$sql="SElECT * From utilisateur u inner join optic_login l on u.user_id= l.user_id";
		$sql="SElECT * From utilisateur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerutilisateur($id_utilisateur){
		$sql="DELETE FROM utilisateur where id_utilisateur= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id_utilisateur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifieruser($utilisateur,$id_utilisateur){
		$sql="UPDATE utilisateur SET nom=:nom,prenom=:prenom,sexe=:sexe,email=:email,tel=:tel,datenaiss=:datenaiss,mdp=:mdp WHERE id_utilisateur=:id_utilisateur";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
		$sexe=$utilisateur->getSexe();
        $email=$utilisateur->getemail();
		$tel=$utilisateur->getTel();
        $datenaiss=$utilisateur->getDatnaiss();
        $mdp=$utilisateur->getMdp();

		$datas = array(':id_utilisateur'=>$id_utilisateur, ':nom'=>$nom,':prenom'=>$prenom,':sexe'=>$sexe,':email'=>$email,':tel'=>$tel,':datenaiss'=>$datenaiss,':mdp'=>$mdp);
		$req->bindValue(':id_utilisateur',$id_utilisateur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':email',$email);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':datenaiss',$datenaiss);
		$req->bindValue(':mdp',$mdp);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupereruser($id_utilisateur){
		$sql="SELECT * from utilisateur where user=:id_utilisateur";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id_utilisateur',$id_utilisateur);
		$req->execute();
		$liste=$req->fetchAll();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		function recupereruserr($id_utilisateur){
		$sql="SELECT * from utilisateur where id_utilisateur=:id_utilisateur";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id_utilisateur',$id_utilisateur);
		$req->execute();
		$liste=$req->fetchAll();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierimg($user,$image){
		$sql="UPDATE utilisateur SET image=:image WHERE email=(select email from utilisateur where user=:user)";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $req->bindValue(':user',$user);
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
	
function recuperermail($mail){
		$sql="SELECT email from utilisateur where email=:email";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
		$req->bindValue(':email',$mail);
		$req->execute();
		$res=$req->fetchAll();
		foreach ($res as $mail) {
			return $mail['email'];
		}
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function usermdpexist($user){
		$sql="SELECT * from utilisateur where user=:user";
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