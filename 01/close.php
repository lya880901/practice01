<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>關閉資料連接</title>
</head>
<body>
	<?php
	$link = mysqli_connect("localhost","Karthas","aaa") or die("unconnect");
	echo"connected";mysqli_close($link);
	?>
</body>
</html>