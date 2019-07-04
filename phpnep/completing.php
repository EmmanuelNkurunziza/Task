<?php
// initializing DbEngine
 require 'dbengine.php';

// creating connection
$pdo = createConnection();

$id = $_GET['id'];


// we update data of the record to table
$update = Update($pdo,$id);
if($update){
  header("Location: http://localhost/phpnep/"); // redirect in a given pae of that link 
}else{
  echo "Data with id:".$id." not completed.";
}


?>