<?PHP

class adminC {
	
function afficheruser ($userlogin){
		echo "User ID: ".$userlogin->getuser_id()."<br>";
		echo "Login: ".$userlogin->getadmin_nom()."<br>";
		echo "Password: ".$userlogin->getadmin_mdp()."<br>";
	}

	function encrypt($plaintext, $password) {
    $method = "AES-256-CBC";
    $key = hash('sha256', $password, true);
    $iv = openssl_random_pseudo_bytes(16);

    $ciphertext = openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv);
    $hash = hash_hmac('sha256', $ciphertext, $key, true);

    return $iv . $hash . $ciphertext;
}

function decrypt($ivHashCiphertext, $password) {
    $method = "AES-256-CBC";
    $iv = substr($ivHashCiphertext, 0, 16);
    $hash = substr($ivHashCiphertext, 16, 32);
    $ciphertext = substr($ivHashCiphertext, 48);
    $key = hash('sha256', $password, true);

    if (hash_hmac('sha256', $ciphertext, $key, true) !== $hash) return null;

    return openssl_decrypt($ciphertext, $method, $key, OPENSSL_RAW_DATA, $iv);
}
	
	function ajouterlogin($user){
		$sql="insert into admin (admin_nom,admin_mdp,admin_email,role) values (:admin_nom, :password,:admin_email,:role)";
		$db = config::getConnexion();
		try{
		
        $req=$db->prepare($sql);
        $admin_nom=$user->getadmin_nom();
        $password=adminC::encrypt($user->getadmin_mdp(),$admin_nom);
        $admin_email=$user->getadmin_email();
        $role=$user->getrole();
	
		$req->bindValue(':admin_nom',$admin_nom);
		$req->bindValue(':password',$password);
		$req->bindValue(':admin_email',$admin_email);
		$req->bindValue(':role',$role);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function checkpass($admin_nom,$password)
		{

				
				$sql="select admin_mdp from admin where admin_nom=:usr";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$req->bindValue(":usr",$admin_nom);
		$req->execute();
		$res=$req->fetchAll();	
		//optic_login::encrypt($password,$admin_nom);
		foreach ($res as $key ) {
			# code...
		}
		$pass=adminC::decrypt($key['admin_mdp'],$admin_nom);
		//var_dump($pass);
		if($pass==$password)
		return true;
	else
		return false;

		}
		catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function afficherusers(){
		//$sql="SElECT * From optic_users u inner join optic_login l on u.user_id= l.user_id";
		$sql="SElECT * From admin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlogin($id){
		$sql="DELETE FROM admin where admin_id=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifieruser($user,$user_id){
		$sql="UPDATE admin SET first_name=:first_name,last_name=:last_name,admin_email=:admin_email,birthday=:birthday WHERE user_id=:user_id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $first_name=$user->getfname();
        $last_name=$user->getlname();
        $admin_email=$user->getadmin_email();
        $birthday=$user->getbday();
		$datas = array(':user_id'=>$user_id, ':first_name'=>$first_name,':last_name'=>$last_name,':Birthday'=>$birthday);
		$req->bindValue(':user_id',$user_id);
		$req->bindValue(':first_name',$first_name);
		$req->bindValue(':last_name',$last_name);
		$req->bindValue(':admin_email',$admin_email);
		$req->bindValue(':birthday',$birthday);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupereruser($admin_nom){
		$sql="SELECT * from admin where admin_nom=:admin_nom";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
		$req->bindValue(':admin_nom',$admin_nom);
		$req->execute();
		$res=$req->fetchAll();
		return $res;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function recupereruserwadmin_email($admin_email){
		$sql="SELECT * from admin where admin_email=:admin_email";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
		$req->bindValue(':admin_email',$admin_email);
		$req->execute();
		$res=$req->fetchAll();
		return $res;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeadmin($id){
		$sql="SELECT * from admin where admin_id=$id";
		$db = config::getConnexion();
		try{

		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>