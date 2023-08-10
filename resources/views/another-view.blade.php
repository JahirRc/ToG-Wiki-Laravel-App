<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToG : New World Wiki</title>
    <link href="/css/characters-page.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <div class="vertical-image left">
        <img src="/images/fondo4.png" alt="Left Vertical Image">
    </div>

    <!-- Right vertical image -->
    <div class="vertical-image right">
        <img src="/images/fondo4.png" alt="Right Vertical Image">
    </div>

    <?php
    
    $students = json_decode(file_get_contents(storage_path() . "/characters.json"), true);

    $students2 = json_decode(file_get_contents(storage_path() . "/characters-extra.json"), true);

    ?>

    <nav class="navbar">
        <a href="#"><?php echo '<img id="rarity2"'.'src="'.$students[$imageValue]['rarity'].'">'; ?></a>
        <a href="#"><?php echo '<img id="element2"'.'src="'.$students[$imageValue]['element'].'">'; ?></a>
        <a href="#"><?php echo '<img id="classs2"'.'src="'.$students[$imageValue]['class'].'">'; ?></a>
        <a href="#"><?php echo '<img id="type2"'.'src="'.$students[$imageValue]['type'].'">'; ?></a>
    </nav>

    <div class="image-container">
    <!--<h1>Image Value: {{ $imageValue }}</h1>-->
        <?php

        echo '<div class="img-wrapper">'.
        '<img onclick="changeImage()" id="'.$students[$imageValue]['title'].'"'.'src="'.$students[$imageValue]['image'].'" alt="Image 4" class="draggable-image">'.
        '</div>';

        ?>

        <div class="data-container">
            <?php
            echo '<h1 id="title" class="title">'.$students[$imageValue]['title'] .'</h1>';
            echo '<h1 id="name">'.$students[$imageValue]['name'] .'</h1>';
            ?>
            
            <div class="class-element">
                <?php
                echo '<img id="rarity"'.'src="'.$students[$imageValue]['rarity'].'">';
                echo '<img id="element"'.'src="'.$students[$imageValue]['element'].'">';
                echo '<img id="classs"'.'src="'.$students[$imageValue]['class'].'">';
                echo '<img id="type"'.'src="'.$students[$imageValue]['type'].'">';
                ?>
            </div>
            
            <div class="history">
                <?php
                echo '<h1>'.$students[$imageValue]['history'] .'</h1>';
                ?>
            </div>
        </div>
    </div>

    <div id="abilities" class="abilities">
        <?php
        for ($i = 0; $i < 4; $i++) {
        ?>
        <div id="ability" class="ability">
            <div id="ability-elements" class="ability-elements">
                <div style="background-color: <?php echo $students[$imageValue]['color']?>" id="icon-ability" class="icon-ability">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cube" class="svg-inline--fa fa-cube " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="36"><path fill="currentColor" d="M234.5 5.709C248.4 .7377 263.6 .7377 277.5 5.709L469.5 74.28C494.1 83.38 512 107.5 512 134.6V377.4C512 404.5 494.1 428.6 469.5 437.7L277.5 506.3C263.6 511.3 248.4 511.3 234.5 506.3L42.47 437.7C17 428.6 0 404.5 0 377.4V134.6C0 107.5 17 83.38 42.47 74.28L234.5 5.709zM256 65.98L82.34 128L256 190L429.7 128L256 65.98zM288 434.6L448 377.4V189.4L288 246.6V434.6z"></path></svg>
                </div>
                <div class="ability-text">
                    <div class="double-text">
                        <h1 class="ability-name"><?php echo $students[$imageValue]['titles'][$i]?></h1>
                        <h1 class="ability-type"><?php echo $students[$imageValue]['types'][$i]?></h1>
                    </div>
                </div>
            </div>
            <div class="ability-description">            
                <h1 class="unique-ability-description"><?php echo $students[$imageValue]['descriptions'][$i]?></h1>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    
    <footer>
        <div class="container">
            <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
    </footer>
    
    <script type="text/javascript">
    <?php 
    //require_once './js/characters.js';
    ?>
    </script> 
    <script>
        /*
        $(".imageset").attr("src", jsondata[0].src);
        */

        </script>
</body>
</html>


