<?php
session_start();
if( $_SESSION["connecte"] === true){
if($_SERVER["REQUEST_METHOD"] == "POST") {
require('cobdd.php');
$project_title =  filter_input(INPUT_POST, "title");
$username = $_SESSION['username'];
$id=filter_input(INPUT_POST, "id");
$sformeColor = filter_input(INPUT_POST, "sformeColor");
$sformeColorOpaciy = filter_input(INPUT_POST, "sformeColorOpacity");
$sformeWidth = filter_input(INPUT_POST, "sformeWidth");
$sformeHeight = filter_input(INPUT_POST, "sformeHeight");
$sformeBordWidth = filter_input(INPUT_POST, "sformeBordWidth");
$sformeBordColor = filter_input(INPUT_POST, "sformeBordColor");
$sformeBordRadius = filter_input(INPUT_POST, "sformeBordRadius");
$sformePositionX = filter_input(INPUT_POST, "sformePositionX");
$sformePositionY = filter_input(INPUT_POST, "sformePositionY");
$maRequeteSquare = $pdo->prepare("UPDATE squares SET scolor=:sformeColor, sopacity=:sformeColorOpacity, swidth=:sformeWidth, sheight=:sformeHeight, sborder_width=:sformeBordWidth, sborder_color=:sformeBordColor, sformePositionX=:sformePositionX, sformePositionY=:sformePositionY, sborder_radius=:sformeBordRadius WHERE id=:id ");
$maRequeteSquare->execute(array(
    'sformeColor' => $sformeColor,
    'sformeColorOpacity' => $sformeColorOpaciy,
    'sformeWidth' => $sformeWidth,
    'sformeHeight' => $sformeHeight,
    'sformeBordWidth' => $sformeBordWidth,
    'sformeBordColor' => $sformeBordColor,
    'sformeBordRadius' => $sformeBordRadius,
    'sformePositionX' => $sformePositionX,
    'sformePositionY' => $sformePositionY,
    'id' => $id
));
}
header('Location: paint.php?title='.$project_title.'');
}else{header('Location: index.php');}