<?PHP
include "../config.php";
class ProduitC {
function afficherProduit ($produit){
		echo "idP: ".$produit->getidP()."<br>";
		echo "nomP: ".$produit->getNom()."<br>";
		echo "quantiteP: ".$produit->getQuantite()."<br>";
		echo "description: ".$produit->getDescription()."<br>";
		echo "prix: ".$produit->getPrix()."<br>";
		
	}
	//function calculerSalaire($client){
	//	echo $client->getNbHeures() * $client->getTarifHoraire();
	
	function ajouterProduit($produit){ 
		$sql="insert into produit (idP,nomP,quantiteP,description,prix) values (:idP,:nomP,:quantiteP,:description,:prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idP=$produit->getidP();
        $nomP=$produit->getNom();
        $quantiteP=$produit->getQuantite();
        $description=$produit->getDescription();
        $prix=$produit->getPrix();
		$req->bindValue(':idP',$idP);
		$req->bindValue(':nomP',$nomP);
		$req->bindValue(':quantiteP',$quantiteP);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
            $req->execute();
          if(move_uploaded_file($_FILES['tmp_name']['name'], $target)) {
          	$msg="aaaa" ;
          }
          else{
          	$msg="laaa" ; 
          }
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherproduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerproduit($idP){
		$sql="DELETE FROM produit where idP= :idP";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idP',$idP);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduit($produit,$idP){
		$sql="UPDATE produit SET idP=:idP, nomP=:nomP,quantiteP=:quantiteP,description=:description,prix=:prix WHERE idP=:idP";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idP=$produit->getidP();
        $nomP=$produit->getNom();
        $quantiteP=$produit->getQuantite();
        $description=$produit->getDescription();
        $prix=$produit->getPrix();
$datas = array( ':idP'=>$idP, ':nomP'=>$nomP,':quantiteP'=>$quantiteP,':description'=>$description,':prix'=>$prix);
	
		$req->bindValue(':idP',$idP);
		$req->bindValue(':nomP',$nomP);
		$req->bindValue(':quantiteP',$quantiteP);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererproduit($idP){
		$sql="SELECT * from produit where idP=$idP";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeproduit($idP){
		$sql="SELECT * from produit where idP=$idP";
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