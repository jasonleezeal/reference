<!--
1. To set it all up visually, let’s zero the default padding (and margin, for older browsers) of the lists:
2. draw border to see clearly
3. remove anchor and ul li decoration style









-->
<html>

	<head>
		
		
	</head>
	
	
	
	<style>
	div{
		border:1px solid black;
		
	
	}
	#mainmenu{
		display: table-cell;
		vertical-align: middle;
		text-align:center;
		width:500px;
		height:500px;
	
		
	}
	#block{
	
		margin:0px auto;
		width:250px;
		height:250px;		
	}
	#inline{
		border:1px solid black;
	
			
	}
	</style>

	<body>
	
		<div id="mainmenu">
			<div id="block">
				one
			</div>		
	
		</div>
	
	
		<h1>Center div</h1>
			<h2>parent</h2>
			<li>display:table-cell</li>
			<li>vertical-align:middle (child must be block)</li>
			<h2>child</h2>
			<li>margin:0px auto</li><br>
			
			<hr>
		<div id = "mainmenu">
			<strong id = "inline">hellosdsdsdsdsd</strong>		
		
		</div>		
			<h1>Center paragraph</h1>
			<h2>parent</h2>
			<li>display:table-cell</li>
			<li>vertical-align:middle </li>
			<li>text-align:center (if child is inline)</li>
		
	</body>
		
	


</html>