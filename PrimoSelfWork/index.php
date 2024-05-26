<?php

//Prima traccia

// $name="Vlad";
// $is_alive=true;
// $age=23;
// $height=1.87;

// var_dump($name);
// var_dump($is_alive);
// var_dump($age);
// var_dump($height);

//Seconda traccia

// $text2 = " hai";
// $text3 = " sete";
// $text4 = "? ";
// $text5 = "Perchè";
// $text6 = 'Marco';
// $text7 = ' bevuto ';
// $text8 = "tutto";

// echo $text6. $text2. $text3. $text4. $text5. $text2. $text7. $text8;

//Terza traccia

$words1 = ['una',67,'vita ','colle','mi ','rosso',['oscura','era ',89,['mezzo ',['cammin ','Nel ',['selva ','la ',['via ','una ',true,]],]],'ritrovai ','per '],'diritta '];
$words2 = ['elemento1' => 25.89,'elemento2' => 'nostra ','elemento3' => ['Virgilio','smarrita',"'ché "]];
$words3 = ['del ', 'di ', ', ','.'];

// print_r($words1[6][3][1][1]);
// print_r($words1[6][3][0]);
// print_r($words3[0]);
// print_r($words1[6][3][1][0]);
// print_r($words3[1]);
// print_r($words2['elemento2']);
// print_r($words1[2]);
// print_r($words1[4]);
// print_r($words1[6][4]);
// print_r($words1[6][5]);
// print_r($words1[6][3][1][2][2][1]);
// print_r($words1[6][3][1][2][0]);
// print_r($words1[6][0]);
// print_r($words3[2]);
// print_r($words2['elemento3'][2]);
// print_r($words1[6][3][1][2][1]);
// print_r($words1[7]);
// print_r($words1[6][3][1][2][2][0]);
// print_r($words1[6][1]);
// print_r($words2['elemento3'][1]);
// print_r($words3[3]);

$results=$words1[6][3][1][1].$words1[6][3][0].$words3[0].$words1[6][3][1][0].$words3[1].$words2['elemento2'].$words1[2].$words1[4].$words1[6][4].$words1[6][5].$words1[6][3][1][2][2][1].$words1[6][3][1][2][0].$words1[6][0].$words3[2].$words2['elemento3'][2].$words1[6][3][1][2][1].$words1[7].$words1[6][3][1][2][2][0].$words1[6][1].$words2['elemento3'][1].$words3[3];
echo $results;





