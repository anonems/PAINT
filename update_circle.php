<?php
session_start();
if( $_SESSION["connecte"] === true){
if($_SERVER["REQUEST_METHOD"] == "POST") {
require('cobdd.php');
$username = $_SESSION['username'];
$id=filter_input(INPUT_POST, "id");
$project_title =  filter_input(INPUT_POST, "title");
$cformeColor = filter_input(INPUT_POST, "cformeColor");
$cformeColorOpaciy = filter_input(INPUT_POST, "cformeColorOpacity");
$cformeWidth = filter_input(INPUT_POST, "cformeWidth");
$cformeHeight = filter_input(INPUT_POST, "cformeHeight");
$cformeBordWidth = filter_input(INPUT_POST, "cformeBordWidth");
$cformeBordColor = filter_input(INPUT_POST, "cformeBordColor");
$cformePositionX = filter_input(INPUT_POST, "cformePositionX");
$cformePositionY = filter_input(INPUT_POST, "cformePositionY");
$maRequeteCircle = $pdo->prepare("UPDATE circles SET ccolor=:cformeColor, copacity=:cformeColorOpacity, cwidth=:cformeWidth, cheight=:cformeHeight, cborder_width=:cformeBordWidth, cborder_color=:cformeBordColor, cformePositionX=:cformePositionX, cformePositionY=:cformePositionY WHERE id=:id ");
$maRequeteCircle->execute(array(
    'cformeColor' => $cformeColor,
    'cformeColorOpacity' => $cformeColorOpaciy,
    'cformeWidth' => $cformeWidth,
    'cformeHeight' => $cformeHeight,
    'cformeBordWidth' => $cformeBordWidth,
    'cformeBordColor' => $cformeBordColor,
    'cformePositionX' => $cformePositionX,
    'cformePositionY' => $cformePositionY,
    'id' => $id
));
}

header('Location: paint.php?title='.$project_title.'');
}else{header('Location: index.php');}