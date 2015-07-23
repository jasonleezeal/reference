<?php
		$host='localhost';
		$dbname='phpprac';
		$username='root';
		$password='';
		$conn = new mysqli($host,$username,$password,$dbname);

		
		
		
	// Upload And Download Files to Database(BLOB)	
	if(isset($_POST['submitedb'])){
		$tmpName= $_FILES['fileUpload']['tmp_name'];
		$fp      = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		fclose($fp);
		$sql="INSERT INTO files (file_content) VALUE (?)" ;
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("s",$content);
		$stmt->execute();
	}
	
	
	if(isset($_GET['downloaddb'])){
		$sql = "SELECT * FROM files WHERE id=10";
		$stmt = $conn->prepare($sql);
		
		if($stmt->execute()){
			$result = $stmt->get_result();
			//$data = $result->fetch_all(MYSQLI_ASSOC); //all
			$data = $result->fetch_assoc(); //first
			//$data = $result->fetch_row(); count
				/* 
				foreach($data as $row){
					echo $row['file_content']."<br><br>"; //all
				}
				*/
				//echo $data['file_content']; first
				//echo $data[0]; count	
				header("Content-length: '50mb'");
				header("Content-type: 'php'");
				header("Content-Disposition: attachment; filename='testing.jpg'");
				echo $data['file_content'];		
				exit();
		}else{
			echo "Error";
		}
	}
	// End Upload And Download Files to Database(BLOB)
	
	if(isset($_POST['submitws'])){
		echo "test";
		$target_dir = "files/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		
		
		// Check if image file is a actual image or fake image
		/*
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		*/
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		/*
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if($imageFileType != "php" ) {
			echo "Sorry, only PHP files are allowed.";
			$uploadOk = 0;
		}*/
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		

	}
	if(isset($_GET['file'])){
			
			$filename = basename($_GET['file']);
			$file = 'files/'.$filename;
			
	
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$filename");
			header("Content-Type: application/zip");
			header("Content-Transfer-Encoding: binary");

			// read the file from disk
			readfile($file);
			exit();
	
	}
	
?>



	<h2>Upload And Download Files to Database(BLOB)</h2>
		<form enctype="multipart/form-data" name="frmUploadFile" action="files.php" method="post">
		<input type="file" name="fileUpload" size="20">
		<input type="submit" value="submit" name="submitedb">
		
	
	<br>
	<a href="files.php?downloaddb=1">Download Here</a>
	
	<h2>Upload and download files to Webserver</h2>
		<form method="post" action="files.php" enctype="multipart/form-data">
			
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="submit" name="submitws">
		</form>
	<a href="files.php?file=testing.jpg">Download Here</a>
