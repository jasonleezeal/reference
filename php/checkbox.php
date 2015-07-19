<?php 
	
	if(isset($_POST['vehicle'])){
		$vehicle = $_POST['vehicle'];
		$conn = new mysqli("localhost","root","","phpprac");
		$sql="INSERT INTO checkboxs (checkboxs) VALUE (?)";		
		$stmt = $conn->prepare($sql);

		$string = implode(',',$vehicle);
		$stmt->bind_param("s",$string);
		if($stmt->execute()){
			echo "Data summited";		
		}else{
			echo "Err submiting data";
		}
	}


?>

<html>

	<head>

	</head>
	
	<body>
 		<form method = "post" action = "checkbox.php">
			<input type = "checkbox" name="vehicle[]" value="car">car<br>
			<input type = "checkbox" name="vehicle[]" value="bus">bus<br>
			<input type = "submit" value="submit">
		</form>
	</body>

</html>