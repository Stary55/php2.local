<?php
require  __DIR__.'/autoload.php';

$db = new \App\Db();
$res = $db->query("INSERT INTO foo(name) VALUES('Sion')");
print_r($res);