<html>
	<head>

	</head>
	<body>
		<?php 
			session_start();
			if(isset($_SESSION['message'])){
				echo "<b>".$_SESSION['message']."</b>";
				unset ($_SESSION['message']);
			
			}
			
			//echo basename(__FILE__, '.php'); 
			if(isset($_POST['username']) && isset($_POST['password']) ){
				$username= $_POST['username'];
				$password= $_POST['password'];
				
		
			
				//Connect to database
				$servername = "localhost";
				$dbname= "webauth";
				$dbusername ="root";
				$dbpassword = "";
				try{
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					//echo "Connected successfully"; 
				}catch(PDOException $e){
					echo "Connection failed: " . $e->getMessage();
					
				}
				
				$sql ="SELECT count(*) FROM user_pwd WHERE name='".$username."' AND pass='".$password."'" ;
				//$sql = "SELECT count(*) FROM `table` WHERE foo = bar"; 
				$result = $conn->prepare($sql); 
				$result->execute(); 
				$number_of_rows = $result->fetchColumn(); 
				
				if($number_of_rows){
					if(isset($_SESSION['lastvisitedpage'])){
						$url=$_SESSION['lastvisitedpage'];
					}else{
						$url="/reference/php/session/index.php";
					}
				
					echo "<p>Login successfull</p>";

					$_SESSION['message']="Login Successfull";
					$_SESSION['lastactivitytime']=time();
					header('Location: http://localhost'.$url);
					
					
				}else{
					echo "<p>Incorrect username and password</p>";				
				}
				
				
			}
		?>
		<form method="post" action="login.php">
			Username:
			<input type= "text" id="username" name="username" ><br>
			Password:
			<input type= "password" id="password" name="password" >
			<input type ="submit">
		</form>
	
	</body>



</html>