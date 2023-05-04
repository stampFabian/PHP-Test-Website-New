<?php
	require "funktionen.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Titel der Seite</title>
	<link rel="stylesheet" href="styles/css/bootstrap.css" />
	<!-- <link rel="stylesheet" href="styles/style.css" /> -->
	
</head>
<body>
	<div class="container-fluid">	
		<div class="row bg-primary">
			<p>Header</p>
		</div>
		<div class="row">
			<div class="col-2 bg-secondary">
			  <p>Menü</p>
			  <ul class="list-group">
				<li class="list-group-item">
					<a href="<?php $_SERVER['PHP_SELF']; ?>?menu=1">Formulardaten</a>
				</li>
				<li class="list-group-item">
					<a href="<?php $_SERVER['PHP_SELF']; ?>?menu=2">Array</a>
				</li>
				<li class="list-group-item">
					<a href="<?php $_SERVER['PHP_SELF']; ?>?menu=3">Formular</a>
				</li>
				<li class="list-group-item">
					<a href="<?php $_SERVER['PHP_SELF']; ?>?menu=4">Text</a>
				</li>
				<li class="list-group-item">
					<a href="<?php $_SERVER['PHP_SELF']; ?>?menu=5">Operatoren</a>
				</li>				
			  </ul>
			</div>
			<div class="col-9 bg-light">
			
			<?php
			if(isset($_GET['menu'])) 
			{
				$m = $_GET['menu'];
			}
			else 
			{
				$m = 0;
			}
			switch($m)
			{
				Case 0:
					echo "<h1>Willkomen, Gast</h1>";
				break;
				Case 1:
					echo "<h1>Formulardaten</h1>";
			
					if(isset($_POST['btnSubmit'])) 
					{
						echo "<p>Vorname: ".$_POST['vn']."</p>";
						echo "<p>Nachname: ".$_POST['nn']."</p>";
						echo "<p>Geburtsdatum: ".$_POST['gebdat']."</p>";
						echo "<p>E-Mail: ".$_POST['mail']."</p>";
						echo "<p>Kennwort : ".$_POST['pw']."</p>";
						if(isset($_POST['cb']) && $_POST['cb'] == true) 
						{
							echo "<p>Checkbox: angehakt</p>";
						}
						else 
						{
							echo "<p>Checkbox: nicht angehakt</p>";
						}
					}
					else 
					{
						echo "<p>Keine Formulardaten definiert.</p>";
					}
				break;
				Case 2:
					echo "<pre>";
					print_r($_POST);
					echo "</pre>";
				break;
				Case 3:
					?>
					<form action="<?php $_SERVER['PHP_SELF']; ?>?menu=1" method="POST" id="daten" name="daten">
						<div class="mb-3">
							<label for="vorname" class="form-label">Vorname: </label>
							<input type="text" class="form-control" id="vorname" name="vn" aria-describedby="vornameHelp">
							<div id="vornameHelp" class="form-text">Bitte geben Sie Ihren Vornamen ein!</div>
						</div>
						<div class="mb-3">
							<label for="nachname" class="form-label">Nachname: </label>
							<input type="text" class="form-control" id="nachname" name="nn" aria-describedby="nachnameHelp">
							<div id="nachnameHelp" class="form-text">Bitte geben Sie Ihren Nachnamen ein!</div>
						</div>
						<div class="mb-3">
							<label for="geburtsdatum" class="form-label">Geburtsdatum: </label>
							<input type="date" class="form-control" id="geburtsdatum" name="gebdat">
						</div>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp">
							<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" name="pw">
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1" name="cb">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
						</div>
						<button type="submit" class="btn btn-primary" id="btnSubmit" name="btnSubmit">Submit</button>
						<button type="reset" class="btn btn-secondary">zurücksetzen</button>
				
					</form>
					<?php
				break;
				Case 4:
					include("pages/text.html");
				break;
				Case 5:

				$zahl1 = 10;
				$zahl2 = "15";
				$ergebnis = $zahl1 + $zahl2;
				
				echo "<p>$ergebnis</p>";
				echo "<p>".gettype($zahl1)."--> $zahl1</p>";
				echo "<p>".gettype($zahl2)."--> $zahl2</p>";
				
				if(gettype($zahl2) == "integer") //if($zahl2 === 15) 
				{
					echo "<p>Zahl 2 ist eine Zahl!</p>";
				}
				else 
				{
					echo "<p>Zahl 2 ist keine Zahl!</p>";
				}
				
				$staedte = array("Berlin", "Wien", "Frankfurt", "Hamburg");
				
				echo "<pre>";
				print_r($staedte);
				echo "</pre>";
				
				echo $staedte[2];
				
				$hauptstaedte = array("Schweiz" => "Bern", 
									  "Deutschland" => "Berlin",
									  "Österreich" => "Wien",
									  "Italien" => "Rom"						);
				echo "<pre>";
				print_r($hauptstaedte);
				echo "</pre>";
				
				echo $hauptstaedte["Österreich"];
				//echo $hauptstaedte[2]; --> so nicht möglich!
				
				//$staedte = "Paris"; überschreibt das Array
				$staedte[4] = "Paris";
				
				echo "<pre>";
				print_r($staedte);
				echo "</pre>";
				
				unset($staedte[2]);
				
				echo "<pre>";
				print_r($staedte);
				echo "</pre>";
				
				$staedte[] = "London";
				
				echo "<pre>";
				print_r($staedte);
				echo "</pre>";
				
				$staedte[100] = "Madrid";
				
				echo "<pre>";
				print_r($staedte);
				echo "</pre>";
				
				$staedte[] = "Lissabon";
				
				echo "<pre>";
				print_r($staedte);
				echo "</pre>";
				
				$staedte[51] = "Budapest";
				
				echo "<pre>";
				print_r($staedte);
				echo "</pre>";
				
				foreach($staedte as $s)
				{
					echo "<p>$s</p>";
				}
				
				
				$hauptstaedte = array("Schweiz" => "Bern", 
									  "Deutschland" => "Berlin",
									  "Österreich" => "Wien",
									  "Italien" => "Rom"						);
				
				
				$hauptstaedte["Ungarn"] = "Budapest";
				
				unset($hauptstaedte["Italien"]);
				
				echo "<pre>";
				print_r($hauptstaedte);
				echo "</pre>";
				
				$hauptstaedte[] = "Zagreb";
				
				echo "<pre>";
				print_r($hauptstaedte);
				echo "</pre>";
				
				$hauptstaedte[] = "Sarajevo";
				
				echo "<pre>";
				print_r($hauptstaedte);
				echo "</pre>";
				
				$hauptstaedte["Code"] = 1245.25468;
				
				echo "<pre>";
				print_r($hauptstaedte);
				echo "</pre>";
				
				foreach($hauptstaedte as $land => $stadt)
				{
					echo "<p>Die Hauptstadt von $land ist $stadt.</p>";
				}
				
				$person = array(
							array("Oliver",
								"Spanisch",
								"37 Jahre"
							),
							array("Maria",
								"Deutsch",
								"23 Jahre"
							),
							array("Oliver",
								"Englisch",
								"46 Jahre"
							)
						);

						echo "<pre>";
						print_r($person);
						echo "</pre>";

						echo "<p>".$person[1][0]." spricht ".$person[1][1]." und ist ".$person[1][2]." alt.</p>";

						foreach ($person as $key => $ausgabe) {
							list($vornamen, $sprache, $alter) = $ausgabe;
							echo "<table><tr>";
							//echo "<td>" . key . ", </td>";
							echo "<td>" . $vornamen . ", </td>";
							echo "<td>" . $sprache . ", </td>";
							echo "<td>" . $alter . ", </td>";
							echo "</tr></table>";
						}


				ersteFunktion();
				zweiteFunktion("zweiten", 1234);
				echo "<p>".dritteFunktion(5, 6)."</p>";

				break;
				
			}
			
			
			?>
			
			
			  
			</div>
			<div class="col-1 bg-info">
			  <p>Werbung</p>
			</div>
		</div>
		<div class="row bg-success">
			<p>Footer</p>
		</div>	
	</div>

</body>
</html>