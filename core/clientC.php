<?PHP

class ClientC {

    function ajouter($client){
        $sql="INSERT INTO client (nom,prenom,age,sexe,adresse,email,mdp) VALUES (:nom, :prenom,:age,:sexe,:adresse,:email,:mdp)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $age=$client->getAge();
        $sexe=$client->getSexe();
        $adresse=$client->getAdresse();
        $email=$client->getEmail();
        $mdp=$client->getMdp();
        

 
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':age',$age);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':email',$email);
        $req->bindValue(':mdp',$mdp);
       
               
        
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }


	function verifConnexion($user)
	{
		$sql="SELECT * FROM client WHERE  email = :pseudo ";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        	$pseudo=$client->getemail();
        	$mdp=$client->getpassword();
			$req->bindValue(':pseudo' ,$pseudo);
            $req->execute();
            $user=$req->fetch();
            	if(password_verify($mdp, $user['mdp']))
            	{
                  
            		$_SESSION['auth'] = $user;
            		$_SESSION['flash']['success'] = 'Vous etes maintenant connecté';
            		header('Location: views_amine/product.php');
            		exit;
                    
                   
            	}
            	
            	else
            	{
            		
            		$_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
                    header('Location: index.html');


            	}
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		
	}


    function afficherClientFront($client){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From client where email='$client'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            window.alert("You need to Sign In First ");
        }   
    }


}

?>