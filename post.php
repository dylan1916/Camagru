<?php
// session_start();
require('config/database.php');

// echo $_SESSION['id'];

if (isset($_POST['pic']))
{
    // $sessionid = $_SESSION['id'];
    $pic = strip_tags($_POST['pic']);
    $req = $bdd->prepare('INSERT INTO images (data, date_creation, id_pseudo) VALUES (:pic, NOW(), 90)');
    $req->execute(array(':pic'=>$pic));

    $response = array('success'=>true,'img'=>$pic);
    
    echo json_encode($response);
}
else
{
    echo "ERROR";
}
?>