<?php
session_start();
if( $_SESSION["connecte"] === true){
if($_SERVER["REQUEST_METHOD"] == "POST") {
require('cobdd.php');
$username = $_SESSION['username'];
$id=filter_input(INPUT_POST, "id");
$project_title =  filter_input(INPUT_POST, "title");
$tzcolorFont = filter_input(INPUT_POST, "tzcolorFont");
$tzfamilyFont = filter_input(INPUT_POST, "tzfamilyFont");
$tzsizeFont = filter_input(INPUT_POST, "tzsizeFont");
$tzweightFont = filter_input(INPUT_POST, "tzweightFont");
$tzunderFont = filter_input(INPUT_POST, "tzunderFont"); 
$tzcontent = filter_input(INPUT_POST, 'tzcontent');
$maRequeteTextzone = $pdo->prepare("UPDATE textzones SET tzcolor=:tzcolorFont, tzformePositionX=:xpositiontext, tzformePositionY=:ypositiontext, tzfont=:tzfamilyFont, tzsize=:tzsizeFont, tzbold=:tzweightFont, tzunderline=:tzunderFont tzcontent=:tzcontent WHERE id=:id ");
$maRequeteTextzone->execute(array(
    'tzcolorFont' => $tzcolorFont,
    'tzfamilyFont' => $tzfamilyFont,
    'tzsizeFont' => $tzsizeFont,
    'tzweightFont' => $tzweightFont,
    'tzunderFont' => $tzunderFont,
    'xpositiontext' => $xpositiontext,
    'ypositiontext' => $ypositiontext,
    'id' => $id,
    'tzcontent' => $tzcontent
));   
}
header('Location: paint.php?title='.$project_title.'');
}else{header('Location: index.php');}