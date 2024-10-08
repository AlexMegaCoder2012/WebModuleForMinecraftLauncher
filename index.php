<?php
	require "ConnectAPIVK.php";		
?>

<!DOCTYPE html>
<HTML>
	<head>
		<title>Новости</title>
		<meta charset='UTF-8'>
		<link href="Settings/Styles/Default.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<?php
		
		for ($i = 0; $i < count($wall); $i++) {
			echo "<div class='New'><h3 id='DateNew'>".date("Y-m-d H:i:s", $wall[$i]->date)."</h3><h4>".$wall[$i]->text."</h4></div>"; // Выводим записи
		}
		
		?>
	</body>
</HTML>