<!DOCTYPE html>
<html>
	<head>
		<title>Programa Culto</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--===============================================================================================-->
	</head>
	<body>
		<div class="container">
			<span class="contact100-form-title">
					Programa Iglesia
			</span>
			<p id = "R"></p>
		</div>
		<?php
			$array = array("Himno de Entrada", "Bienvenida y Avisos", "Lectura Biblica", "Himno de Oración", "Momento de Oración", "Himno 1", "Himno Creole", "Himno 3", "Himno Diezmos & Ofrendas", "Hisotria de Niños","", "Ofrenda Musical", "Sermón", "Himno de Final", "Himno de Salida");
			$names = array("a", "b", "c", "d", "e", "f", "g", "h", "k", "i", "j", "l", "m", "n", "o");
			//echo $_POST['a'];
			
			for ($x = 0; $x <= 13; $x++) {
				echo "<br>"; 
				echo "<center>".$array[$x]."</center>"; 
    			echo "<center>".$_POST[$names[$x]]."</center>"; 
				}
			$myfile = fopen("newfile.html", "w") or die("Unable to open file!");

			fwrite($myfile, "<head>"."\n");
			fwrite($myfile, "\t<meta charset='UTF-8'>\n");
			fwrite($myfile,"<meta name='viewport' content='width=device-width, initial-scale=1'>");
			fwrite($myfile, "<link rel='icon' type='image/png' href='images/icons/favicon.ico'/>");
			fwrite($myfile, "<link rel='stylesheet' type='text/css' href='vendor/bootstrap/css/bootstrap.min.css'>");
			fwrite($myfile, "<link rel='stylesheet' type='text/css' href='fonts/font-awesome-4.7.0/css/font-awesome.min.css'>");
			fwrite($myfile, "<link rel='stylesheet' type='text/css' href='vendor/animate/animate.css'>");
			fwrite($myfile, "<link rel='stylesheet' type='text/css' href='vendor/css-hamburgers/hamburgers.min.css'>");
			fwrite($myfile, "<link rel='stylesheet' type='text/css' href='vendor/animsition/css/animsition.min.css'>");
			fwrite($myfile, "<link rel='stylesheet' type='text/css' href='vendor/select2/select2.min.css'>");
			fwrite($myfile, "<link rel='stylesheet' type='text/css' href='vendor/daterangepicker/daterangepicker.css'>");
			fwrite($myfile, "<link rel='stylesheet' type='text/css' href='css/util.css'>");
			fwrite($myfile, "<link rel='stylesheet' type='text/css' href='css/main.css'>");
			fwrite($myfile, "</head>"."\n");
			fwrite($myfile, "<span class='contact100-form-title'>Programa Iglesia</span>");
			for ($x = 0; $x <= 13; $x++) {
				fwrite($myfile, "\n");
				fwrite($myfile, "<center><h5>".$array[$x]."</h5></center>");
				fwrite($myfile, "<center><p>".$_POST[$names[$x]]."</p></center>.\n");
			}
			fclose($myfile);
		?>
		<script type="text/javascript">
			document.getElementById('R').innerHTML = document.getElementByName('name')
		</script>
	</body>
</html>