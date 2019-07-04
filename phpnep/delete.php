<?php
// initializing DbEngine
 require 'dbengine.php';

// creating connection
$pdo = createConnection();

$id = $_GET['id'];


// delete data to table
$delete = Delete($pdo,$id);
if($delete){
  header("Location: http://localhost/phpnep/"); // redirect in a given pae of that link 
}else{
echo "Data with id:".$id." not deleted.";
}


?>