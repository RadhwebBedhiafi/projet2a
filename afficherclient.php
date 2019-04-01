<?PHP
include "../core/clientC.php";
$client1C=new clientC();
$listeclients=$client1C->afficherclients();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>idC</td>
<td>Nom</td>
<td>Prenom</td>
<td>adressC</td>
<td>telephone</td>
<td>mail</td>
<td>password</td>
</tr>

<?PHP
foreach($listeclients as $row){
	?>
	<tr>
	<td><?PHP echo $row['idC']; ?></td>
	<td><?PHP echo $row['nomC']; ?></td>
	<td><?PHP echo $row['prenomC']; ?></td>
	<td><?PHP echo $row['adressC']; ?></td>
	<td><?PHP echo $row['telephone']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['password']; ?></td>
	<td><form method="POST" action="supprimerclient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idC']; ?>" name="idC">
	</form>
	</td>
	<td><a href="modifierclient.php?idC=<?PHP echo $row['idC']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

