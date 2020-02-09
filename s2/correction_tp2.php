<?php 
$e1=['nom'=>'john','age'=>21,'notes'=>['php'=>1,'vb.net'=>16]];
$e2=['nom'=>'doe','age'=>23,'notes'=>['java'=>14,'php'=>1,'vb.net'=>14]];
$e3=['nom'=>'clark','age'=>24,'notes'=>['math'=>20,'java'=>14,'php'=>10,'vb.net'=>10]];
$etudiants=[$e1,$e2,$e3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tableaux en PHP</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h3 class="text-center text-danger">Liste des  <?=count($etudiants);?> etudiants  : </h3>
    
    <!-- table>((thead>tr>th*3)+(tbody>tr>td*4)) -->
   <div class="container">
   <table class="table table-striped cigma">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Age</th>
      <th scope="col">Note</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($etudiants as $c=>$e ) {?>
  <tr>
      <th scope="row"><?=$e['nom']?></th>
      <td><?=$e['age']?></td>
      <td>
<ul>
<?php  
$somme=0;
foreach($e['notes'] as $nomMatiere=>$laNote) {
$somme +=$laNote;
    
?>
<li><?=$nomMatiere?> :<?=$laNote?></li>
<?php } ?>

<br>
<?php 
 $moyenne =$somme/count($e['notes']);
if($moyenne<8){
    $color='danger';
}else if($moyenne<10){
$color='warning';
}else{
    $color='primary';

}
?>
La moyenne est :
<span class="badge badge-<?=$color?>">
 <?php echo number_format( $moyenne,2,',','.');?>
</span>
</ul>


      </td>
 </tr>
  <?php } ?>
   
  </tbody>
</table>
   </div><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('.cigma').DataTable();
} );
</script>
</body>
</html>