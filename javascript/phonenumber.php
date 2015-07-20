<!--
1. To set it all up visually, let’s zero the default padding (and margin, for older browsers) of the lists:
2. draw border to see clearly
3. remove anchor and ul li decoration style









-->
<html>
	<head>
		
		
	</head>
	
	<script>
		function validationform(){
			var x = document.getElementById("telephone").value;
		//	var format = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
			var format = /^\d{10}$/; //12345678910
			if(x.match(format)){
				alert("data submited");
				
			}else{
				alert("Format not match");
				return false;
			
			}
		}
	</script>
	
	

	<body>
		<h2>Javascript Validation</h2>
		<div id = "errorlist">
		
		</div>
		<form name="userform" onsubmit="return validationform();" >
			<input name="telephone" id = "telephone" type="text">
			<input name="submit" type="submit">
		</form>

		
	</body>


</html>