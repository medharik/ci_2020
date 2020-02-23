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

function ajouter($libelle,$prix=0,$qtestock=0){
    try{
        //connexion db
        $pdo=connecter_db();
        $req=$pdo->prepare("insert into  produit (libelle,prix,qtestock) values(?,?,?)");
        $req->execute([$libelle,$prix,$qtestock]);

    }catch(PDOException $e ){
        echo "erreur d'ajout ".$e->getMessage();
            }
        
}
function supprimer($id){
    try{

        $pdo=connecter_db();
        $req=$pdo->prepare("delete from produit where id=? ");
        $req->execute([$id]);
    }catch(PDOException $e ){
        echo "erreur de suppression ".$e->getMessage();
}
        
}

function modifier($libelle,$prix,$qtestock,$id){
    try{

        $pdo=connecter_db();
        $req=$pdo->prepare("update produit set libelle=?,
         prix=? , qtestock=? where id=? ");
        $req->execute([$libelle,$prix,$qtestock,$id]);
    }catch(PDOException $e ){
        echo "erreur de modification ".$e->getMessage();
}
        
}

function all(){
try{
    $pdo=connecter_db();
    $req=$pdo->prepare(" select * from produit order by id desc ");
    $req->execute();
    $resultat = $req->fetchAll();
    return $resultat;
}catch(PDOException $e ){
    echo "erreur ds all ".$e->getMessage();
}
}
function find($id){
try{
    $pdo=connecter_db();
    $req=$pdo->prepare(" select * from produit where id=?");
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
?>