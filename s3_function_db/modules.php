<?php 

function connecter_db(){
    try{
$options=[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

];
$pdo = new PDO( 'mysql:host=localhost;dbname=cig2020', 'root','',$options);    
return $pdo;
    }catch(PDOException $e ){
        echo "erreur de connexion ".$e->getMessage();
    }

}
function dd($info){
    echo "<pre><code>";
var_dump($info);
echo "</pre></code>";
die();
}

function ajouter($libelle,$prix=0,$qtestock=0,$categorie_id,$chemin){
    try{
        //connexion db
        $pdo=connecter_db();
        $req=$pdo->prepare("insert into  produit 
        (libelle,prix,qtestock,categorie_id,chemin) values(?,?,?,?,?)");
        $req->execute([$libelle,$prix,$qtestock,$categorie_id,$chemin]);

    }catch(PDOException $e ){
        echo "erreur d'ajout ".$e->getMessage();
            }
        
}

function modifier($libelle,$prix,$qtestock,$categorie_id,$id,$chemin){
    try{
        
        $pdo=connecter_db();
        $req=$pdo->prepare("update produit set libelle=?,
        prix=? , qtestock=? , categorie_id=?,chemin=? where id=? ");
        $req->execute([$libelle,$prix,$qtestock,$categorie_id,$chemin,$id]);
    }catch(PDOException $e ){
        echo "erreur de modification ".$e->getMessage();
    }
    
}
// categorie

function modifier_categorie($nom,$chemin="icon.png",$id){
    try{
        
        $pdo=connecter_db();
        $req=$pdo->prepare("update categorie set nom=?,
        chemin=?  where id=? ");
        $req->execute([$nom,$chemin,$id]);
    }catch(PDOException $e ){
        echo "erreur de modification ".$e->getMessage();
    }
    
}

function ajouter_categorie($nom,$chemin="icon.png"){
    try{
        //connexion db
        $pdo=connecter_db();
        $req=$pdo->prepare("insert into  categorie (nom,chemin) values(?,?)");
        $req->execute([$nom,$chemin]);

    }catch(PDOException $e ){
        echo "erreur d'ajout  ".$e->getMessage();
            }
        
}
//fin categorie

//code commun
// supprimer(2,"categorie");
function supprimer($id,$table="produit"){
    try{

        $pdo=connecter_db();
        $req=$pdo->prepare("delete from $table where id=? ");
        $req->execute([$id]);
    }catch(PDOException $e ){
        echo "erreur de suppression ".$e->getMessage();
}
        
}
function uploader($file){
    $tmp = $file["tmp_name"];
    $fileName = $file["name"];
    if(!move_uploaded_file($tmp,"images/$fileName")){
        die("erreur d'upload");
    }
    return "images/$fileName";
}
function all($table="produit"){
try{
    $pdo=connecter_db();
    $req=$pdo->prepare(" select * from $table order by id desc ");
    $req->execute();
    $resultat = $req->fetchAll();
    return $resultat;
}catch(PDOException $e ){
    echo "erreur ds all ".$e->getMessage();
}
}
function allBy($condition,$table="produit"){
try{
    $pdo=connecter_db();
    $req=$pdo->prepare(" select * from $table where $condition order by id desc ");
    $req->execute();
    $resultat = $req->fetchAll();
    return $resultat;
}catch(PDOException $e ){
    echo "erreur ds all ".$e->getMessage();
}
}
function find($id,$table="produit"){
try{
    $pdo=connecter_db();
    $req=$pdo->prepare(" select * from $table where id=?");
    $req->execute([$id]);
    $resultat = $req->fetch();
    return $resultat;
}catch(PDOException $e ){
    echo "erreur ds all ".$e->getMessage();
}
}
// $resultat=all();
// // var_dump($resultat);
// $resultat=find(3);
// var_dump($resultat);
/**
 * SQL 
 * create database cig2020
 * use cig2020
 * create table produit (
 * id int primary key auto_increment,
 * libelle varchar(200) unique,
 * prix double ,
 * qtestock double  default 0,
 * 
 * 
 * )
 * create table categorie
 * (
 * id int primary key auto_increment, 
 * nom varchar(30) not null unique,
 * )
 * alter table produit add categorie_id int 
 * alter table produit add constraint foreign key(categorie_id)
 * references categorie(id) on delete cascade 
 */
?>
