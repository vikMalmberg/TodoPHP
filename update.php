<style>
<?php include 'CSS/update.css'; ?>

</style>




<?php
 // deals with the update process.

include "db.php";
$id = $_GET['id'];

$query = "SELECT * FROM  tasks WHERE id='$id'";

$rows = $db->query($query);


$row = $rows->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['send'])){
    $task = $_POST['name'];
    //$query2 = "UPDATE  tasks SET name='$task' WHERE id='$id' ";
    
 
    
  $sth = $db->prepare('UPDATE tasks
    SET name=?  WHERE  id = ?');
    $sth->bindParam(1, $task, PDO::PARAM_STR, 100);
    $sth->bindParam(2, $id, PDO::PARAM_INT);
    
    $sth->execute();
    
    
   // $db->exec($query2);
    //$affectedRows = $db->exec("$query2");
    header("location: index.php");
            
}


?>


<html>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div id="container">
        <h1> Update Todo </h1>
        <form method="post" >
            <input  class="inputField" type ="text" placeholder ="Task" name ="name" required  value="<?php echo $row['name'] ;?>"/>
            <button type="submit" name ="send" class="btn btn-success btn-xs"> Update</button>
            
        </form>
        </div>
        

        
    </body>
</html>
