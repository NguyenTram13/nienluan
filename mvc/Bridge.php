<?php
define('_WEB_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/QTDL-main');
define('_PATH_ROOT_PUBLIC', _WEB_ROOT . '/public');



// Process URL from browser
require_once "./mvc/core/App.php";

// How controllers call Views & Models
require_once "./mvc/core/Controller.php";

// Connect Database
require_once "./mvc/core/DB.php";
