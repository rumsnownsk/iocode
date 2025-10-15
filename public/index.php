<?php

require_once __DIR__."/../config/config.php";
require_once __DIR__."/../core/helpers.php";
require_once ROOT."/vendor/autoload.php";

$app = new \CoreApp\Application();
require_once CONFIG.'/routes.php';

$app->run();

