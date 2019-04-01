<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
$categorie=new Categorie(75757575,'pizza','7ar');
$categorieC=new CategorieC();
$categorieC->afficherCategorie($categorie);
echo "****************";
echo "<br>";
echo "id:".$categorie->getidC();
echo "<br>";
echo "nom:".$categorie->getNom();
echo "<br>";
echo "famille:".$categorie->getFamille();
echo "<br>";
?>