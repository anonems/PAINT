<?php
session_start();
if( $_SESSION["connecte"] === true){
if($_SERVER["REQUEST_METHOD"] == "POST") {
require('cobdd.php');
$username = $_SESSION['username'];
$project_title =  filter_input(INPUT_POST, "title");
$tformeColor = filter_input(INPUT_POST, "tformeColor");
$tformeColorOpaciy = filter_input(INPUT_POST, "tformeColorOpacity");
$tformeDimension = filter_input(INPUT_POST, "tformeDimension");
$tformeBordWidth = filter_input(INPUT_POST, "tformeBordWidth");
$tformeBordColor = filter_input(INPUT_POST, "tformeBordColor");
$tformePositionX = filter_input(INPUT_POST, "tformePositionX");
$tformePositionY = filter_input(INPUT_POST, "tformePositionY");
$maRequeteTriangle = $pdo->prepare("INSERT INTO triangles (username,project_title,tcolor,topacity,tdimension,tborder_width,tborder_color,tformePositionX,tformePositionY) VALUES(:username,:project_title,:tformeColor,:tformeColorOpacity,:tformeDimension,:tformeBordWidth,:tformeBordColor,:tformePositionX,:tformePositionY)");
$maRequeteTriangle->execute(array(
    'username' => $username,
    'project_title' => $project_title,
    'tformeColor' => $tformeColor,
    'tformeColorOpacity' => $tformeColorOpaciy,
    'tformeDimension' => $tformeDimension,
    'tformeBordWidth' => $tformeBordWidth,
    'tformeBordColor' => $tformeBordColor,
    'tformePositionX' => $tformePositionX,
    'tformePositionY' => $tformePositionY
));
}
header('Location: paint.php?title='.$project_title.'');
}else{header('Location: index.php');}