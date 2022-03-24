<?PHP
include "../config.php";


class ProduitC {

function ajouterproduit($pro){
    
		$sql="insert into produit (nom,marque,prix,image,desct,cat) values (:nom,:marque,:prix,:image,:desct,:cat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$pro->getnom();
        $marque=$pro->getmarque();
        $prix=$pro->getprix();
        $image=$pro->getimage();
        $desc=$pro->getdesc();
        $cat=$pro->getcat();   
            
		$req->bindValue(':nom',$nom);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);
		$req->bindValue(':desct',$desc);
		$req->bindValue(':cat',$cat);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

    
    function afficherProduit()
    {
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
    }
    
    function supprimerProduit($id){
		$sql="DELETE FROM produit where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    
    function modifierproduit($pro,$id){
		$sql="UPDATE produit SET nom=:nom,marque=:marque,prix=:prix,image=:image,desct=:desct,cat=:cat WHERE id=$id";
		$db = config::getConnexion();
       try{		
        $req=$db->prepare($sql);
		   $nom=$pro->getnom();
        $marque=$pro->getmarque();
        $prix=$pro->getprix();
        $image=$pro->getimage();
        $desc=$pro->getdesc();
        $cat=$pro->getcat(); 
    
        $req->bindValue(':nom',$nom);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);
		$req->bindValue(':desct',$desc);
		$req->bindValue(':cat',$cat);
		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
    }
    
    function recupererproduit($id){
		$sql="SELECT * from produit where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    
 //end class   
}
?>


