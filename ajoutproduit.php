<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['idP']) and isset($_POST['nomP']) and isset($_POST['quantiteP']) and isset($_POST['description']) and isset($_POST['prix']))
{
$produit1=new Produit($_POST['idP'],$_POST['nomP'],$_POST['quantiteP'],$_POST['description'],$_POST['prix']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$produit1P=new ProduitC();
$produit1P->ajouterProduit($produit1);
header('Location: affich.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>

