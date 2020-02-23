<?php 
include("modules.php");
$resultat=all("categorie");
$message="";
$classe="d-none";
if(isset($_GET['n'])){
  $classe="d-block";
switch($_GET['n']){
  case "upd" : $message="Modification OK";break;
  case "del" : $message="Suppression OK";break;
  case "str" : $message="Ajout OK";break;
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>liste des categories</title>
<style>

html,body{
min-height:100vh;
}
</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body oncontextmenu="" style="" class="bg-light">
<?php include("_menu.php"); ?>

<div class="alert alert-info <?=$classe?>"><?=$message;?></div>

   <h3 class="text-center text-danger">liste des categories </h3>

   <div class="container">
   <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">chemin</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($resultat as $ligne ) { ?>
    <tr>
      <th scope="row"><?=$ligne['id']?></th>
      <td><?=$ligne['nom']?></td>
      <td><?=$ligne['chemin']?></td>
      <td>
     <div class="btn-group">
      <a href="show_categorie.php?id=<?=$ligne['id']?>" class="btn btn-info btn-sm">Consulter</a>
      <a href="edit_categorie.php?id=<?=$ligne['id']?>" class="btn btn-warning btn-sm">Modifier</a>
      <a href="delete_categorie.php?id=<?=$ligne['id']?>" class="btn btn-danger btn-sm"  onclick="return confirm('Supprimer ?')">Supprimer</a>
     
     </div>

      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
   </div>
</body>
</html>