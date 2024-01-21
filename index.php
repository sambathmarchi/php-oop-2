<?php

require __DIR__ . '/data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Animals-Store</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center" >Our Products</h1>
        </div>

        <div class="row">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title fs-4 mt-2"> <?= $prodotto->image?> <?= $prodotto->title?> </h5>
                            <h6 class="card-subtitle mt-3"> <?= $prodotto->price?> </h6>
                            <h6 class="card-subtitle mt-2"> <?= get_class($prodotto) . " per " . $prodotto->category?->getprodotto() . "<br>"; ?> </h6>
                            <p class="card-text mt-3 mb-2"> <?= $prodotto->description ?> </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
</body>
</html>