<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Projecte Welcome 1</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #ffffff;
			color: #333333;
			transition: background-color 0.3s, color 0.3s;
		}

		/* Dark mode styles */
		body.dark-mode {
			background-color: #333333;
			color: #ffffff;
		}

		body.dark-mode header {
			background-color: #1a1a1a;
		}

		body.dark-mode button {
			background-color: #17a2b8;
		}

		header {
			background-color: #f2f2f2;
			padding: 1rem;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		button {
			background-color: #007bff;
			color: #ffffff;
			border: none;
			padding: 0.5rem 1rem;
			border-radius: 4px;
			cursor: pointer;
		}

		table,
		th,
		td {
			border: 1px solid black;
		}

		table {
			width: 100%;
		}

		td {
			width: 25%;
		}

		td>a {
			font-size: 24px;
			text-decoration: none;
			display: block;
			text-align: center;
		}

		td>a>img {
			width: 200px;
			display: block;
			margin: 0 auto;
		}

		
	</style>
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

		echo "<table>";
		foreach ($imgs as $img) {
			if ($img == "." || $img == "..")
				continue;
			if (substr($img, -3) == "jpg" or substr($img, -3) == "png") {
				$name = substr($img, 0, -4);
			} else if (substr($img, -4) == "jpeg") {
				$name = substr($img, 0, -5);
			}

			if ($i == 0) {
				echo "<tr>";
			}

			echo "<td>";
			echo "<a href='profile/$name.html'>";
			echo "<img src='img/$img'><br>";
			echo "$name</a>";
			echo "</td>";

			if ($i == 3) {
				$i = 0;
				echo "</tr>";
			} else {
				$i++;
			}
		}
		echo "</table>";
		?>
	</main>
	<footer>
		<p><cite>Lista de Perfiles</cite> creado por Iván Díaz Sánchez. Curso 2024-2025</p>
	</footer>

	<script>
		const darkModeToggle = document.getElementById('dark-mode-toggle');
		const body = document.body;

		darkModeToggle.addEventListener('click', () => {
			body.classList.toggle('dark-mode');
		});
	</script>
</body>