<?php
define('DB_NAME', 'dbs_crud');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$kon =mysqli_connect("localhost", "root", "", "dbs_crud") or die(mysqli_error());
?>