<?php
// thanks to (c) Emanuil Rusev
// http://parsedown.org
// include lib to convert markdown to html
include('contrib/Parsedown.php');

function markdown($file){
    
    // initialize parser
    $parsedown  = new Parsedown();
 
    // fetch file content
    $output     =  file_get_contents( $file );

    // output content using parsedown
    return (($output) ? $parsedown->parse( $output ) : '<div class="alert">sorry, but the required file does not exist</div>' );
}

// main folder version. contains all version docs
$mainpath   = 'https://raw2.github.com/ludwigmair/appnewdoc/master/versions';
// $mainpath   = 'versions';
$version    = 'dev';
$path       = sprintf('%s/%s/', $mainpath, $version);

?>

<!doctype html>

<!--[if lt IE 7]><html class="nojs ms lt_ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class="nojs ms ie7" lang="en"><![endif]-->
<!--[if IE 8]><html class="nojs ms ie8" lang="en"><![endif]-->
<!--[if gt IE 8]><html class="nojs ms" lang="en"><![endif]-->

<html lang="en">
    <head>
        <title>Appserver</title>
        <!-- meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Ludwig Mair">
        <meta name="description" content="Appserver">
        <meta name="keywords" content="">

        <link rel="shortcut icon" href="img/favicon.png">
        <link href="css/style.css" rel="stylesheet">
        <!--[if IE]><link href="css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->
        <script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
        <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lt IE 8]><script src="js/ie_font.js"></script><![endif]-->
        <script src="http://use.edgefonts.net/source-sans-pro:n3,i3,n4,i4,n6,i6,n7,i7.js"></script>
        <script src="http://use.edgefonts.net/source-code-pro.js"></script>
    </head>
    <body id="index" class="page docs">
     
        <!-- wrapper -->
        <div id="wrapper">

            <!-- header -->
            <header id="header" role="header">
                <div class="boxed">
                    <!-- tagline -->
                    <div id="tagline">
                        <h1>Documentation</h1>
                    </div>
                    <!-- /tagline -->
                    <!-- version -->
                    <div id="version">
                        <ul class="nolist">
                            <li class="current"><a href="" title="Dev">Dev</a></li>
                            <li><a href="" title="0.5.8-beta Final Release">0.5.8 Release</a></li>
                            <li><a href="" title="0.5.9-beta Release">0.5.9-beta</a></li>
                        </ul>
                    </div>
                    <!-- /version -->
                </div>
            </header>
            <!-- /header -->
            <!-- nav -->
            <nav id="primary">
                <div class="boxed">
                    <div id="logo-head">
                            <img height="35"  width="35" src="img/logo-big.png" alt="Appserver" /> Appserver
                    </div>
                    <ul>
                        <li><a href="/">Welcome</a></li>
                        <li><a href="" title="Download">Download</a></li>
                        <li class="current-item"><a href="" title="Documentation">Documentation</a></li>
                        <li><a href="" title="">API</a></li>
                        <li><a href="" title="Github">Github</a></li>
                        <li><a href="" title="Appserver Forums">Forums</a></li>
                        <li><a href="" title="Appserver on Twitter">Twitter</a></li>
                    </ul>
                </div>
            </nav>
            <!-- /nav -->

            <!-- content -->
            <div id="content">

                <!-- docs -->
                <section id="documentation">
                    <article class="boxed">
                        <!-- docs nav -->
                        <nav id="docs">
                            <!-- Pull table of contents -->
                            <?= markdown( $path . 'doc.md' ) ?>
                        </nav>
                        <!-- /docs nav -->
                        <!-- docs content -->
                        <div id="docs-content">
                            <?php

                                if (!isset($_GET['file']) or $_GET['file'] == ''){
                                    echo markdown( $path . 'introduction.md' );
                                }
                                else{
                                    echo markdown( $path . $_GET['file'] . '.md' );
                                }


                            ?>
                         <!-- /docs content -->
                    </article>
                </section>
                <!-- /docs -->
            </div>
            <!-- /content -->

            <!-- footer -->
            <footer id="foot" class="textcenter">
                <div class="boxed">

                    <!-- nav -->
                    <nav id="secondary"> 
                        <ul>
                            <li><a href="/">Welcome</a></li>
                            <li><a href="" title="Download">Download</a></li>
                            <li class="current-item"><a href="" title="Documentation">Documentation</a></li>
                            <li><a href="" title="">API</a></li>
                            <li><a href="" title="Github">Github</a></li>
                            <li><a href="" title="Appserver Forums">Forums</a></li>
                            <li><a href="" title="Appserver on Twitter">Twitter</a></li>
                        </ul>
                    </nav>
                    <!-- /nav -->

                </div>
            </footer>
            <!-- /footer -->
            <!-- to the top -->
            <div id="top">
                <a href="#index" title="Back to the top"> <i class="icon-chevron-up"></i> </a>
            </div>
            <!-- /to the top -->
        </div>
        <!-- /wrapper -->

        <!-- copyright -->
        <section id="copyright" class="textcenter">
            <div class="boxed">
                <div class="animated slideInLeft">
                    <a href="http://www.techdivision.com">&copy; TechDivision GmbH</a>
                </div>
            </div>
        </section>

        <script src="js/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/application.js"></script>

    </body>
</html>
