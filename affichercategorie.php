<?PHP
include "../core/categorieC.php";
$categorie1C=new CategorieC();
$listecategories=$categorie1C->affichercategories();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>idC</td>
<td>Nom</td>
<td>Famille</td>
</tr>

<?PHP
foreach($listecategories as $row){
	?>
	<tr>
	<td><?PHP echo $row['idC']; ?></td>
	<td><?PHP echo $row['nomC']; ?></td>
	<td><?PHP echo $row['famille']; ?></td>
	<td><form method="POST" action="supprimercategorie.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idC']; ?>" name="idC">
	</form>
	</td>
	<td><a href="modifiercategorie.php?idC=<?PHP echo $row['idC']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

