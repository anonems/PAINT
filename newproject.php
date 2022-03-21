<?php require('header.php');
 if( $_SESSION["connecte"] === true){?>
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
<?php
require('cobdd.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_title =  filter_input(INPUT_POST, "project_title");
    $project_title = str_replace(' ', '_', $project_title);
    $maRequete2 = $pdo->prepare("SELECT project_title FROM projets WHERE project_title = :project_title ");
    $maRequete2->execute(['project_title' => $project_title]);
    $verifuse = $maRequete2->fetch(); 
    if (!$verifuse){
        $username = $_SESSION["username"];
        $project_descript =  filter_input(INPUT_POST, "project_descript");
        $maRequeteProjets = $pdo->prepare("INSERT INTO projets (username,project_title,descript) VALUES(:username,:project_title,:project_descript)");
        $maRequeteProjets->execute(array(
            'username' => $username,
            'project_title' => $project_title,
            'project_descript' => $project_descript
        )); 
        mkdir('data/'.$username.'/'.$project_title.'');
        header('Location: paint.php?title='.$project_title.'');

    }elseif($verifuse){
        echo "<h2 style='color:red'>Ce titre existe déjà,<br> veuillez en choisir un autre.</h2>";
    }
}
?>
</head>
<body>
    <h1>Nouveau projet</h1>
    <form method="post">
        <label for="">Titre</label>
        <input type="text" name="project_title" required="required"><br>
        <label for="">Description</label>
    <textarea name="project_descript"  rows=5 cols=40 >ici</textarea>
    <br><input type="submit" value="valider">
</form>
<a href="dashboard.php">retour</a>

</div>
</body>
</html>
<?php }else{header('Location: index.php');}?>
