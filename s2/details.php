<?php 
$hp=['libelle'=>'hp dv 6','prix'=>8000,
'image'=>'images/p1.png','config'=>['dd'=>400,'ram'=>'8Go']]; 
$dell=['libelle'=>'dell satelite 9','prix'=>9000,
'image'=>'images/p2.png','config'=>['dd'=>500,'ram'=>'16Go']]; 
$sony=['libelle'=>'sony vaio','prix'=>10000,
'image'=>'images/p3.png','config'=>['dd'=>600,'ram'=>'32Go']]; 
$stock=[$hp,$dell,$sony];
$position=$_GET['mouad'];//0, 1 ou 2
$produit=$stock[$position];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h3>Details du produit : .....</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
<img src="<?=$produit['image']?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
LIBELLE : <?=$produit['libelle']?><br>
Prix : <?=$produit['prix']?>
            </div>
        </div>
    </div>
    
</body>
</html>