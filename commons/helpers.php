<?php

const BASE_URL = "http://localhost/PHP2/we16304-php2/asm1/";
const PUBLIC_URL = BASE_URL . 'public/';

function render($path,$data = []){
    extract($data);
    $path = "./app/views/layout/".$path.".php";
    include $path;
}




?>