<?php 

	define("HOST", "localhost");
	define("PORT", 3306);
	define("USER", "adm_webgenerator");
	define("PASS", "webgenerator2024");
	define("DB", "webgenerator");

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="interface.css">
</head>
<body>
	<div id="controls">
			<div id="temp">
				<div id="temp-int">00</div>
					<div id="temp-col">
						<div id="temp-unit">ºC</div>
						<div id="temp-dec">.00</div>
					</div>
			</div>


			<div id="humedad">
				<div id="humedad-int">00</div>
					<div id="humedad-col">
						<div id="humedad-unit">%</div>
						<div id="humedad-dec">.00</div>
					</div>
			</div>

			<div id="viento">
				<div id="viento-int">00</div>
					<div id="viento-col">
						<div id="viento-unit">km/h</div>
						<div id="viento-dec">.00</div>
					</div>
			</div>


			 <div id="incendio">
				<div id="incendio-int">00</div>
					<div id="incendio-col">
						<div id="incendio-unit">%</div>
						<div id="incendio-dec">.00</div>
					</div>
			</div> 
	</div>

	<script src="refresh.js"></script>
</body>
</html>