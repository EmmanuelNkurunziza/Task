<?php
// initializing DbEngine
  require 'dbengine.php';

// getting values from form
  $id     = $_POST['id'];
  $task   = $_POST['task'];
  $date   = $_POST['dd'];
  $status = $_POST['compl'];

  if($status == 'on'){
  	 $status = 1;
  }else{
  	 $status = 0;
  }
   
// creating connection
  $connection = createConnection();
// update to table
  $update     = UpdateData($connection,$task,$date,$status,$id);

// checking data if inserted in table
  if($update == true){
     header("Location: http://localhost/phpnep/"); // redirect in a given pae of that link 
  }else{
  	echo "data not updated, try again";
  }





?>