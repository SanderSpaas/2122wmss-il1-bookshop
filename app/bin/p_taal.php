<?php
// script by sander spaas
//The P language script ;)

// Schrijf een CLI-script p_taal.php dat wordt aangeroepen met één argument, namelijk een zin. Deze
// zin wordt omgezet naar de p-taal (klinkers worden vervangen door klinker+p+klinker). Daarna
// wordt er getoond voor elke klinker hoeveel keer die is voorgekomen, in aflopende volgorde.
// $ php p_taal.php "Dit is een voorbeeld"
// Dipit ipis eepeen voopoorbeepeeld
// Dipit ipis epeepen vopooporbepeepeld
// e 4
// i 2
// o 2
// Het script werkt dus ook voor tweeklanken.

// echo("dit is de meegeven input");
// echo($argv[1]);
$input = str_split($argv[1]);
$klinkers = array('a','e','i','o','u');
$counters = array('a' => 0, 'e'=> 0, 'i'=> 0, 'o'=> 0, 'u'=> 0);

foreach($input as $letter){
    if(in_array(strtolower($letter),$klinkers)){
        echo($letter);
        echo("p");
        echo($letter);
        $counters[$letter]++;
    }else{
      echo($letter);  
    }
}
echo "\n";
//array gaan sorteren en dan gaan weergeven
arsort($counters);
print_r($counters);