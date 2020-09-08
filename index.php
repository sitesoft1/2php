<?php
require_once __DIR__ . '/autoload.php';

$db = new App\Db();
$rezult = $db->execute('CREATE TABLE foo (id SERIAL)');

var_dump($rezult);