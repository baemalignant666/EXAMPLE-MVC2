<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title>Nombre y Edad</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Nombre</td>
				<td>Edad</td>
			</tr>
			<?php
				foreach($datos as $dato){
					echo "<tr><td>".$dato['NOMBRE']."</td>";
					echo "<td>".$dato['EDAD']."</td>";
				}
			?>
		</table>
	</body>
</html>
				