<?php
include "./database/database.php";

$config = array(
    'db_type' => 'sqlsrv',
    'db_host' => 'xxx.yyyyyyy.zzz',
    'db_name' => 'TESTDB',
    'db_username' => 'sa',
    'db_password' => 'xxxyyyzzzzzzz'
);

$db = new MyDBConnection($config);
?>