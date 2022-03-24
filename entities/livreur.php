<?PHP
class livreur{
	private $nom;
	private $prenom;
	private $sexe;
	private $email;
	private $tel;
	private $datnaiss;
	private $etat;
	private $cin;
	private $user;
	private $mdp;
	
	function __construct($nom,$prenom,$sexe,$email,$tel,$datnaiss,$etat,$cin,$user,$mdp){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->sexe=$sexe;
		$this->email=$email;
		$this->tel=$tel;
		$this->datnaiss=$datnaiss;
		$this->etat=$etat;
		$this->cin=$cin;
		$this->user=$user;
		$this->mdp=$mdp;
				echo "<script type='text/javascript'>alert('trmmm');</script>";

	}
	
    function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getSexe(){
		return $this->sexe;
	}
	function getEmail(){
		return $this->email;
	}
	function getTel(){
		return $this->tel;
	}
	function getDatnaiss(){
		return $this->datnaiss;
	}
	function getetat(){
		return $this->etat;
	}
	function getcin(){
		return $this->cin;
	}
	function getUser(){
		return $this->user;
	}
	function getMdp(){
		return $this->mdp;
	}


	function setNom($nom){
		$this->nom=$nom;
	}

	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setSexe($sexe){
		$this->sexe=$sexe;
	}
	function setDatnaiss($datnaiss){
		$this->datnaiss=$datnaiss;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setTel($phone){
		$this->phone=$phone;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	function setcin($cin){
		$this->cin=$cin;
	}
	function setUser($user){
		$this->user=$user;
	}
	function setMdp($mdp){
		$this->mdp=$mdp;
	}
	
}

?>