 <?php 

class Config {

	private $config = __DIR__ . "/../../config.php";
	public $db;
	public function __construct(){
		$this->db = require $this->configFile;
	}

}

  ?>