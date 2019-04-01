<?PHP
include "../core/clientC.php";
$clientC=new clientC();
if (isset($_POST["idC"])){
	$clientC->supprimerclient($_POST["idC"]);
	header('Location: afficherclient.php');
}

?>