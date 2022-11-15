<?php
// $orbs = [
//     [
//         'id' => 1,
//         'code' => 'alchemy',
//         'name' => 'Orb of Alchemy',
//     ],
//     [
//         'id' => 2,
//         'code' => 'blessed',
//         'name' => 'Blessed Orb',
//     ],
//     [
//         'id' => 3,
//         'code' => 'regal',
//         'name' => 'Regal Orb',
//     ],
//     [
//         'id' => 4,
//         'code' => 'divine',
//         'name' => 'Divine Orb',
//     ],
//     [
//         'id' => 5,
//         'code' => 'exalted',
//         'name' => 'Exalted Orb',
//     ],
// ];


function getOrbs(){
    $fileName = 'DataSource\fileSource.txt';
    $getData = file_get_contents($fileName);
    $data = json_decode($getData,true);    
    $orbs = $data['orbs']['items'];      
    return $orbs;
    }
 

