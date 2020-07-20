
<?php

 require_once "../../config.php";

 namespace Edu\Board\Support;

 use PDO;

 /**
  * Database class
  */
abstract class Database;
 {    
 	/**
 	 * Server information
 	 */
 	  private $host = HOST;
 	  private $user = USER;
 	  private $pass = PASS;
 	  private $db   = DB;

 	  private $connection;

 	  /**
 	   * Database connection
 	   */
 	  private function connection()
 	  {
 	  	$connection new PDO("mysql:host=" . $this ->host . ";db_name" . $this ->db, $this->user, $this ->pass); 
 	  }
 	
 }

 echo password_hash('admin', PASSWORD_DEFAULT);


?>