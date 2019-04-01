<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/produit.php";
include "../core/produitC.php";
if (isset($_GET['idP'])){
	$produitC=new produitC();
    $result=$produitC->recupererproduit($_GET['idP']);
	foreach($result as $row){
		$idP=$row['idP'];
		$nomP=$row['nomP'];
		$quantiteP=$row['quantiteP'];
		$description=$row['description'];
		$prix=$row['prix'];
?>
<form method="POST">
<table>
<caption>Modifier produit</caption>
<tr>
<td>identifiant</td>
<td><input type="number" name="idP" value="<?PHP echo $idP ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nomP" value="<?PHP echo $nomP ?>"></td>
</tr>
<tr>
<td>Quantité</td>
<td><input type="number" name="quantiteP" value="<?PHP echo $quantiteP ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idP_ini" value="<?PHP echo $_GET['idP'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produit($_POST['idP'],$_POST['nomP'],$_POST['quantiteP'],$_POST['description'],$_POST['prix'],$_POST['image']);
	$produitC->modifierproduit($produit,$_POST['idP']);
	echo $_POST['idP'];
	header('Location: afficherproduit.php');
}
?>
</body>
</HTMl>

