<?php
session_start();
require('config/database.php');

$idUtilisateur = $_SESSION['id'];

if (isset($_POST['pic']))
{
    $pic = strip_tags($_POST['pic']);
    $req = $bdd->prepare('INSERT INTO images (data, date_creation, id_pseudo) VALUES (:pic, NOW(), :id)');
    $req->execute(array(':pic'=>$pic, ':id'=>$idUtilisateur));

    $response = array('success'=>true,'img'=>$pic);
    
    echo json_encode($response);
}
else
{
    echo "ERROR";
}
?>