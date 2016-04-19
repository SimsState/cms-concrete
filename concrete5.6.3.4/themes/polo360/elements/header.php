<!DOCTYPE html>
<html>
<head>
	<title>Maquette</title>
	<link rel="stylesheet" href="<?php echo $this->getThemePath();?>/assets/css/style.css">
</head>
<body>
		<div class="header">
				
				<img src="assets/images/logo.png">
				
				<div class="menu">
					<ul>
						<?php
						$a = new GlobalArea('Menu');
						$a->display($c);
						?>
					</ul>
				</div>
		</div>
