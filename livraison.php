<?PHP
class Livraison{
	private $nomrecep;
	private $dateliv;
	private $nomlivreur;
	private $adress;
	private $codep;
	private $prix;

	
	function __construct($nomrecep,$nomlivreur,$adress,$codep,$prix){
		$this->nomrecep=$nomrecep;
		$this->nomlivreur=$nomlivreur;
		$this->adress=$adress;
		$this->codep=$codep;
		$this->prix=$prix;
				echo "<script type='text/javascript'>alert('trmmm');</script>";

	}
	
    function getNomrecep(){
		return $this->nomrecep;
	}
	function getDateliv(){
		return $this->dateliv;
	}
	function getNomlivreur(){
		return $this->nomlivreur;
	}
	function getAdress(){
		return $this->adress;
	}
	function getCodep(){
		return $this->codep;
	}
	function getPrix(){
		return $this->prix;
	}

	function setNomrecep($nomrecep){
		$this->nomrecep=$nomrecep;
	}

	function setDateliv($dateliv){
		$this->dateliv=$dateliv;
	}
	function setNomlivreur($nomlivreur){
		$this->nomlivreur=$nomlivreur;
	}
	function setcodep($codep){
		$this->codep=$codep;
	}
	function setAdress($adress){
		$this->adress=$adress;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	
}

?>