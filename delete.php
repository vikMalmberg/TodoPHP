<?php
// handles the logic that deletes the todos

require "db.php";
$id = $_GET['id'];
echo "you pressed delete for the id :  ". $id;




 


try {
    
    
    $sth = $db->prepare("DELETE FROM tasks WHERE id= ?");
    $sth->bindParam(1, $id, PDO::PARAM_INT);   
    $sth->execute();   
    
    //$deletedRows =  $db->exec("DELETE FROM tasks WHERE id = $id");
    
    
    header("location: index.php");
} catch (Exception $e) {
 print "couldnt delete , error : ". $e->getMessage();
}



?>
