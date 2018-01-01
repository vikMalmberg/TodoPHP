<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<style>
<?php include 'CSS/main.css'; ?>

</style>

<?php






// contains the HTML, forms and gets all sql values from DB to show(READ)
include "db.php";

$query = "SELECT * FROM  tasks";

$rows = $db->query($query);

?>


<html>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <body>
        <div id="container">
        <h1 class="title">Todo List </h1>
        
        <form method="post" action="create.php">
            <input type ="text" placeholder ="Enter Task" name ="name" required  class="inputField"/>
            <button type="submit" name ="send" class="btn btn-primary btn-xs" id="submitButton" > Add Task</button>
            
        </form>
            <ul>
                <?php  while($row = $rows->fetch(PDO::FETCH_ASSOC)):?>
                <li > <?php echo $row['id'] ?> :  <?php echo $row['name'] ?> 
                    <a href="delete.php?id=<?php echo $row['id']; ?>" > <button class="btn btn-danger btn-xs">Delete</button></a>
                    <a href="update.php?id=<?php echo $row['id']; ?>" > <button class="btn btn-success btn-xs">Update</button></a>
                
                 <?php endwhile; ?>
            </ul>
                
        </div>
    </body>
</html>
