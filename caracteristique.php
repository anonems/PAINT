<div class="caract">
    <?php 
    $project_title =  filter_input(INPUT_GET, "title");
    require('cobdd.php');
    $forme = filter_input(INPUT_POST, "forme");
    if ($forme == "square"){
    ?>
    <form action="ajout_square.php" method="post">
    <h3><?=$forme?></h3>
        <label for="colfont">couleur</label>
        <input type="color" name="sformeColor" id="formeColor">
        <label for="long">Opacité</label>
        <input type="number" name="sformeColorOpacity" id="formeColorOpacity" value="1" min="0" max="1" step="0.1">
        <label for="long">largeur</label>
        <input type="number" value="100" name="sformeWidth" id="formeWidth" min="0">
        <label for="larg">longueur</label>
        <input type="number" name="sformeHeight" id="formeHeight" value="100" min="0">
        <label style="text-decoration: underline; padding-top:10px, margin-left:0px">bordures :</label>
        <label for="bord">epaisseur</label>
        <input type="number" value="0" name="sformeBordWidth" id="formeBordWidth" min="0">
        <label for="colbord">couleur</label>
        <input type="color" name="sformeBordColor" id="formeBordColor">
        <label for="arr">arrondis</label>
        <input type="number" value="0" name="sformeBordRadius" id="formeBordRadius" min="0">    
        <label style="text-decoration: underline; padding-top:10px, margin-left:0px">position :</label>
        <label for="formePositionX">X</label>
        <input type="number" value="0" name="sformePositionX" id="formePositionX" min="0">    
        <label for="formePositionY">Y</label>
        <input type="number" value="0" name="sformePositionY" id="formePositionY" min="0">    
        <input type="hidden" name="title" value="<?=$project_title?>">
        <button type="submit">valider</button>
        <script src="javascript/square.js"></script>
    </form>
    <?php
    }elseif ($forme == "triangle"){
        ?>
        <form action="ajout_triangle.php" method="post">
        <h3><?=$forme?></h3>
            <label for="colfont">couleur</label>
            <input type="color" name="tformeColor" id="formeColor">
            <label for="long">Opacité</label>
            <input type="number" name="tformeColorOpacity" id="formeColorOpacity" value="1" min="0" max="1" step="0.1">
            <label for="long">dimension</label>
            <input type="number" value="10" name="tformeDimension" id="formeDimension" min="0">
            <label style="text-decoration: underline; padding-top:10px, margin-left:0px">bordures :</label>
            <label for="bord">epaisseur</label>
            <input type="number" value="0" name="tformeBordWidth" id="formeBordWidth" min="0">
            <label for="colbord">couleur</label>
            <input type="color" name="tformeBordColor" id="formeBordColor">
            <label style="text-decoration: underline; padding-top:10px, margin-left:0px">position :</label>
            <label for="formePositionX">X</label>
            <input type="number" value="0" name="tformePositionX" id="formePositionX" min="0">    
            <label for="formePositionY">Y</label>
            <input type="number" value="0" name="tformePositionY" id="formePositionY" min="0">    
            <input type="hidden" name="title" value="<?=$project_title?>">
            <button type="submit">valider</button>
            <script src="javascript/triangle.js"></script> 
        </form>
        <?php
    }elseif ($forme == "circle"){
        ?>
        <form action="ajout_circle.php" method="post">
        <h3><?=$forme?></h3>
            <label for="colfont">couleur</label>
            <input type="color" name="cformeColor" id="formeColor">
            <label for="long">Opacité</label>
            <input type="number" value="1" name="cformeColorOpacity" id="formeColorOpacity" value="1" min="0" max="1" step="0.1">
            <label for="long">largeur</label>
            <input type="number" value="50" name="cformeWidth" id="formeWidth" min="0">
            <label for="larg">longueur</label>
            <input type="number" value="50" name="cformeHeight" id="formeHeight" min="0">
            <label style="text-decoration: underline; padding-top:10px, margin-left:0px">bordures :</label>
            <label for="bord">epaisseur</label>
            <input type="number" value="0" name="cformeBordWidth" id="formeBordWidth" min="0">
            <label for="colbord">couleur</label>
            <input type="color" name="cformeBordColor" id="formeBordColor">  
            <label style="text-decoration: underline; padding-top:10px, margin-left:0px">position :</label>
            <label for="formePositionX">X</label>
            <input type="number" value="50" name="cformePositionX" id="formePositionX" min="0">    
            <label for="formePositionY">Y</label>
            <input type="number" value="50" name="cformePositionY" id="formePositionY" min="0">     
            <input type="hidden" name="title" value="<?=$project_title?>">
            <button type="submit">valider</button>
            <script src="javascript/circle.js"></script>  
        </form>
    <?php 
    } elseif($forme == "textzone"){
    ?>
    <form action="ajout_text.php" method="post">
    <h3><?=$forme?></h3>
        <label for="tcolfont">couleur</label>
        <input type="color" name="tzcolorFont" id="colorFont">
        <label for="font">police</label>
        <select id="familyFont"  name="tzfamilyFont">
            <option value="'Hubballi',cursive">Hubballi</option>
            <option value="'Poppins',sans-serif">poppins</option>
            <option value="'Fredoka',sans-serif">fredoka</option>
            <option value="'Roboto',sans-serif">roboto</option>
            <option value="'Ubuntu',sans-serif">ubuntu</option>
        </select>
        <label for="size">taille</label>
        <input type="number" value="12" name="tzsizeFont" id="sizeFont" min="0">
        <label for="size">X</label>
        <input type="number" value="0" name="xpositiontext" id="xpositiontext" min="0">
        <label for="size">Y</label>
        <input type="number" value="0" name="ypositiontext" id="ypositiontext" min="0">
        <label for="bold">gras</label>
        <select id="weightFont" name="tzweightFont">
            <option value="initial">aucun</option>
            <option value="bold">oui</option>
        </select>
        <label for="soul">souligner</label>
        <select id="underFont" name="tzunderFont">
            <option value="initial">aucun</option>
            <option value="underline">oui</option>
        </select>
        <label for="size">contenu</label>
        <textarea onkeyup="updateContent()" style="margin-top:5px" name="tzcontent" id="content" cols="10" rows="10"></textarea>
        <input type="hidden" name="title" value="<?=$project_title?>">
        <button type="submit">valider</button>
        <script src="javascript/textzone.js"></script>
    </form>
    <?php
    }elseif($forme == "calques"){
    ?>  <form  method="post">
        <h3><?=$forme?></h3>    <?php        
        $username = $_SESSION['username'];
        //-----------------carrée----------------------------
        $maRequeteSquare = $pdo->prepare("SELECT * FROM squares WHERE username = :username AND project_title = :project_title");
        $maRequeteSquare->execute(array(
            'username' => $username,
            "project_title" => $project_title
        ));
        $squares = $maRequeteSquare->fetchAll(PDO::FETCH_ASSOC);
        foreach($squares as $square){ 
            ?><button name="calque" value="square_<?=$square['id']?>" type="submit"><?=$square['forme_type']?> n°<?=$square['id']?></button><?php
            } 

        //-----------------Textzone----------------------------
        $maRequeteTextzone = $pdo->prepare("SELECT * FROM textzones WHERE username = :username AND project_title = :project_title");
        $maRequeteTextzone->execute(array(
            'username' => $username,
            'project_title' => $project_title
        ));
        $textzones = $maRequeteTextzone->fetchAll(PDO::FETCH_ASSOC);
        
        //-----------------cercle----------------------------
        $maRequeteCircle = $pdo->prepare("SELECT * FROM circles WHERE username = :username AND project_title = :project_title");
        $maRequeteCircle->execute(array(
            'username' => $username,
            'project_title' => $project_title
        ));
        $circles = $maRequeteCircle->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($circles as $circle){ 
            ?><button name="calque" value="circle_<?=$circle['id']?>" type="submit"><?=$circle['forme_type']?> n°<?=$circle['id']?></button><?php
            } 
        
        //-----------------TRIANGLE----------------------------
        $maRequeteTriangle = $pdo->prepare("SELECT * FROM triangles WHERE username = :username AND project_title = :project_title");
        $maRequeteTriangle->execute(array(
            'username' => $username,
            'project_title' => $project_title
        ));
        $triangles = $maRequeteTriangle->fetchAll(PDO::FETCH_ASSOC);
        foreach($triangles as $triangle){ 
            ?><button name="calque" value="triangle_<?=$triangle['id']?>" type="submit"><?=$triangle['forme_type']?> n°<?=$triangle['id']?></button><?php

            ?></form><?php
        }
    
    }else{
        $calque =  filter_input(INPUT_POST, "calque");
            if($calque){
                if((strpos($calque, 'square'))!== false){
                    $nbs = substr($calque, strlen('_square'));
                    $maRequeteuSquare = $pdo->prepare("SELECT * FROM squares WHERE id = :nbs ");
                    $maRequeteuSquare->execute(['nbs' => $nbs]);
                    $usquare = $maRequeteuSquare->fetch();
                    ?>
                    <form action="update_square.php" method="post">
                        <h3><?=$calque?></h3>    
                        <label for="colfont">couleur</label>
                        <input type="color" value ="<?=$usquare['scolor']?>" name="sformeColor" id="formeColor">
                        <label for="long">Opacité</label>
                        <input type="number" name="sformeColorOpacity" id="formeColorOpacity" value="<?=$usquare['sopacity']?>" min="0" max="1" step="0.1">
                        <label for="long">largeur</label>
                        <input type="number" value="<?=$usquare['swidth']?>" name="sformeWidth" id="formeWidth" min="0">
                        <label for="larg">longueur</label>
                        <input type="number" name="sformeHeight" id="formeHeight" value="<?=$usquare['sheight']?>" min="0">
                        <label style="text-decoration: underline; padding-top:10px, margin-left:0px">bordures :</label>
                        <label for="bord">epaisseur</label>
                        <input type="number" value="<?=$usquare['sborder_width']?>" name="sformeBordWidth" id="formeBordWidth" min="0">
                        <label for="colbord">couleur</label>
                        <input type="color" name="sformeBordColor" value="<?=$usquare['sborder_color']?>" id="formeBordColor">
                        <label for="arr">arrondis</label>
                        <input type="number" value="<?=$usquare['sborder_radius']?>" name="sformeBordRadius" id="formeBordRadius" min="0">    
                        <label style="text-decoration: underline; padding-top:10px, margin-left:0px">position :</label>
                        <label for="formePositionX">X</label>
                        <input type="number" value="<?=$usquare['sformePositionX']?>" name="sformePositionX" id="formePositionX" min="0">    
                        <label for="formePositionY">Y</label>
                        <input type="number" value="<?=$usquare['sformePositionY']?>" name="sformePositionY" id="formePositionY" min="0">    
                        <input type="hidden" name="id" value="<?=$nbs?>">
                        <input type="hidden" name="title" value="<?=$project_title?>">
                        <button type="submit">update</button>
                        <script>let nbs = '<?=$nbs?>';</script>
                        <script src="javascript/update_square.js"></script> 
                    </form>
                    <form  onsubmit="return confirm('Cette action est irreversible !');" action="del_square.php" method="post">
                    <input type="hidden" name="id" value="<?=$nbs?>">                        <input type="hidden" name="title" value="<?=$project_title?>">
                    <button style="margin:0;" type="submit"  >delete</button>
                    </form>
                    <?php
                }elseif((strpos($calque, 'circle'))!== false){
                    $nbc = substr($calque, strlen('_circle'));
                    $maRequeteuCircle = $pdo->prepare("SELECT * FROM circles WHERE id = :nbc ");
                    $maRequeteuCircle->execute(['nbc' => $nbc]);
                    $ucircle = $maRequeteuCircle->fetch();
                        ?>
                        <form action="update_circle.php" method="post">
                            <h3><?=$calque?></h3>    
                            <label for="colfont">couleur</label>
                            <input type="color" name="cformeColor" id="formeColor" value="<?=$ucircle['ccolor']?>">
                            <label for="long">Opacité</label>
                            <input type="number" value="1" name="cformeColorOpacity" id="formeColorOpacity" value="<?=$ucircle['copacity']?>" min="0" max="1" step="0.1">
                            <label for="long">largeur</label>
                            <input type="number" value="<?=$ucircle['cwidth']?>" name="cformeWidth" id="formeWidth" min="0">
                            <label for="larg">longueur</label>
                            <input type="number" value="<?=$ucircle['cheight']?>" name="cformeHeight" id="formeHeight" min="0">
                            <label style="text-decoration: underline; padding-top:10px, margin-left:0px">bordures :</label>
                            <label for="bord">epaisseur</label>
                            <input type="number" value="<?=$ucircle['cborder_width']?>" name="cformeBordWidth" id="formeBordWidth" min="0">
                            <label for="colbord">couleur</label>
                            <input type="color" name="cformeBordColor" id="formeBordColor" value="<?=$ucircle['cborder_color']?>">  
                            <label style="text-decoration: underline; padding-top:10px, margin-left:0px">position :</label>
                            <label for="formePositionX">X</label>
                            <input type="number" value="<?=$ucircle['cformePositionX']?>" name="cformePositionX" id="formePositionX" min="0">    
                            <label for="formePositionY">Y</label>
                            <input type="number" value="<?=$ucircle['cformePositionY']?>" name="cformePositionY" id="formePositionY" min="0">     
                            <input type="hidden" name="title" value="<?=$project_title?>">
                            <input type="hidden" name="id" value="<?=$nbc?>">
                            <button type="submit">update</button>
                            <script>let nbc = '<?=$nbc?>';</script>
                            <script src="javascript/update_circle.js"></script>  
                        </form>
                        <form onsubmit="return confirm('Cette action est irreversible !');" action="del_circle.php" method="post">
                        <input type="hidden" name="title" value="<?=$project_title?>">
                        <input type="hidden" name="id" value="<?=$nbc?>">
                        <button  style="margin:0;" type="submit"  >delete</button>
                    </form>
                    <?php 

                }elseif((strpos($calque, 'triangle'))!== false){
                    $nbt = substr($calque, strlen('_triangle'));
                    $maRequeteuTriangle = $pdo->prepare("SELECT * FROM triangles WHERE id = :nbt ");
                    $maRequeteuTriangle->execute(['nbt' => $nbt]);
                    $utriangle = $maRequeteuTriangle->fetch();
                    ?>
                    <form action="update_triangle.php" method="post">
                        <h3><?=$calque?></h3>        
                        <label for="colfont">couleur</label>
                        <input type="color" name="tformeColor" id="formeColor" value="<?=$utriangle['tcolor']?>">
                        <label for="long">Opacité</label>
                        <input type="number" name="tformeColorOpacity" id="formeColorOpacity" value="<?=$utriangle['topacity']?>" min="0" max="1" step="0.1">
                        <label for="long">dimension</label>
                        <input type="number" value="<?=$utriangle['tdimension']?>" name="tformeDimension" id="formeDimension" min="0">
                        <label style="text-decoration: underline; padding-top:10px, margin-left:0px">bordures :</label>
                        <label for="bord">epaisseur</label>
                        <input type="number" value="<?=$utriangle['tborder_width']?>" name="tformeBordWidth" id="formeBordWidth" min="0">
                        <label for="colbord">couleur</label>
                        <input type="color" name="tformeBordColor" id="formeBordColor" value="<?=$utriangle['tborder_color']?>">
                        <label style="text-decoration: underline; padding-top:10px, margin-left:0px">position :</label>
                        <label for="formePositionX">X</label>
                        <input type="number" value="<?=$utriangle['tformePositionX']?>" name="tformePositionX" id="formePositionX" min="0">    
                        <label for="formePositionY">Y</label>
                        <input type="number" value="<?=$utriangle['tformePositionY']?>" name="tformePositionY" id="formePositionY" min="0">    
                        <input type="hidden" name="title" value="<?=$project_title?>">
                        <input type="hidden" name="id" value="<?=$nbt?>">
                        <button type="submit">update</button>
                        <script>let nbt = '<?=$nbt?>';</script>
                        <script src="javascript/update_triangle.js"></script> 
                    </form>
                    <form onsubmit="return confirm('Cette action est irreversible !');" action="del_triangle.php" method="post">
                    <input type="hidden" name="title" value="<?=$project_title?>">
                    <input type="hidden" name="id" value="<?=$nbt?>">
                    <button style="margin:0;" type="submit"  >delete</button>
                </form>
                    <?php

                }elseif((strpos($calque, 'textzone'))!== false){
                    $nbtz = substr($calque, strlen('_textzone'));
                    $maRequeteuTextzone = $pdo->prepare("SELECT * FROM textzones WHERE id = :nbtz ");
                    $maRequeteuTextzone->execute(['nbtz' => $nbtz]);
                    $utextzone = $maRequeteuTextzone->fetch();
                    echo "<h3>$calque</h3>";
                        ?>
                        <form action="update_text.php" method="post">
                            <h3><?=$calque?></h3>        
                            <label for="tcolfont">couleur</label>
                            <input type="color" value="<?=$utestzone['tzcolor']?>" name="tzcolorFont" id="colorFont">
                            <label for="font">police</label>
                            <select id="familyFont" name="tzfamilyFont">
                                <option value="none" selected disabled hidden><?=$utextzone['tzfont']?></option>
                                <option value="'Hubballi',cursive">Hubballi</option>
                                <option value="'Poppins',sans-serif">poppins</option>
                                <option value="'Fredoka',sans-serif">fredoka</option>
                                <option value="'Roboto',sans-serif">roboto</option>
                                <option value="'Ubuntu',sans-serif">ubuntu</option>
                            </select>
                            <label for="size">taille</label>
                            <input type="number" value="<?=$utextzone['tzsize']?>" name="tzsizeFont" id="sizeFont" min="0">
                            <label for="bold">gras</label>
                            <select id="weightFont" name="tzweightFont">
                                <option value="none" selected disabled hidden><?=$utextzone['tzbold']?></option>
                                <option value="initial">aucun</option>
                                <option value="bold">oui</option>
                            </select>
                            <label for="soul">souligner</label>
                            <select id="underFont" name="tzunderFont">
                                <option value="none" selected disabled hidden><?=$utextzone['tzunderline']?></option>
                                <option value="initial">aucun</option>
                                <option value="underline">oui</option>
                            </select>
                            <label for="size">contenu</label>
                            <textarea style="margin-top:5px" name="tzcontent" id="content" cols="10" rows="10"></textarea>
                            <input type="hidden" name="title" value="<?=$project_title?>">
                            <input type="hidden" name="id" value="<?=$nbtz?>">
                            <button type="submit">update</button>
                            <script>let nbtz = '<?=$nbtz?>';</script>
                            <script src="javascript/textzone.js"></script>
                        </form>
                        <form onsubmit="return confirm('Cette action est irreversible !');" action="del_textzone.php" method="post">
                        <input type="hidden" name="title" value="<?=$project_title?>">
                        <input type="hidden" name="id" value="<?=$nbtz?>">
                        <button style="margin:0;" type="submit" >delete</button>
                    </form>
                        <?php
                }

            }else{echo "Séléctionnez une forme.";}     

    }
    ?>
</div>
