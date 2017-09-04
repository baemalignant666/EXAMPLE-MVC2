<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8"/>
		<title>Nombre y Estatura</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Nombre</td>
				<td>Estatura</td>
			</tr>
			<?php
				foreach($datos as $dato){
					echo "<tr><td>".$dato['NOMBRE']."</td>";
					echo "<td>".$dato['ESTATURA']."</td>";
				}
			?>
		</table>
	</body>
</html>
				