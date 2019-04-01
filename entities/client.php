<?PHP
class Client{
	private $idC;
	private $nomC;
	private $prenomC;
	private $telephone;
	private $mail;
	private $adressC;
	private $password;
	function __construct($idC,$nomC,$prenomC,$tel,$mailc,$adress,$mdp){
		$this->idC=$idC;
		$this->nomC=$nomC;
		$this->prenomC=$prenomC;
		$this->telephone=$tel;
		$this->mail=$mailc;
		$this->adressC=$adress;
		$this->password=$mdp;
	}
	
	function getidC(){
		return $this->idC;
	}
	function getNom(){
		return $this->nomC;
	}
	function getPrenom(){
		return $this->prenomC;
	}
	function getmail(){
		return $this->mail;
	}
	function gettelephone(){
		return $this->telephone;
	}
	function getadressC(){
		return $this->adressC;
	}
	function getpassword(){
		return $this->password;
	}

	function setidC($idC){
		$this->idC=$idC;
	}

	function setNom($nom){
		$this->nomC=$nom;
	}
	function setPrenom($prenom){
		$this->prenomC=$prenom;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function settelephone($telephone){
		$this->telephone=$telephone;
	}
	function setadressC($adressC){
		$this->adressC=$adressC;
	}
	function setpassword($password){
		$this->password=$password;
	}
	
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>