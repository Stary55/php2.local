<?php

require  __DIR__.'/autoload.php';


$controller = new \App\controllers\News();
$controller->action('Index');