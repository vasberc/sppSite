<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags always come first -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		
		<!-- favicon-96x96.png - For Google TV. -->
		<link rel="icon" type="image/png" href="images/logo96.png" sizes="96x96">

		<!-- favicon-16x16.png - The classic favicon, displayed in the tabs. -->
		<link rel="icon" type="image/png" href="images/logo16.png" sizes="16x16">

		<!-- favicon-32x32.png - For Safari on Mac OS. -->
		<link rel="icon" type="image/png" href="images/logo32.png" sizes="32x32">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">

	<title>Σύνδεσμος Προπονητών Ποδοσφαίρου Λασιθίου</title>
	</head>
	<body >
		<div id="content">
			<header>
				<?php include 'header.php';?>
			</header>
			<nav>
				<?php include 'nav.php';?>
			</nav>
			<div style="border-top:solid white; border-left:solid black; border-right:solid black; border-bottom:solid black" class="maincontent">
				<h2>Είσοδος Μελών</h2>
				<button onclick=message()>Apear</button>
				<button onclick=message1()>Disapear</button>
				<script>
					var name=prompt("Πως σε λένε");
					document.write(name);
					console.log(name);
					function message(){
						x=document.getElementById('loginform');
						x.style.display="block";
					}
					function message1(){
						x=document.getElementById('loginform');
						x.style.display="none";
					}
				</script>
				<form id="loginform" action="js/login.js" method="post">
					<div>
						<label for="username">Username</label>
						<input type="text" name="username">
					</div>
					<div>
						<label for="password">Password</label>
						<input type="password" name="password">
					</div>
					<div>
						<input type="submit" class="submit" value="Είσοδος">
					</div>
				</form>
			</div>
			<footer>
				<?php include 'footer.php';?>
			</footer>
		</div>
		<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
		<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>