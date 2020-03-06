<?php

require_once('config.php');

class Connect { 
    public $connection;
 
    function __construct() 
    { 
       $this->connection = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME) or die("Unable to connect");
    }      

    function executeSelectQuery($con,$sql) {
        $result = mysqli_query($con, $sql);
    }

    function executeQuery($con,$sql) {
        $result = mysqli_query($con, $sql);
    }
} 

$sqlStatement = "CREATE TABLE `employee_portal_website`.`tblUser` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `email` VARCHAR(50) NULL , `password` VARCHAR(20) NOT NULL , `firstName` VARCHAR(50) NULL , `lastName` VARCHAR(50) NOT NULL , `address` VARCHAR(250) NULL DEFAULT NULL , `phone` VARCHAR(13) NULL DEFAULT NULL , `salary` INT(10) NULL DEFAULT NULL , `SSN` INT(9) NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
$newConnection = new Connect();
$newConnection->executeQuery($newConnection->connection,$sqlStatement);

?>