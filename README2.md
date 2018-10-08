**Marc** i _Khalid_

(http://www.iesesteveterradas.cat/)


<code>
	
	<form method="post">
	<?php
	$preu_base = 5;

	echo "<input type='checkbox' name='num1' value='Orenga'> Orenga\n";
	echo "<input type='checkbox' name='num2' value='parnil'> Pernil dolç\n";
	echo "<input type='checkbox' name='num3' value='Formatge'> Formatge\n";
	echo "<input type='checkbox' name='num4' value='Bacon'> Bacon\n";
	echo "<input type='checkbox' name='num5' value='Massa'> Massa\n";


	if (isset($_POST['num1']) && isset($_POST['num5'])) {
		if (isset($_POST['num1'])) {
			$preu_base = $preu_base + 0.5;
		} 
		if (isset($_POST['num2'])) {
			$preu_base = $preu_base + 0.5;
		}
		if (isset($_POST['num3'])) {
			$preu_base = $preu_base + 0.5;
		}
		if (isset($_POST['num4'])) {
			$preu_base = $preu_base + 0.5;
		}
		if (isset($_POST['num5'])) {
			$preu_base = $preu_base + 0.5;
		}'
