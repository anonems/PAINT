<?php
session_start();
if( $_SESSION["connecte"] === true){
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        require('cobdd.php');
        $username = $_SESSION['username'];
        $id=filter_input(INPUT_POST, "id");
        $project_title =  filter_input(INPUT_POST, "title");
        $maRequeteCircle = $pdo->prepare("DELETE FROM circles WHERE id=:id ");
        $maRequeteCircle->execute(['id' => $id]);
    }
    header('Location: paint.php?title='.$project_title.'');
}else{header('Location: index.php');}