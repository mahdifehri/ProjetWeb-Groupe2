<?php /*
 class config{

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'module_paiement';


    public function __construct($host = null, $username = null, $password = null, $database = null){
        if($host != null ){
            $this->host = $host;
            $this->$username = $username;
            $this->$password = $password;
            $this->$database = $database;

        }
        try{
      $pdo = new PDO('mysql:host='.$this->$host.';dbname'.$this->$database, $this->$username, $this->password,
       array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ));
        }catch(PDOException $e){
            die('impossible de se connecter à la base de données');
        }
    } 
    public function query($sql, $data = array()){
        $req = $pdo->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }
}  */
?>

<?php 
  class config{
    private static $pdo = NULL;

    public static function getConnexion() {
      if (!isset(self::$pdo)) {
        try{
         self::$pdo = new PDO('mysql:host=localhost;dbname=module_paiement', 'root', '',
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self:: $pdo;
    }
    public function query($sql, $data = array())
    {
      $req = self::$pdo->prepare($sql);
      $req->execute($data);
      return $req->fetchAll(PDO::FETCH_OBJ);
    } 
  } 
?>

