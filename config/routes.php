<?php
/*
    +--------------------------------------------------------------------
    +
    +   Only define overrides here.
    +   Note mvc patterns are not necessary to register:
    +
    +   For example:
    +   home/about routes to HomeController::index()
    +
    +   If the method takes numeric id parameter:
    +   home/square/4 routes to HomeController::square(4)
    +
    +--------------------------------------------------------------------
*/

define("ROUTES",
[
    "/"=> "Home/index",
    "about" => "Home/about",
]);

