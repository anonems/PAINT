

<?php
require('cobdd.php');
$project_title = filter_input(INPUT_GET, "title");
$username = $_SESSION['username'];
//----------------------------------partie sauvgardé------------------------------
if($project_title){


    //-----------------carrée----------------------------
    $maRequeteSquare = $pdo->prepare("SELECT * FROM squares WHERE username = :username AND project_title = :project_title");
    $maRequeteSquare->execute(array(
        'username' => $username,
        "project_title" => $project_title
    ));
    $squares = $maRequeteSquare->fetchAll(PDO::FETCH_ASSOC);
    foreach($squares as $square){ 
        ?><svg  style="position:absolute" width="auto" height="auto"><rect id="ussvg_<?=$square['id']?>" width="<?=$square['swidth']?>" height="<?=$square['sheight']?>" fill="<?=$square['scolor']?>"style="opacity:<?=$square['sopacity']?>; stroke-width:<?=$square['sborder_width']?>" stroke="<?=$square['sborder_color']?>" x="<?=$square['sformePositionX']?>" y="<?=$square['sformePositionY']?>" rx="<?=$square['sborder_radius']?>"/></svg><?php
        } 

    //-----------------cercle----------------------------
    $maRequeteCircle = $pdo->prepare("SELECT * FROM circles WHERE username = :username AND project_title = :project_title");
    $maRequeteCircle->execute(array(
        'username' => $username,
        'project_title' => $project_title
    ));
    $circles = $maRequeteCircle->fetchAll(PDO::FETCH_ASSOC);
    foreach($circles as $circle){ 
        ?><svg style="position:absolute" width="auto" height="auto"><ellipse id="ucsvg_<?=$circle['id']?>"   cx="<?=$circle['cformePositionX']?>" cy="<?=$circle['cformePositionY']?>" rx="<?=$circle['cwidth']?>" ry="<?=$circle['cheight']?>" fill="<?=$circle['ccolor']?>" style="opacity:<?=$circle['copacity']?>; stroke-width:<?=$circle['cborder_width']?>" stroke="<?=$circle['cborder_color']?>"/></svg><?php
        } 
    
    //-----------------TRIANGLE----------------------------
    $maRequeteTriangle = $pdo->prepare("SELECT * FROM triangles WHERE username = :username AND project_title = :project_title");
    $maRequeteTriangle->execute(array(
        'username' => $username,
        'project_title' => $project_title
    ));
    $triangles = $maRequeteTriangle->fetchAll(PDO::FETCH_ASSOC);
    foreach($triangles as $triangle){ 
        ?><svg style="position:absolute" width="auto" height="auto"><defs><polygon id="utsvg_<?=$triangle['id']?>" points="<?=5*$triangle['tdimension']?>,0 <?=10*$triangle['tdimension']?>,<?=10*$triangle['tdimension']?> 0,<?=10*$triangle['tdimension']?>" fill="<?=$triangle['tcolor']?>" style="opacity:<?=$triangle['topacity']?>; stroke-width:<?=$triangle['tborder_width']?>" stroke="<?=$triangle['tborder_color']?>"/></defs><use id="uptsvg_<?=$triangle['id']?>" x="<?=$triangle['tformePositionX']?>" y="<?=$triangle['tformePositionY']?>" xlink:href="#utsvg_<?=$triangle['id']?>"/></svg><?php 
        } 
    
          //-----------------Textzone----------------------------
    $maRequeteTextzone = $pdo->prepare("SELECT * FROM textzones WHERE username = :username AND project_title = :project_title");
    $maRequeteTextzone->execute(array(
        'username' => $username,
        'project_title' => $project_title
    ));
    $textzones = $maRequeteTextzone->fetchAll(PDO::FETCH_ASSOC);
    foreach($textzones as $textzone){ 
        ?><span id="tzsvg" style="position:absolute; left:<?=$textzone['tzformePositionX']?> ; top:<?=$textzone['tzformePositionY']?> ; text-decoration:<?=$textzone['tzunderline']?> ; font-weight:<?=$textzone['tzbold']?>; font-size:<?=$textzone['tzsize']?>; font-family:<?=$textzone['tzfont']?>; color:<?=$textzone['tzcolor']?> " ><?=$textzone['tzcontent']?></span><?php
    } 
    
}

//----------------------------------partie edition------------------------------
    if($_SERVER["REQUEST_METHOD"] == "POST") {

            if ($forme == "square" or $forme == "triangle" or $forme == "circle"){
                if($forme === "square"){
                    ?><svg style="position:absolute" width="auto" height="auto"><rect id="ssvg" width="100" height="100"/></svg><?php
                }elseif($forme === "triangle"){
                    ?><svg style="position:absolute" width="auto" height="auto"><defs><polygon id="tsvg" points="50,0 100,100 0,100" /></defs><use id="ptsvg" xlink:href="#tsvg"/></svg><?php

                }elseif($forme === "circle"){
                    ?><svg style="position:absolute" width="auto" height="auto"><ellipse id="csvg"   cx="50" cy="50" rx="50" ry="50" /></svg><?php
                }    

        }elseif($forme === 'textzone'){
            ?><span style="position:absolute;" id="tzsvg"></span><?php
            } 

    }

?>

