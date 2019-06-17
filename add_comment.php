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

//verification pour ajouter le commentaire en bdd
if (isset($_GET['id']) AND !empty($_GET['id']))
{
    $idImg = $_GET['id'];
    $pseudo = $_SESSION['pseudo'];

    if (isset($_POST['valider']))
    {
        if (isset($_POST['phrase']) AND !empty($_POST['phrase']))
        {
            $commentaire = htmlspecialchars($_POST['phrase']);

            $check = $bdd->prepare("SELECT id from images WHERE id = ?");
            $check->execute(array($idImg));

            if ($check->rowCount() == 1)
            {
                $check_like = $bdd->prepare("SELECT id FROM commentaire WHERE id_images = ? AND pseudo = ?");
                $check_like->execute(array($idImg, $pseudo));

                if ($check_like)
                {
                    $ins= $bdd->prepare("INSERT INTO commentaire(pseudo, commentaire, id_images, creation) VALUES(?, ?, ?, NOW())");
                    $ins->execute(array($pseudo, $commentaire, $idImg));
                }
                else
                {
                    header("Location: camagru_connect.php");
                }

            }
            else
            {
                header("Location: camagru_connect.php");

            }

        }
        else
        {
            ?>
                <script>
                    function myFunction() {
                    alert("Veuillez entrez un commentaire puis le valider !");
                    }
                </script>
            <?php
        }
    }
    else
    {
       ///l'image ajouter riem mettre ici
    }

}
else
{
    ?>
        <script>
            function myFunction() {
            alert("Veuillez vous connectez pour pouvoir commenter une image !");
            }
        </script>
    <?php
}

$req = $bdd->prepare('SELECT * FROM images WHERE id = ?');
$req->execute(array($idImg));
while($d = $req->fetch(PDO::FETCH_OBJ)):

?>
    
<!DOCTYPE html>
<html lang="en">
<body>
    <br/><br/>
    <center>
        <div class="card" style="width: 32rem;">
            <img style="border: 1px solid black" src="<?php echo $d->data;?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title" style="font-family:fantasy; color:#3897EF;">Commenter l'image publier par <?php echo $_SESSION['pseudo'] ?></h5>
                <center>
                <form action="" method="POST">
                    <textarea name="phrase" cols="55" rows="5" placeholder="Ajouter votre commentaire..."></textarea><br/><br/>
                    <input type="submit" name="valider" class="btn btn-outline-primary"  value="Valider votre commentaire" onclick="myFunction()">
                </form>
                </center>
            </div>
        </div>
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
    <title>Camagru ConnectAddComment</title>
</head>