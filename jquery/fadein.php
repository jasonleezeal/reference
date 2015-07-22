<head>
	<!-- google
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 -->
	<!-- microsoft -->
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
</head>
<script>
	$(document).ready(function(){
		$("#two-content").hide();
		$("#three-content").hide();
		$("#two").click(function(){
			$("#two-content").fadeIn(1000);
			$("#one-content").hide();
			$("#three-content").hide();
		});
		$("#three").click(function(){
			$("#three-content").fadeIn(1000);
			$("#one-content").hide();
			$("#two-content").hide();
		});
		$("#one").click(function(){
			$("#one-content").fadeIn(1000);
			$("#two-content").hide();
			$("#three-content").hide();
		});
	
	});

</script>

<style>
	div{
		border: 1px solid black;
	
	}
	#main{
		width:900px;
		height:700px;
	}
	
	#left-content{
		width:25%;
		height:95%;
		float:left;	
		margin:10px 10px;
	
	}
	#right-content{
		width:70%;
		height:95%;
		float:left;
		margin:10px 10px;
	}
	.button{
		width:80%;
		height:10%;
		margin:20px auto;
	
	}
	.show-content{
		width:90%;
		height:90%;
		margin:20px auto;
		
	}
	
</style>
<body>

	
	<div id = "main">
		<div id = "left-content">
			<div id ="one" class="button">Show one</div>
			<div id ="two" class="button">Show one</div>
			<div id ="three" class="button">Show one</div>
		</div>
		<div id = "right-content">
			<div id = "one-content" class="show-content">
			one
			</div>
			<div id = "two-content" class="show-content">
			two
			</div>
			<div id = "three-content" class="show-content">
			three
			</div>
		</div>
	</div>
</body>