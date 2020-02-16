<?php
include("modules.php");
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
$qtestock=$_POST['qtestock'];
ajouter($libelle,$prix,$qtestock);
// redirection vers index.php
header("location:index.php");
?>