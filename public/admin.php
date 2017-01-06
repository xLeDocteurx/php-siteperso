<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADMIN AREA</title>
</head>
<body>
	<h1>Zone réservée à l'admin</h1>

	<?php
$json = file_get_contents(__DIR__.'/../data/last_message.json');
$msg = json_decode($json);
	?>

<dl>
	<dt>Nom</dt>
	<dd><?= $msg->name ?></dd>
	<dt>Message</dt>
	<dd><?= $msg->message ?></dd>
</dl>
</body>
</html>