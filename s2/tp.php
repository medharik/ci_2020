<?php 
$hp=['libelle'=>'hp dv 6','prix'=>8000,
'image'=>'images/p1.png','config'=>['dd'=>400,'ram'=>'8Go']]; 
$dell=['libelle'=>'dell satelite 9','prix'=>9000,
'image'=>'images/p2.png','config'=>['dd'=>500,'ram'=>'16Go']]; 
$sony=['libelle'=>'sony vaio','prix'=>10000,
'image'=>'images/p3.png','config'=>['dd'=>600,'ram'=>'32Go']]; 
$stock=[$hp,$dell,$sony];
// echo $stock[2]['libelle'];
// echo $stock[2]['config']['ram'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>

<h2 class="text-center text-primary">liste des <?= count($stock);?> produits</h2>
<!-- table>tr*2>td*4 -->

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Libelle</th>
      <th scope="col">Prix</th>
      <th scope="col">Image</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php  for($i=0;$i<count($stock);$i++) { ?>
    <tr>
      <th><?=$stock[$i]['libelle'] ;?></th>
      <td><?=$stock[$i]['prix'] ;?></td>
      <td><img src="<?=$stock[$i]['image'] ;?>" width="150"></td>
      <td>@mdo</td>
    </tr>
    <?php } ?>
  
  </tbody>
</table>

<hr>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Libelle</th>
      <th scope="col">Prix</th>
      <th scope="col">Image</th>
      <th scope="col">Config</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php  foreach($stock as $c=>$v) { ?>
    <tr>
      <th><?=$v['libelle'] ;?></th>
      <td><?=$v['prix'] ;?></td>
      <td><img src="<?=$v['image'] ;?>" width="150"></td>
      <td>
<ul class="list-group">
      <?php foreach($v['config'] as $x=>$y){ ?>
<li  class="list-group-item"><?=$x?> : <?=$y?></li>
       <?php }?>
  </ul>
      </td>
      <td><?=$c+1?></td>
    </tr>
    <?php } ?>
  
  </tbody>
</table>

<hr>

<div class="container">
  <div class="row">
  
  <?php  foreach($stock as $c =>$produit) {?>
  <div class="col-md-4 text-center shadow border">
      <img style="height:300px;object-fit:cover" src="<?=$produit['image']?>" alt="" class="img-fluid" >
  
     <h3><?=$produit['libelle']?></h3>
     <h3><?=$produit['prix']?> DHS</h3>
     <a href="details.php?mouad=<?=$c?>" class="btn btn-sm btn-primary">Details</a>
   </div>
   <?php } ?>

  </div>
    </div>

  </body></html>
