<?php
// initializing DbEngine
  require 'dbengine.php';
  session_start();

// creating connection
  $connection = createConnection();

// getting values from form
  $task   = $_POST['task'];
  $date   = $_POST['dd'];
  $status = $_POST['compl'];
  $user_id = $_SESSION['user_id'];

  if($status == 'on'){
  	 $status = 1;
  }else{
  	 $status = 0;
  }
   

// inserting to table
  $insert     = insertData($connection,$task,$date,$status,$user_id);

// checking data if inserted in table
  if($insert == true){
  	echo "data is saved";
     header("Location: http://localhost/phpnep/"); // redirect in a given pae of that link 
  }else{
  	echo "data not saved, try again";
  }


?>