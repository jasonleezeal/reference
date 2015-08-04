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
	/*
			MYSQLI
			
			$stmt->execute()
			$result = $stmt->get_result();
			
			
			//all
			$data = $result->fetch_all(MYSQLI_ASSOC);
			foreach($data as $row){
				echo $row['file_content']."<br><br>"; //all
			}
			
			//first
			$data = $result->fetch_assoc(); 
			echo $data['file_content']; first
			
			
			//count
			$data = $result->fetch_row(); count
			echo $data[0]; count	
			
			
			PDO
			
			//all
			
			sql="SELECT * FROM user"
			$stmt->execute();
			$stmt->fetchAll();
			
			//first
			sql="SELECT * FROM user LIMIT 1"
			$stmt->execute();
			$stmt->fetch()
			
			//count
			sql="SELECT count(*) FROM user LIMIT 1"
			$stmt->execute();
			$stmt->fetchColumn()
	*/
?>