<?php

//Traccia uno

$users=[
    ['name'=> 'Ivan', 'surname'=>'Karamazov', 'gender'=>'maschio'],
    ['name'=>'Anna', 'surname'=>'Karenina', 'gender'=>'femmina'],
    ['name'=>'Konstantin', 'surname'=>'Levin', 'gender'=>'maschio'],
    ['name'=>'Petr', 'surname'=>'Novikov', 'gender'=>'maschio'],
    ['name'=>"Nastas'ja", 'surname'=>'Filippovna', 'gender'=>'femmina'],
];
for($i=0;$i<=4;$i++){
    if($users[$i]['gender']=='maschio'){
        echo 'Buongiorno Sig. '.$users[$i]['name'].' '.$users[$i]['surname']."\n";
    }else if($users[$i]['gender']=='femmina'){
        echo 'Buongiorno Sig.ra '.$users[$i]['name'].' '.$users[$i]['surname']."\n";
    }
}

//Seconda traccia

// $array_n=[38,21,52,17,40,31];
// $somma=0;
// for($i=0;$i<=5;$i++){
//     if($array_n[$i]%2==0){
//         $somma=$somma+$array_n[$i];
//     }
// }
// $media=$somma/6;
// echo $media;

// $users=['name'=> 'Ivan', 'surname'=>'Karamazov', 'gender'=>'maschio'];
// if($users['gender']=='maschio'){
//     echo $users['name'].' '.$users['surname'];
// }