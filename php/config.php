<?php
// Connect to database

$dbconnect = new mysqli('localhost', 'root', '', 'octajobs');

if ($dbconnect->connect_errno) {
    die('Connection to database failed');
}

require_once '../PHPMailer-master/PHPMailerAutoload.php';

