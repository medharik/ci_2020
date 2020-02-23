<?php 
require_once("modules.php");
//dd($_POST);
extract($_POST);
modifier($libelle,$prix,$qtestock,$id);
header("location:index.php?n=upd");

?>