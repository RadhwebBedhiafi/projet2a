<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/client.php";
include "../core/clientC.php";
if (isset($_GET['idC'])){
	$clientC=new clientC();
    $result=$clientC->recupererclient($_GET['idC']);
	foreach($result as $row){
		$idC=$row['idC'];
		$nomC=$row['nomC'];
		$prenomC=$row['prenomC'];
		$telephone=$row['telephone'];
		$mail=$row['mail'];
		$adressC=$row['adressC'];
		$password=$row['password'];
?>
<form method="POST">
<table>
<caption>Modifier client</caption>
<tr>
<td>identifiant</td>
<td><input type="number" name="idC" value="<?PHP echo $idC ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nomC" value="<?PHP echo $nomC ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenomC" value="<?PHP echo $prenomC ?>"></td>
</tr>
<tr>
<td>telephone</td>
<td><input type="number" name="telephone" value="<?PHP echo $telephone ?>"></td>
</tr>
<tr>
<td>mail</td>
<td><input type="text" name="mail" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
	<td>adressC</td>
<td><input type="text" name="adressC" value="<?PHP echo $adressC ?>"></td>
</tr>
<tr>
	<td>password</td>
<td><input type="text" name="password" value="<?PHP echo $password ?>"></td>
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
	$client=new client($_POST['idC'],$_POST['nomC'],$_POST['prenomC'],$_POST['telephone'],$_POST['mail'],$_POST['adressC'],$_POST['password']);
	$clientC->modifierclient($client,$_POST['idC']);
	echo $_POST['idC'];
	header('Location: afficherclient.php');
}
?>
</body>
</HTMl>

