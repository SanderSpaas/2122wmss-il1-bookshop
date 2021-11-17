<?php
// script by sander spaas
//The P language script ;)

// Schrijf een CLI-script p_taal.php dat wordt aangeroepen met één argument, namelijk een zin. Deze
// zin wordt omgezet naar de p-taal (klinkers worden vervangen door klinker+p+klinker). Daarna
// wordt er getoond voor elke klinker hoeveel keer die is voorgekomen, in aflopende volgorde.
// $ php p_taal.php "Dit is een voorbeeld"
// Dipit ipis eepeen voopoorbeepeeld
// e 4
// i 2
// o 2
// Het script werkt dus ook voor tweeklanken.

// echo("dit is de meegeven input");
// echo($argv[1]);
$input = str_split($argv[1]);
$klinkers = array('a', 'e', 'i', 'o', 'u');
$counters = array('a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0);
$output = '';
$lettercache = '';
foreach ($input as $letter) {
    if (in_array(strtolower($letter), $klinkers)) {
        $counters[$letter]++;
        if($letter == $lettercache){
            $output = substr($output,0,strlen($output)-3)  . $letter . $letter . 'p' . $letter . $letter;
        }else{  
            $output = $output . $letter . 'p' . $letter;
        }
    } else {
        $output = $output . $letter;
    }
    $lettercache = $letter; 
}
echo $output;
echo "\n";
//array gaan sorteren en dan gaan weergeven
arsort($counters);
print_r($counters);
