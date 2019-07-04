<?php

// function to create conection
  function createConnection(){
   	  $dsn = "mysql:mysql:host=127.0.0.1;dbname=phpnep";
      $user = "root";
      $passwd = "";
      $pdo = new PDO($dsn, $user, $passwd);
      return  $pdo;
   }


// function to save data to database
  function insertData($pdo,$task,$dd,$status,$user_id)
   {
   	  $save = $pdo->prepare("INSERT INTO `tasks` (`id`, `taskName`, `dueDate`, `completed`, `user_id`) VALUES (NULL, :task, :dd , :compl, :id)");
      if($save->execute(array(
	                  ':task'  => $task,
	                  ':dd'    => $dd,
	                  ':compl' => $status,
                    ':id'    => $user_id
	 ))){
           return true;     
      }else{
      	   return false;
      }
   }


// function to fetch all data from the database
function getAllTasks($pdo, $user_id) {
  $statement  = $pdo->prepare('SELECT * FROM tasks where user_id = :id ORDER BY id DESC');
  $statement->execute(array(':id' => $user_id));
  return $statement;
}


// function to delete our data
 function Delete($pdo,$id) {
  $statement  = $pdo->prepare('DELETE FROM tasks WHERE id  = :id');
  if($statement->execute(array(
      ':id' => $id
    ))){
    return true;
  }else{
    return false;
  };
}


// Function to complete task
 function Update($pdo,$id) {
  $statement  = $pdo->prepare('UPDATE tasks SET `completed` = 1 WHERE id  = :id');
  if($statement->execute(array(
      ':id' => $id
    ))){
    return true;
  }else{
    return false;
  };
}


// Fuction to get single task

function GetTask($pdo,$id)
{
  $statement  = $pdo->prepare('SELECT * FROM tasks WHERE id  = :id');
  $statement->execute(array(
      ':id' => $id
    ));
  return $statement;
}


// Function to update data
function UpdateData($pdo,$task,$date,$status,$id)
{
     $update = $pdo->prepare("UPDATE tasks SET `taskName` = :task, `dueDate` = :dd, `completed` = :compl WHERE id  = :id");
      if($update->execute(array(
                    ':task'  => $task,
                    ':dd'    => $date,
                    ':compl' => $status,
                    ':id'    => $id
   ))){
           return true;     
      }else{
           return false;
      }
}

function checkUser($pdo,$username,$password)
{
  $statement  = $pdo->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
  $statement->execute(array(
      ':username' => $username,
      ':password' => $password
    ));
  return $statement;
}

?>