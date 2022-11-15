<?php

function checkStructure(string $entity){
    $fileName = 'dataSource/fileSource.txt';
    $data = [];

    if (file_exists($fileName)){        
        $fileContent = file_get_contents($fileName);            
        $data = json_decode($fileContent,true);           
    } 
    
    if (!is_array($data)){
        die('Формат файла некорректен');
    }

    if (!array_key_exists($entity,$data)){            
        $data[$entity] = [
            'auto_increment' => 1,
            'items' => [],
        ];
        $encodeData = json_encode($data);
        file_put_contents($fileName,$encodeData);
    }
    
        return true;        
}

function insertOrbGetId(array $orbData): int{
    checkStructure('orbs');
    $fileName = 'dataSource/fileSource.txt';
    $fileData = file_get_contents($fileName);
    $data = json_decode($fileData,true);    
    $id = $data['orbs']['auto_increment'];
    $orbData['id'] = $id;
    $data['orbs']['items'][] = $orbData;
    $data['orbs']['auto_increment'] +=1;
    $data = json_encode($data); 
    file_put_contents($fileName,$data);    
    return $id;    
}

function insertRateGetId(array $rateData): int{
    checkStructure('rates');
    $fileName = 'dataSource/fileSource.txt';
    $fileData = file_get_contents($fileName);
    $data = json_decode($fileData,true);
    $rateID = $data['rates']['auto_increment'];
    $rateData['id'] = $rateID;    
    $data['rates']['items'][] = $rateData;
    $data['rates']['auto_increment'] +=1; 
    $data = json_encode($data);
    file_put_contents($fileName,$data);        
    return $rateID;
}


function checkFileSource (){
    if (!file_exists('DataSource\fileSource.txt')){
        $data = [
           'orbs' => [
                'auto_increment' => 1,
                'items' => []                
           ],
           'rates' => [
                'auto_increment' => 1,
                'items' => []  
           ]
           ];
                   
        $encodeData = json_encode($data); 
        file_put_contents('DataSource\fileSource.txt',$encodeData);
    }
}

function checkFileDataSource (){
    $fileName = 'dataSource/fileSource.txt';
    $fileData = file_get_contents($fileName);
    $data = json_decode($fileData,true);

        if (!empty($data['orbs']['items'])){
            return true;
        }
}

function validateForm ($dataForm){
    $result = true;
    $formFields = [
        'code',
        'name',
        'rate'
    ];

    foreach ($formFields as $formField){       
        if (empty($dataForm[$formField])){
            $result = false;
        }
    }
    return $result;
}