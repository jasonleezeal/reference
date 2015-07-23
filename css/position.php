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
		width:500px;
		height:500px;
		position:relative;
	}
	#child1{
		width:250px;
		height:250px;
		position:absolute;
		right:0px;
	}
	</style>

	<body>
	
		<div id="mainmenu">
			<div id="child1">
				one
			</div>		
			<div id="child1">
				two
			</div>	
			<div id="child1">
				threee
			</div>	
		</div>
	
	
		<h1>Position</h1>
			<li>relative</li>
			<li>absolute</li>
			
			<li>fix</li>
			<li><i>must be use with top bottom left right for positioning</i></li>
	</body>
		
	


</html>