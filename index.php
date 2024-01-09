<?php
// traccia 1
$integer = 3;
$float = 1.50;
$stringa = "Ciao sono la mia prima stringa in php";
$booleano = true;

// var_dump($integer, $float, $stringa, $booleano);

// traccia 2
$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè?";
$text6 = $text2;
$text7 = "bevuto";
$text8 = "tutto";

// echo $text1 .' '. $text2 . ' '. $text3 . ' ' . $text4 . ' ' . $text5 . ' ' . $text6 . ' ' . $text7;

// traccia 3

$words1 = ['una', 67, 'vita','colle','mi','rosso',['oscura','era',89,['mezzo',['cammin','Nel',['selva','la',['via',"una",true,]],]],'ritrovai','per'],'diritta'];

$words2 = ['elemento1' => 25.89, 'elemento2' => 'nostra','elemento3' => ['Virgilio', 'smarrita', 'chè']];
    
// print_r($words1);
// echo $words1[6][3][1][1] . ' ' . $words2[6][3] . ' ' . $words1[6][3][1][0] . ' ' . 'di' . ' ' . $words2 ['elemento2'] . ' ' . $words1[2] . ' ' . $words1[4] . ' ' . $words1[6][4] . ' ' . $words1[6][5] . ' ' . $words1[6][3][1][2][2][1] . ' ' .  $words1[6][3][1][2][0] . ' ' . $words1[6][0] . ' ' . "," . ' ' . $words2[3][3] .  $words2['elemento3'][2] .' ' . $words1[6][3][1][2][1] . ' ' . $words1[7] . ' ' . $words1[6][3][1][2][2][0] . ' ' . $words1[6][1] . ' ' . $words2["elemento3"][1];


// Traccia 4

$x = 10;
$y = 20;
$z = "20";
$w = 10;

// var_dump($x == $z);
// var_dump($x < $y);
// var_dump($y === $z);
// var_dump($y == $z);
// var_dump($y != $z);
// var_dump($y !== $z);

// Traccia 5

$corsoHackademy = ["docenti" => ["daniele","emanuele"], "studenti" => ["pippo","franco","coppola"], "argomenti" =>["html","css","bootstrap","javascript","php"],];

// echo ("Sono" . ' ' . $corsoHackademy ["studenti"][0] . ' ' . "e sto studiando" . ' ' . $corsoHackademy ["argomenti"][4] . ' ' . "con" . ' ' . $corsoHackademy["docenti"][1]); 