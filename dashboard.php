<?php require('header.php');
 if( $_SESSION["connecte"] === true){
    $username = $_SESSION["username"]
     ?>
 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>paint</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<div class="login">
</head>
<body>
    <h1>Dashboard</h1>
    <p>Vous êtes connecté(e) en tant que '<?= $username ?>'</p>
    <?php
    require('cobdd.php');
    $username = $_SESSION["username"];
    $maRequete = $pdo->prepare("SELECT * FROM projets WHERE username = :username");
    $maRequete->execute(['username' => $username]);
    $projets = $maRequete->fetchAll(PDO::FETCH_ASSOC);
    if ($projets){echo "<h3>Vos projets</h3>";?>
    <center>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Dernière modif</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($projets as $projet): ?>
                    <tr>
                        <td><?= $projet["id"] ?></td>
                        <td>
                            <a href="paint.php?title=<?=$projet["project_title"]?>">
                                <?= $projet["project_title"] ?>
                            </a>
                        </td>
                        <td><?=$projet["last_update"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>
    <?php }else{echo 'vous n\'avez aucun projet';}?>
    <br><br><a href="newproject.php">Nouveau projet</a>
    <br><br><a href="logout.php">Se deconnecter.</a><br><br>
    <a href="delcompte.php">Supprimer le compte.</a>
</div>
</body>
</html>
<?php }else{header('Location: index.php');}?>