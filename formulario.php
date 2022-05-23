<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$command = escapeshellcmd('python scrapperBS.py');
		$output = shell_exec($command);
		echo $output;
	?>
</body>
</html>