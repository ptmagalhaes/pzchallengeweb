<?php
error_reporting(0);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <title>Pablo Thiago - Front End Teste</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <!-- INICIO DA TABELA -->
                <section class="content">
                    <h1>Lista</h1>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-container">
                                    <table class="table table-filter">
                                        <tbody>


                                            <?php

                                            //url  json    
                                            $json_str = file_get_contents('http://pbmedia.pepblast.com/pz_challenge/assets.json');
                                                
                                            //faz o parsing da string, criando o array
                                            $jsonObj = json_decode($json_str);

                                            //cria o array dos itens
                                            $objects = $jsonObj->objects;

                                            foreach ( $objects as $e )
                                                {
                                                
                                              $titleadrs = $e->name;
                                              $bg = $e->bg;
                                              $im = $e->im;
                                              $sg = $e->sg;


                                              $textos = $e->txts;


                                            if ($textos != 0) {    

                                              foreach ($textos as $txt) {

                                                        $text = $txt->txt;
                                                        $time = $txt->time;
                                                }

                                            }    

                                              $urlnav1 = str_replace(" ","",$titleadrs);
                                              $urlnav = strtolower($urlnav1);

                                            echo"<tr >
                                                
                                                <td>
                                                    <a href='detalhes.php?u=$urlnav&bg=$bg&im=$im&sg=$sg&text=$text'>
                                                        <div class='media'>
                                                            
                                                              <img src='http://pbmedia.pepblast.com/pz_challenge/assets/$e->im' class='pull-left media-photo'>  
                                                            
                                                            <div class='media-body'>
                                                                <h4 class='title'>
                                                                     $e->name
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </a>    
                                                </td>
                                                
                                            </tr>";

                                                }
                                            ?> 

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="content-footer">
                            <p>
                                Pablo Thiago Magalhães © - 2017 <br>
                                Programming Challenge for Web Front-End Developers <a href="http://www.photozig.com/" target="_blank"><strong>Photozig</strong></a>
                            </p>
                        </div>
                    </div>
                </section>
                <!-- FIM DA TABELA -->
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</html>