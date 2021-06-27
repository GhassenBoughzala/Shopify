<?PHP
class ProduitC {

	
    
    function afficherProduitsEssai(){
		$sql="SELECT * from produit";
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