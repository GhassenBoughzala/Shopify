<?PHP

class ClientC {
function afficherClient ($client){
		echo "Cin: ".$client->getCin()."<br>";
		echo "Nom: ".$client->getNom()."<br>";
		echo "Prénom: ".$client->getPrenom()."<br>";
		echo "sexe: ".$client->getsexe()."<br>";
		echo "email: ".$client->getemail()."<br>";
		echo "date naissance: ".$client->getdate_naissance()."<br>";
		echo "tel portable: ".$client->gettel_portable()."<br>";
		echo "adresse: ".$client->getadresse()."<br>";
		echo "code postal: ".$client->getcode_postal()."<br>";
		echo "password: ".$client->getpassword()."<br>";
		echo "image: ".$client->getimage()."<br>";
		echo "etat: ".$client->getetat()."<br>";		
	}

	function ajouterClient($client){
		$sql="insert into client (cin, nom, prenom, sexe, email, date_naissance, tel_portable, adresse, code_postal, password, image, etat) values (:cin, :nom, :prenom, :sexe, :email, date_naissance:, tel_portable:, adresse:, code_postal:, password:, image:, etat:)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$client->getCin();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $sexe=$client->getsexe();
        $email=$client->getemail();
        $date_naissance=$client->getdate_naissance();
        $tel_portable=$client->gettel_portable();
        $adresse=$client->getadresse();
        $code_postal=$client->getcode_postal();
        $password=$client->getpassword();
        $image=$client->getimage();
        $etat=$client->getetat();
       

		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':email',$email);
		$req->bindValue(':date_naissance',$date_naissance);
		$req->bindValue(':tel_portable',$tel_portable);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':code_postal',$code_postal);
		$req->bindValue(':password',$password);
		$req->bindValue(':image',$image);
		$req->bindValue(':etat',$etat);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherClients(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerclient($cin){
		$sql="DELETE FROM employe where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierclient($employe,$cin){
		$sql="UPDATE employe SET cin= :cinn, nom= :nom, prenom= :prenom, sexe= :sexe, email= :email, date_naissance= :date_naissance, tel_portable= :tel_portable, adresse = :adresse, code_postal = :code_postal, password = :password, image = :image, etat = :etat  WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$client->getCin();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $sexe=$client->getsexe();
        $email=$client->getemail();
        $date_naissance=$client->getdate_naissance();
        $tel_portable=$client->gettel_portable();
        $adresse=$client->getadresse();
        $code_postal=$client->getcode_postal();
        $password=$client->getpassword();
        $image=$client->getimage();
        $etat=$client->getetat();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':sexe'=>$sexe,':email'=>$email , ':date_naissance'=>$date_naissance, ':tel_portable'=>$tel_portable, ':adresse'=>$adresse, ':code_postal'=>$code_postal, ':password'=>$password, ':image'=>$image, ':etat'=>$etat);
        $req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':sexe',$sexe);
		$req->bindValue(':email',$email);
		$req->bindValue(':date_naissance',$date_naissance);
		$req->bindValue(':tel_portable',$tel_portable);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':code_postal',$code_postal);
		$req->bindValue(':password',$password);
		$req->bindValue(':image',$image);
		$req->bindValue(':etat',$etat);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
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
function recupererClient1($cin){
        $sql="SELECT * from client where ID=$cin";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function recupererClient3($cin){
        $sql="SELECT ID from client where email=:$cin";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':cin',$cin);
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        
    }
    
	function recupererClient($cin){
		$sql="SELECT * from client where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherClient($nom){
		$sql="SELECT * from client where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function pointfidelite($client){
    $db=config::getConnexion();
    $point=0;
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT count(*) as commande From orders where client_id='$client'";
       if($stmt = $db->prepare($sql)){
     
            if($stmt->execute()){
                if($stmt->rowCount() <1){
              
                $sql2="INSERT INTO fidelite(client, reduction) VALUES ('$client',:point)";
                  try{
        $req2=$db->prepare($sql2);
  $req2->bindValue(':point',$point);
            $req2->execute();
          
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
                } else{
$point=$point+50;
                  $sql3="INSERT INTO fidelite(client, reduction) VALUES ('$client','$point')";
                      try{
        $req3=$db->prepare($sql3);

            $req3->execute();
          
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }  
                }
            }
        }

    }
}

?>