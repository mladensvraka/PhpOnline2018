<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$zbroj=0;
$i=1;
$konacnibroj=6;

while (($i <= $konacnibroj) || ($zbroj <= 15)) {
    $zbroj += $i;
    echo $i;' ';
    $i++;
}
echo "<br>ukupna suma x brojeva =".$zbroj;


echo '<hr> primjer sa do-while<br>';

do {
    $zbroj += $i;
    echo $i;' ';
    $i++;
}
while (($zbroj <=15));
echo "<br>ukupna suma x brojeva =".$zbroj;


echo '<hr>';

$zbroj=0;
$i=1;
$konacnibroj=1000;


while (($i <= $konacnibroj) || ($zbroj <= 15)) {
    $zbroj += $i;
    echo $i;' ';
    $i++;
}
echo "<br>ukupna suma x brojeva =".$zbroj;

