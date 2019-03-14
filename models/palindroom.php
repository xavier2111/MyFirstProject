<?php

//Hier komen alle functies die te maken hebben met een palindroom.
// palindroom = woord omdraaien henk|kneh.

function revertWord($tekst){
    $revertTekst = "";
    // We gebruiken een for loop omdat we de rangeomvang kennen.
    for ($index = strlen($tekst) - 1; $index > -1 ; $index --){
        echo $tekst[$index]. "<br />";
        $revertTekst =  $revertTekst . $tekst[$index];
    }
    return $revertTekst;
}
