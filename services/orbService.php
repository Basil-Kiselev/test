<?php
require_once "DataSource/orbRates.php";
require_once "Datasource/orbs.php";

getOrbs($orbs);
getRates($rates);

function getOrbsWithRates($orbs,$rates){
    foreach($orbs as $orb){
        foreach($rates as $rate){
            if ($orb['id']== $rate['orb_id']){
            $res[] = array_merge($orb,['rate' => $rate['rate']]);
            }
        } 
    } return $res;
}
