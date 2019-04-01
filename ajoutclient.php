<?PHP
include "../entities/client.php";
include "../core/clientC.php";

if (isset($_POST['idC']) and isset($_POST['nomC']) and isset($_POST['prenomC']) and isset($_POST['telephone']) and isset($_POST['mail']) 
	and isset($_POST['adressC']) and isset($_POST['password']))
{
$client1=new Client($_POST['idC'],$_POST['nomC'],$_POST['prenomC'],$_POST['telephone'],$_POST['mail'],$_POST['adressC'],$_POST['password']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$client1C=new ClientC();
$client1C->ajouterClient($client1);
header('Location: afficherclient.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>

