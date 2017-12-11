<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <title>Pablo Thiago - Front End Teste</title>
    </head>
    <body>
        <div class="container">
            <div class="row">

                <?php

                    if(isset($_GET['u'])):
                          $id = $_GET['u'];
                          $bg = $_GET['bg'];
                          $im = $_GET['im'];
                          $sg = $_GET['sg'];
                          $text = $_GET['text'];

                        // if ( $id ==  $urlnav ) {

                        //         echo " FUNCIONOU";
                            
                        // }else{
                        //     echo " ERRO";
                        // }
                        
                    endif;

                ?>


                <video poster="http://pbmedia.pepblast.com/pz_challenge/assets/<?php echo $im; ?>" id="bgvid" playsinline autoplay muted loop>
                <source src="http://pbmedia.pepblast.com/pz_challenge/assets/<?php echo $bg; ?>" type="video/mp4">
                </video>
                <audio id="music" autoplay="autoplay">
                    <source src="http://pbmedia.pepblast.com/pz_challenge/assets/<?php echo $sg; ?>" type="audio/mp3" />
                </audio>
                <div id="box">
<!--                     <?php
                        if ($text != null) {
                            echo '<h1>' . $text .'</h1>';
                        }
                    ?> -->
  
                 <!-- <button>Pausar</button> -->
                </div>


            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
       <!--  SCRIPT DE FUNÇÕES EM JS -->
    <script src="js/script.js"></script>
</html>