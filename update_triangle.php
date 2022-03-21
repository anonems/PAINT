<?php
session_start();
if( $_SESSION["connecte"] === true){
if($_SERVER["REQUEST_METHOD"] == "POST") {
require('cobdd.php');
$username = $_SESSION['username'];
$id=filter_input(INPUT_POST, "id");
$project_title =  filter_input(INPUT_POST, "title");
$tformeColor = filter_input(INPUT_POST, "tformeColor");
$tformeColorOpaciy = filter_input(INPUT_POST, "tformeColorOpacity");
$tformeDimension = filter_input(INPUT_POST, "tformeDimension");
$tformeBordWidth = filter_input(INPUT_POST, "tformeBordWidth");
$tformeBordColor = filter_input(INPUT_POST, "tformeBordColor");
$tformePositionX = filter_input(INPUT_POST, "tformePositionX");
$tformePositionY = filter_input(INPUT_POST, "tformePositionY");
$maRequeteTriangle = $pdo->prepare("UPDATE triangles SET tcolor=:tformeColor, topacity=:tformeColorOpacity, tdimension=:tformeDimension, tborder_width=:tformeBordWidth, tborder_color=:tformeBordColor, tformePositionX=:tformePositionX, tformePositionY=:tformePositionY WHERE id=:id ");
$maRequeteTriangle->execute(array(
    'tformeColor' => $tformeColor,
    'tformeColorOpacity' => $tformeColorOpaciy,
    'tformeDimension' => $tformeDimension,
    'tformeBordWidth' => $tformeBordWidth,
    'tformeBordColor' => $tformeBordColor,
    'tformePositionX' => $tformePositionX,
    'tformePositionY' => $tformePositionY,
    'id' => $id
));
}
header('Location: paint.php?title='.$project_title.'');
}else{header('Location: index.php');}