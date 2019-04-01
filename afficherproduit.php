<?PHP
include "../core/produitC.php";
$produit1C=new ProduitC();
$listeproduits=$produit1C->afficherproduits();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>idP</td>
<td>Nom</td>
<td>Quantité</td>
<td>Description</td>
<td>Prix</td>>
</tr>

<?PHP
foreach($listeproduits as $row){
	?>
	<tr>
	<td><?PHP echo $row['idP']; ?></td>
	<td><?PHP echo $row['nomP']; ?></td>
	<td><?PHP echo $row['quantiteP']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><form method="POST" action="supprimerproduit.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idP']; ?>" name="idP">
	</form>
	</td>
	<td><a href="modifierproduit.php?idP=<?PHP echo $row['idP']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

