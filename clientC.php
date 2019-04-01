<?PHP
include "../config.php";
class ClientC {
function afficherClient ($client){
		echo "idC: ".$client->getidC()."<br>";
		echo "nomC: ".$client->getNom()."<br>";
		echo "prenomC: ".$client->getPrenom()."<br>";
		echo "telephone: ".$client->gettelephone()."<br>";
		echo "mail: ".$client->getmail()."<br>";
		echo "adressC: ".$client->getadressC()."<br>";
		//echo "imageC: ".$client->getimageC()."<br>";
		echo "password: ".$client->getpassword()."<br>";
	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
	
	function ajouterClient($client){
		$sql="insert into client (idC,nomC,prenomC,telephone,mail,adressC,password) values (:idC,:nomC,:prenomC,:telephone,:mail,:adressC,:password)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idC=$client->getidC();
        $nomC=$client->getNom();
        $prenomC=$client->getPrenom();
        $telephone=$client->gettelephone();
        $mail=$client->getmail();
        $adressC=$client->getadressC();
        $password=$client->getpassword();
		$req->bindValue(':idC',$idC);
		$req->bindValue(':nomC',$nomC);
		$req->bindValue(':prenomC',$prenomC);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':adressC',$adressC);
		$req->bindValue(':password',$password);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherclients(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerclient($idC){
		$sql="DELETE FROM client where idC= :idC";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idC',$idC);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierclient($client,$idC){
		$sql="UPDATE client SET idC=:idC, nomC=:nomC,prenomC=:prenomC,telephone=:telephone,mail=:mail, adressC=:adressC,password=:password  WHERE idC=:idC";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idC=$client->getidC();
        $nomC=$client->getNom();
        $prenomC=$client->getPrenom();
        $telephone=$client->gettelephone();
        $mail=$client->getmail();
        $adressC=$client->getadressC();
        $password=$client->getpassword();
$datas = array( ':idC'=>$idC, ':nomC'=>$nom,':prenomC'=>$prenom,':telephone'=>$telephone,':mail'=>$mail,':adressC'=>$adressC,':password'=>$password);
	
		$req->bindValue(':idC',$idC);
		$req->bindValue(':nomC',$nomC);
		$req->bindValue(':prenomC',$prenomC);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':adressC',$adressC);
		$req->bindValue(':password',$password);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererclient($idC){
		$sql="SELECT * from client where idC=$idC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeclients($prenom){
		$sql="SELECT * from client where prenomC=$prenom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}
?>