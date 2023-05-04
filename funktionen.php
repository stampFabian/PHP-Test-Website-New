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
    function quadrat($zahl1 = 2, $zahl2 = 4){
        $ergebnis = $zahl1 * $zahl2;
        return $ergebnis;
    }
    function quadrat_referenz(&$value){
        echo "<p>Wert in der Funktion: $value</p>";
        $value = $value * $value;
        echo $value . "<p>";
    }


    // Funktion mit variadischem Parameter
    function zeigeZutaten(...$args)
    {
        /*
        echo "<pre>";
        print_r($args);
        echo "</pre>";
        */

        echo "<ul>";
        foreach ($args as $val) {
            echo "<li>$val</li>";
        }
        echo "</ul>";
    }
    //zeigeZutaten("Butter", "Eier", "Mehl", "Salz");


    function zeigeDaten($nachname, $vorname, $alter)
    {
        echo "<table cellpadding=5 cellspacing=0 border=1>";
        echo "<tr><td>\$nachname:<td> $nachname</tr>";
        echo "<tr><td>\$vorname: <td>$vorname</tr>";
        echo "<tr><td>\$alter: <td>$alter</tr>";
        echo "</table>";
    }

    //zeigeDaten(vorname: 'Paula', alter: 27, nachname: 'Herbst');


?>