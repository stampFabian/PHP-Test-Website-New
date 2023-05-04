<?php
function ersteFunktion(){
	echo "<br><p>Text aus der ersten Funktion</p>";
}

function zweiteFunktion($counter, $zahl){
	echo "<p>$zahl ist ein Text aus der $counter Funktion</p>";
}

function dritteFunktion($zahl1, $zahl2){
	$ergebnis = $zahl1 + $zahl2;
	return $ergebnis;
}

?>