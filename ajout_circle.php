<?php
session_start();
if( $_SESSION["connecte"] === true){
if($_SERVER["REQUEST_METHOD"] == "POST") {
require('cobdd.php');
$username = $_SESSION['username'];
$project_title =  filter_input(INPUT_POST, "title");
$cformeColor = filter_input(INPUT_POST, "cformeColor");
$cformeColorOpaciy = filter_input(INPUT_POST, "cformeColorOpacity");
$cformeWidth = filter_input(INPUT_POST, "cformeWidth");
$cformeHeight = filter_input(INPUT_POST, "cformeHeight");
$cformeBordWidth = filter_input(INPUT_POST, "cformeBordWidth");
$cformeBordColor = filter_input(INPUT_POST, "cformeBordColor");
$cformePositionX = filter_input(INPUT_POST, "cformePositionX");
$cformePositionY = filter_input(INPUT_POST, "cformePositionY");
$maRequeteCircle = $pdo->prepare("INSERT INTO circles (username,project_title,ccolor,copacity,cwidth,cheight,cborder_width,cborder_color,cformePositionX,cformePositionY) VALUES(:username,:project_title,:cformeColor,:cformeColorOpacity,:cformeWidth,:cformeHeight,:cformeBordWidth,:cformeBordColor,:cformePositionX,:cformePositionY)");
$maRequeteCircle->execute(array(
    'username' => $username,
    'project_title' => $project_title,
    'cformeColor' => $cformeColor,
    'cformeColorOpacity' => $cformeColorOpaciy,
    'cformeWidth' => $cformeWidth,
    'cformeHeight' => $cformeHeight,
    'cformeBordWidth' => $cformeBordWidth,
    'cformeBordColor' => $cformeBordColor,
    'cformePositionX' => $cformePositionX,
    'cformePositionY' => $cformePositionY
));
}

header('Location: paint.php?title='.$project_title.'');
}else{header('Location: index.php');}