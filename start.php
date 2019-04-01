<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
$produit=new Produit(75757575,'pizza',50,'dsqdqs',12);
$produitC=new ProduitC();
$produitC->afficherProduit($produit);
echo "****************";
echo "<br>";
echo "id:".$produit->getidP();
echo "<br>";
echo "nom:".$produit->getNom();
echo "<br>";
echo "quantite:".$produit->getQuantiteP();
echo "<br>";
echo "description:".$produit->getDescription();
echo "<br>";
echo "prix:".$produit->getPrix();
echo "<br>";


?>