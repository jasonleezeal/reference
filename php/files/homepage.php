<html>
<head>


</head>
<body>
<p>starting</p>
	<?php 
		session_start();
		//session timeout with lastvisitedpage
		$timeout = 50;
		if(isset($_SESSION['lastactivitytime'])){
			if( time() - $_SESSION['lastactivitytime'] < $timeout){
				$_SESSION['lastactivitytime']=time();
			}else{
				$_SESSION['lastvisitedpage']=$_SERVER['REQUEST_URI'];
				$_SESSION['message']="Time out";
				header('Location: http://localhost/phpprac/login.php');
				exit();
			}
		}
		// end session timeout
		
		
		//flash message after login
		if(isset($_SESSION['message'])){
			echo "<b>Login Success</b>";
			unset $_SESSION['message'];

		}
		
		//display all session data
		foreach($_SESSION as $key =>$value){
			echo $key."=".$value."<br>";

		}
		
		
		
	
		
		/*
		// Unset all of the session variables.
		$_SESSION = array();
		
		// If it's desired to kill the session, also delete the session cookie.
		// Note: This will destroy the session, and not just the session data!
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '', time() - 42000,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
			);
		}

		// Finally, destroy the session.
		session_destroy();
*/

	
	?>


</body>



</html>