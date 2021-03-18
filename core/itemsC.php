<?PHP
class ItemsC {

	
function afficherProduits(){
		$sql="SELECT * from items";
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