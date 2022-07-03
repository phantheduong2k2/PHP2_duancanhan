<?php
session_start();
require_once './commons/helpers.php';
require_once './vendor/autoload.php';
require_once './commons/lib.php';
require_once './commons/router.php';
require_once './commons/db.php';



$url = isset($_GET['url']) ? $_GET['url'] : "/";

applyRoute($url);


// Định nghĩa ra một url mới 

