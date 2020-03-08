<?php
    error_reporting(E_ALL ^ E_NOTICE);
    require_once('Connect.php');
    // $sqlStatement = "CREATE TABLE `employee_portal_website`.`tblUser` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(20) NOT NULL , `firstName` VARCHAR(50) NOT NULL , `lastName` VARCHAR(50) NOT NULL , `address` VARCHAR(250) NULL DEFAULT NULL , `phone` VARCHAR(13) NULL DEFAULT NULL , `salary` INT(10) NULL DEFAULT NULL , `SSN` INT(9) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
    // $newConnection = new Connect();
    // $newConnection->executeQuery($newConnection->connection,$sqlStatement);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Home Page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-sacle=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php require 'master.php';?>

    <div class="container text-center">
        <h1>Welcome to the Home Page</h1>
    </div>

<?php require_once 'footer.php';?>
</body>
</html>
