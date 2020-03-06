<?php

$user = 'root';
$pass = 'Password!';
$db = 'employee_portal_website';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

echo "Great work!";

?>