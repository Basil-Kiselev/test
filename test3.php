<?php
$orbs = [
    [
        'id' => 1,
        'code' => 'alchemy',
        'name' => 'Orb of Alchemy',
    ],
    [
        'id' => 2,
        'code' => 'blessed',
        'name' => 'Blessed Orb',
    ],
    [
        'id' => 3,
        'code' => 'regal',
        'name' => 'Regal Orb',
    ],
    [
        'id' => 4,
        'code' => 'divine',
        'name' => 'Divine Orb',
    ],
    [
        'id' => 5,
        'code' => 'exalted',
        'name' => 'Exalted Orb',
    ],
];

$rates = [
    [
        'orb_id' => 1,
        'rate' => 100,
    ],
    [
        'orb_id' => 2,
        'rate' => 300,
    ],
    [
        'orb_id' => 3,
        'rate' => 1000,
    ],
    [
        'orb_id' => 4,
        'rate' => 15000,
    ],
    [
        'orb_id' => 5,
        'rate' => 100000,
    ],
];

foreach($orbs as $orb){
    foreach($rates as $rate){
        if ($orb['id']== $rate['orb_id']){
         $res[] = array_merge($orb,['rate' => $rate['rate']]);
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Study/bootstrap-5.2.2-dist/css/bootstrap.css ">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="flex" style="display: flex;">
<?php foreach($res as $orb){?>
<div class="card" style="width: 18rem;" >
  
  <div class="card-body">
    <h5 class="card-title"><?=$orb['name']?> </h5>
    <p class="card-text">ID товара - '<?=$orb['id']?>' </p>
    <p class="card-text">Соотношение к перандус монете 1 к <?=$orb['rate']?> </p>
    <a href="#" class="btn btn-primary">Купить</a>
  </div>
</div>
<?php } ?>
</div>



    <script src="/Study/bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





