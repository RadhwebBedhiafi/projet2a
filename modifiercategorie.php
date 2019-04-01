<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
if (isset($_GET['idC'])){
	$categorieC =new categorieC();
    $result=$categorieC->recuperercategorie($_GET['idC']);
	foreach($result as $row){
		$idC=$row['idC'];
		$nomC=$row['nomC'];
		$famille=$row['famille'];
?>
<form method="POST">
<table>
<caption>Modifier categorie</caption>
<tr>
<td>identifiant</td>
<td><input type="number" name="idC" value="<?PHP echo $idC ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nomC" value="<?PHP echo $nomC ?>"></td>
</tr>
<tr>
<td>Famille</td>
<td><input type="text" name="famille" value="<?PHP echo $famille ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idC_ini" value="<?PHP echo $_GET['idC'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$categorie=new categorie($_POST['idC'],$_POST['nomC'],$_POST['famille']);
	$categorieC->modifiercategorie($categorie,$_POST['idC']);
	echo $_POST['idC'];
	header('Location: affichercategorie.php');
}
?>
</body>
</HTMl>

