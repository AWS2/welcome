<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css">
	<title>Projecte Welcome 1</title>
</head>

<body>
	<header>
		<h1>Projecte Welcome 1</h1>
		<button id="dark-mode-toggle">Cambiar a Modo Oscuro</button>
	</header>

	<main>
		<?php
		$imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
		$i = 0;

		echo "<table>\n";
		foreach ($imgs as $img) {
			if ($img == "." || $img == "..")
				continue;
			if (substr($img, -3) == "jpg" or substr($img, -3) == "png") {
				$name = substr($img, 0, -4);
			} else if (substr($img, -4) == "jpeg") {
				$name = substr($img, 0, -5);
			}

			if ($i == 0) {
				echo "<tr>\n";
			}

			echo "<td id='$name'>
					<img src='img/$img' alt='Imagen de $name'>
					<p>$name</p>
				</td>\n";

			if ($i == 3) {
				$i = 0;
				echo "</tr>\n";
			} else {
				$i++;
			}
		}
		if ($i != 0) {
			echo "</tr>\n";
		}
		echo "</table>\n";
		?>
	</main>
	<footer>
		<p><cite>Lista de Perfiles</cite> creada por Iván Díaz Sánchez. Curso 2024-2025</p>
	</footer>

	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function() {
			const darkModeToggle = document.getElementById('dark-mode-toggle');
			const body = document.body;

			darkModeToggle.addEventListener('click', () => {
				body.classList.toggle('dark-mode');
				if (darkModeToggle.innerHTML == "Cambiar a Modo Oscuro") {
					darkModeToggle.innerHTML = "Cambiar a Modo Claro";
				} else {
					darkModeToggle.innerHTML = "Cambiar a Modo Oscuro";
				}
			});


			const cells = document.getElementsByTagName("td");
			for (cell of cells) {
				cell.addEventListener("click", function(event) {
					window.location.href = "profile/" + event.currentTarget.id + ".html";
				});
			}


		});
	</script>
</body>