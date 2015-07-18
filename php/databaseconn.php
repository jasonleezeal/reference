<?php 
	class databaseconn {
		private	$servername = "localhost";
		private	$dbname= "phpprac";
		private	$dbusername ="root";
		private	$dbpassword = "";
			
		public function getquery($sql,$type){
			try{
				$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->dbusername, $this->dbpassword);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo "Connected successfully"; 
			}catch(PDOException $e){
				return "Connection failed: " . $e->getMessage();
				
			}
			
			
			//$sql = "SELECT count(*) FROM `table` WHERE foo = bar"; 
			$result = $conn->prepare($sql); 
			$result->execute(); 
			if($type == "count"){
				return $result->rowCount(); 
			}else{
				return $result->fetchAll(); 
			}
		}
	}

	

?>