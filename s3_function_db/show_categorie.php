<?php
require("modules.php");
$id=$_GET['id'];
$categorie=find($id,"categorie");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consultation </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="card mx-auto" style="width: 18rem;">
  <img src="http://placehold.it/300x300" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$categorie['nom']?></h5>
 <br>
  </div>
 <a href="#" onclick="history.go(-1)"  class="btn btn-success btn-sm">Retour</a>
</div>
    
</body>
</html>