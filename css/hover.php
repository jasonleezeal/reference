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
	#main{
		width:1000px;
		margin:0px auto;
		height:800px;
	
	}
	
	#left-content{
		width:30%;
		height:90%;
		float:left;
		margin:10px 10px;
	}
	#right-content{
		width:60%;
		height:90%;
		float:left;
		margin:10px 10px;
	}
	.show-content{
		display:none;
		width:60%;
		height:90%;
	}
	.onee{
		width:100%;
		height:10%;
		
	}
	
	#left-content>div:hover .show-content{
		display:block;

	}
	
</style>

<body>

	<div id = "main">
		<div id = "left-content">
			<div id = "one" class="onee">
				one
		
			</div>
			<div id = "two" class="onee">
			two
		
			</div>
			<div id = "three" class="onee">
			three
		
			</div>
		
		</div>
		<div id = "right-content">
			<div class="show-content" >
			one
		
			</div>
			<div class="show-content">
			two
		
			</div>
			<div class="show-content">
			three
		
			</div>
		
		</div>	
	</div>
</body>
		
	


</html>