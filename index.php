<html>
<head>
	<title>Clase 3</title>
</head>
<body>

	<form method="post" action="destino.php">		<!-- Puede ser GET o POST -->

	<input type="text" name="mensaje">

	<input type="submit">






	</form>

</body>
</html>

<?php

echo '<p>Variable $_REQUEST</p>';
var_dump($_REQUEST);
echo "<br />";
echo '<p>Variable $_GET</p>';
var_dump($_GET);		// 
echo "<br />";
echo '<p>Variable $_POST</p>';
var_dump($_POST);		// 
echo "<br />";
echo '<p>Variable $_POST["mensaje"]</p>';
if (isset($_POST['mensaje'])) {
	echo $_POST['mensaje'];

} else {
	echo "Es la primera vez que ingresa.";
}
echo "<br />";







?>