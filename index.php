<?php


ob_start();

/*
    +--------------------------------------------------------------------+
    +                                                                    +
    +  Start Collecting Output Buffering.                                +
    +  Just as a side kick for headers.                                   +
    +                                                                    +
    +--------------------------------------------------------------------+

*/



/*
    +--------------------------------------------------------------------+
    +                                                                    +
    +   init.php contains defines basic BASE_DIR and URL(s).             +
    +   It also imports:                                                 +
    +   config/constants.php                                             +
    +   config/autoloader.php                                            +
    +   config/routes.php                                                +
    +   config/helperFunctions.php                                       +
    +--------------------------------------------------------------------+

*/

require_once __DIR__ . '/config/init.php';

require_once __DIR__  . '/vendor/autoload.php';

/*
    +--------------------------------------------------------------------+
    +                                                                    +
    +   Let's Route the URL from Route class below:                      +
    +   Route class is aliased as everest\MVC\Route                        +
    +   Configure Routes at : [config/routes.php]                        +
    +                                                                    +
    +--------------------------------------------------------------------+

*/
route()->setRoutes(ROUTES)->deliver();



/*
    +--------------------------------------------------------------------+
    +                                                                    +
    +  Flush out the Output Buffering...                                 +
    +                                                                    +
    +--------------------------------------------------------------------+

*/
ob_flush();
