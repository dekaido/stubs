<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My Profile</title>
<link href="../HackPSU/HackPSU.css" rel="stylesheet" type="text/css">
<link href="HackPSU.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>

</head>
<body>
<!-- Main Container -->
<div class="container"> 
  <!-- Navigation -->

	<header>
	  <nav>
		<div class = "logo">
		  <img src="C:\Users\jason\OneDrive\Documents\HackPSU Images\psu_logo.png" alt="" width="200" class="psu"/>
		  </div>
		  <h3 class="title">Student Organizations</h3>
		<ul>
			<li><a href="Index">Home</a></li>
			<li><a href="Profile">My Profile</a></li>
		</ul>
	  </nav>
		<?php
			$txt1 = "Learn PHP";
			$txt2 = "W3Schools.com";
			$x = 5;
			$y = 4;

			echo "<h2>" . $txt1 . "</h2>";
			echo "Study PHP at " . $txt2 . "<br>";
			echo $x + $y;
		?>
	</header>
	<footer>
	</footer>
</div>
</body>
</html>