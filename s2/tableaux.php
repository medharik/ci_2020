<?php 
$in=[12,15,18];
// echo $in[0];
$a=['nom'=>'Alami','prenom'=>'Ali'];//$c=>$v
//print_r( $a);
// var_dump($a);
$in[]=31;
//$a[]=19;
// var_dump($in);
//var_dump($a);
// length = size = count
//echo count($in);
$a['age']=19;
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
<?php foreach($a as $c=>$v) { ?>
<p>
<?=$c?> est <?=$v?>
</p>
<?php } ?>  
</body>
</html>

