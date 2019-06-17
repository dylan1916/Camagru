<?php
session_start();
require('includes/header1.php');
require('includes/footer.php');
require('config/database.php');

$sessionid = (int) $_SESSION['id'];
if (isset($_SESSION['id']))
{
    $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
    $requser->execute(array($sessionid));
    $user = $requser->fetch();
}
else
{
  header("Location: connexion.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/webcam.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/webcam.js"></script>
    <title>Webcam</title>
</head>
<body>
    <div class="container-fluid"> 
      <div id="content">
        <br/>
        <video id="video" width="450" height="350" autoplay></video><br/>
        <canvas id="canvas" width="450" height="300"></canvas>
      </div>

      <center>
        <div id="button">
            <a href="my_pictures.php"><button type="button" class="btn btn-outline-primary">Voir mes photos</button></a><br/><br/>
            <button type="button" class="btn btn-outline-primary" id="snap">Prendre une photo</button><br/><br/>
            <button type="button" class="btn btn-outline-primary" id="save">Sauvegarder la photo</button>
        </div>
      </center>   
    <center><br/><br/><br><div id="result"></div></center>    
    </div>  
</body>
</html>