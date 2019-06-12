<?php
require('includes/header1.php');
require('includes/footer.php');
require('config/database.php');

if (isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
?>


<!-- PAGE DE CAMAGRU OU L'UTILISATEUR SERA CONNECTÉ ET ON POURRA COMMENTER ET LIKER LES PHOTOS -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <title>Camagru Connect</title>
</head>
<body>
<br/>
<br/>
<br/>
 <center><h1>CAMAGRU CONNECTED</h1></center>

 <div align="center">
        <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
        <br/><br/>
        Pseudo = <?php echo $userinfo['pseudo']; ?>
        <br/>
        Mail = <?php echo $userinfo['mail']; ?>
        <br/>
        <?php
            if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
            {
        ?>
                <a href="editionprofil.php">Editer mon profil</a>
                <br/>
                <a href="deconnexion.php">Se deconnecter</a>
        <?php
            }
        ?>

    </div>

</body>
</html>
<?php
}
else
{

}
?>