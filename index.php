<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alumnos</title>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="style.css">
</head>
<?php
$imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
$counter = 0;
?>

<body>
	<!--<?= print_r($imgs); ?>-->
	<table class="striped-table contain-table">
		<thead>
			<tr>
				<td colspan="4">
					<h3>ALUMNOS</h3>
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php
				foreach ($imgs as $img) {
					if (substr($img, -3) == "jpg" or substr($img, -3) == "png" or substr($img, -4) == "jpeg") {
						$name = substr($img, 0, -4);
						echo "<td><a href='pages/$name.html'><img src='img/$img' width='100' height='100' alt='$name'></a></td>";
						$counter++;
						if ($counter % 4 == 0) {
							echo "</tr><tr>";
						}
					}
				}

				?>
		</tbody>
	</table>
</body>

</html>