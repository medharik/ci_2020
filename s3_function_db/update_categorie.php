<?php 
require_once("modules.php");
//dd($_POST);
extract($_POST);
//dd($_POST);
modifier_categorie($nom,"",$id);
header("location:index_categorie.php?n=upd");

?>