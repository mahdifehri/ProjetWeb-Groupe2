<?PHP
	class Utilisateur{
		private $id = null;
		private $nom = null;
		private $prenom = null;
		private $email = null;
		private $login = null;
		private $password = null;
		
		function __construct( $id, $nom, $prenom, $email,$login,$password){
			
			
			$this->id=$id;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->login=$login;
			$this->password=$password;
		}
		
		function getId(): {
			return $this->id;
		}
		function getNom(): {
			return $this->nom;
		}
		function getPrenom(): {
			return $this->prenom;
		}
		function getLogin(): {
			return $this->login;
		}
		function getEmail(): {
			return $this->email;
		}
		function getPassword(): {
			return $this->password;
		}

		
		function setid(int $id): {
			$this->id=$id;
		}
		function setNom(string $nom): {
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): {
			$this->prenom;
		}
		function setLogin(string $login): {
			$this->login=$login;
		}
		function setEmail(string $email): {
			$this->email=$email;
		}
		function setPassword(string $password): {
			$this->password=$password;
		}
	}
?>