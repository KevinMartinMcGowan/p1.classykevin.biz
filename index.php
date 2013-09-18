<!DOCTYPE HTML>
<html>

	<head>
		
		<title>Kevin McGowan's 1st Project</title>
		
		<link rel="stylesheet" type="text/css" href="style.css">
		
		
	</head>

	<body>
		
		<div id="wrapper">
		
		
			<div id="info">
				<h2>Kevin McGowan</h2>
				
				<p class="i">uses TextWrangler. It makes him feel like a cowboy!</p>
				
				<p>Kevin has a cat named Sam.  Sometimes Sam likes to stand on Kevin's
				laptop.  Kevin doesn't like that.  When Kevin isn't chasing the cat away 
				from his laptop, he is an avid photographer, filmmaker, and collector of 
				laserdiscs.</p>  
				
				<p>Kevin lives in the People's Republic of Cambridge where he works.  He
				is always on the hunt for a good cup of coffee.  Always.
				</p>
				
				
			</div>

			<div id="photo">
				<img src="sam.jpg" height="320" width="320" alt="Sam in the bath"/>
				<br>
				<p class="i">Sam the cat.</p>
			</div>

		
		</div>
		
		<!--include jquery & backstretch-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.backstretch.min.js"></script>
		<script type="text/javascript">
			$.backstretch("nutco.jpg", {speed: 150});
		</script>
		
	</body>
	
</html>