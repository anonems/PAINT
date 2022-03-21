<?php
session_start();
if( $_SESSION["connecte"] === true){
if($_SERVER["REQUEST_METHOD"] == "POST") {
require('cobdd.php');
$project_title =  filter_input(INPUT_POST, "title");
$username = $_SESSION['username'];
$sformeColor = filter_input(INPUT_POST, "sformeColor");
$sformeColorOpaciy = filter_input(INPUT_POST, "sformeColorOpacity");
$sformeWidth = filter_input(INPUT_POST, "sformeWidth");
$sformeHeight = filter_input(INPUT_POST, "sformeHeight");
$sformeBordWidth = filter_input(INPUT_POST, "sformeBordWidth");
$sformeBordColor = filter_input(INPUT_POST, "sformeBordColor");
$sformeBordRadius = filter_input(INPUT_POST, "sformeBordRadius");
$sformePositionX = filter_input(INPUT_POST, "sformePositionX");
$sformePositionY = filter_input(INPUT_POST, "sformePositionY");
$maRequeteSquare = $pdo->prepare("INSERT INTO squares (username,project_title,scolor,sopacity,swidth,sheight,sborder_width,sborder_color,sborder_radius,sformePositionX,sformePositionY) VALUES(:username,:project_title,:sformeColor,:sformeColorOpacity,:sformeWidth,:sformeHeight,:sformeBordWidth,:sformeBordColor,:sformeBordRadius,:sformePositionX,:sformePositionY)");
$maRequeteSquare->execute(array(
    'username' => $username,
    'project_title' => $project_title,
    'sformeColor' => $sformeColor,
    'sformeColorOpacity' => $sformeColorOpaciy,
    'sformeWidth' => $sformeWidth,
    'sformeHeight' => $sformeHeight,
    'sformeBordWidth' => $sformeBordWidth,
    'sformeBordColor' => $sformeBordColor,
    'sformeBordRadius' => $sformeBordRadius,
    'sformePositionX' => $sformePositionX,
    'sformePositionY' => $sformePositionY
));
}
header('Location: paint.php?title='.$project_title.'');
}else{header('Location: index.php');}