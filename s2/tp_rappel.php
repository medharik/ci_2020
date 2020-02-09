<?php
$p1=['libelle'=>'hp dv 8','prix'=>8900];//$p1['libelle']
$p2=['libelle'=>'dell dv 8','prix'=>9000];
$p3=['libelle'=>'sony  8','prix'=>8000];
$stock=[$p1,$p2,$p3]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Libelle</th>
      <th scope="col">Prix</th>
</tr>
  </thead>
  <tbody>
 <?php foreach($stock as $c=>$v){ ?> 
  <tr>
      <th scope="row"><?=$v['libelle']?></th>
      <td>90000</td>
    </tr>
 <?php } ?>
  
  </tbody>
</table>
    
</body>
</html>