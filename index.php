<?php
/*
	inizio@gmail.com

	1. Controllare che la mail passata in GET sia ben formata e contenga un punto e una chiocciola.
	2. Se è corretta stampare un div che contenga “OK”, altrimenti che contenga “KO”.
*/

if (isset($_GET['mail'])) {
	$message = 'Parametro mail trovato';
	$mail = $_GET['mail'];

	$position_chiocciola = strpos($mail, '@');

	// TODO: caso della chiocciola iniziale non gestito, ma con un != false il problema è risolto essendo lo 0 falsy
	if ($position_chiocciola !== false && strpos($mail, '.', $position_chiocciola) !== false) {
		$result = '<div style="color:green">OK</div>';
	} else {
		$result = '<div style="color:red">KO</div>';
	}

	// if ($position_chiocciola !== false) {
	// 	$position_punto = strpos($mail, '.', $position_chiocciola);
	// 	if ($position_punto !== false) {
	// 		$result = '<div style="color:green">OK</div>';
	// 	} else {
	// 		$result = '<div style="color:red">KO</div>';
	// 	}
	// } else {
	// 	$result = '<div style="color:red">KO</div>';
	// }
} else {
	$message = 'Non hai passato nessun parametro mail';
	$result = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Email checker</h1>
	<h2><?= $message ?></h2>
	<?= $result ?>
</body>
</html>