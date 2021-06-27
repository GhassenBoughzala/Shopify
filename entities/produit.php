<?PHP
class Produit{
	
	private $idp;
	private $lib_prod;
	private $id;
	private $prix;
	private $qte_prod;
	private $image;
	private $description;

	function __construct($idp,$lib_prod,$prix,$qte_prod,$image,$description){
		$this->idp=$idp;
		$this->lib_prod=$lib_prod;
		//$this->id=$id;
		$this->prix=$prix;
		$this->qte_prod=$qte_prod;
		$this->image=$image;
		$this->description=$description;
	}
	
	function getidp(){
		return $this->idp;
	}
	function getLib_prod(){
		return $this->lib_prod;
	}
	function getImage(){
		return $this->image;
	}
	function getId(){
		return $this->id;
	}
	function getPrix(){
		return $this->prix;
	}
	function getQte_prod(){
		return $this->qte_prod;
	}
	function getDescription(){
		return $this->description;
	}


	function setidp($idp){
		$this->idp=$idp;
	}
	function setLib_prod($lib_prod){
		$this->lib_prod=$lib_prod;
	}	
	function setImage($image){
		$this->image=$image;
	}
	function setId($id){
		$this->id=$id;
	}	
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setQte_prod($qte_prod){
		$this->qte_prod=$qte_prod;
	}	
	function setDescription($description){
		$this->description=$description;
	}

	
}

?>