<?php
	

	class User{
		
		
		private $db;
		private $loggedin=0;
		
		public function __construct ($db){
			$this->db=$db;
		}
		
		public function login(){
				$stmt=$this->db->prepare("SELECT count(*) FROM user WHERE name='jasonlee'");
				$stmt->execute();
				$data=$stmt->fetchColumn();
				$this->loggedin=$data;
				return $data;
	
		}
		
		public function getuserdata(){
				if($this->loggedin){
					return "userdata";
				}else{
					return "haven login";
				}
		
		}
	
	
	}

			try{
				$conn = new PDO("mysql:host=localhost;dbname=reference;", "root", "");
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo "Connected successfully"; 
			}catch(PDOException $e){
				return "Connection failed: " . $e->getMessage();
				
			}
		
	$user = new User($conn);
	$data = $user->login();
	$data2 = $user->getuserdata();
	print_r($data);
	echo "test".$data2;


?>