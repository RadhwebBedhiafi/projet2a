<?PHP
include "../core/produitC.php";
$produitC=new produitC();
if (isset($_POST["idP"])){
	$produitC->supprimerproduit($_POST["idP"]);
	header('Location: afficherproduit.php');
}

?>