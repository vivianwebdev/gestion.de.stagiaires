<?php
    require_once('identifier.php');
    require_once('connexiondb.php');
    $idS=isset($_POST['idS'])?$_POST['idS']:0;
    $nom=isset($_POST['nom'])?$_POST['nom']:"";
    $prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
    $civilite=isset($_POST['civilite'])?$_POST['civilite']:"F";
    $idFiliere=isset($_POST['idFiliere'])?$_POST['idFiliere']:1;
    $direction=isset($_POST['direction'])?$_POST['direction']:"";
    $organisme=isset($_POST['organisme'])?$_POST['organisme']:"";
    $nomPhoto=isset($_FILES['photo']['name'])?$_FILES['photo']['name']:"";
    $imageTemp=$_FILES['photo']['tmp_name'];
    move_uploaded_file($imageTemp,"../images/".$nomPhoto);

    echo $nomPhoto ."<br>";
    echo $imageTemp;
    $date_debut=isset($_POST['date_debut'])?$_POST['date_debut']:"";
$duree=isset($_POST['duree'])?$_POST['duree']:0;

if(!empty($nomPhoto)){
    $requete="update stagiaire set nom=?, prenom=?, civilite=?, idFiliere=?, organisme=?, direction=?, photo=?, date_debut=?, duree=? where idStagiaire=?";
    $params=array($nom, $prenom, $civilite, $idFiliere, $organisme, $direction, $nomPhoto, $date_debut, $duree, $idS);
}else{
    $requete="update stagiaire set nom=?, prenom=?, civilite=?, idFiliere=?, organisme=?, direction=?, date_debut=?, duree=? where idStagiaire=?";
    $params=array($nom, $prenom, $civilite, $idFiliere, $organisme, $direction, $date_debut, $duree, $idS);
}

$resultat=$pdo->prepare($requete);
$resultat->execute($params);

header('location:stagiaires.php');


    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);
    
    header('location:stagiaires.php');

?>