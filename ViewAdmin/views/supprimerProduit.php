<?PHP

include "../../core/produitC.php";
include "../../config.php";

$produitC=new ProduitC();
if (isset($_POST["idp"])){
	$produitC->supprimerProduit($_POST["idp"]);
	header('Location: ../afficherProduit.php');
	
}
else{
	echo "ERROR";
}
//*/

?>


