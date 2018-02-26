<?php

define('ENV_DEVELOPMENT', true);

define('REGISTER',false);
define('REGISTER_LEVEL',3);
define("USERS_TABLE","users");
define("DEFAULT_VIEW",null);
define("VIEW_404","errors/404");
define("VIEWS_EXTENSION", ".php");

define("SERVER_ADMIN", "admin@" . $_SERVER['HTTP_HOST']);
define("MAX_CPU_TIME",2); //Seconds
define("TRACK_RESOURCE", false);
define("FORBID_BLACKLISTED_USERS", false);

define("ITEMS_PER_PAGE",12);

define("COOKIE_CURRENCY", "cu1af0389838508d7016a9841eb6273962");
define("COOKIE_CART", "ca54013ba69c196820e56801f1ef5aad54");
define("COOKIE_CLIENT", "cl62608e08adc29a8d6dbc9754e659f125");
define("COOKIE_COUNTRY", "coe909c2d7067ea37437cf97fe11d91bd0");
define("COOKIE_DEVELOPMENT", "de759b74ce43947f5f4c91aeddc3e5bad3");
define("COOKIE_WISH_LIST", "wi27e76ef6b60400df7c6bedfb807191d6");


define("NOTIFY_ADMIN_EMAIL", "pahadi@live.com");
define("NOTIFY_DEVELOPER_EMAIL", "pahadi@live.com");

define("DATE_FORMAT_SUPER_LONG","l, Y/m/d h:i a");
define("DATE_FORMAT_LONG","Y/m/d h:i a");
define("DATE_FORMAT_SHORT","Y/m/d");
define("DATE_FORMAT_LONG_HTML5","Y-m-d h:i a");
define("DATE_FORMAT_SHORT_HTML5","Y-m-d");

