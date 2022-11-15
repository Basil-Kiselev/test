<?php
// $rates = [
//     [
//         'orb_id' => 1,
//         'rate' => 100,
//     ],
//     [
//         'orb_id' => 2,
//         'rate' => 300,
//     ],
//     [
//         'orb_id' => 3,
//         'rate' => 1000,
//     ],
//     [
//         'orb_id' => 4,
//         'rate' => 15000,
//     ],
//     [
//         'orb_id' => 5,
//         'rate' => 100000,
//     ],
// ];



function getRates(){
    $fileName = 'DataSource\fileSource.txt';
    $getData = file_get_contents($fileName);
    $data = json_decode($getData,true);
    $rates = $data['rates']['items'];
    return $rates;
}



    