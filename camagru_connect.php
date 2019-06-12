 <?php
 session_start();
 require('includes/header1.php');
 require('includes/footer.php');
 require('config/database.php');

//  if (isset($_GET['id']) AND $_GET['id'] > 0)
// {
//      $getid = intval($_GET['id']);
//      $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
//      $requser->execute(array($getid));
//      $userinfo = $requser->fetch();
// }
// else
// {
// echo "IL FAUT SE CONNECTER POUR Y ACCEDER";
// header("Location: http://localhost:8888/Camagru_part3/connexion.php");
// }


if (isset($_SESSION['id']))
{
    $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();
    
     //echo $_SESSION['id'];    
  
}
else
{
    header("Location: connexion.php");
}

//afficher les images qui ont etait ajouter en BDD
$req = $bdd->prepare('SELECT * FROM images ORDER BY id DESC');
$req->execute();
while($d = $req->fetch(PDO::FETCH_OBJ)):



    $getid = (int) $_SESSION['id'];
    

    $article = $bdd->prepare("SELECT * FROM images WHERE id = ?");
    $article->execute(array($getid));
    $article = $article->fetch();

    $id = $article['id'];

    $likes = $bdd->prepare("SELECT id FROM likes WHERE id_images= ?");
    $likes->execute(array($d->id));
    $likes = $likes->rowCOunt();

    $dislikes = $bdd->prepare("SELECT id FROM dislikes WHERE id_images = ?");
    $dislikes->execute(array($d->id));
    $dislikes = $dislikes->rowCOunt();
?>


<!DOCTYPE html>
<html lang="en">
<body>
<center>
    <br/><br/>
    <!-- image -->
    <div class="card" style="width: 35rem;">
    <img class="card-img-top" src="<?php echo $d->data;?>"  alt="Card image cap" style="border: 1px solid black">
    <div class="card-body">
    <!-- like -->
    <ul class="list-group list-group-flush">
        <a style="text-decoration:none;" href="action.php?t=1&id=<?php echo $d->id;?>"><li class="list-group-item">J'aime (<?= $likes ?>)</li></a>
        <a style="text-decoration:none;" href="action.php?t=2&id=<?php echo $d->id;?>"><li class="list-group-item">J'aime pas (<?= $dislikes ?>)</li></a>
    </ul>
    <!-- commentaire -->
        <p class="card-text" align="left">Ajouter un commentaire ...<br/><br/><br/>
            Pour liker ou commenter veuillez
            vous <a id="link" href="connexion.php">connectez</a> ou <a id="link" href="index.php">céer un compte</a>.
        </p>
    </div>
    </div>
    <br/><br/><br/>
</center>
</body>
</html>
<?php endwhile;?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/camagruDisconnect.css">
    <title>Camagru Connect</title>
</head>