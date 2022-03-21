<?php
session_start();
if( $_SESSION["connecte"] === true){
if($_SERVER["REQUEST_METHOD"] == "POST") {
require('cobdd.php');
$username = $_SESSION['username'];
$project_title =  filter_input(INPUT_POST, "title");
$tzcolorFont = filter_input(INPUT_POST, "tzcolorFont");
$tzfamilyFont = filter_input(INPUT_POST, "tzfamilyFont");
$tzsizeFont = filter_input(INPUT_POST, "tzsizeFont");
$tzweightFont = filter_input(INPUT_POST, "tzweightFont");
$tzunderFont = filter_input(INPUT_POST, "tzunderFont"); 
$tzcontent = filter_input(INPUT_POST, "tzcontent");
$xpositiontext = filter_input(INPUT_POST, "xpositiontext");;
$ypositiontext = filter_input(INPUT_POST, "ypositiontext");;
$maRequeteTextzone = $pdo->prepare("INSERT INTO textzones (username,project_title,tzcolor,tzfont,tzsize,tzbold,tzunderline,tzformePositionX,tzformePositionY, tzcontent) VALUES(:username,:project_title,:tzcolorFont,:tzfamilyFont,:tzsizeFont,:tzweightFont,:tzunderFont,:xpositiontext,:ypositiontext,:tzcontent)");
$maRequeteTextzone->execute(array(
    'username' => $username,
    'project_title' => $project_title,
    'tzcolorFont' => $tzcolorFont,
    'tzfamilyFont' => $tzfamilyFont,
    'tzsizeFont' => $tzsizeFont,
    'tzweightFont' => $tzweightFont,
    'tzunderFont' => $tzunderFont,
    'xpositiontext' => $xpositiontext,
    'ypositiontext' => $ypositiontext,
    'tzcontent' => $tzcontent
));   
}
header('Location: paint.php?title='.$project_title.'');
}else{header('Location: index.php');}