<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./favicon.svg" type="image/x-icon">
	<script src="https://kit.fontawesome.com/1f29982313.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="build/css/App.css">
	<title>Gamelog | <?php echo $title;  ?></title>
</head>

<body>

	<?php echo $content;  ?>
	<?php echo $script ?? '';  ?>

</body>

</html>