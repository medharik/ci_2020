<?php
require("modules.php");
// $libelle=$_POST['libelle'];
// $prix=$_POST['prix'];
// $qtestock=$_POST['qtestock'];
// $qtestock=$_POST['qtestock'];
extract($_POST);
ajouter($libelle,$prix,$qtestock,$categorie_id);
// redirection vers index.php
header("location:index.php?n=str");
?>