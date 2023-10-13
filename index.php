<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<form class="calcForm" method="get" action="index.php">
			<p class="calc">Simple calculator form</p>
			<img id="calculImg" src="1.png" alt="Calculator" height="350"/>
			<br>
			<label>Put Your First Number</label><br>
			<input type="number" name="num1"><br>
			<label>Put Your Second Number</label><br>
			<input type="number" name="num2"><br><br>
			<select name="operationType">
				<option value="add">add</option>
				<option value="sub">substact</option>
				<option value="multi">multiply</option>
				<option value="divide">divide</option>
				
			<input type="submit" value="Count">
		</form>
	</body>
</html>
<?php
	if(!empty($_GET['num1']) && !empty($_GET['num2'])){
		if (($_GET['operationType'] == 'sub')) {
			echo 'Róznica ' . $_GET['num1'] . ' i ' . $_GET['num2'] . ' równa się: ' . ($_GET['num1']- $_GET['num2']);;
		}elseif (($_GET['operationType'] == 'multi')) {
			echo 'Mnożenie ' . $_GET['num1'] . ' i ' . $_GET['num2'] . ' równa się: ' . ($_GET['num1']* $_GET['num2']);
		}elseif (($_GET['operationType'] == 'divide')) {
			if($_GET['num2'] = 0){
				echo 'Nie dzielimy na 0!';
			}else {
				echo 'Dzielenie ' . $_GET['num1'] . ' i ' . $_GET['num2'] . ' równa się: ' . ($_GET['num1']/ $_GET['num2']);
			}
		}else {
			echo 'Suma ' . $_GET['num1'] . ' i ' . $_GET['num2'] . ' równa się: ' . ($_GET['num1']+ $_GET['num2']);
		}
	}else {
		echo '<p class="comment">' . 'Wprowadź liczby' . '</p>';
	}
