<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>建立資料連接</title>
</head>
<body>
	<?php
	$link = mysqli_connect("localhost","Karthas","aaa") or die("unconnect");
	echo"connected";
	?>
</body>
</html>