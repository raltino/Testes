<?php
if (isset($_GET['opc'])){
	$opc = $_GET['opc'];
}
else {
	$opc=0;
}
?>

<html>
	<head>
		<title>GameStore.Net</title>
		<link rel="stylesheet" href="site.css" type="text/css">
	</head>
	<body bgcolor="black">
		<div id="geral">
			
			<div id="menu2">
				<?php
					include "menu.php";
				?>
			</div>
			
			<div id="categorias"></div>
			<div id="conteudo"></div>
			<div id="rodape"></div>
			
		</div>
	</body>
</html>