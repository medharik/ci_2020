<?php 
include("modules.php");
$resultat=all();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>liste des produits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
   <h3 class="text-center text-danger">liste des produits </h3>
   <div class="container">
   <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libelle</th>
      <th scope="col">Prix</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($resultat as $ligne ) { ?>
    <tr>
      <th scope="row"><?=$ligne['id']?></th>
      <td><?=$ligne['libelle']?></td>
      <td><?=$ligne['prix']?></td>
      <td></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
   </div>
   
</body>
</html>