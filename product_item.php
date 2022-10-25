<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Items</title>
	<? include "parts/meta.php"?>
</head>
<body>
	<? include "parts/navbar.php"?>
	<div class="container">
		<div class="card soft">
			<p>This is Item #<?= $_GET['id'] ?></p>
		</div>
	</div>
</body>
</html>