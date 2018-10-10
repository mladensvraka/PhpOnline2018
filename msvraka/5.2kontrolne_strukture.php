<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a = 1;

if ($a <= 2) {
    echo 'varijabla a je jedanaka 1';
}
else{
    echo 'varijabla a je veca od 2';
}

echo '<hr>';

$naziv = 'AlgebraXXXZ';
if(strlen($naziv)>10){
    echo 'Naziv ima vise od 10 znakova';
}
else{
    echo 'Naziv ima manje ili jednako 10 znakova';
}

echo '<hr>';

$naziv2= 'AlgebraXX';
if(strlen($naziv2)<5 || strlen($naziv2)>=11){
    echo 'Lozinka mora imati najmanje 6 znakova i strogo manje od 11';
    echo '<br>lozinka '.$naziv2.' ima '.strlen($naziv2);
    
}
else{
    echo 'Naziv je ispravan';
}
