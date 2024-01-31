<?php


//Esercizio 1

// $utenti = [ 
//     ['name' => 'enrico', 'surname' => 'markaj', 'gender' => 'M'], 
//     ['name' => 'alessio', 'surname' => 'Pollo', 'gender' => 'F'], 
//     ['name' => 'fabio', 'surname' => 'Gvio', 'gender' => 'M'], 
//     ['name' => 'tred', 'surname' => 'fello', 'gender' => 'NB'], 
//     ['name' => 'Davide', 'surname' => 'golia', 'gender' => 'M'], 
// ];

// foreach($utenti as $utente){
//     if ($utente['gender'] == "M"){
//         echo "Buongiorno Sig. {$utente['name']} {$utente['surname']}\n";
//     } else if ($utente['gender'] == "F"){
//         echo "Bungiorno Sig.ra {$utente['name']} {$utente['surname']}\n";
//     } else echo "Buongiorno {$utente['name']} {$utente['surname']}\n";
// }

// Esercizio 2 Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

// $numeri= [1,2,3,4,5,6,7,8];
// $somma=0;
// $numeripari=0;

// for($i=0; $i<8; $i++){
//     if($numeri[$i]%2 == 0){
//         $somma+=$numeri[$i];
//         ++$numeripari;
//     };
// };


// $media= $somma/$numeripari;

// echo $media;

// Esercizio 3 
// - Scrivere un programma che stampi in console tutti i numeri da uno a cento.
// - Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
// - se multiplo di 5 stampare “JAVASCRIPT”;
// - se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".


// for ($i=0; $i<100; $i++){
//     if($i%3==0 && $i%5==0){
//     echo "HACKADEMY\n";} else if ($i%3==0){ echo "PHP\n";
//     } else if($i%5==0){ echo "JAVASCRIPT\n";
//     } else { echo "$i\n";}
// };


// Esercizio 4  

// $temperatura= readline("inserisci un numero"); 

// if ($temperatura <= 5){
//     echo "Fa troppo freddo";
// } else if($temperatura < 15){
//     echo "Fa freddo";
// } else if ($temperatura > 25) { 
//     echo "Fa troppo Caldo";
// } else if ($temperatura >= 15) { 
//     echo "Fa Caldo";} 


// Esercizio 5


// $meteo = [
//     "Venezia" => 16,  "Bari" => 32,
//     "Roma" => 28,  "Napoli" => 30,
//     "Milano" => 4,  "Palermo" => 14,
//     "Torino" => 24,  "Roccaraso" => -5000,
//     "Lecce" => 27,  "Genova" => 30,
//     "Catania" => 11,  "Cosenza" => 9,
// ];

// foreach($meteo as $citta => $temperatura){ 
//     if ($temperatura <= 5){
//         echo "A {$citta} fa troppo freddo con {$temperatura}\n";
//     } else if($temperatura < 15){
//         echo "A {$citta} fa freddo con {$temperatura}\n";
//     } else if ($temperatura > 25) { 
//         echo "A {$citta} fa troppo caldo con {$temperatura}\n";
//     } else if ($temperatura >= 15) { 
//         echo "A {$citta} fa caldo con {$temperatura}\n";} 
// }


// Esercizio 6 

$meteo = [

];

if ($meteo){
foreach($meteo as $citta => $temperatura){ 
    if ($temperatura <= 5){
        echo "A {$citta} fa troppo freddo con {$temperatura}\n";
    } else if($temperatura < 15){
        echo "A {$citta} fa freddo con {$temperatura}\n";
    } else if ($temperatura > 25) { 
        echo "A {$citta} fa troppo caldo con {$temperatura}\n";
    } else if ($temperatura >= 15) { 
        echo "A {$citta} fa caldo con {$temperatura}\n";} 
}  
} else { echo "Nessuna misurazione disponibile";}































?>