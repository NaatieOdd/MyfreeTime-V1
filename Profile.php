<!DOCTYPE html> 

<html lang="en">
	<head>
		<meta charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="Menubalk.css"> 
		<title>MyFreeTime</title>
		<!--made by Nathan Odding-->
	</head>
	
	<body>
		<!-- Alles wat onder de <div> tag staat is de navigatie bar aan de bovenkant van de website -->
		<div class="navbar">
			<div class="item"><a href="Categories.html">Categories</a></div>
			<div class="item"><a href="Trending-main.html">Trending</a></div>
			<div class="item"><a href="index.html">Home</a></div>
		</div>
		<!-- dit is de inhoud van de pagina (dus de titel en de tekst) -->
		<div id="supergrond">
			<div id="titel">
				<img class="logo" src="images/logo.png"alt="Logo"></a>
				<h1><b>MyFreeTime</b></h1>
			</div>
			
			<div id="invisblokje2"</div>
			
			<div id="tekst">
				<h1>Preview profile page</h1>
				<p><form action="" method="post">
					<label for="accname">Enter account name:</label>
					<input type="text" name="accname" id="accname">
					<br>
					<input type="submit" name="submit" value="submit">
					</form>
					<?php
						if(isset($_POST['submit'])) {
						$accountname = trim($_POST['accname']);
        

						echo "<p> Welcome to" . $accountname . "'s page</p>";
						}
					?>
				</p>
			</div>
			<div id="invisblokje"></div>
		</div>
		
	</body>
</html>