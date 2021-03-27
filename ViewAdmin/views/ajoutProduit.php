<?PHP
include "../../entities/produit.php";
include "../../core/produitC.php";
include "../../config.php";
if (isset($_POST['lib_prod']) and isset($_POST['id']) and isset($_POST['prix']) and isset($_POST['qte_prod']) and isset($_POST['image']) and isset($_POST['description']) ){

$produit1=new produit($_POST['idp'],$_POST['lib_prod'],$_POST['id'],$_POST['prix'],$_POST['qte_prod'],$_POST['image'],$_POST['description']);

$produit1C=new ProduitC();
$produit1C->ajouterProduit($produit1);

header('Location: ../afficherProduit.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>


