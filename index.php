<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Lara Music</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="icon" type="image/png" href="img/favicon-laramusic.png">
        
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>

        <!--BootStrap-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!--BootStrap-->

        <link rel="stylesheet" href="css/normalize.css"> 
        <link rel="stylesheet" href="css/main.css">

        <!--CSS personalizado-->
        <link rel="stylesheet" href="css/laraMusic.css">

        <!--Font Awesome-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <!--Inicio do Jplayer-->
        <link href="dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet">
        <script  src="lib/jquery.min.js"></script>
        <script  src="dist/jplayer/jquery.jplayer.min.js"></script>
        <script  src="dist/add-on/jplayer.playlist.min.js"></script>
        <script type="text/javascript">
        //<![CDATA[
            $(document).ready(function () {

                new jPlayerPlaylist({
                    jPlayer: "#jquery_jplayer_1",
                    cssSelectorAncestor: "#jp_container_1"
                }, [
                    {
                        title: "Big Buck Bunny Trailer",
                        artist: "Blender Foundation",
                        free: true,
                        m4v: "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
                        ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
                        webmv: "http://www.jplayer.org/video/webm/Big_Buck_Bunny_Trailer.webm",
                        poster: "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
                    },
                    {
                        title: "Finding Nemo Teaser",
                        artist: "Pixar",
                        m4v: "http://www.jplayer.org/video/m4v/Finding_Nemo_Teaser.m4v",
                        ogv: "http://www.jplayer.org/video/ogv/Finding_Nemo_Teaser.ogv",
                        webmv: "http://www.jplayer.org/video/webm/Finding_Nemo_Teaser.webm",
                        poster: "http://www.jplayer.org/video/poster/Finding_Nemo_Teaser_640x352.png"
                    },
                    {
                        title: "Incredibles Teaser",
                        artist: "Pixar",
                        m4v: "http://www.jplayer.org/video/m4v/Incredibles_Teaser.m4v",
                        ogv: "http://www.jplayer.org/video/ogv/Incredibles_Teaser.ogv",
                        webmv: "http://www.jplayer.org/video/webm/Incredibles_Teaser.webm",
                        poster: "http://www.jplayer.org/video/poster/Incredibles_Teaser_640x272.png"
                    }
                ], {
                    swfPath: "../../dist/jplayer",
                    supplied: "webmv, ogv, m4v",
                    useStateClassSkin: true,
                    autoBlur: false,
                    smoothPlayBar: true,
                    keyEnabled: true
                });

                new jPlayerPlaylist({
                    jPlayer: "#jquery_jplayer_2",
                    cssSelectorAncestor: "#jp_container_2"
                }, [
                    {
                        title: "Cro Magnon Man",
                        mp3: "http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/TSP-01-Cro_magnon_man.ogg"
                    },
                    {
                        title: "Your Face",
                        mp3: "http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/TSP-05-Your_face.ogg"
                    },
                    {
                        title: "Cyber Sonnet",
                        mp3: "http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/TSP-07-Cybersonnet.ogg"
                    },
                    {
                        title: "Tempered Song",
                        mp3: "http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/Miaow-01-Tempered-song.ogg"
                    },
                    {
                        title: "Hidden",
                        mp3: "http://www.jplayer.org/audio/mp3/Miaow-02-Hidden.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/Miaow-02-Hidden.ogg"
                    },
                    {
                        title: "Lentement",
                        free: true,
                        mp3: "http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/Miaow-03-Lentement.ogg"
                    },
                    {
                        title: "Lismore",
                        mp3: "http://www.jplayer.org/audio/mp3/Miaow-04-Lismore.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/Miaow-04-Lismore.ogg"
                    },
                    {
                        title: "The Separation",
                        mp3: "http://www.jplayer.org/audio/mp3/Miaow-05-The-separation.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/Miaow-05-The-separation.ogg"
                    },
                    {
                        title: "Beside Me",
                        mp3: "http://www.jplayer.org/audio/mp3/Miaow-06-Beside-me.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/Miaow-06-Beside-me.ogg"
                    },
                    {
                        title: "Bubble",
                        free: true,
                        mp3: "http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
                    },
                    {
                        title: "Stirring of a Fool",
                        mp3: "http://www.jplayer.org/audio/mp3/Miaow-08-Stirring-of-a-fool.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/Miaow-08-Stirring-of-a-fool.ogg"
                    },
                    {
                        title: "Partir",
                        free: true,
                        mp3: "http://www.jplayer.org/audio/mp3/Miaow-09-Partir.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/Miaow-09-Partir.ogg"
                    },
                    {
                        title: "Thin Ice",
                        mp3: "http://www.jplayer.org/audio/mp3/Miaow-10-Thin-ice.mp3",
                        oga: "http://www.jplayer.org/audio/ogg/Miaow-10-Thin-ice.ogg"
                    }
                ], {
                    swfPath: "../../dist/jplayer",
                    supplied: "oga, mp3",
                    wmode: "window",
                    useStateClassSkin: true,
                    autoBlur: false,
                    smoothPlayBar: true,
                    keyEnabled: true
                });
            });
        //]]>
        </script>

        <!--Fim do Jplayer-->

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <header class="header">
            <div class="container">
                <header class="header">

                    <div class="col-md-3">
                        <a href="home"><img src="img/laramusic.png" alt="LaraMusic" title="LaraMusic" class="img-logo"></a>
                    </div>

                    <div class="col-md-7">
                        <form class="form-search">
                            <input type="text" name="pesquisar" placeholder="Pesquisar Música" >
                            <button class="btn-search"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="col-md-2   ">
                        <a href="" class="login"> Entrar </a>
                    </div>
            </div>
        </header>
        <!--Fim header-->
        
        <hr class="hr clear">

        <!--Content Dinâmico-->
        <?php
        if (isset($_GET['prm'])) {
            if (file_exists("pags/{$_GET['prm']}.php")) {
                include "pags/{$_GET['prm']}.php";
            }
            else {
                include './pags/404.php';
            }
        }
        else {
            include_once './pags/home.php';
            ;
        }
        ?>




        <footer class="footer clear ">
            <div class="container text-center">
                <p class="text-footer">

                    CopyRight @ infabis - Todos os direitos reservados
                </p>   
                <div class="social">
                    <a href=""> <i class="fa fa-facebook"> </i> </a>
                    <a href=""> <i class="fa fa-twitter"> </i> </a>
                </div>




            </div>
            <!--fim container-->
        </footer>
        <!--Fim footer-->



        <!-- Add your site or application content here -->
        
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
        </script>
    </body>
</html>
