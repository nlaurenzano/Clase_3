<html>
<head>
	<title>Clase 3</title>

	<!--Estilos-->
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">
	<!--final de Estilos-->
</head>
<body>

	<form>		<!-- Puede ser GET o POST -->




	</form>

</body>
</html>

<?php

if (isset($_POST['mensaje'])) {
	// Se inyecta un archivo HTML
	if (strlen($_POST['mensaje']) < 5) {
		include "menor_a_cinco.php";
	} else {
		include "mayor_a_cinco.php";
	}


} else {
	echo "Es la primera vez que ingresa.";
}

?>