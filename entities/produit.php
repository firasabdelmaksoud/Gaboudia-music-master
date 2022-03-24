<?PHP
class produit{
	private $id;
	private $nom;
	private $marque;
	private $prix;
	private $desc;
    private $image;
 	private $cat;
   
    
	function __construct($nom,$marque,$prix,$desc,$image,$cat){
		$this->nom=$nom;
        $this->marque=$marque;
		$this->prix=$prix;
		$this->desc=$desc;
		$this->image=$image;
 		$this->cat=$cat;
	}
    
	function getnom(){
		return $this->nom;
	}
	function getmarque(){
		return $this->marque;
	}
	function getprix(){
		return $this->prix;
	}
	function getdesc(){
		return $this->desc;
	}
    	function getimage(){
		return $this->image;
	}
        	function getcat(){
		return $this->cat;
	}
}
    
    ?>