<!--
1. To set it all up visually, let’s zero the default padding (and margin, for older browsers) of the lists:
2. draw border to see clearly
3. remove anchor and ul li decoration style









-->
<html>
	<head>
		
		
	</head>
	
	
	
	<style>
		#mainmenu a{
			text-decoration:none;
		
		}
		
		
		div{

			background-color:red;
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
			border:1px solid black;
			padding:5px;

		}
		
		
		/* li parent */
		.mainmenu > li{
			float:left;
		
			
		}
		/* ul child */
		.mainmenu ul{
			
			
			margin-top:5px;
			position:absolute;
			display:none;
			left:0px;
			width:100%;
			
		}
		
		.mainmenu li:hover ul{
			display:block;
			
		}
		.mainmenu ul li:hover li{
			
		}
		
		
		a{
			display:block;
		
		}
		
		a:hover{
			background-color:blue;
			
		}

		
	</style>
	
	
	
	
	<body>
		<div class="menu">
			<ul class="mainmenu">	
				<li><a href="#">HOM22222222E</a>
					<ul>	
						<li><a href="#">Heelo</a></li>
						<li><a href="#">Heelossssssss</a></li>
					</ul>
				</li>
				<li><a href="#">HOME</a>
					<ul >	
						<li><a href="#">Hsadsad</a></li>
						<li><a href="#">Heelo</a></li>
					</ul>
				</li>
				<li><a href="#">HOMEss</a>
					<ul>	
						<li><a href="#">Heel2222222222222222o</a></li>
						<li><a href="#">Heelo</a></li>
					</ul>
				</li>
			</ul>
		</div>	
	</body>


</html>