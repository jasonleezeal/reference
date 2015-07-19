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
		
			// TEXT 
			var namefield = document.forms['userform']['name'].value;
			if( namefield == "" ){
				document.getElementById('errorlist').innerHTML  = "<li>name cannot leave empty</li>";
				//document.getElementById('name').style.border="yellow";						
				return false;	
			}
			
			var addressField = document.forms['userform']['address'].value;
			if( addressField == "" ){
				document.getElementById('errorlist').innerHTML  = "<li>Address cannot leave empty</li>";
				//document.getElementById('name').style.border="yellow";					
				return false;
			}
			// END TEXT FIELD
			
			
			// CHECKBOX 
			var transportField = document.getElementsByName("vehicle");
			var transportFieldchecked = false;
			for(var i=0;i<transportField.length;i++){
				if( transportField[i].checked){
					transportFieldchecked=true;
					break;
				}					
			}
			if(transportFieldchecked == false){
				document.getElementById("errorlist").innerHTML = "<li>Please select one vehicle</li>";	
				return false;
			}
			// END CHECKBOX FIELD
			
			// SELECT 
			var countryField = document.getElementById("country").value;
			if(countryField == 0){
				
				document.getElementById("errorlist").innerHTML = "<li>Please select one country</li>";
				return false;
			}
			// END SELECT FIELD
		}
	</script>
	
	

	<body>
		<h2>Javascript Validation</h2>
		<div id = "errorlist">
		
		</div>
		<form name="userform" onsubmit="return validationform();" >
			Name
			<input type = "text" name ="name" id="name">
			<br>
			Address
			<textarea name = "address"></textarea>
			<br>
			Gender
			<input type = "radio" name="gender" id="gender" value="male" checked>
			<input type = "radio" name="gender" id="gender" value="female">
			<br>
			Country 
			<select name="country" id="country">
				<option value="0" selected="selected" disabled >Select 1</option>
				<option value="1" >Malaysia</option>
				<option value="2" >Singapore</option>
			</select>
			<br>
			
			File 
			<input type="file" name="uploadfile">
			<br>
			
			
			Transport
			
			<input type="checkbox" name="vehicle" id="vehicle" value="Bike"> I have a bike
			
			<input type="checkbox" name="vehicle" id="vehicle" value="Car"> I have a car 
			<br>
			date 
			<input type="date" name="datepicker">
			<br>
			range
			  <input type="range" name="points" min="0" max="10">

			
			<br>
			
			
			
			
			<br>
			<input type = "submit" name="submit" value="submit" >
			
		</form>

		
	</body>


</html>