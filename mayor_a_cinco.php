<html>
<head>
	<title>Menor a cinco</title>


</head>
<body>

	<p>Mayor a cinco</p>

<?php

if (isset($_POST['mensaje'])) {
	echo $_POST['mensaje'];
} else {
	echo "???";
}

?>

</body>
</html>