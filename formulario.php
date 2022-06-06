<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="utf-8">
		 <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
		<style>
		* {box-sizing: border-box;}

			body {
 				margin: 0;
  				font-family: Arial, Helvetica, sans-serif;
			}

			.topnav {
  				overflow: hidden;
  				background-color: #e9e9e9;
			}

			.topnav a {
  				float: left;
  				display: block;
  				color: black;
  				text-align: center;
  				padding: 14px 16px;
  				text-decoration: none;
  				font-size: 17px;
			}

			.topnav a:hover {
  				background-color: #ddd;
  				color: black;
			}

			.topnav a.active {
  				background-color: #2196F3;
  				color: white;
			}

			.topnav .search-container {
  				float: right;
			}

			.topnav input[type=text] {
  				padding: 6px;
  				margin-top: 8px;
  				font-size: 17px;
  				border: none;
			}

			.topnav .search-container button {
  				float: right;
  				padding: 6px 10px;
  				margin-top: 8px;
  				margin-right: 16px;
  				background: #ddd;
  				font-size: 17px;
  				border: none;
  				cursor: pointer;
			}

			.topnav .search-container button:hover {
  				background: #ccc;
			}

			@media screen and (max-width: 600px) {
  				.topnav .search-container {
    			float: none;
  			}
  			.topnav a, .topnav input[type=text], .topnav .search-container button {
    			float: none;
    			display: block;
    			text-align: left;
    			width: 100%;
    			margin: 0;
    			padding: 14px;
  			}
  			.topnav input[type=text] {
    			border: 1px solid #ccc;  
  			}
		}
		</style>
	</head>
	<body>
		<h1> Game Rastreator </h1>
		<div class="topnav">
  			<a class="active" href="#home">Home</a>

  			<div class="search-container">
    			<form action="formulario.php" id="form" method="post">
      				<input type="text" placeholder="Búsqueda..." name="q" id="query">
      				<button type="submit" value="submit"><i class="fa fa-search"> </i></button>
    			</form>
  			</div>
		</div>
		<div style="padding-left:16px">
		</div>
		<div>
			<?php
				$query = 'python3 /var/www/html/scraperBS.py ';
				$juego= $_POST['q'];
				$todo = $query . $juego;
				$command = escapeshellcmd($todo);
				$output = shell_exec($command);
				echo $output;
			?>
		</div>
	</body>
</html>
