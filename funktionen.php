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
    function multipliziere($zahl1 = 2, $zahl2 = 4){
        $ergebnis = $zahl1 * $zahl2;
        return $ergebnis;
    }
?>