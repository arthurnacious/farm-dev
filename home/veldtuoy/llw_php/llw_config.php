<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 403 Forbidden');
    exit('Direct script access is not allowed.');
}
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'Pass1234';
$db_name = 'farm';