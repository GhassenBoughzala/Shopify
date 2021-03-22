<?PHP
class service_client {

    function afficher ($client){
        echo "identifiant: ".$client->getId()."<br>";
        echo "Nom: ".$client->getNom()."<br>";
        echo "Prénom: ".$client->getPrenom()."<br>";
        echo "Age: ".$client->getAge()."<br>";
        echo "sexe: ".$client->getSexe()."<br>";
        echo "adresse: ".$client->getAdresse()."<br>";
        echo "email: ".$client->getEmail()."<br>";
        echo "mdp: ".$client->getMdp()."<br>";
        echo "fidelite: ".$client->getFidelite()."<br>";
    }
    
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
    function ajoutercinq($client){
        $sql="Replace INTO fidelite(client, reduction,type_fidelite) VALUES ('$client',:point,:type)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->bindValue(':point',5);
        $req->bindValue(':type',"bronze");
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
  function ajouterdix($client){
        $sql="Replace INTO fidelite(client, reduction,type_fidelite) VALUES ('$client',:point,:type)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->bindValue(':point',10);
        $req->bindValue(':type',"silver");
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }
    function ajoutervingt($client){
        $sql="Replace INTO fidelite(client, reduction,type_fidelite) VALUES ('$client',:point,:type)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->bindValue(':point',20);
        $req->bindValue(':type',"gold");
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }

  
    function afficherClient(){
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

    function afficherClientFront($client){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From client where email='$client'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function afficherCarte($client){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From fidelite where client='$client'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function selectcommande($client){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT count(*) as commande  From orders where client_id='$client'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }

    function supprimer($identifiant){
        $sql="DELETE FROM client where identifiant= :identifiant";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':identifiant',$identifiant);
        try{
            $req->execute();
            header('Location: afficher.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   function modifier($client,$ID){
        $sql="UPDATE client SET  nom=:nom,prenom=:prenom,age=:age,sexe=:sexe,adresse=:adresse,email=:email,mdp=:mdp WHERE ID=:ID";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    try{        
        $req=$db->prepare($sql);
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $age=$client->getAge();
        $sexe=$client->getSexe();
        $adresse=$client->getAdresse();
        $email=$client->getEmail();
        $mdp=$client->getMdp();
        
        $datas = array(':ID'=>$ID,':nom'=>$nom,':prenom'=>$prenom,':age'=>$age,':sexe'=>$sexe,':adresse'=>$adresse,':email'=>$email,':mdp'=>$mdp);
        $req->bindValue(':ID',$ID);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':age',$age);
        $req->bindValue(':sexe',$sexe);
        $req->bindValue(':adresse',$adresse);
        $req->bindValue(':email',$email);
        $req->bindValue(':mdp',$mdp);
        $req->bindValue(':fidelite',$fidelite);
        
        
            $s=$req->execute();
            

        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }
        
    }

    function recuperer($ID){
        $sql="SELECT * from client where ID=$ID";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function rechercher($identifiant){
        $sql="SELECT * from client where identifiant=$identifiant";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



    function pointfidelite($clientc){

    $db=config::getConnexion();
    $point=0;
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT count(*) as commande  From orders where client_id='$clientc'";
       if($stmt = $db->prepare($sql)){
     
            if($stmt->execute()){
                if($stmt->rowCount() == 0){
              
                $sql2="Replace INTO fidelite(client, reduction) VALUES ('$clientc',:point)";
                  try{
        $req2=$db->prepare($sql2);
  $req2->bindValue(':point',0);
            $req2->execute();
          
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
                } else{
$point=$point+50;
                  $sql3="Replace INTO fidelite(client, reduction) VALUES ('$clientc','$point')";
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