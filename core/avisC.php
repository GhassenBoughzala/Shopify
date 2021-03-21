<?PHP

class avisC {
function afficheravis ($avis){
		
		echo "id_user: ".$avis->getid_user()."<br>";
		echo "jour: ".$avis->getjour()."<br>";
		echo "sujet: ".$avis->getsujet()."<br>";
		echo "commentaire: ".$avis->getcommentaire()."<br>";
		echo "rating:".$avis->getRating()."<br>";
	}
	
	
	function afficherAviss(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

		 function trierAvis(){
        $sql="SELECT * from avis ORDER BY rating ASC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    	
	function afficherAvissClient($client){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From avis where id_user='$client'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

function supprimerAvis($num){
		$sql="DELETE FROM avis where num= :num";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierAvis($avis,$num){
		$sql="UPDATE avis SET id_user=:id_user,jour=:jour,sujet=:sujet,commentaire=:commentaire,rating=:rating WHERE num=:num";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $id_user=$avis->getid_user();
        $jour=date("Y-m-d h:i:sa");
        $sujet=$avis->getsujet();
        $commentaire=$avis->getcommentaire();
        $rating=$avis->getRating();
		$datas = array(':num'=>$num, ':id_user'=>$id_user,':jour'=>$jour,':sujet'=>$sujet,':commentaire'=>$commentaire, ':rating'=>$rating);
		$req->bindValue(':num',$num);
		$req->bindValue(':id_user',$id_user);
		$req->bindValue(':jour',$jour);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':commentaire',$commentaire);
		$req->bindValue(':rating',$rating);
		
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererAvis($num){
		$sql="SELECT * from avis where num=$num";
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