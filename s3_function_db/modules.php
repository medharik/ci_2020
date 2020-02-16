<?php 

function connecter_db(){
    $pdo = new PDO( 'mysql:host=localhost;dbname=cig2020', 'root','');    
return $pdo;
}

function ajouter($libelle,$prix=0,$qtestock=0){
//connexion db
$pdo=connecter_db();
$req=$pdo->prepare("insert into  produit (libelle,prix,qtestock) values(?,?,?)");
$req->execute([$libelle,$prix,$qtestock]);
}
function supprimer($id){
$pdo=connecter_db();
$req=$pdo->prepare("delete from produit where id=? ");
$req->execute([$id]);
}

?>