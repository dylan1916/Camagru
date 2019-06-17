<?php
session_start();
require('includes/header1.php');
require('includes/footer.php');
require('config/database.php');

// verificatiob si l'utilisateur est connecté
if (isset($_SESSION['id']))
{
    $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();
      
}
else
{
    header("Location: connexion.php");
}

$id = $_SESSION['id'];

$req = $bdd->prepare('SELECT * FROM images WHERE id_pseudo = ?');
$req->execute(array($id));
while($d = $req->fetch(PDO::FETCH_OBJ)):

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
    <title>Mes photos</title>
</head>
<body>
<br/><br/>
    <center>
        <div class="card" style="width: 32rem;">
            <img style="border: 1px solid black" src="<?php echo $d->data;?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title" style="font-family:fantasy; color:#3897EF;">Mes photos prises récemment</h5>
            </div>
        </div>
    </center>
    <br/><br/><br/><br/>
</body>
</html>

<?php endwhile;?>