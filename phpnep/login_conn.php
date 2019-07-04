<?php
// initializing DbEngine
  require 'dbengine.php';
  session_start();
// creating connection
  $connection = createConnection();

// getting values from form
  $username   = $_POST['username'];
  $password   = $_POST['password'];


// inserting to table
  $check  = checkUser($connection,$username,$password);
  $check  = $check->fetchAll(\PDO::FETCH_ASSOC);

  //print_r($check);

// checking user if is in table
  if(!isset($check[0])){
     header("Location: http://localhost/phpnep/login.php"); // redirect in a given pae of that link 
  }else{
     $_SESSION['user_data'] = $check[0]['username'];
     $_SESSION['user_id']   = $check[0]['user_id'];
  	 header("Location: http://localhost/phpnep/"); // redirect in a given pae of that link 
  }


?>