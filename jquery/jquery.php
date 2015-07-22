<head>
	<!-- google
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	 -->
	<!-- microsoft -->
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
</head>
<script>
$(document).ready(function(){
	$("h2").click(function(){
			$("li").hide();
		}
	);
	
});

</script>

<style>
h1{
	color:red;

}
</style>
<body>
	<h1>Selector</h1>
	<h2>$(selector).action()</h2>
	
		<li>$(this).hide() - hides the current element.</li>
		<li>$("p").hide() - hides all  elements.</li>
		<li>$(".test").hide() - hides all elements with class="test".</li>
		<li>$("#test").hide() - hides the element with id="test".</li>
		<li>$(document).ready(function(){});</li>
	<h1>Event</h1>
	
	<li>Mouse</li>
	<li>Keyboard</li>	
	<li>Form</li>	
	<li>Document</li>

<h1>Effect</h1>
	<li>hide/show,toggle</li>
	<li>fadeIn,fadeOut,fadeToggle</li>	
	<li>Animate (use to move div)</li>	
	<li>callback (load all action before "function(){}"  )</li>
	<li>chaining</li>
	
</body>