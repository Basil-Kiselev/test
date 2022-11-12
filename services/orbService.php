<?php
require_once './DataSource/orbRates.php';
require_once './DataSource/orbs.php';
require_once './DataSource/fileDriver.php';




function getOrbsWithRates($orbs,$rates){           
    foreach($orbs as $orb){
        foreach($rates as $rate){
            if ($orb['id']== $rate['orb_id']){
            $orbsWithRates[] = array_merge($orb,['rate' => $rate['rate']]);
            }
        } 
    } return $orbsWithRates;
}


function addOrb(string $code, string $name, int $rate){   
    $orbData = [
        'code' => $code,
        'name' => $name
    ];
    $id = insertOrbGetId($orbData);
    $rateData = [
        'orb_id' => $id,
        'rate' => $rate
    ];

    $rateID = insertRateGetId($rateData);

}

