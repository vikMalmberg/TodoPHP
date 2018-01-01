<?php
// sets up the db that is later required by other classes
// to improve ease of use with Database

$host = "localhost";
$dbName = "crud";
$user ="root";
$password ="";

try {
//$db = new PDO('mysql:host=localhost;dbname=crud','root','');
$db = new PDO('mysql:host='.$host.'; dbname='.$dbName,$user,$password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// Här skapas Table
// 
//$sql = "CREATE TABLE `crud`.`tasks` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
//$db->exec($sql);
//echo" created table!";


} catch (Exception $e) {
print " Error connecting to db ". $e->getMessage();
}




?>
