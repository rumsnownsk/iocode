<?php

if (PHP_MAJOR_VERSION < 8){
    die("Require PHP version >= 8");
}
//ini_set('display_errors', 1);
//error_reporting(-1);

require_once __DIR__."/../config/config.php";
require_once __DIR__."/../core/helpers.php";
require_once ROOT."/vendor/autoload.php";

require_once APP."/Views/index.php";



