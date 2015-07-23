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
			font-family:Monospace;
			font-size:20px;
		}
		.menu{
			margin-top:100px;
		
		}
		
		div{

			background-color:black;
			border:1px solid black;
			text-align:center;
 
		}
		.mainmenu{
			display: inline-block;
			position:relative;
		}
		ul{
			border:1px solid black;
			list-style:none;
			margin:0;
			padding:0;
			
			
		}
		li{
		
			

		}
		
		
		/* li parent */
		.mainmenu > li{
			float:left;
		
			
		}
		/* ul child */
		.mainmenu ul{
			
			
			
			position:absolute;
			display:none;
			left:0px;
			width:100%;
			background-color:black;
			
		}
		
		.mainmenu li:hover ul{
			display:block;
			
		
		}
	

		a{
			display:block;
			padding:10px;
			color:white;
			text-decoration:none;
		}
		.mainmenu li>a::after{
			content:' \25BE';
		}
		a:hover{
			background-color:white;
			color:black;
			
			
		}
		img{
			top:75px;
			float:left;
			height:100px;
			z-index:1;
			left:300px;
			position:absolute;
		}
		
	</style>
	
	
	
	
	<body>
	<img src="\reference\css\image\Penguins.jpg">
		<div class="menu">
		
			<ul class="mainmenu">	
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
	</body>


</html>