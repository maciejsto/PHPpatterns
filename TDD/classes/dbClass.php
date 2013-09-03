

<?php 
	
	require dirname(__DIR__). '/config/config.php';
	require_once dirname(__DIR__).'/config/autoload.php';
	$autoloader=new autoloader();
?>

<?php 


class dbClass{
	
	//properties
	public static $_pdo;	//connection handle
	public $_table;		//table container
	
	//*********************************************************************************
	public function __construct(){
		$this->connect();
	}
	//*********************************************************************************
	public function __destruct(){
		
			$this->disconnect();
			
		
	}
	//*********************************************************************************
	public function __call($function,$arguments){
		try {
			$method='isValid';
			if($function!=$method){
				
				throw new Exception('method '.$method.'  does not exist '."\n");
			}
			switch($arguments){
				case is_string($arguments[0]):
					$this->checkIfTableExistInDB($arguments[0]);
			}
			
		} catch (Exception $e) {
			echo 'message: '.$e->getMessage()."\n";
			echo 'file: '.$e->getFile()."\n";
			echo 'line: '.$e->getLine()."\n";
// 			echo $e->getTrace()."\n";
		}
	}
	
	
	
	
	
	//*********************************************************************************
	public function connect(){
		try {
			
			if(!isset(self::$_pdo)){
				self::$_pdo=new PDO(DSN, USERNAME, PASSWORD) or die('couldn not establish connection');
				self::$_pdo->setAttribute(PDO::ATTR_PERSISTENT, true);
				self::$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
			}
			
			
			return true;
			
			
		} catch (Exception $e) {
			
			echo 'the connection couldn not be established'.$e->getMessage();
		}
	}//end of connect();
	
	
	//*********************************************************************************
	public function disconnect(){
		try {
			if(self::$_pdo!=null){
				self::$_pdo=null;
				return true;
			}else{
				
// 				throw new Exception('couldnt disconnect from database');
			}
			
			
		} catch (Exception $e) {
			$e->getMessage();
		}
	}//end disconnect();
	//*********************************************************************************
	
	public function createTable($table_name){
		try {
			if(!is_string($table_name) || !$this->isValid($table_name)){
				return false;
			}
			
			$table='CREATE TABLE IF NOT EXISTS  '.$table_name. '
			(
				u_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
				u_lname VARCHAR(50) NOT NULL,
				u_fname VARCHAR(50) NOT NULL,
				u_email  VARCHAR(50) NOT NULL,
				u_password VARCHAR(50) NOT NULL,
				u_create_date DATETIME,
				u_admin_id 	INT,
				u_enable INT DEFAULT 1
			)';
			
// 			$query=self::$_pdo->prepare($table);
// 			$query->execute();
// 			$query->closeCursor();
			
			
// 			if(!$query->execute()){
// 				return false;
// 			}
			
// 			$this->_table=$table;
// 			return true;
			
			
			
		} catch (Exception $e) {
			$e->getMessage();
			
		}
	}//end of createTable()
	
	//*********************************************************************************
	/**
	 * this method is called whenever isValid method is called with string parameter
	 * @param unknown_type $arg_to_test
	 */
	public function checkIfTableExistInDB($table_name){
		try {
			
// 			$queryResult=$this->isValidTable('table_name5'); //TODO
			$query="SHOW TABLES LIKE '.'".$table_name."";
			$pdo=self::$_pdo->query($query);
			$pdo->execute();
			
			$result=$pdo->fetchObject();
// 			var_dump($result);
			if(!$result){
				throw new Exception('table does not exist'."\n");
			}
			
			
		} catch (Exception $e) {
			$e->getMessage();
		}
		
		
	}
	
	
	

	
	}

	

?>