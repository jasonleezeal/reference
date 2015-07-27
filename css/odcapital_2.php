<!--
1. To set it all up visually, let’s zero the default padding (and margin, for older browsers) of the lists:
2. draw border to see clearly
3. remove anchor and ul li decoration style









-->
<html>

	<head>
		
		
	</head>
	
	
	
	<style>
	body{
		margin:0px;
		paddng:0px;
		
	}
	div{
		border:1px solid black;
	}
	
	#top{
		width:100%;
		
	}
	.container{
		width:1000px;
		margin:0px auto;
		
	}
	#wrapper{
		width:100%;
		height:100%;
	}
	
	.topwrapper{
		float:left;
		width:33%;
		text-align:center;
	
	}
	.leftwrapper{
		float:left;
		width:33%;
		text-align:center;

	
	}
	#logo{
		display:block;
		width:150px;
		margin:0px auto;
		
	
	}
	
	.menu{
		margin-top:20%;
		display:inline-block;
		
	}
	#navigationbar{
		clear:both;
		background-color:#FF3333;

	}
	.container ul{
		margin:0px;
		padding:0px;
		list-style:none;
	
	}
	#mainmenu{
		text-transform: uppercase;
		display:inline-block;
		font-weight:bold;
	}
	
	#mainmenu>li{
		float:left;
		margin-right:10px;
	}
	
	#mainmenu a{
		text-decoration:none;
		color:black;
		display:block;
		padding:10px;
		
	}
	#mainmenu ul a{
		border:1px solid black;
		background-color:grey;
	}
	
	#mainmenu ul{
		position:absolute;
		display:none;
		text-align:left;
	}

	#mainmenu li:hover{
		background-color:#ff8080;

	}
	#mainmenu li:hover ul{
		display:block;
		
	}
	

	</style>

	<body>
		<div id="wrapper">
			<div id="top">
				<div class="container">
					 <div class="topwrapper">
						<div class="menu"><a href="">Sign up </a>|<a href=""> Member Login</a></div>
					 
					 </div>
					<div class="topwrapper">
						<img src="/reference/css/image/burgetking.png" id="logo">
					 </div>
					  <div class="topwrapper">
						<div class="menu"><b>Language</b></div>
						
					 </div>
				</div>
			</div>
			<div id="navigationbar">
				<div class="container" style="text-align:center;">
					<ul id="mainmenu">	
						<li><a href="#">Home</a>
							<ul>	
								<li><a href="#">Test</a></li>
								<li><a href="#">Heelossssssss</a></li>
							</ul>
						</li>
						<li><a href="#">About Us</a>
							<ul >	
								<li><a href="#">Hsadsad</a></li>
								<li><a href="#">Heelo</a></li>
							</ul>
						</li>
						<li><a href="#">Product</a>
							<ul>	
								<li><a href="#">Heel2222222222222222o</a></li>
								<li><a href="#">Heelo</a></li>
							</ul>
						</li>
					</ul>
				
				</div>
			</div>
		
		</div>

	
	
	</body>
		
	


</html>