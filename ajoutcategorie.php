<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";

if (isset($_POST['idC']) and isset($_POST['nomC']) and isset($_POST['famille']))
{
$categorie1=new Categorie($_POST['idC'],$_POST['nomC'],$_POST['famille']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$categorie1C=new CategorieC();
$categorie1C->ajouterCategorie($categorie1);
header('Location: affich1.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>

