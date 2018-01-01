<?php

 // This deals with the logic of creating new todos

require 'db.php'; // requires from db.php  to be able to use its variables & functions

$name = $_POST['name']; // gets the name that is posted under the "name" in the form that directs here.

echo" You tried to add : ". $name;
if(isset($_POST['send'])){ // makes sure the post is set
try {
    
    // using prepare statements to handle SQL Injection
    $sth = $db->prepare("INSERT INTO tasks(name) VALUES (?) ");
    $sth->bindParam(1,$name,PDO::PARAM_STR,100);
    $sth->execute();
    //$affectedRows = $db->exec("INSERT INTO tasks(name) VALUES('$name')");
   
    header("location: index.php");
} catch (Exception $ex) {
print "doesnt work   ". $ex->getMessage();
}
}


?>
