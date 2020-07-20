## Education Board Result System

This is a learning project for student result calculation. We will use some programming language here.


### Language List

- HTML 5
- CSS 3
- JAVA SCRIPT
- Jquery
- PHP
- MySQL
- OOP
- PDO

#### Database class design

```php
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

```

