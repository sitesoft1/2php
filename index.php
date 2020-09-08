<?php
require_once __DIR__ . '/autoload.php';

$db = new App\Db();
//$rezult = $db->execute('CREATE TABLE foo (id SERIAL)');

$data = $db->query('SELECT * FROM foo');
echo '<pre>';
print_r($data);
echo '</pre>';
