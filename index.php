<?php
	date_default_timezone_set("Europe/Amsterdam");

	$time = date( "H");
	$timezone = date("e");
	$message; 

	if ($time >= "24" && $time < "6") {
		$message = "Goedenacht!";
		$imageURL = "backgrounds/night.png";
	} elseif	($time >= "6" && $time <"12") {
		$message = "Goedemorgen!";
		$imageURL = "backgrounds/morning.png";
	} elseif ($time >= "12" && $time < "18") {
		$message = "Goedeavond!";
		$imageURL = "backgrounds/afternoon.png";
	} elseif	($time >= "18" && $time <"24") {
		$message = "Goedenacht!";
		$imageURL = "backgrounds/evening.png";
		}

echo date("<p>H:i</p>");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Goede-php</title>
	<link rel="stylesheet" type="text/css" href="goede.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">

</head>
<body style="background-image: url(<?php echo $imageURL; ?>); background-size: cover;">
<p>
	<?php echo $message; ?>
</p>

</body>
</html>

	