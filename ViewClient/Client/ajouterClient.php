<?PHP

include "../../config.php";
include "../../core/clientC.php";
include "../../entities/client.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['age']) and isset($_POST['sexe']) and isset($_POST['adresse']) and isset($_POST['email']) and isset($_POST['mdp']))
{
    $client1= new client($_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['sexe'],$_POST['adresse'],$_POST['email'],$_POST['mdp']);
    $ser=new clientC();
    $ser->ajouter($client1);

    header('Location: ../auth.html');
	
}else{
	echo "Vérifier les champs !";
}


?>
