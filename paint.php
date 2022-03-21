<?php require('header.php');
 if( $_SESSION["connecte"] === true){
     $username = $_SESSION['username'];
    $project_title =  filter_input(INPUT_GET, "title");
    if($project_title){
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAINT</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<header>
    <script> let user = <?=$username?>; let project = <?= $project_title?> </script>
<div class="menuTop">
<a onclick="window.print()">Exporter en PDF</a> 
<a id="btn-Convert-Html2Image" value="Preview" href="#">Exporter en PNG</a>  
<a href="dashboard.php">Mes projets</a>  

</div>
<?php  
require('menu-dessin.php');
 ?>
</header>


<body>
<div class='draw' id="html-content-holder">
<?php require('drawboard.php'); ?>
</div>
    <br/>
    <h3>Preview :</h3>
    
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script src='https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js'></script><script  src="javascript/convertimg.js"></script>
</body>


<footer class="barFoot">
    
<marquee behavior="scroll" style="margin-left: 10px;" >&#9888; Veuillez cliquer sur 'valider' ou 'update' UNE FOIS QUE VOUS AVEZ L'ASPECT FINAL de votre forme. &#9888; Attention à l'ordre de superposition des éléments, il n'est pas modifiable. &#9888; Pour modifier ou supprimer un element il suffit de cliquer sur la loupe. ----AUTEUR : HAKIRI EMIR.----</marquee>
</footer>
</html>
<?php }elseif(!$project_title){header('Location: dashboard.php');}else{header('Location: index.php');} } ?>