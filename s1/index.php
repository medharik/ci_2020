<?php 
$t=[12,2,20,9,8,10];
$maj=0;
for ($i=0; $i < count($t); $i++) ( $t[$i]>18) &&  $maj++;
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
 <ul>
   <li><?=$maj?> majeur<?=(($maj>1)? "s":"")?></li>
   <li><?=(count($t)-$maj) ?> mineur<?=(((count($t)-$maj)>1)? "s":"")?></li>
 </ul>
</body>
</html>